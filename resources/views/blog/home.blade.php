@extends('layouts.master')


@section('title', 'Blog Saya')
    


@section('content')
    <h1>Selamat datang di Blog ini<h1>
    <h2>laGi belajar laravel nih</h2>

    <hr>
    @foreach($blogs as $blog)
        <li> 
        <a href="/blog/{{$blog->id}}"> {{$blog->title}} </a>

        <form action="/blog/{{$blog->id}}" method="post">
            <input type="submit" name="submit" value="delete">
             {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
        </form>
        
        
        </li>
    @endforeach

@endsection
