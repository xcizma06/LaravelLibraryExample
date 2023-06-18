<div class="absolute right-0 bottom-[32px] flex flex-col gap-[6px] w-[256px]">
    @if(count($errors->all()))
        <div class="alert bg-primary border border-primary rounded-l-[6px] px-[20px] py-[8px]">
            <ul class="my-[6px] text-white">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="alert bg-green border border-green rounded-l-[6px] px-[20px] py-[8px]">
            <span class="text-white">{{ $message }}</span>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert bg-primary border border-primary rounded-l-[6px] px-[20px] py-[8px]">
            <span class="text-white">{{ $message }}</span>
        </div>
    @endif

    @if ($message = Session::get('warning'))
        <div class="alert bg-yellow border border-yellow rounded-l-[6px] px-[20px] py-[8px]">
            <span class="text-white">{{ $message }}</span>
        </div>
    @endif

    @if ($message = Session::get('info'))
        <div class="alert bg-yellow border border-yellow rounded-l-[6px] px-[20px] py-[8px]">
            <span class="text-white">{{ $message }}</span>
        </div>
    @endif
</div>
