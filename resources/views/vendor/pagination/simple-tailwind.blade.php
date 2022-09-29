@if ($paginator->hasPages())
<nav aria-label="Page navigation example" class="mt-5">
    <ul class="pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <a class="page-link">
                {!! __('pagination.previous') !!}
            </a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link">
                {!! __('pagination.previous') !!}
            </a>
        </li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a href="{{ $paginator->nextPageUrl() }}" class="page-link">
                {!! __('pagination.next') !!}
            </a>
        </li>
        @else
        <li class="page-item disabled">
            <a class="page-link">
                {!! __('pagination.next') !!}
            </a>
        </li>
        @endif
        </ul>
    </nav>
@endif



