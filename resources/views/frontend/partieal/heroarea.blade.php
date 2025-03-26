{{-- <div class=" h-[90vh] flex items-center justify-center">
    <section
        class="bg-no-repeat owl-carousel owl-theme bg-cover flex flex-col items-center justify-center text-center min-h-[450px] lg:h-[520px] xl:h-[85vh] relative px-6 w-full"
        style="background: linear-gradient(rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.60)), url('https://www.sportico.com/wp-content/uploads/2020/09/0911_IMG.jpg'); background-size: cover; background-position: center;">

        <p class="text-2xl text-white font-semibold">Want to Invest Money?</p>
        <h1 class="text-4xl lg:text-7xl font-semibold text-white leading-tight mt-4">
            Grow your money with <br> safety invest in Oitila
        </h1>
        <p class="font-semibold text-white max-w-2xl mt-4">
            We Already Completed Our 50+ Years in Online Investment Business
            With Trust and Excellent Reputation.
        </p>

        <div class="mt-8">
            <a href="#"
                class="bg-white text-blue-500 font-bold rounded-3xl px-6 py-3 shadow-lg hover:bg-gray-200 transition">
                Start Investing Now
            </a>
        </div>
    </section>
</div> --}}


@php
    use App\Models\Slider;
    $sliders = Slider::get();

    // return  $sliders;

@endphp



<section id="heroSlider" class="owl-carousel owl-theme pb-[40px] lg:pb-[10px] bg-[#F1F5F9]">
    @foreach ($sliders as $key => $item)
        <section class="bg-no-repeat bg-cover bg-center flex items-center min-h-[450px] lg:h-[520px] xl:h-[85vh] relative"
            style="background: linear-gradient(rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.6)), url({{ asset('storage') . '/' . $item->thumbnail }});">
            <div class="container space-y-5 lg:space-y-8 py-12 lg:py-42">
                <h1 class="text-[#F8FAFC] text-3xl lg:text-7xl capitalize lg:leading-[1.2] text-left font-extrabold animate__animated animate__slideInDown w-full px-3 lg:w-4/5 xl:w-[54%]">
                    {{ $item->title }}
                </h1>
                <p class="text-[#F8FAFC] capitalize text-[17px] lg:text-[22px] font-display font-normal break-words px-4 pb-5 lg:pb-8 text-left w-full md:w-[72%] lg:w-4/5 xl:w-[32%] animate__animated animate__zoomIn">
                    {{ $item->description }}
                </p>
                <div class="px-4 pb-3 lg:pb-0 flex justify-start">
                    <button onclick="Calendly.initPopupWidget({url: 'https://calendly.com/solarsquad/book?hide_gdpr_banner=1'});return true;"
                        class="flex items-center bg-[#2563EB] text-white text-sm lg:text-lg font-semibold rounded-lg px-4 lg:px-8 py-2 lg:py-5 space-x-2 transition-all duration-300 hover:bg-[#1E40AF]">
                        <span>Boost Your Income</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>
    @endforeach
</section>





@push('scripts')
    <script>
        $('#owlhero').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endpush
