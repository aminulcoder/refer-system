<div class="bg-[#007bff]">
    @php
        use Carbon\Carbon;
        $dateTime = Carbon::parse('2025-02-27 20:57:09')->format('d M Y, h:i:s A');
    @endphp
    <div class="w-[1280px] py-6  flex justify-between items-center bg-[#007bff] text-white  mx-auto">
        <p class="text-xl">Welcome to Oitila</p>
        <div class="flex  items-center space-x-2">
            <p class="text-xl">Sever Time :</p>
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <div class="">
                    <p class="">📅 {{ $dateTime }}</p>
                </div>
            </div>
            {{--
            <div class=" space-x-2">
                <a href="">Login</a>
                or
                <a href="" class="bg-white text-blue-500 px-3 py-2 rounded-3xl">Register</a>


            </div> --}}


            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 space-x-2 justify-end items-center">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="">
                            Log in
                        </a>
                        {{-- <a href="{{ route('referral.page') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Affiliate
                    </a> --}}

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-white text-blue-500 px-3 py-2 rounded-3xl">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </div>
</div>

<div class="w-[1280px] container mx-auto bg-white flex justify-between ">
    <div class="py-2">
        <a href="#">
            <img src="https://oitila.netlify.app/live/assets/img/logo2.png" alt="" srcset="">
        </a>
    </div>
    <nav class="bg-white text-blue-500 p-4 z-50 flex items-center space-x-4 ">
        <ul class="flex space-x-6 items-center">
            <!-- Dropdown Menu -->
            <li class="relative">
                <button id="dropdownBtn" class="hover:text-yellow-300 focus:outline-none flex items-center">
                    Home
                    <svg id="arrowIcon" class="w-5 h-5 ml-2 transition-transform duration-300" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <ul id="dropdownMenu"
                    class="absolute left-0 hidden bg-white border border-gray-200 mt-2 rounded-md shadow-lg w-40 z-50">
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 1</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 2</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 3</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 4</a></li>
                </ul>
            </li>


            <li><a href="#" class="hover:text-yellow-300">
                    Affiliate Terms</a></li>
            <li><a href="#" class="hover:text-yellow-300">
                    Contact us</a></li>
            <li><a href="#" class="hover:text-yellow-300">
                    UK University
                </a></li>
            <li><a href="#" class="hover:text-yellow-300">
                    UK University</a></li>
            <li><a href="#" class="hover:text-yellow-300">
                    Courses</a></li>
            UK University</a></li>
            <li><a href="#" class="hover:text-yellow-300">
                    Contact us</a></li>
            <!-- Dropdown Menu -->
            {{-- <li class="relative">
                <button id="dropdownBtn" class="hover:text-yellow-300 focus:outline-none flex items-center">
                    About us
                    <svg id="arrowIcon" class="w-5 h-5 ml-2 transition-transform duration-300" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <ul id="dropdownMenu"
                    class="absolute left-0 hidden bg-white border border-gray-200 mt-2 rounded-md shadow-lg w-40 z-50">
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 1</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 2</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 3</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 4</a></li>
                </ul>
            </li> --}}
            <!-- Dropdown Menu -->
            {{-- <li class="relative">
                <button id="dropdownBtn" class="hover:text-yellow-300 focus:outline-none flex items-center">
                    UK University
                    <svg id="arrowIcon" class="w-5 h-5 ml-2 transition-transform duration-300" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <ul id="dropdownMenu"
                    class="absolute left-0 hidden bg-white border border-gray-200 mt-2 rounded-md shadow-lg w-40 z-50">
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 1</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 2</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 3</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 4</a></li>
                </ul>
            </li> --}}
            <!-- Dropdown Menu -->
            {{-- <li class="relative">
                <button id="dropdownBtn" class="hover:text-yellow-300 focus:outline-none flex items-center">
                    Courses
                    <svg id="arrowIcon" class="w-5 h-5 ml-2 transition-transform duration-300" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <ul id="dropdownMenu"
                    class="absolute left-0 hidden bg-white border border-gray-200 mt-2 rounded-md shadow-lg w-40 z-50">
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 1</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 2</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 3</a></li>
                    <li><a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-300">Home 4</a></li>
                </ul>
            </li> --}}
            {{-- <li><a href="#" class="hover:text-yellow-300">Contact</a></li> --}}
        </ul>
        <a href="{{ route('referral.page') }}"
            class="bg-gradient-to-r from-blue-500 to-purple-600 text-white  px-3 py-2 rounded-3xl">Join Now</a>
    </nav>
</div>
