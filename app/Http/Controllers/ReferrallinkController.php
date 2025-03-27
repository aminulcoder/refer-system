<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferrallinkController extends Controller
{
    public function referrallink()  {

        return view('admin.referral.referral-link');

    }
}
