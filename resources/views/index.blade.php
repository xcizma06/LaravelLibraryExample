@extends('layouts.main', [
    'title' => 'Dashboard',
    'description' => 'Application dashboard',
])

@section('body')
    <div class="container">
        <div class="grid grid-cols-2 gap-[32px]">
            <a href="{{ route('entity.index') }}" class="unstyled group">
                <div class="bg-white group-hover:opacity-70 transition-all rounded-[16px] p-[32px] border border-border shadow-main">
                    <div class="flex justify-between items-center">
                        <h2 class="text-h1 font-normal">Entities</h1>
                        <h2 class="text-h1">{{ $entityCount }}</h2>
                    </div>
                    <p class="opacity-60 text-larger">Show entities</p>
                </div>
            </a>
            <a href="{{ route('author.index') }}" class="unstyled group">
                <div class="bg-white group-hover:opacity-70 transition-all rounded-[16px] p-[32px] border border-border shadow-main">
                    <div class="flex justify-between items-center">
                        <h2 class="text-h1 font-normal">Authors</h1>
                        <h2 class="text-h1">{{ $authorCount }}</h2>
                    </div>
                    <p class="opacity-60 text-larger">Show authors</p>
                </div>
            </a>
        </div>
    </div>
@endsection
