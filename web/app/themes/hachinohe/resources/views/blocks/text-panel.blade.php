<section class="text-panel flex w-full justify-center border-l-[18px] py-12"
    style="border-color: {{ get_field('border_colour') }}; background-color: {{ get_field('background_colour') }}">

    <div class="text-panel-container w-3/4 max-w-screen-lg">
        <h2 class="pb-2 text-2xl font-semibold">{{ get_field('title') }}</h2>
        @foreach (get_field('content') as $item)
            @if ($item['label'] === '')
                <span class="row-nocontent block pb-2"></span>
            @else
                <span class="row flex flex-col sm:flex-row">
                    @if ($item['value'])
                        <p class="py-2 font-semibold sm:w-1/6 sm:pb-0 sm:font-normal">{{ $item['label'] }}</p>
                        <p class="py-2 text-gray-800 sm:pb-0">{!! $item['value'] !!}</p>
                    @else
                        <p class="sm:text-lg py-2 font-semibold sm:w-1/6 sm:pb-0">{{ $item['label'] }}</p>
                    @endif
                </span>
            @endif
        @endforeach

    </div>
</section>
