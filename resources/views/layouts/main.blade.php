@extends('layouts.empty')

@section('main')
    <div class="flex flex-row w-screen">
        @include('components.navbar')
        @include('components.messages')
        <main class="grow h-screen overflow-y-scroll py-[64px]">
            @yield('body')
        </main>
    </div>
@endsection
