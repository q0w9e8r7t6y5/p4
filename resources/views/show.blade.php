@extends('master')


@section('title')
    {{ $user->first_name }} {{ $user->last_name }}
@endsection

@section('content')
    <h1>{{ $user->first_name }} {{ $user->last_name }}</h1>

    <div class='book cf'>

        <p>Phone Number: {{ $user->phone }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>User ID: {{ $user->id }}</p>
        <p>Added: {{ $user->created_at->format('m/d/y g:ia') }}</p>


        {{--<img src='{{ $book->cover_url }}' class='cover' alt='Cover image for {{ $book->title }}'>--}}
        {{--<p>By {{ $book->author->getFullName() }} ({{ $book->published_year }})</p>--}}
        {{--<p>Added {{ $book->created_at->format('m/d/y') }}</p>--}}

        {{--<ul class='userActions'>--}}
            {{--<li><a href='{{ $book->purchase_url }}'><i class="fas fa-shopping-cart"></i> Purchase</a>--}}
            {{--<li><a href='/books/{{ $book->id }}/edit'><i class="fas fa-pencil-alt"></i> Edit</a>--}}
        {{--</ul>--}}
    {{--</div>--}}

@include('modules.homebar')

@endsection
