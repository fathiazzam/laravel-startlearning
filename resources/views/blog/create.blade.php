@extends('layouts.master')


@section('title', 'Blog Saya')

@section('content')
<h1>Create Blog Menu<h1>

   
<form action="/blog" method="post">
    <input name="title"  type="text"> <br>
    <textarea name="description" cols="30" rows="10"></textarea> <br>
    <input name="REV_RWA_FY14"  type="text"> <br>

    <input type="submit" name="submit" value="Create">
     {{ csrf_field() }}
</form>


    

@endsection

{{-- @foreach($user as $userx) 
    <li> {{$userx->username . ' '. $userx->password}} </li>
    @endforeach

    @if(count($user) > 3)
    <p>user lebih dari 5 </p>
    @else
    <p> user kurang dari 5</p>
    @endif --}}