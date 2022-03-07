@if ($paginator->hasPages())
<div class="row pt--30">
    <div class="col-md-12">
        
        <div class="pagination-block">
            <ul class="pagination-btns flex-center">
                @if (!$paginator->onFirstPage())
                    <li><a class="single-btn prev-btn " href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="zmdi zmdi-chevron-left"></i></a></li>
                @endif

                @foreach ($elements as $element)
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                            <li class="active">
                                <a href="{{ $url }}" class="single-btn">{{ $page }}</a>
                            </li>
                            @else
                            <li class="">
                                <a href="{{ $url }}" class="single-btn">{{ $page }}</a>
                            </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                <li>
                    <a href="<?= $paginator->nextPageUrl();?>" class="single-btn next-btn"><i class="zmdi zmdi-chevron-right"></i></a>
                </li>
                @endif

            </ul>
        </div>
    </div>
</div>
@endif