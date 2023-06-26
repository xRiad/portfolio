@extends('front.layouts.app')

@section('title', 'Generic Page - Massively by HTML5 UP')
@section('links')
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />        
@endsection

<!-- Main -->
@section('content')
    <section class="post">
        <header class="major">
            <h1>{{$blog->title}}</h1>
        </header>
        <div class="image main"><img src="{{ asset($blog->image) }}" alt="" /></div>
        {{ $blog->desc }}
    </section>
@endsection
