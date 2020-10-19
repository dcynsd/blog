<nav aria-label="navigation">
    <span class="pagination" id="pagination">
        @if(!$model->onFirstPage())
            <a class="extend next" rel="next"
               href="{{ $model->fragment('board')->previousPageUrl() }}">
                <i class="iconfont icon-arrowleft"></i>
            </a>
        @endif
        @php
            $isHiddenExist = 0
        @endphp
        @if($model->hasPages())
            @for($i = 1; $i <= $model->lastPage(); $i++)
                @if($model->currentPage() === $i)
                    <span class="page-number current">{{ $i }}</span>
                @else
                    @if ($i < 4 || $i < ($model->currentPage() + 3) && $i > ($model->currentPage() - 3) || $i > ($model->lastPage() / 2 - 2) && $i < ($model->lastPage() / 2 + 2) || $i > ($model->lastPage() - 3))
                        <a class="page-number"
                           href="{{ $model->fragment('board')->url($i) }}">{{ $i }}</a>
                        @php
                            $isHiddenExist = 0
                        @endphp
                    @else
                        @if($isHiddenExist === 0)
                            ...
                            @php
                                $isHiddenExist = 1;
                            @endphp
                        @endif
                    @endif
                @endif
            @endfor
        @endif
        @if ($model->hasMorePages())
            <a class="extend next" rel="next"
               href="{{ $model->fragment('board')->nextPageUrl() }}">
                <i class="iconfont icon-arrowright"></i>
            </a>
        @endif
    </span>
</nav>
