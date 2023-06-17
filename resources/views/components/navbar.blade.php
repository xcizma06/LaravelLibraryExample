<aside class="bg-dark text-white flex flex-col w-[250px] h-screen">
    <div class="flex items-center justify-center p-[24px] gap-[12px]">
        <div class="bg-primary w-[32px] h-[32px]"></div>
        <h3>{{ __('Library IS') }}</h3>
    </div>
    <hr class="border-opacity-10 border-white">
    <nav class="flex flex-col gap-[8px] p-[24px]">
        <span class="font-bold text-center pb-[8px]">{{ __('Menu') }}</span>
        <span><a href="/">{{ __('Dashboard') }}</a></span>
        <span><a href="{{ route('author.index') }}">{{ __('Authors') }}</a></span>
        <span><a href="{{ route('entity.index') }}">{{ __('Entities') }}</a></span>
    </nav>
</aside>
