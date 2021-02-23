@extends('layouts.master')


@section('title', 'Blog Saya')

@section('content')
<h1>Edit Menu di Blog Kami<h1>


<form action="/blog/{{$apa->id}}" method="post">
    <input name="title"  type="text" value="{{$apa->title}}"> <br>
    <textarea name="description" cols="30" rows="10">{{$apa->description}}</textarea> <br>
    <input name="REV_RWA_FY14"  type="text" value="{{$apa->REV_RWA_FY14}}"> <br>

    <input type="submit" name="submit" value="edit">
     {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
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