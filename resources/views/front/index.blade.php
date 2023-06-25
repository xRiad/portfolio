@extends('front.layouts.app')

@section('title', 'Generic Page - Massively by HTML5 UP')
@section('links')
<link rel="stylesheet" href="assets/css/main.css" />        
@endsection

<!-- Main -->
@section('content')
    <section class="post">
        <header class="major">
            <span class="date">April 25, 2017</span>
            <h1>{{$aboutMe->name}}</h1>
            <p>{{$aboutMe->short_desc}}</p>
        </header>
        <div class="image main"><img src="{{ $aboutMe->img }}" alt="" /></div>
        {!! $aboutMe->desc !!}
    </section>
@endsection
