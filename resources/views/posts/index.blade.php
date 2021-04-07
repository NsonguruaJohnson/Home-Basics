@extends('layouts.app')

@section('content')
    @if ($posts->count())
        @foreach ($posts as $post)
            <div>
                <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
            There are no posts    
    @endif
@endsection    