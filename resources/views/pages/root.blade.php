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
                                            <img src="{{ $post->full_image }}"
                                                 srcset="{{ $post->full_image }}"
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
                                                <a href="{{ $post->category->link() }}">
                                                    {{ $post->category->name }}
                                                </a>
                                            </div>
                                            @if ($post->tags->count())
                                                <div class="post-meta">
                                                    <i class="iconfont icon-tags"></i>
                                                    @foreach($post->tags as $tag)
                                                        <a href="{{ $tag->link() }}">{{ $tag->name }}</a>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                    </article>
                                </div>
                            @endforeach

                            @include('layouts._pagination', ['model' => $posts])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
