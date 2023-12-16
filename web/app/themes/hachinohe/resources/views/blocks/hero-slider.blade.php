<section class="hero-slider w-full">

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">


            @foreach (get_field('slider') as $slide)
                <div class="swiper-slide">
                    <img src="{{ $slide['image'] }}">
                    <div class="slide-content">

                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>
