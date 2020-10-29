@extends('layouts.app')
@section('title', $post->slug)
@section('description', $post->excerpt)
@section('Style')
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.3.1/build/styles/github-gist.min.css">
    <link href="https://cdn.bootcdn.net/ajax/libs/tocbot/4.9.1/tocbot.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/fluidbox/2.0.5/css/fluidbox.min.css" rel="stylesheet">
    <style>
        .toc-content ol {
            list-style-type: none;
        }

        .tocbot-list {
            padding-left: 10px;
        }

        pre {
            position: relative;
        }

        pre:hover .hljs-button {
            display: block
        }

        .hljs-button {
            display: none;
            position: absolute;
            right: 4px;
            top: 4px;
            font-size: 12px;
            color: #4d4d4d;
            background-color: white;
            padding: 2px 8px;
            margin: 8px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05), 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .hljs-button:after {
            content: attr(data-title)
        }

        .fluidbox__wrap {
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
@endsection

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
                                <h1 style="display: none">{{ $post->excerpt }}</h1>

                                <div class="markdown-body" id="post-body">
                                    @if($post->original_url)
                                    <div class="note note-success">
                                        <p>本文版权归原作者所有，如有侵权，请联系我删除。</p>
                                        <p>本文作者：{{ $post->author }}</p>
                                        <p>原文地址：<a target="_blank" rel="noopener external nofollow noreferrer" href="{{ $post->original_url }}">{{ $post->original_url }}</a></p>
                                    </div>
                                    @endif

                                    {!! $post->html_post !!}
                                </div>

                                <hr>
                                <div>
                                    <div class="post-metas mb-3">
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-category"></i>
                                            <a class="hover-with-bg"
                                               href="{{ $post->category->link() }}">{{ $post->category->name }}</a>
                                        </div>
                                        @if ($post->tags->count())
                                            <div class="post-meta">
                                                <i class="iconfont icon-tags"></i>
                                                @foreach($post->tags as $tag)
                                                    <a class="hover-with-bg" href="{{ $tag->link() }}">{{ $tag->name }}</a>
                                                @endforeach
                                            </div>
                                        @endif
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

                <div class="d-none d-lg-block col-lg-2 toc-container" id="toc-ctn" style="padding-top: 0;">
                    <div id="toc" style="visibility: visible;">
                        <p class="toc-header"><i class="iconfont icon-list"></i>&nbsp;目录</p>
                        <div class="toc-content">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Custom -->
    </main>
@stop

@section('Script')
    <script src="https://cdn.bootcdn.net/ajax/libs/tocbot/4.9.1/tocbot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@10.3.1/build/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script src="https://cdn.bootcdn.net/ajax/libs/fluidbox/2.0.5/js/jquery.fluidbox.min.js"></script>

    <script type="text/javascript">
        $(function () {
            // 图片预览
            $('img').each(function () {
                let src = $(this).attr('src')
                $(this).replaceWith(function(){
                    let html = '<a class="lightbox-img" href="'+src+'" rel="lightbox">\n' +
                        '                <img src="'+src+'" alt=""/>\n' +
                        '                </a>'

                    return $(html, {html: html});
                });

            })
            $('a[rel="lightbox"]').fluidbox();
        })

        $(document).ready(function () {
            let headerSelector = "h1,h2,h3,h4"
            let idArr = {};
            // 文章内标题头增加ID属性
            $("#post-body").children(headerSelector).each(function () {
                let headerId = $(this).text().replace(/[\s|\~|`|\!|\@|\#|\$|\%|\^|\&|\*|\(|\)|\_|\+|\=|\||\|\[|\]|\{|\}|\;|\:|\"|\'|\,|\<|\.|\>|\/|\?|\：|\，|\。]/g, '');
                headerId = headerId.toLowerCase();
                if (idArr[headerId]) {
                    $(this).attr('id', headerId + '-' + idArr[headerId]);
                    idArr[headerId]++;
                } else {
                    idArr[headerId] = 1;
                    $(this).attr('id', headerId);
                }
            });
            if (Object.keys(idArr).length === 0) {
                $('#toc').hide()
            }

            // 文章内 a 标签全部替换成新页面打开
            $('#post-body a').each(function () {
                $(this).attr('target', '_blank')
            })

            // tocbot 文章目录初始化
            tocbot.init({
                tocSelector: '.toc-content',
                contentSelector: '#post-body',
                headingSelector: headerSelector,
                hasInnerContainers: true,
                linkClass: 'tocbot-link',
                activeLinkClass: 'tocbot-active-link',
                listClass: 'tocbot-list',
                isCollapsedClass: 'tocbot-is-collapsed',
                collapsibleClass: 'tocbot-is-collapsible',
                listItemClass: 'toc-list-item',
            });
        });
    </script>
@endsection
