@extends('layouts.master')


@section('title', 'Blog Saya')

@section('content')
<h1>Selamat datang di Blog Kami<h1>
    <h2> {{ $apa->title }} !! </h2>
    <hr>
     <p>
         {{ $apa->description }}
     </p>
     <p>
        {{ $apa->REV_RWA_FY14 }}
    </p>
    

@endsection

{{-- @foreach($user as $userx) 
    <li> {{$userx->username . ' '. $userx->password}} </li>
    @endforeach

    @if(count($user) > 3)
    <p>user lebih dari 5 </p>
    @else
    <p> user kurang dari 5</p>
    @endif --}}