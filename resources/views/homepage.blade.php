@extends('layouts.app')

@section('title')
Rreferral  | Home
@endsection

@section('content')


<div class="bg-blue-500 h-[90vh]">
    <div class="w-[1280px] mx-auto bg-blue-500 text-white space-y-6">
        <p class="text-2xl pt-20 font-semibold">Want to Invest Money?</p>
        <h1 class="text-7xl  font-semibold">Grow your money with <br> safety invest in Oitila</h1>
        <p class="font-semibold">We Already Completed Our 50+ Years in Online Investment Business
            With Trust and Excellent Reputation.</p>

        <div class="py-16">
            <a href="#" class="bg-white text-blue-500  rounded-3xl px-3 py-2">

                Start Investing Now
            </a>
        </div>
    </div>
</div>


<div class="w-full max-w-screen-xl mx-auto z-50 -mt-32">
    <div class="flex  space-x-6 py-20 px-6 border-2 rounded-md shadow-2xl bg-white">
        <!-- Register Account -->
        <div
            class="flex items-center space-x-6 w-full md:w-1/3 hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="https://oitila.netlify.app/live/assets/img/svg/add-user.svg" class="h-20" alt="">
            <div class="space-y-2">
                <h6 class="text-2xl font-semibold">Register Account</h6>
                <p class="text-sm text-gray-500">Register for an account. <br> It's totally easy and free.</p>
            </div>
        </div>

        <!-- Invest Money -->
        <div
            class="flex items-center space-x-6 w-full md:w-1/3 hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="https://oitila.netlify.app/live/assets/img/svg/coin.svg" class="h-20" alt="">
            <div class="space-y-2">
                <h6 class="text-2xl font-semibold">Invest Money</h6>
                <p class="text-sm text-gray-500">Choose your investment plan <br> and make the first deposit.</p>
            </div>
        </div>

        <!-- Get Withdraw -->
        <div
            class="flex items-center space-x-6 w-full md:w-1/3 hover:scale-105 transition-transform duration-300 ease-in-out">
            <img src="https://oitila.netlify.app/live/assets/img/svg/add-user.svg" class="h-20" alt="">
            <div class="space-y-2">
                <h6 class="text-2xl font-semibold">Get Withdraw</h6>
                <p class="text-sm text-gray-500">Request for the withdrawal <br> and receive a payment.</p>
            </div>
        </div>
    </div>
</div>


<section class="w-full max-w-screen-xl mx-auto py-16 px-6">
    <div class="grid grid-cols-12 gap-10 items-center">
        <!-- Left Content -->
        <div class="col-span-12 md:col-span-7 space-y-6">
            <h2 class="text-4xl font-bold text-gray-900 leading-tight">
                The <span class="text-blue-600">right place</span> for you to invest money
            </h2>
            <p class="text-gray-600 text-lg">
                The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                <u><b>below for those interested</b></u>. Sections 1.10.32 and 1.10.33.
            </p>

            <!-- Bullet Points -->
            <div class="space-y-3">
                <div class="flex items-center space-x-3">
                    <div class="bg-blue-600 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </div>
                    <p class="text-gray-700">The standard chunk of Lorem Ipsum used since</p>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="bg-blue-600 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </div>
                    <p class="text-gray-700">Reproduced below for those interested</p>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="bg-blue-600 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </div>
                    <p class="text-gray-700">De Finibus Bonorum et Malorum" by Cicero</p>
                </div>
                <div class="flex items-center space-x-3">
                    <div class="bg-blue-600 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                        </svg>
                    </div>
                    <p class="text-gray-700">Reproduced in their exact original form</p>
                </div>
            </div>

            <p class="text-gray-600">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form.
            </p>

            <!-- Button -->
            <a href="#"
                class="inline-block px-6 py-3 text-lg font-semibold text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                Invest Now
            </a>
        </div>

        <!-- Right Content -->
        <div class="col-span-12 md:col-span-5 space-y-6">
            <!-- Features -->
            <div class="flex items-center space-x-6 p-5 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                <img src="https://oitila.netlify.app/live/assets/img/svg/solar-energy.svg" alt="Innovate"
                    class="h-16 w-16 bg-gradient-to-r from-[#4776e6] to-[#8e54e9] rounded-full p-3" />
                <div>
                    <h5 class="text-xl font-semibold text-gray-900">We Innovate</h5>
                    <p class="text-gray-600">We create modern solutions for future investments.</p>
                </div>
            </div>

            <div class="flex items-center space-x-6 p-5 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                <img src="https://oitila.netlify.app/live/assets/img/svg/diploma.svg" alt="Certified"
                    class="h-16 w-16 bg-gradient-to-r from-[#4776e6] to-[#8e54e9] rounded-full p-3" />
                <div>
                    <h5 class="text-xl font-semibold text-gray-900">We're Certified</h5>
                    <p class="text-gray-600">Trusted by thousands of investors worldwide.</p>
                </div>
            </div>

            <div class="flex items-center space-x-6 p-5 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                <img src="https://oitila.netlify.app/live/assets/img/svg/blockchain.svg" alt="Crypto"
                    class="h-16 w-16 bg-gradient-to-r from-[#4776e6] to-[#8e54e9] rounded-full p-3" />
                <div>
                    <h5 class="text-xl font-semibold text-gray-900">We Provide Crypto</h5>
                    <p class="text-gray-600">Secure and reliable blockchain investments.</p>
                </div>
            </div>

            <div class="flex items-center space-x-6 p-5 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                <img src="https://oitila.netlify.app/live/assets/img/svg/worldwide.svg" alt="Global"
                    class="h-16 w-16 bg-gradient-to-r from-[#4776e6] to-[#8e54e9] rounded-full p-3" />
                <div>
                    <h5 class="text-xl font-semibold text-gray-900">We're Global</h5>
                    <p class="text-gray-600">Serving investors in over 50+ countries.</p>
                </div>
            </div>
        </div>
    </div>
</section>




<section
    class=" mb-20 w-full max-w-screen-xl mx-auto bg-gradient-to-r from-[#6610f2] to-[#8e54e9] rounded-xl text-white py-16 ">
    <div class="grid grid-cols-3 gap-8 text-center">
        <div class="flex flex-col items-center space-y-2">
            <div class="h-20 w-20   flex items-center justify-center shadow-lg">
                <img src="https://oitila.netlify.app/live/assets/img/svg/investor.svg"
                    class="h-16 w-16 bg-gradient-to-r from-[#4776e6] to-[#8e54e9] rounded-full p-3" alt=""
                    srcset="">
            </div>
            <p class="text-4xl font-bold">556+</p>
            <p class="text-lg uppercase tracking-wide">Total Investors</p>
        </div>
        <div class="flex flex-col items-center space-y-2">
            <div class="h-20 w-20   flex items-center justify-center shadow-lg">
                <img src="https://oitila.netlify.app/live/assets/img/svg/investor.svg"
                    class="h-16 w-16 bg-gradient-to-r from-[#4776e6] to-[#8e54e9] rounded-full p-3" alt=""
                    srcset="">
            </div>
            <p class="text-4xl font-bold">120+</p>
            <p class="text-lg uppercase tracking-wide">Projects Funded</p>
        </div>
        <div class="flex flex-col items-center space-y-2">
            <div class="h-20 w-20   flex items-center justify-center shadow-lg">
                <img src="https://oitila.netlify.app/live/assets/img/svg/worldwide.svg" alt="Global"
                    class="h-16 w-16 bg-gradient-to-r from-[#4776e6] to-[#8e54e9] rounded-full p-3" />
            </div>
            <p class="text-4xl font-bold">$1.2M</p>
            <p class="text-lg uppercase tracking-wide">Total Investment</p>
        </div>
    </div>
</section>



<section class="bg-[#6610f2] py-20">
    <div class="w-full max-w-screen-xl mx-auto bg-[#6610f2] rounded-xl text-white">
        <div class="grid grid-cols-12 gap-24">
            <!-- Left Content -->
            <div class="col-span-6 space-y-6">
                <p class="text-4xl font-bold leading-snug">We're Always Thinking Something Different</p>
                <p class="text-lg leading-relaxed opacity-90">Quis nostrud exercitation ullamco laboris nisi ut
                    aliquip commodo consequat. Duis aute irure dolor voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur.</p>
                <p class="text-lg leading-relaxed opacity-90">Lorem ipsum, dolor sit amet consectetur adipisicing
                    elit. Ipsum nemo quasi impedit, voluptatem quae voluptas numquam unde dolor!</p>
                <a href="#"
                    class="inline-block bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-full py-3 px-8 font-bold shadow-lg hover:scale-105 transition-all duration-300">Start
                    Investing</a>
            </div>

            <!-- Right Content (Image + Play Button) -->
            <div class="col-span-6 flex justify-center">
                <div class="relative w-64 h-64">
                    <!-- Pentagon Shape -->
                    <div class="w-full h-full overflow-hidden border-4 border-white rounded-[20%] shadow-lg">
                        <img src="https://oitila.netlify.app/live/assets/img/video.jpg" alt="Money"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Play Button -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div
                            class="w-14 h-14 bg-white bg-opacity-30 backdrop-blur-md rounded-full flex items-center justify-center hover:scale-110 transition-all duration-300">
                            <div class="w-10 h-10 bg-blue-600 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.752 11.168l-4.704-2.852a1 1 0 00-1.496.868v5.664a1 1 0 001.496.868l4.704-2.852a1 1 0 000-1.736z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        const dropdownBtn = document.getElementById("dropdownBtn");
        const dropdownMenu = document.getElementById("dropdownMenu");
        const arrowIcon = document.getElementById("arrowIcon");

        dropdownBtn.addEventListener("click", function(event) {
            dropdownMenu.classList.toggle("hidden");
            arrowIcon.classList.toggle("rotate-180");
            event.stopPropagation();
        });

        document.addEventListener("click", function(event) {
            if (!dropdownBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add("hidden");
                arrowIcon.classList.remove("rotate-180");
            }
        });
    });
</script>

@endsection


@push('styles')

@endpush


@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
@endpush
