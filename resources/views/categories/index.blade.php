@extends('layouts.app')
@section('title', '分类')

@section('content')
    <main>
        <div class="container nopadding-md">
            <div class="py-5" id="board">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 m-auto">
                            <div class="category-list">
                                @foreach($categories as $category)
                                    <div class="category row">
                                        <a class="category-item collapsed list-group-item category-item-action col-10 col-md-11"
                                           role="tab" data-toggle="collapse"
                                           href="#collapseOne-{{ $category->id }}"
                                           aria-expanded="false">
                                            {{ $category->name }}
                                            <i class="iconfont icon-arrowright"></i>
                                        </a>
                                        <a href="{{ $category->link() }}"
                                           class="category-count col-2 col-md-1">
                                            <i class="iconfont icon-articles"></i>
                                            <span>{{ $category->post_count }}</span>
                                        </a>
                                        <div class="category-collapse">
                                            <div id="collapseOne-{{ $category->id }}" class="collapse in"
                                                 role="tabpanel"
                                                 aria-labelledby="collapseOne{{ $category->id }}">
                                                @foreach($category->getLimitPosts() as $post)
                                                    <a href="{{ $post->link()}}"
                                                       class="list-group-item list-group-item-action">
                                                        <span class="category-post">{{ $post->title }}</span>
                                                    </a>
                                                @endforeach
                                                @if($category->post_count > count($category->getLimitPosts()))
                                                    <a href="{{ $category->link() }}"
                                                       class="list-group-item list-group-item-action"
                                                       style="text-align: center">
                                                        <span class="category-post" style="text-align: center">
                                                            点击查看更多
                                                            <i class="iconfont icon-arrowright"></i>
                                                        </span>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
