@if ($paginator->hasPages())
    <div class="phpcn-page phpcn-bg-fff phpcn-pt-10 phpcn-pb-10">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a href="javascript:;" class="layui-laypage-first" title="首页">首页</a>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" >上一页</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span >{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="on" aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" >{{ $page }}</a>

                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">下一页</a>
        @else
            <a class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">尾页</span>
            </a>
        @endif
    </div>
@endif



