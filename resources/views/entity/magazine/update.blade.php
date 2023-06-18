@extends('layouts.main', [
    'title' => 'Update magazine',
    'description' => 'Update magazine - form.',
])

@section('body')
    <div class="container">
        <form method="POST" action="{{ route('entity.magazine.update', $entity) }}">
            @csrf
            <div class="flex items-center justify-between">
                <h1>Update magazine</h1>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <hr class="mb-[32px] mt-[16px]">
            <div class="grid gap-[24px]">
                <div class="flex flex-col gap-[8px]">
                    <label for="name">Name <span class="text-primary">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $entity->name) }}" required>
                </div>
                <div class="flex flex-col gap-[8px]">
                    <label for="description">Description</label>
                    <textarea name="description" rows="4">{{ old('description', $entity->description) }}</textarea>
                </div>
            </div>
        </form>
    </div>
@endsection
