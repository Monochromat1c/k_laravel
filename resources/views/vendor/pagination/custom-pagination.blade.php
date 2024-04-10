@if ($paginator->total() > 0)
    <div class="result-count" style="font-size: 1.8rem;">
        Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} results
    </div>
@endif

@if ($paginator->hasPages())
    <nav class="pagination">
        <ul class="pagination">
            {{-- First Page Link --}}
            <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" style="font-size: 1.5rem;" href="{{ $paginator->url(1) }}"
                    aria-label="@lang('pagination.first')">&laquo;&laquo;</a>
            </li>

            {{-- Previous Page Link --}}
            <li class="page-item {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" style="font-size: 1.5rem;" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>

            {{-- Dropdown List of Pages --}}
            <li class="page-item">
                <select class="form-select page-select" aria-label="Page Select" onchange="window.location.href = this.value;" style="font-size: 1.5rem;">
                    @for ($page = 1; $page <= $paginator->lastPage(); $page++)
                        <option style="font-size: 1.5rem;" value="{{ $paginator->url($page) }}" {{ $paginator->currentPage() == $page ? 'selected' : '' }}>
                            Page {{ $page }}
                        </option>
                    @endfor
                </select>
            </li>

            {{-- Next Page Link --}}
            <li class="page-item {{ !$paginator->hasMorePages() ? 'disabled' : '' }}">
                <a class="page-link" style="font-size: 1.5rem;" href="{{ $paginator->nextPageUrl() }}" rel="next"
                    aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>

            {{-- Last Page Link --}}
            <li class="page-item {{ !$paginator->hasMorePages() ? 'disabled' : '' }}">
                <a class="page-link" style="font-size: 1.5rem;" href="{{ $paginator->url($paginator->lastPage()) }}"
                    aria-label="@lang('pagination.last')">&raquo;&raquo;</a>
            </li>
        </ul>
    </nav>
@endif
