@extends('layouts.main', [
    'title' => 'Entities',
    'description' => 'Entity list.',
])

@section('body')
    <div class="container">
        <div class="flex items-center justify-between">
            <h1>Entities</h1>
            <a href="{{ route('author.create') }}" class="btn btn-primary">+ New entity</a>
        </div>
        <hr class="mb-[32px] mt-[16px]">
        <div class="shadow-main border divide-y rounded-t-[4px] overflow-y-scroll mb-[32px]">
            <div class="grid grid-cols-7 divide-x bg-dark text-white font-bold divide-white divide-opacity-10 rounded-t-[4px]">
                <div class="py-[6px] px-[12px] bg-borders col-span-2">{{ __('Name') }}</div>
                <div class="py-[6px] px-[12px] col-span-2">{{ __('Author') }}</div>
                <div class="py-[6px] px-[12px]">{{ __('View') }}</div>
                <div class="py-[6px] px-[12px]">{{ __('Edit') }}</div>
                <div class="py-[6px] px-[12px]">{{ __('Delete') }}</div>
            </div>
            @foreach($entities as $entity)
                <div class="grid grid-cols-7 divide-x">
                    <div class="py-[6px] px-[12px] col-span-2">{{ $entity->name }}</div>
                    <div class="py-[6px] px-[12px] col-span-2">{{ $entity->author->fullName }}</div>
                    <div class="py-[6px] px-[12px]">0</div>
                    <div class="py-[6px] px-[12px]">0</div>
                    <div class="py-[6px] px-[12px]">0</div>
                </div>
            @endforeach
        </div>
        {{  $entities->links() }}
    </div>
@endsection
