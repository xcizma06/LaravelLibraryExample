@extends('layouts.main', [
    'title' => 'Authors',
    'description' => 'Author list.',
])

@section('body')
    <div class="container">
        <div class="flex items-center justify-between">
            <h1>Authors</h1>
            <a href="{{ route('author.create') }}" class="btn btn-primary">+ New author</a>
        </div>
        <hr class="mb-[32px] mt-[16px]">
        <div class="shadow-main border divide-y rounded-t-[4px] overflow-y-scroll mb-[32px]">
            <div class="grid grid-cols-3 divide-x bg-dark text-white font-bold divide-white divide-opacity-10 rounded-t-[4px]">
                <div class="py-[6px] px-[12px] bg-borders">{{ __('Full name') }}</div>
                <div class="py-[6px] px-[12px]">{{ __('E-mail') }}</div>
                <div class="py-[6px] px-[12px]">{{ __('Publications') }}</div>
            </div>
            @foreach($authors as $author)
                <div class="grid grid-cols-3 divide-x">
                    <div class="py-[6px] px-[12px]">{{ $author->fullName }}</div>
                    <div class="py-[6px] px-[12px]">{{ $author->email }}</div>
                    <div class="py-[6px] px-[12px]">{{ $author->entities()->count() }}</div>
                </div>
            @endforeach
        </div>
        {{  $authors->onEachSide(1)->links() }}
    </div>
@endsection
