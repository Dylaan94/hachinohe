{{--
    TODO:
    - add PDF button link

    --}}

<section class="gallery flex flex-col items-center bg-black pb-16">

    @if (get_field('title'))
        <h2 class="py-16 text-center text-3xl text-white">{{ get_field('title') }}</h2>
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
