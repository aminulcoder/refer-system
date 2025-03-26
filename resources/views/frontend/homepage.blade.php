@extends('frontend.layouts.app')

@section('title')
    Rreferral | Home
@endsection

@section('content')
    @include('frontend.partieal.heroarea')

    @include('frontend.partieal.step')

    @include('frontend.partieal.investment-section')

    @include('frontend.partieal.countproject')

    @include('frontend.partieal.videoblog')
@endsection


@push('styles')
@endpush


@push('scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script> --}}
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



<script>
    $(document).ready(function() {
        $('#heroSlider').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            items: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        })
    })
</script>
@endpush
