@extends('layouts.main', [
    'title' => 'New digital entity',
    'description' => 'Create a new digital entity - form.',
])

@section('body')
    <div class="container">
        <form method="POST" action="{{ route('entity.digital.create') }}">
            @csrf
            <div class="flex items-center justify-between">
                <h1>New digital entity</h1>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
            <hr class="mb-[32px] mt-[16px]">
            <div class="grid grid-cols-2 gap-[24px]">
                <div class="flex flex-col gap-[8px]">
                    <label for="name">Name <span class="text-primary">*</span></label>
                    <input type="text" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="flex flex-col gap-[8px]">
                    <label for="author">Author <span class="text-primary">*</span></label>
                    <select name="author" search-select>
                        @foreach($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->fullName }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-2 flex flex-col gap-[8px]">
                    <label for="url">URL</label>
                    <input type="text" name="url" value="{{ old('url') }}">
                </div>
                <div class="col-span-2 flex flex-col gap-[8px]">
                    <label for="description">Description</label>
                    <textarea name="description" rows="4">{{ old('description') }}</textarea>
                </div>
            </div>
        </form>
    </div>
@endsection
