<section class="w-full max-w-screen-xl mx-auto py-16 px-6">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-center">
        <!-- Left Content -->
        <div class="col-span-1 md:col-span-7 space-y-6">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 leading-tight">
                The <span class="text-blue-600">right place</span> for you to invest money
            </h2>
            <p class="text-gray-600 text-base sm:text-lg">
                The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                <u><b>below for those interested</b></u>. Sections 1.10.32 and 1.10.33.
            </p>

            <!-- Bullet Points -->
            <div class="space-y-3">
                @foreach (["The standard chunk of Lorem Ipsum used since", "Reproduced below for those interested", "De Finibus Bonorum et Malorum by Cicero", "Reproduced in their exact original form"] as $point)
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-600 p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                            </svg>
                        </div>
                        <p class="text-gray-700">{{ $point }}</p>
                    </div>
                @endforeach
            </div>

            <p class="text-gray-600 text-base sm:text-lg">
                There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration in some form.
            </p>

            <!-- Button -->
            <a href="#" class="inline-block px-6 py-3 text-base sm:text-lg font-semibold text-white bg-gradient-to-r from-blue-600 to-indigo-600 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                Invest Now
            </a>
        </div>

        <!-- Right Content -->
        <div class="col-span-1 md:col-span-5 space-y-6">
            @foreach ([
                ["img" => "solar-energy.svg", "title" => "We Innovate", "desc" => "We create modern solutions for future investments."],
                ["img" => "diploma.svg", "title" => "We're Certified", "desc" => "Trusted by thousands of investors worldwide."],
                ["img" => "blockchain.svg", "title" => "We Provide Crypto", "desc" => "Secure and reliable blockchain investments."],
                ["img" => "worldwide.svg", "title" => "We're Global", "desc" => "Serving investors in over 50+ countries."]
            ] as $feature)
                <div class="flex items-center space-x-6 p-5 bg-white rounded-xl shadow-md hover:shadow-lg transition">
                    <img src="https://oitila.netlify.app/live/assets/img/svg/{{ $feature['img'] }}" alt="{{ $feature['title'] }}"
                        class="h-14 w-14 sm:h-16 sm:w-16 bg-gradient-to-r from-[#4776e6] to-[#8e54e9] rounded-full p-3" />
                    <div>
                        <h5 class="text-lg sm:text-xl font-semibold text-gray-900">{{ $feature['title'] }}</h5>
                        <p class="text-gray-600 text-sm sm:text-base">{{ $feature['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
