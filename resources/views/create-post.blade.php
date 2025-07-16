<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Post
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-6 text-gray-900">
        <form action="{{ route('post.storePost') }}" method="POST" novalidate>
            @csrf
            <div>
                <label for="title" class="block font-medium text-sm text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full" required
                    value="{{ old('title') }}" />
                @error('title')
                    <span style="color: #ef4444; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>

            <div class="mt-4">
                <label for="content" class="block font-medium text-sm text-gray-700">Content</label>
                <textarea name="content" id="content" class="mt-1 block w-full" required>{{ old('content') }}</textarea>
                @error('content')
                    <span style="color: #ef4444; font-size: 0.875rem;">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3 mt-3 flex items-center justify-end gap-4">
                <x-button color="red" text="Cancel" href="{{ route('dashboard') }}" />
                <x-button color="blue" text="Create" type="submit" />
            </div>
        </form>
    </div>
</x-app-layout>
