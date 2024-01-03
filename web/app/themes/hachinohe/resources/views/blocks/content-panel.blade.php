{{--
    TODO:
    - add > to the right of the button
    - ensure it works with WPML 
    - Ensure responsive
    - Anchor links bar (see design)
    --}}

<section class="stores flex w-full justify-center">
    <div class="stores-container flex w-3/4 max-w-screen-xl flex-col">

        @foreach (get_field('stores') as $store)
            @php
                // if index is even, add flex-row-reverse to the store class
                $index = $loop->index;
                $storeClass = $index % 2 == 0 ? 'flex' : 'flex flex-row-reverse';

            @endphp
            <div class="{{ $storeClass }} my-8 h-full">

                {{-- Image Gallery --}}
                <div class="stores-image-gallery flex w-2/5 flex-col">
                    <div class="swiper storeSwiper h-full w-full">
                        <div class="swiper-wrapper">

                            @foreach ($store['images'] as $item)
                                <div class="swiper-slide h-56 w-full">
                                    <img class="h-full w-full object-cover"
                                        src="{{ $item['image']['url'] }}"
                                        alt="{{ $item['image']['alt'] }}">
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="image-gallery-buttons mt-2 flex w-full justify-between">

                        <a href="{{ $store['button_link_1'] }}"
                            class="w-2/5 border border-[#734ddb] py-2 pl-5 pr-9 text-center text-[#734ddb] transition hover:bg-[#734ddb] hover:text-white">
                            {{ $store['button_text_1'] }}
                        </a>

                        <a href="{{ $store['button_link_2'] }}"
                            class="w-2/5 border border-[#734ddb] py-2 pl-5 pr-9 text-center text-[#734ddb] transition hover:bg-[#734ddb] hover:text-white">
                            {{ $store['button_text_2'] }}
                        </a>

                    </div>

                </div>

                {{-- Content --}}

                @php

                    $padding = $index % 2 == 0 ? 'pl-12' : 'pr-12';

                @endphp

                <div class="stores-image-content {{ $padding }} w-3/5">
                    <h3 class="pb-4 text-3xl">
                        {!! $store['store_name'] !!}
                    </h3>

                    <div class="store-intro pb-4 text-gray-600">
                        {!! $store['store_intro'] !!}
                    </div>

                    <div class="store-data pb-6">
                        {!! $store['store_data'] !!}
                    </div>

                    <a class="border border-[#13b767] py-1 pl-5 pr-9 text-[#13b767] transition hover:bg-[#13b767] hover:text-white"
                        href="{{ $store['store_button_link'] }}">
                        {{ $store['store_button_text'] }}
                    </a>
                </div>

            </div>
        @endforeach


    </div>

</section>
