@extends('layouts.main', [
    'title' => 'New author',
    'description' => 'Create a new author - form.',
])

@section('body')
    <div class="container">
        <form method="POST" action="{{ route('author.create') }}">
            @csrf
            <div class="flex items-center justify-between">
                <h1>New author</h1>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            <hr class="mb-[32px] mt-[16px]">
            <div class="grid grid-cols-2 gap-[24px]">
                <div class="flex flex-col gap-[8px]">
                    <label for="name">Name <span class="text-primary">*</span></label>
                    <input type="text" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="flex flex-col gap-[8px]">
                    <label for="surname">Surname <span class="text-primary">*</span></label>
                    <input type="text" name="surname" value="{{ old('surname') }}" required>
                </div>
                <div class="col-span-2 flex flex-col gap-[8px]">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" value="{{ old('email') }}">
                </div>
            </div>
        </form>
    </div>
@endsection
