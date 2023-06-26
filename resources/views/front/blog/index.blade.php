@extends('front.layouts.app')

@section('title', 'Blog')

@section('links')
<link rel="stylesheet" href="assets/css/main.css" />
@endsection

<!-- Wrapper -->
@section('wrapper-class', 'fade-in')

<!-- Intro -->
@section('intro')            
<div id="intro">
<h1>{!! $intro->title !!}</h1>
<ul class="actions">
<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
</ul>
</div>
@endsection

<!-- Main -->
@section('content')

<!-- Featured Post -->
<article class="post featured">
  <header class="major">
    <h2><a href="#">{!! $blogHead->title !!}</a></h2>
  </header>
  <a href="#" class="image main"><img src="{{ asset('./assets/images/pic01.jpg') }}" alt="" /></a>

</article>

<!-- Posts -->
<section class="posts">
  @foreach ($blogs as $blog)
   
  <article>
    <header>
      <h2><a href="{{ route('blog', $blog->id) }}">{!! $blog->title !!}</a></h2>
    </header>
    <a href="#" class="image fit"><img src="{{ asset($blog->image) }}" alt="" /></a>
    <ul class="actions special">
      <li><a href="{{ route('blog', $blog->id) }}" class="button">Full Story</a></li>
    </ul>
  </article>
  @endforeach

</section>
@endsection

@section('pagination') 
<!-- Footer -->
<footer>
  <div class="pagination">
    {{ $blogs->links('vendor.pagination.custom') }}
  </div>
</footer>
@endsection
