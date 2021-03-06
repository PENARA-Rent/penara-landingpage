@if ($paginator->hasPages())
    <div class="pagination-box-row">       
        
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                
            @else
                <li><a href="{{ $paginator->url(1) }}"><i class="fa fa-angle-double-left"></i></a></li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="#">{{ $page }}</a></li>                            
                        @else                        
                            <li><a href="{{ $url }}">{{ $page }}</a></li>                            
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>                    
                    <a href="{{ $paginator->url($paginator->lastPage()) }}" rel="next" aria-label="@lang('pagination.next')"><i class="fa fa-angle-double-right"></i></a>
                </li>
            @else
                
            @endif
        </ul>
    </div>
@endif
