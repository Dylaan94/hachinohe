<section class="text-cards flex w-full justify-center border-l-[18px] py-12"
    style="border-color: {{ get_field('border_colour') }}">

    <div class="text-cards-container grid w-3/4 max-w-screen-lg grid-cols-2 gap-8">

        @foreach (get_field('text_cards') as $card)
            <div class="flex flex-col border px-8 py-6">
                <h2 class="pb-4 text-center text-2xl font-semibold">{{ $card['header'] }}</h2>
                <div class="text-card-content">{!! $card['content'] !!}</div>
            </div>
        @endforeach


    </div>

</section>
