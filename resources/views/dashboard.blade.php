<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts
        </h2>
    </x-slot>

    @empty($posts->count())
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-6 text-gray-900 flex flex-col items-center justify-center">
            <p class="mb-4">No posts available.</p>
            @can('post.create')
                <x-button color="blue" text="Create Post" href="{{ route('post.createPost') }}" />
            @endcan
        </div>
    @else
        @can('post.create')
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-6 text-gray-900">
                <x-button color="blue" text="Create Post" href="{{ route('post.createPost') }}" />
            </div>
        @endcan
        @foreach ($posts as $post)
            <x-post-component :post="$post" />
        @endforeach
    @endempty


</x-app-layout>
