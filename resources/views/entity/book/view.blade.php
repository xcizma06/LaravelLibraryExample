@extends('layouts.main', [
    'title' => $entity->name,
    'description' => $entity->description ?? 'Book.',
])

@section('body')
    <div class="container">
        <div class="flex md:flex-row flex-col items-center justify-between">
            <h1>{{ $entity->name }}</h1>
            <a href="{{ route('entity.index') }}" class="btn btn-primary">Back to list</a>
        </div>
        <hr class="mb-[32px] mt-[16px]">
        <div class="grid md:grid-cols-3 md:divide-x md:divide-y-0 divide-y md:gap-y-0 gap-y-[32px]">
            <div class="md:col-span-2 md:pr-[24px]">
                <div class="flex gap-[32px] mb-[16px]">
                    <div>
                        <h3>Type:</h3>
                        <p class="capitalize">{{ $entity->type }}</p>
                    </div>
                    <div>
                        <h3>ISBN:</h3>
                        <p>{{ $entity->isbn }}</p>
                    </div>
                </div>
                <h3>Description:</h3>
                <p class="whitespace-pre-wrap">{{ $entity->description }}</p>
            </div>
            <div class="md:pl-[24px] md:pt-0 pt-[32px]">
                <h2>Author</h2>
                <p class="mb-[16px]">{{ $entity->author->fullName }}</p>
                
                <h3>Publications ({{ $entity->author->entities()->count() }}):</h3>
                <div class="flex flex-col">
                    @foreach($entity->author->entities as $publication)
                        <a href="{{ route('entity.' . $publication->type . '.view', ['entity' => $publication]) }}">{{ $publication->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
