@extends('master')

@section('title', 'Категории')

@section('content')
    <div class="starter-template">
        @foreach($categories as $category)
            <div class="panel">
                <a href="{{route('category',$category->code )}}">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQvpNeoYOI_MzZIddDAeeSBQXMY0cNn20D5xQ&usqp=CAU">
                    <h2>{{ $category->name }}</h2>
                </a>
                <p>
                   {{ $category->description }}
                </p>
            </div>
        @endforeach
    </div>

@endsection
