@if ($paginator->hasPages())

@foreach ($elements as $element)
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                              <a href="{{ $url }}" class="page active">{{ $page }}</a>
                        @else
                              <a href="{{ $url }}" class="page">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="next" rel="next" aria-label="@lang('pagination.next')">Next</a>
            @endif

            
{{-- <footer>
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
</footer> --}}
@endif











