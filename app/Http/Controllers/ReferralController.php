<?php
namespace App\Http\Controllers;

use App\Models\FormSubmission;
use App\Models\Network;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class ReferralController extends Controller
{
    public function referral()
    {
        $sliders = Slider::oldest()->get();

        return view('frontend.pages.affiliatereferal');
    }

    public function referralstore(Request $request)
    {
        $request->validate([
            'fname'    => 'required',
            'lname'    => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:4',
        ]);

        $referralCode = Str::random(10);
        // $referralLink = Url::to('/register?ref=' . $referralCode);
        $referralLink = Url::to('/referral-register?ref=' . $referralCode);

        $userData = null;

        if ($request->filled('referral_code')) {
            $userData = User::where('referral_code', $request->referral_code)->first();
        }

        if ($userData) {
            $user = User::create([
                'fname'         => $request->fname,
                'lname'         => $request->lname,
                'email'         => $request->email,
                'country'       => $request->country,
                'address'       => $request->address,
                'address2'      => $request->address2,
                'city'          => $request->city,
                'religion'      => $request->religion,
                'zip_code'      => $request->zip_code,
                'telephone'     => $request->telephone,
                'referral_code' => $referralCode,
                'referral_link' => $referralLink,
                'password'      => Hash::make($request->password),
            ]);

            Network::create([
                'referral_code'  => $request->referral_code,
                'user_id'        => $user->id,
                'parent_user_id' => $userData->id,
            ]);
        } else {
            $user = User::create([
                'fname'         => $request->fname,
                'lname'         => $request->lname,
                'email'         => $request->email,
                'country'       => $request->country,
                'address'       => $request->address,
                'address2'      => $request->address2,
                'city'          => $request->city,
                'religion'      => $request->religion,
                'zip_code'      => $request->zip_code,
                'telephone'     => $request->telephone,
                'referral_code' => $referralCode,
                'referral_link' => $referralLink,
                'password'      => Hash::make($request->password),
            ]);
        }


        $data = [
            'url'                => $user->referral_link,
            'fname'              => $request->fname,
            'email'              => $request->email,
            'password'           => $request->password,
            'password_reset_url' => Url::to('/password/reset'),
            'title'              => 'Registered',
        ];

        Mail::send('frontend.pages.emails.email', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });

        return redirect()->back()->with('message', 'The form has been submitted. Please check your email.');
    }

    public function LoadReferralRegister()
    {

        return view('frontend.pages.referralstudent');
    }

    public function referstduntstore(Request $request)
    {

        $referralUser = null;
        if ($request->filled('referral_code')) {
            $referralCode = trim($request->referral_code);
            $referralUser = User::whereRaw('LOWER(referral_code) = ?', [strtolower($referralCode)])->first();
        }


        if (! $referralUser) {
            return redirect()->back()->with('error', 'Invalid referral code!');
        }
        $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);


        $user = FormSubmission::create([
            'user_id'       => $referralUser->id,
            'fname'         => $request->fname,
            'lname'         => $request->lname,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'address'       => $request->address,
            'course'        => $request->course,
            'referral_code' => $request->referral_code,
        ]);
        return redirect()->back()->with('message', 'Student successfully register');
    }


    public function showReferralPage() {



        return view('admin.referral.referral-link');
    }

}
