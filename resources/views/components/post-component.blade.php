<div class="mt-3">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="{{ Auth::user()->id === $post->user_id ? 'bg-blue-100' : 'bg-white' }} overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 flex items-center justify-between">
                <div>
                    <h3 class="text-lg font-bold">{{ $post->title }} - {{ $post->user->name }}</h3>
                    <p>{{ $post->content }}</p>
                    <p class="text-sm text-gray-600">Posted on {{ $post->created_at ? $post->created_at->format('d M Y') : 'Unknown date' }}</p>
                </div>
                @can('post.delete', $post)
                <x-button color="red" text="Delete" href="{{ route('post.deletePost',  [$post->id]) }}" />
                @endcan
            </div>
        </div>
    </div>
</div>