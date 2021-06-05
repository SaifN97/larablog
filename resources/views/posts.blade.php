<x-layout>

    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())

            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No posts yet.. Please Checkback later...</p>
        @endif
    </main>

    {{-- @section('content')
    @foreach ($posts as $post)
        <article>
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <p>{{ $post->excerpt }}</p>
            <p>
                By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
        </article>
    @endforeach () --}}
</x-layout>
