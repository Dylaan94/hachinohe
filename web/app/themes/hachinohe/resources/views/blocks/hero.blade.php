{{--
    TODO:
    - Responsives
--}}

<section class="hero flex h-[60vh] w-full items-end justify-center bg-cover pb-8"
    style="background-image: url('{{ get_field('background_image') }}')">

    {{-- Content --}}

    <div class="hero-content flex flex-col items-center">

        @php
            $content = get_field('content');

            // Regular expression pattern to match styling tags
            $pattern = '/<(h[1-6])>(.*?)<\/\1>/';

            // Use preg_replace_callback to wrap the matched text in <span> tags
            $modifiedContent = preg_replace_callback(
                $pattern,
                function ($matches) {
                    return '<' . $matches[1] . '><span class="bg-white">' . $matches[2] . '</span></' . $matches[1] . '>';
                },
                $content,
            );

        @endphp

        {!! $modifiedContent !!}
    </div>

</section>
