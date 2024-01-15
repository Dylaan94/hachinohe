<span class="flex items-center">
    @foreach (get_field('social_media', 'option') as $item)
        <a class="px-[5px] hover:cursor-pointer hover:underline"
            target="_blank"
            href="{{ $item['link'] }}">
            <img class="h-[12px] w-[12px]"
                src="{{ $item['icon'] }}"
                alt="social media icon">
        </a>
    @endforeach
</span>
