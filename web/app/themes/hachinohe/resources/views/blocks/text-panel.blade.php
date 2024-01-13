<section class="text-panel flex w-full justify-center border-l-[18px] py-12"
    style="border-color: {{ get_field('border_colour') }}; background-color: {{ get_field('background_colour') }}">

    <div class="text-panel-container w-3/4 max-w-screen-lg">
        <h2 class="pb-2 text-2xl font-semibold">{{ get_field('title') }}</h2>
        @foreach (get_field('content') as $item)
            @if ($item['label'] === '')
                <span class="row-nocontent block pb-2"></span>
            @else
                <span class="row flex">
                    <p class="w-1/3 pr-2 sm:w-1/6">{{ $item['label'] }}</p>
                    <p class="text-gray-800">{{ $item['value'] }}</p>
                </span>
            @endif
        @endforeach

    </div>
</section>
