@extends('frontend.layouts.app')

@section('OG')
@endsection

@section('content')

<div class="">

    <h1 class="text-center text-3xl font-bold py-6">Affiliate Referral</h1>
    <p class="px-32 text-[#000] font-lite ">Are you looking for a way to make some extra cash? And I don’t mean just
        a few £ss here and
        there, I’m talking about £500! That’s right, by becoming an affiliate for Hitec Education, you can earn a
        cool £500 for every student you refer who enrolls in one of their University courses.</p>
    <div class="py-6 px-32">
        <h6 class="font-bold">What is Hitec Education?</h6>
        <p>Hiteck Education is a leading provider of University courses that cover a wide range of in-demandskills
        </p>
        <div class="py-6">
            <strong>Why Become an Affiliate?</strong>
            <p>There are a few reasons why you should become an affiliate for Hiteck Education. First, it’ s a great
                way
                to earn some extra income. With a £500 commission per referral, you can easily make a significant
                amount
                of money by simply promoting Hiteck Education’s courses to your friends,family, and followers.</p>
        </div>
    </div>
    <p class="px-32">Second, it’s a flexible way to make money. You can promote Hitec Education courses on yourown
        time and on
        your own terms. There are no quotas to meet or deadlines to worry about. </p>
    <p class="px-32 py-6">Third, it’s a great way to help others. By promoting Hitec Education courses, you’re
        helping others learn new
        skills and advance their careers.
        How to Become an Affiliate</p>
    <p class="px-32">Becoming an affiliate for Hitec Education is easy. Simply complete the form below sign up for
        free. Once
        you’re approved, you’ll be given a unique affiliate link that you can use to promote the courses.</p>

    <div class=" px-32 py-6">
        <h6 class="font-bold">Start Earning Today!</h6>
        <p>So what are you waiting for? Sign up to become a Hitec Education affiliate today and start
            earning £500 for every student you refer! and there are no limits</p>
        <form action="{{ route('referralstore') }}" method="post">
            @csrf
            <div class="mx-auto ">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-form.input label="First Name" placeholder="Enter Your first Name" name="fname" />
                    <x-form.input label="Last Enter " placeholder="Enter Your last Name" name="lname" />
                </div>

                <x-form.input label="Company Name" placeholder="If a Company , enter the name"
                    name="company_name" />
                <x-form.input label="Address" placeholder="Enter Your Address" name="address" />
                <x-form.input label="Address Line 2" placeholder="Enter Your Address" name="address2" />
                {{-- <form.input label="City/Town" name="city" /> --}}
                <form.input label="Region / County / Province" name="religon" /> <!-- Fixed typo -->
                <x-form.input label="Refrral Code" name="refrral_code" /> <!-- Fixed typo -->

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <x-form.input label="Postcode / Zip Code" name="zip_code" />

                    <div>
                        <label for="countries" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Select Country
                        </label>
                        <select id="countries" name="country"
                            class="mt-1 p-2.5 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500
                            disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-gray-200
                            dark:focus:ring-gray-600">
                            <option value="us">United States</option>
                            <option value="ca">Canada</option>
                            <option value="fr">France</option>
                            <option value="de">Germany</option>
                        </select>
                    </div>
                </div>


                <x-form.input label="Telephone" name="telephone" />
                <x-form.input label="Email" type="email" name="email" />

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>



                <h4 class="text-2xl font-semibold py-6">Terms & Conditions</h4>

                <p>
                    Please read over our full terms and conditions,
                    <a href="{{route('affiliate')}}" target="_blank" class="text-blue-600" >
                        (<u>click here P2</u>).
                    </a>
                </p>


                <div class="flex items-center py-6">
                    <input id="link-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        I have read the full Terms & Conditions for HiTeck Education Ltd and agree to abide by
                        them.</label>
                </div>
                <p>Please check each box beside the statements below if you understand and agree:</p>
                <div class="flex items-center py-6">
                    <input id="link-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        You agree not to solicit any customers/partners/services through spamming, spyware/adware,
                        indiscriminate advertising or unsolicited commercial email.</label>
                </div>
                <div class="flex items-center ">
                    <input id="link-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                        As an Affiliate, you are an independent contractor and not an employee of HiTeck Education
                        Ltd. You are responsible for declaring your own income and paying any associated taxes in
                        your country.</label>
                </div>
                <div class="flex items-center py-6">
                    <input id="link-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                        You agree not to use HiTeck Education Ltd links on Websites that contain or promote any of these types of content: libelous, defamatory, obscene, abusive, violent, bigoted, hate-oriented, illegal, cracking, hacking or warez, or that offer illegal goods or services, or link to a Website that is engaged in any of these types of activity.</label>
                </div>
                <div class="flex items-center ">
                    <input id="link-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                        You agree not to use HiTeck Education Ltd links on Websites that contain or promote any of these types of content: libelous, defamatory, obscene, abusive, violent, bigoted, hate-oriented, illegal, cracking, hacking or warez, or that offer illegal goods or services, or link to a Website that is engaged in any of these types of activity.</label>
                </div>
                <div class="flex items-center py-6">
                    <input id="link-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                        You agree not to mislead potential customers or partners in any way.</label>
                </div>
                <div class="flex items-center ">
                    <input id="link-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="link-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">

                        If you break any of our terms of business you may forfeit any commission generated. You agree to cooperate fully with HiTeck Education Ltd staff should they enquire about your promotional methods, failure to do so will result in your account being suspended.</label>
                </div>

                <p class="font-bold text-xl py-4">Payment.</p>
                <p class="font-bold">2.1 Payment Models</p>

                <p class="py-3">HiTeck Education will make payments to all affiliates under one of two payment models:-
                </p>

                <p><b>a) Standard Model (Default)</b> HiTeck Education offers a two-step commission program for its affiliates. You’ll earn your first payout of £250 6 weeks after the end of the month when a sale or qualifying action occurs. The second payout of £250 follows 6 weeks after the student successfully completes their second term.</p>

                <div class="">
                    <!-- Checkbox -->
                    <label class="flex items-center space-x-2 cursor-pointer">
                        <input type="checkbox" id="toggleCheckbox" class="w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                        <span class="text-gray-700 font-semibold">Show More Payment Models</span>
                    </label>

                    <!-- Hidden Content -->
                    <div id="hiddenContent" class="mt-4 p-4  border-gray-300 rounded-md  hidden">
                        <p><b>b) Payment On Request</b> Once an affiliate has been paid by HiTeck Education twice, they move on to this payment model provided they have chosen to be paid by BACS and are UK based. Affiliates on this payment model may request payment at any time for all validated sales made to the date at which you request payment. Once a request for payment has been made HiTeck Education undertakes to process a BACS payment within five days.</p>

                        <p class="py-3">2.2 General</p>

                        <p>Payment is only made to Affiliates in the UK that have a minimum balance of £20 (twenty-five pounds) in their account or joint accounts. All Affiliates outside of the UK have to reach a minimum balance of £50 (fifty pounds) in their account or joint accounts before payment is made. Affiliates who do not meet the minimum balance requirements will not be eligible for payment until it has been reached. Furthermore any account that has had no activity (clicks, sales etc.) for a period of 6 calendar months will be deemed to be abandoned and HiTeck Education will apply a variable account closing charge up to the maximum of £25. The charge will never be greater than the balance in the account.

                        </p>

                        <p class="py-3">Affiliates will receive payment for any action that is payable as set out by each individual Merchant.</p>

                        <p class="py-3">Affiliate payments will only be made when funds are in place from the Merchant. HiTeck Education will endeavour to collect funds from the Merchant and then pay the Affiliates on the Merchant’s behalf.</p>

                        <p class="py-3">In the event of a system problem at the Merchant site that you have not had prior warning about it will be up to the sole discretion of HiTeck Education after having discussed the matter with the Merchant as to what compensation if any is to be paid. No compensation will be made for clicks or sales from the time HiTeck Education has made due notice of the problem in it’s Affiliate Control Area and/or via Email.</p>

                        <p class="py-3">In the event of suspected fraud, payment to an Affiliate’s account will be stopped and the Affiliate will be asked to provide additional information as to how they have been promoting the Merchants to ascertain where any rules or program terms may have been broken. Failure to comply will result in monies being withheld and the Affiliate’s account being terminated.</p>

                        <p class="py-3">HiTeck Education require that all Affiliates supply an invoice before payment will be made. This must be done online via our control area. All invoices must include full legal trading details including VAT number where appropriate. Nothing in this Agreement shall create or be deemed to create, a partnership or relationship of employer and employee between HiTeck Education and the Affiliate.</p>

                        <p class="py-3">Any Affiliate outside of the United Kingdom to whom we pay regular or one off large sums of money may be asked to provide information in compliance with Money Laundering Regulations. Failure to comply will result in monies being withheld.</p>

                        <p class="py-3">The Affiliate is responsible for the payment of all tax and national insurance payable on any payments made to him/her by HiTeck Education .</p>

                    </div>
                </div>
                <x-form.submit-button title="apply" />
            </div>
        </form>
    </div>





</div>



<script>
    $(document).ready(function() {
        $("#toggleCheckbox").change(function() {
            if ($(this).is(":checked")) {
                $("#hiddenContent").removeClass("hidden");
            } else {
                $("#hiddenContent").addClass("hidden");
            }
        });
    });
</script>
@endsection
