{{--
    TODO:
    - add PDF button link - get off Alex

    --}}

<section class="gallery flex flex-col items-center bg-neutral-900 pb-16">

    @if (get_field('title'))
        <h2 class="w-11/12 pt-16 text-center text-2xl text-white sm:text-3xl">{{ get_field('title') }}</h2>
    @endif

    @if (get_field('button_text'))
        <div class="flex w-11/12 justify-center py-6">
            <a href="{{ get_field('button_link') }}"
                class="border border-[#13b767] py-2 pl-5 pr-9 text-center text-[#13b767] transition hover:cursor-pointer hover:bg-[#13b767] hover:text-black">{{ get_field('button_text') }}</a>
        </div>
    @endif

    @if (get_field('gallery'))

        <div class="gallery-container grid w-11/12 max-w-screen-lg grid-cols-2 gap-2 md:grid-cols-4 md:gap-6">

            @foreach (get_field('gallery') as $item)
                <div class="gallery-item">
                    <img src="{{ $item['image'] }}"
                        alt="store image">
                </div>
            @endforeach

        </div>

    @endif
</section>
