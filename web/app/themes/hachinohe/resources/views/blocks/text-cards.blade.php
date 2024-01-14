<section class="text-cards flex w-full justify-center border-l-[18px] py-12"
    style="border-color: {{ get_field('border_colour') }}">

    <div class="text-cards-container grid w-3/4 max-w-screen-lg grid-cols-1 gap-8 md:grid-cols-2">

        @foreach (get_field('text_cards') as $card)
            <div class="flex flex-col border px-4 py-2 sm:px-8 sm:py-6">
                <h2 class="pb-4 text-center text-lg font-semibold md:text-2xl">{{ $card['header'] }}</h2>
                <div class="text-card-content">{!! $card['content'] !!}</div>
            </div>
        @endforeach

    </div>
</section>
