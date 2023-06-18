@extends('layouts.main', [
    'title' => 'Entities',
    'description' => 'Entity list.',
])

@section('body')
    <div class="container">
        <div class="flex items-center justify-between">
            <h1>Entities</h1>
            <div class="relative collapsed" collapsible>
                <button type="button" class="btn btn-primary" collapse-button>+ New entity</button>
                <div class="flex flex-col divide-y divide-border bg-white absolute px-[16px] py-[8px] w-full rounded-b-[4px] top-[45px] border border-border border-t-0 z-20" collapse-target>
                    <a href="{{ route('entity.book.create') }}" class="py-[8px]">+ Book</a>
                    <a href="{{ route('entity.digital.create') }}" class="py-[8px]">+ Digital entity</a>
                    <a href="{{ route('entity.magazine.create') }}" class="py-[8px]">+ Magazine</a>
                </div>
            </div>
        </div>
        <hr class="mb-[32px] mt-[16px]">
        <form method="GET" action="{{ route('entity.index') }}" class="flex justify-end">
            <input type="text" name="search" placeholder="Input searched text here..." class="rounded-r-[0]">
            <button type="submit" class="btn btn-secondary px-[8px] py-0 rounded-l-[0]">Search</button>
        </form>
        <div class="shadow-main border divide-y rounded-t-[4px] overflow-y-scroll mb-[32px]">
            <div class="grid grid-cols-7 divide-x bg-dark text-white font-bold divide-white divide-opacity-10 rounded-t-[4px]">
                <div class="py-[6px] px-[12px] bg-borders col-span-2">{{ __('Name') }}</div>
                <div class="py-[6px] px-[12px] col-span-2">{{ __('Author') }}</div>
                <div class="py-[6px] px-[12px]">{{ __('View') }}</div>
                <div class="py-[6px] px-[12px]">{{ __('Update') }}</div>
                <div class="py-[6px] px-[12px]">{{ __('Delete') }}</div>
            </div>
            @foreach($entities as $entity)
                <div class="grid grid-cols-7 divide-x">
                    <div class="py-[6px] px-[12px] col-span-2">{{ $entity->name }}</div>
                    <div class="py-[6px] px-[12px] col-span-2">{{ $entity->author->fullName }}</div>
                    <div class="py-[6px] px-[12px]"><a href="{{ route('entity.' . $entity->type . '.view', ['entity' => $entity]) }}">View</a></div>
                    <div class="py-[6px] px-[12px]"><a href="{{ route('entity.' . $entity->type . '.update', ['entity' => $entity]) }}">Update</a></div>
                    <div class="py-[6px] px-[12px]">
                        <form method="POST" action="{{ route('entity.' . $entity->type . '.delete', ['entity' => $entity]) }}" class="mb-0">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="link">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        {{  $entities->appends(request()->query())->onEachSide(1)->links() }}
    </div>
@endsection
