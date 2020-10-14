@extends('layouts.app')
@section('title', '文章详情')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="d-none d-lg-block col-lg-2"></div>
                <div class="col-lg-8 nopadding-md">
                    <div class="container nopadding-md" id="board-ctn">
                        <div class="py-5" id="board">
                            <article class="post-content mx-auto" id="post">
                                <!-- SEO header -->
                                <h1 style="display: none">Hexo 云服务备份与使用 Jupyter</h1>

                                <div class="markdown-body" id="post-body">
                                    {!! $post->content !!}
                                </div>

                                <hr>
                                <div>
                                    <div class="post-metas mb-3">
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-category"></i>
                                            <a class="hover-with-bg" href="#">{{ $post->category->name }}</a>
                                        </div>
                                        <div class="post-meta">
                                            <i class="iconfont icon-tags"></i>
                                            @foreach($post->tags as $tag)
                                                <a class="hover-with-bg" href="#">{{ $tag->name }}</a>
                                            @endforeach
                                        </div>
                                    </div>

                                    <p class="note note-warning">本博客所有文章除特别声明外，均采用 <a
                                            href="https://creativecommons.org/licenses/by-sa/4.0/deed.zh"
                                            target="_blank" rel="nofollow noopener noopener">CC BY-SA 4.0 协议</a>
                                        ，转载请注明出处！
                                    </p>

                                    <div class="post-prevnext row">
                                        <article class="post-prev col-6">
                                            @if($last)
                                                <a href="{{ $last->link() }}">
                                                    <i class="iconfont icon-arrowleft"></i>
                                                    <span class="hidden-mobile">{{ $last->title }}</span>
                                                    <span class="visible-mobile">上一篇</span>
                                                </a>
                                            @endif
                                        </article>

                                        <article class="post-next col-6">
                                            @if($next)
                                                <a href="{{ $next->link() }}">
                                                    <span class="hidden-mobile">{{ $next->title }}</span>
                                                    <span class="visible-mobile">下一篇</span>
                                                    <i class="iconfont icon-arrowright"></i>
                                                </a>
                                            @endif
                                        </article>
                                    </div>
                                </div>
                                <!-- Comments -->
                            </article>
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-block col-lg-2 toc-container" id="toc-ctn" style="padding-top: 0px;">
                    <div id="toc" style="visibility: visible;">
                        <p class="toc-header"><i class="iconfont icon-list"></i>&nbsp;目录</p>
                        <div id="tocbot">
                            <ol class="tocbot-list ">
                                <li class="toc-list-item is-active-li"><a
                                        href="https://hexo.fluid-dev.com/posts/hexo-server/#%E5%89%8D%E8%A8%80"
                                        class="tocbot-link node-name--H2  tocbot-active-link">前言</a></li>
                                <li class="toc-list-item"><a
                                        href="https://hexo.fluid-dev.com/posts/hexo-server/#%E4%BA%91%E6%9C%8D%E5%8A%A1%E5%99%A8%E5%A4%87%E4%BB%BD"
                                        class="tocbot-link node-name--H2 ">云服务器备份</a>
                                    <ol class="tocbot-list  tocbot-is-collapsible tocbot-is-collapsed">
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#%E5%85%8D%E5%AF%86git"
                                                class="tocbot-link node-name--H3 ">免密git</a></li>
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#%E8%87%AA%E5%8A%A8%E5%A4%87%E4%BB%BD"
                                                class="tocbot-link node-name--H3 ">自动备份</a></li>
                                    </ol>
                                </li>
                                <li class="toc-list-item"><a
                                        href="https://hexo.fluid-dev.com/posts/hexo-server/#%E8%AE%BF%E9%97%AEJupyter"
                                        class="tocbot-link node-name--H2 ">访问Jupyter</a>
                                    <ol class="tocbot-list  tocbot-is-collapsible tocbot-is-collapsed">
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#%E5%AE%89%E8%A3%85Jupyter"
                                                class="tocbot-link node-name--H3 ">安装Jupyter</a></li>
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#Nginx-%E9%87%8D%E5%AE%9A%E5%90%91"
                                                class="tocbot-link node-name--H3 ">Nginx 重定向</a></li>
                                    </ol>
                                </li>
                                <li class="toc-list-item"><a
                                        href="https://hexo.fluid-dev.com/posts/hexo-server/#%E8%A1%A5%E5%85%85"
                                        class="tocbot-link node-name--H2 ">补充</a>
                                    <ol class="tocbot-list  tocbot-is-collapsible tocbot-is-collapsed">
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#%E6%95%B0%E5%AD%A6%E5%85%AC%E5%BC%8F"
                                                class="tocbot-link node-name--H3 ">数学公式</a></li>
                                        <li class="toc-list-item"><a
                                                href="https://hexo.fluid-dev.com/posts/hexo-server/#%E4%B8%80%E9%94%AE%E4%B8%89%E8%BF%9E"
                                                class="tocbot-link node-name--H3 ">一键三连</a></li>
                                    </ol>
                                </li>
                                <li class="toc-list-item"><a
                                        href="https://hexo.fluid-dev.com/posts/hexo-server/#%E5%8F%82%E8%80%83"
                                        class="tocbot-link node-name--H2 ">参考</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Custom -->
    </main>
@stop
