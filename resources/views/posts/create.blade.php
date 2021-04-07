@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        @if($errors->any())
        {{-- <div class="alert alert-danger"> --}}
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div>
            <input type="text" name="title" id="title" autocomplete="off" value="{{ old('title') }}" >
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <textarea name="body" id="body" cols="30" rows="10" autocomplete="off">{{ old('body') }}</textarea>
            @error('body')
                <div>{{ $message }}</div>
            @enderror
        </div>


        <button type="submit">Post</button>
    </form>
@endsection    