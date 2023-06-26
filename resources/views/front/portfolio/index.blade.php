@extends('front.layouts.app')

@section('title', 'Portfolio')

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
    <h2><a href="#">{!! $portfolioHead->title !!}</a></h2>
  </header>
  <a href="#" class="image main"><img src="{{ asset('./assets/images/pic01.jpg') }}" alt="" /></a>

</article>

<!-- Posts -->
<section class="posts">
  @foreach ($projects as $project)
   
  <article>
    <header>
      {{-- <span class="date">April 24, 2017</span> --}}
      <h2><a href="#">{!! $project->title !!}</a></h2>
    </header>
    <a href="#" class="image fit"><img src="{{ asset($project->image) }}" alt="" /></a>
    <ul class="actions special">
      <li><a href="{{ route('project', $project->id) }}" class="button">Full Story</a></li>
    </ul>
  </article>
  @endforeach

</section>
@endsection

@section('pagination') 
<!-- Footer -->
<footer>
  <div class="pagination">
    {{ $projects->links('vendor.pagination.custom') }}
  </div>
</footer>
@endsection

{{-- @section('pagination') 
<!-- Footer -->
<footer>
  <div class="pagination">
    <!--<a href="#" class="previous">Prev</a>-->
    <a href="#" class="page active">1</a>
    <a href="#" class="page">2</a>
    <a href="#" class="page">3</a>
    <span class="extra">&hellip;</span>
    <a href="#" class="page">8</a>
    <a href="#" class="page">9</a>
    <a href="#" class="page">10</a>
    <a href="#" class="next">Next</a>
  </div>
  {{ $projects->links() }}
</footer>

@endsection --}}