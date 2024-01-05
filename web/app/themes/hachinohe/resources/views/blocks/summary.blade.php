{{--
    TODO:
    - responsive
--}}

<section class="summary flex w-full justify-center border-l-[18px] py-12"
    style="border-color: {{ get_field('border_colour') }}">
    <div class="summary-container w-3/5 max-w-screen-lg">

        <h2 class="text-center text-4xl font-semibold">{{ get_field('header') }}</h2>
        <div class="summary-content-image flex w-full py-6">

            <div class="summary-content w-full pr-8 text-lg text-gray-800">

                {!! get_field('content') !!}

            </div>
        </div>

    </div>

</section>
