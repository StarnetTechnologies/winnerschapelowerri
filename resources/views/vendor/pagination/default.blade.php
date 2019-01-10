@if ($paginator->hasPages())

    <div class="btn-group mr-2" role="group" aria-label="First group">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a type="button" class="btn btn-secondary disabled"><span>&laquo;</span></a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" type="button" class="btn btn-secondary">&laquo;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <button type="button" class="btn btn-secondary disabled"><span>{{ $element }}</span></button>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button type="button" class="btn btn-secondary active"><span>{{ $page }}</span></button>
                    @else
                        <a href="{{ $url }}" type="button" class="btn btn-secondary">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" type="button" rel="next" class="btn btn-secondary">&raquo;</a>
        @else
            <button type="button" class="btn btn-secondary disabled"><span>&raquo;</span></button>
        @endif
    </div>
@endif
