<section class="hero-slider w-full h-full ">
    {{-- Autplay swiper --}}
    <div class="swiper mySwiper h-[80vh]">
        <div class="swiper-wrapper w-full h-screen">
            @foreach (get_field('slider') as $slide)
                <a class="swiper-slide relative h-screen bg-cover" href="{{ $slide['link'] }}"
                    style="background-image: url('{{ $slide['image'] }}')">

                    {{-- Overlay --}}
                    <div class="absolute inset-0 bg-black opacity-30"></div>

                    <div class="slide-content absolute w-full h-full flex-col flex items-center justify-center">
                        {!! $slide['content'] !!}

                        {{-- Underline --}}
                        <div class="w-16 h-2 mt-6" style="background-color: {{ $slide['underline_colour'] }}"></div>

                    </div>
                </a>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>

    <div class="hero-slider-content w-full flex justify-center py-16">
        <div class="hero-slider-content-container w-3/4 max-w-screen-xl flex items-center flex-col">
            <h2 class="text-4xl">
                {!! get_field('heading') !!}
            </h2>
            <span class="hero-slider-content-lead-text pt-6">
                {!! get_field('lead_text') !!}
            </span>
        </div>

    </div>



</section>
