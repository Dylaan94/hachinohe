<section class="showcase-panel flex w-full flex-col items-center">
    @foreach (get_field('panel') as $panel)
        <div class="showcase-panel-item flex w-full justify-center border-l-[18px]"
            style="border-color: {{ $panel['border_colour'] }}">

            <div class="showcase-panel-item-container flex w-3/4 max-w-screen-lg flex-col py-8">

                {{-- Title and Main Image --}}
                <h2 class="pb-6 text-3xl sm:text-5xl">{{ $panel['title'] }}</h2>

                @if ($panel['main_image'])
                    <img class="h-[50vh] w-full object-cover"
                        src="{{ $panel['main_image'] }}"
                        alt="">
                @endif

                {{-- Columns --}}
                <div
                    class="showcase-panel-columns mt-16 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-16 md:grid-cols-3">
                    @foreach ($panel['columns'] as $column)
                        <div class="showcase-panel-column flex flex-col items-center">
                            <img class="aspect-square h-auto w-full object-cover sm:aspect-video"
                                src="{{ $column['image'] }}"
                                alt="">
                            {{-- Column header --}}
                            <h3 class="w-full pt-4 text-xl font-semibold">{{ $column['header'] }}</h3>
                            {{-- Column content --}}
                            <div class="w-full pt-4 text-base text-gray-800">{!! $column['content'] !!}</div>
                        </div>
                    @endforeach
                </div>

                {{-- Button --}}

                @php
                    $button_colour = $panel['button_colour'];
                    $button_classes = "border py-2 px-5 mx-6 my-2 text-center border-[{$button_colour}] text-[{$button_colour}] hover:bg-[{$button_colour}] hover:text-white transition";
                @endphp


                <div class="showcase-panel-button flex flex-col justify-center pt-8 sm:flex-row">

                    @if ($panel['link_text'])
                        <a href="{{ $panel['link'] }}"
                            class="{{ $button_classes }}">
                            {{ $panel['link_text'] }} ➤
                        </a>
                    @endif

                    @if ($panel['link_text_2'])
                        <a href="{{ $panel['link_2'] }}"
                            class="{{ $button_classes }}">
                            {{ $panel['link_text_2'] }} ➤
                        </a>
                    @endif


                    @if ($panel['link_text_3'])
                        <a href="{{ $panel['link_3'] }}"
                            class="{{ $button_classes }}">
                            {{ $panel['link_text_3'] }} ➤
                        </a>
                    @endif

                </div>

            </div>
        </div>
    @endforeach

</section>
