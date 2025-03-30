@php
    use App\Models\Slider;
    $sliders = Slider::get();
@endphp

<section id="heroSlider" class="owl-carousel owl-theme pb-10 bg-[#F1F5F9]">
    @foreach ($sliders as $key => $item)
        <section class="flex items-center justify-center min-h-[450px] lg:h-[520px] xl:h-[85vh] relative bg-cover bg-center bg-no-repeat"
            style="background: linear-gradient(rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.6)), url({{ asset('storage') . '/' . $item->thumbnail }});">
            <div class="container mx-auto px-6 md:px-12 lg:px-20 xl:px-32 space-y-6 lg:space-y-10 text-center lg:text-left">
                <h1 class="text-white text-3xl sm:text-5xl lg:text-7xl font-extrabold leading-tight animate__animated animate__slideInDown">
                    {{ $item->title }}
                </h1>
                <p class="text-white text-base sm:text-lg lg:text-xl font-light animate__animated animate__zoomIn max-w-2xl mx-auto lg:mx-0">
                    {{ $item->description }}
                </p>
                <div class="flex justify-center lg:justify-start">
                    <button onclick="Calendly.initPopupWidget({url: 'https://calendly.com/solarsquad/book?hide_gdpr_banner=1'}); return false;"
                        class="flex items-center bg-[#2563EB] text-white text-sm lg:text-lg font-semibold rounded-lg px-6 py-3 lg:px-8 lg:py-4 transition-all hover:bg-[#1E40AF]">
                        <span>Boost Your Income</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2">
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
        $(document).ready(function() {
            $('#heroSlider').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots:false,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: { items: 1 },
                    768: { items: 1 },
                    1024: { items: 1 }
                }
            });
        });
    </script>
@endpush
