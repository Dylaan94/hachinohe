@php

    $iframe = get_field('html');

    // get src from iframe src attribute
    preg_match('/src="([^"]+)"/', $iframe, $matches);
    $src = $matches[1];

@endphp

<section class="google-maps h-[60vh] w-full">

    <iframe src="{{ $src }}"
        width="100%"
        height="100%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"></iframe>

</section>
