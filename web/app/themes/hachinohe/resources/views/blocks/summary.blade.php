<section class="summary flex w-full justify-center border-l-[18px] py-12"
    style="border-color: {{ get_field('border_colour') }}">
    <div class="summary-container w-3/4 max-w-screen-lg sm:w-3/5">

        <h2 class="text-center text-2xl font-semibold sm:text-4xl">{{ get_field('header') }}</h2>
        <div class="summary-content-image flex w-full py-6">

            <div class="summary-content w-full text-center text-base text-gray-800 sm:text-left sm:text-lg">

                {!! get_field('content') !!}

            </div>
        </div>
    </div>
</section>




<section class="anchor-links flex w-full justify-center border-l-[18px] py-12">
    <div class="anchor-links-container flex w-3/4 max-w-screen-lg flex-col">
        <h2 class="pb-2 text-3xl">INDEX</h2>
        @foreach (get_field('anchor_links') as $link)
            <a href="#{{ $link['id'] }}"
                class="index-tag text-base text-gray-800">
                <span class="index-tag-text hover:cursor-pointer hover:underline">{{ $link['text'] }}</span>
            </a>
        @endforeach
    </div>
</section>
