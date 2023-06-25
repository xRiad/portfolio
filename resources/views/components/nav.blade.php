<nav id="nav">
    <ul class="links">
        <li class="active"><a href="{{ route('home') }}">Ana sahife</a></li>
        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
        <li><a href="{{ route('blog') }}">Block</a></li>
    </ul>
    <ul class="icons">
        <li><a href="{{ $contactInfo->twitter }}" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="{{ $contactInfo->github }}" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
    </ul>
</nav>