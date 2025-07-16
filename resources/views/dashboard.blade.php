<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Posts
        </h2>
    </x-slot>

    @can('post.create')
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-6 text-gray-900">
            <x-button color="blue" text="Create Post" />
        </div>
    @endcan

    @foreach ($posts as $post)
        <x-post-component :post="$post" />
    @endforeach

</x-app-layout>
