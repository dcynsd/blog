@extends('layouts.app')
@section('title', '关于')

@section('content')
    <main>
        <div class="container nopadding-md">
            <div class="py-5" id="board">

                <div class="about-avatar">
                    <img src="{{ asset('storage/images/avatar.png') }}"
                         srcset="{{ asset('storage/images/avatar.png') }}" class="img-fluid" alt="avatar">
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 m-auto">
                            <div class="text-center">
                                <div class="about-info">
                                    <div class="about-name">Dcynsd</div>
                                    <div class="about-intro">1997 / 双鱼 / 后端开发</div>
                                    <div class="about-icons">
                                        <a href="https://github.com/dcynsd" class="hint--bottom hint--rounded" aria-label="GitHub" target="_blank">
                                            <i class="iconfont icon-github-fill" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="hint--bottom hint--rounded" aria-label="主题文档">
                                            <i class="iconfont icon-wechat-fill" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 markdown-body">
                                <p>
                                    2017年入坑程序员这个行业，至今沉迷其中，不能自拔
                                </p>
                                <p>
                                    主要使用 PHP 语言，配合 Laravel Vue 等框架进行开发
                                </p>
                                <p>
                                    …
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@stop
