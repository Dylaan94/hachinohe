<header class="banner w-full flex justify-center">
    @if (has_nav_menu('primary_navigation'))
        <nav class="nav-primary w-full max-w-screen-xl flex items-center h-[125px]"
            aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
            <a href="/" class="pr-12">
                <img src="{{ get_field('company_logo', 'option') }}" alt="Company Logo">
            </a>
            <span class="flex flex-col nav-menus h-full w-full">

                <span class="flex self-end text-xs">
                    {{ __('Find a Hotel Booking.com Expedia |') }}
                    {!! wp_nav_menu(['theme_location' => 'upper_navigation', 'menu_class' => 'nav flex', 'echo' => false]) !!}

                </span>

                {!! wp_nav_menu([
                    'theme_location' => 'primary_navigation',
                    'menu_class' => ' nav flex ',
                    'echo' => false,
                ]) !!}

            </span>

        </nav>
    @endif
</header>
