<section class="summary flex w-full justify-center border-l-[18px] py-12"
    style="border-color: {{ get_field('border_colour') }}">
    <div class="summary-container w-3/4 max-w-screen-xl">

        <h2 class="text-center text-4xl font-semibold">{{ get_field('header') }}</h2>
        <div class="summary-content-image flex w-full py-6">

            <div class="summary-content w-2/3 pr-8 text-lg">

                {!! get_field('content') !!}

            </div>

            <img class="summary-image w-1/3"
                src="{{ get_field('image') }}" />
        </div>

    </div>

</section>
