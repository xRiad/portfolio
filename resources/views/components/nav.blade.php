<nav id="nav">
    <ul class="links">
        <li class="{{ Request::routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ Request::routeIs('portfolio.index') ? 'active' : '' }}"><a href="{{ route('portfolio.index') }}">Portfolio</a></li>
        {{-- <li><a href="{{ route('blog') }}">Blog</a></li> --}}
    </ul>
    <ul class="icons">
        <li><a href="{{ $contactInfo->twitter }}" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="{{ $contactInfo->github }}" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
    </ul>
</nav>