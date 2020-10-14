@extends('layouts.app')
@section('title', '首页')

@section('content')
    <main>
        <div class="container nopadding-md">
            <div class="py-5" id="board" style="margin-top:0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 m-auto">
                            @foreach($posts as $post)
                                <div class="row mx-auto index-card">
                                    <div class="col-12 col-md-4 m-auto index-img">
                                        <a href="{{ $post->link() }}" target="_self">
                                            <img src="{{ $post->image }}"
                                                 srcset="{{ $post->image }}"
                                                 alt="{{ $post->title }}">
                                        </a>
                                    </div>

                                    <article class="col-12 col-md-8 mx-auto index-info">
                                        <h1 class="index-header">
                                            <a href="{{ $post->link() }}">{{ $post->title }}</a>
                                        </h1>
                                        <p class="index-excerpt">
                                            <a href="{{ $post->link() }}">
                                                {{ $post->sub_title }}
                                            </a>
                                        </p>

                                        <div class="index-btm post-metas">
                                            <div class="post-meta mr-3">
                                                <i class="iconfont icon-date"></i>
                                                <time datetime="{{ $post->created_at->toDateTimeString() }}">
                                                    {{ $post->created_at->toDateString() }}
                                                </time>
                                            </div>
                                            <div class="post-meta mr-3">
                                                <i class="iconfont icon-category"></i>
                                                <a href="{{ $post->link() }}">
                                                    {{ $post->category->name }}
                                                </a>
                                            </div>
                                            <div class="post-meta">
                                                <i class="iconfont icon-tags"></i>
                                                @foreach($post->tags as $tag)
                                                    <a href="#">{{ $tag->name }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                            <nav aria-label="navigation">
                                <span class="pagination" id="pagination">
                                    @if(!$posts->onFirstPage())
                                        <a class="extend next" rel="next"
                                           href="{{ $posts->fragment('board')->previousPageUrl() }}">
                                            <i class="iconfont icon-arrowleft"></i>
                                        </a>
                                    @endif
                                    @php
                                        $isHiddenExist = 0
                                    @endphp
                                    @for($i = 1; $i <= $posts->lastPage(); $i++)
                                        @if($posts->currentPage() === $i)
                                            <span class="page-number current">{{ $i }}</span>
                                        @else
                                            @if ($i < 4 || $i < ($posts->currentPage() + 3) && $i > ($posts->currentPage() - 3) || $i > ($posts->lastPage() / 2 - 2) && $i < ($posts->lastPage() / 2 + 2) || $i > ($posts->lastPage() - 3))
                                                <a class="page-number"
                                                   href="{{ $posts->fragment('board')->url($i) }}">{{ $i }}</a>
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
                                    @if ($posts->hasMorePages())
                                        <a class="extend next" rel="next"
                                           href="{{ $posts->fragment('board')->nextPageUrl() }}">
                                            <i class="iconfont icon-arrowright"></i>
                                        </a>
                                    @endif
                                </span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
