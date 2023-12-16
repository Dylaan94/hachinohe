<section class="hero-slider w-full h-full">
    <div class="swiper mySwiper h-[80vh]">
        <div class="swiper-wrapper w-full h-screen">
            @foreach (get_field('slider') as $slide)
                <div class="swiper-slide relative h-screen bg-cover"
                    style="background-image: url('{{ $slide['image'] }}')">

                    {{-- Overlay --}}
                    <div class="absolute inset-0 bg-black opacity-30"></div>

                    <div class="slide-content absolute w-full h-full flex-col flex items-center justify-center">
                        {!! $slide['content'] !!}

                        {{-- Underline --}}
                        <div class="w-16 h-2 mt-6" style="background-color: {{ $slide['underline_colour'] }}"></div>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
