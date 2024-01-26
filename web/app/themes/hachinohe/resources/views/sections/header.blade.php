{{--
    TODO:
    - add socials to header
    - responsive
    - underline on hover
    --}}

<header class="banner hidden w-full justify-center md:flex">
    @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary flex h-[125px] w-full items-center"
            aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            <a href="https://visithachinohe.com"
                class="pr-12">

                <img class="w-[210px] px-[20px] md:w-[351px]"
                    src="{{ get_field('company_logo', 'option') }}"
                    alt="Company Logo">
            </a>
            <span class="nav-menus flex h-full w-full flex-col">

                <span class="flex self-end pt-[10px] text-xs">
                    @include('partials.booking-site')
                    {!! wp_nav_menu(['theme_location' => 'upper_navigation', 'menu_class' => 'nav flex', 'echo' => false]) !!}
                    @include('partials.social-media')
                </span>

                {!! wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => 'hidden md:flex nav  pb-[10px] ',
                    'echo' => false,
                ]) !!}

            </span>

        </nav>
    @endif
</header>

<header class="mobile-banner xs flex w-full flex-col px-[18px] pt-[18px] md:hidden">


    <span class="flex justify-between">
        <img class="h-8"
            src="{{ get_field('company_logo', 'option') }}"
            alt="company logo">

        <div class="hamburger-menu flex-col hover:cursor-pointer lg:hidden">
            <div class="hamburger-line mb-2 h-[2px] w-8 bg-black"></div>
            <div class="hamburger-line mb-2 h-[2px] w-8 bg-black"></div>
            <div class="hamburger-line mb-2 h-[2px] w-8 bg-black"></div>
        </div>
    </span>


    <div class="mobile-banner-container hidden">
        @if (has_nav_menu('primary_navigation'))
            <div class="z-50 h-screen w-full bg-white">
                <nav class="nav-mobile flex h-full w-full flex-col items-center pt-20">
                    {!! wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'flex flex-col items-center',
                        'echo' => false,
                    ]) !!}
                </nav>

            </div>
        @endif

    </div>




</header>
