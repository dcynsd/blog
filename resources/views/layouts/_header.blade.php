<header style="height: {{ (current_navigation($navigations, $currentPost))['height'] }};">
    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">&nbsp;<strong>{{ config('app.name') }}</strong>&nbsp;</a>

            <button id="navbar-toggler-btn" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                <div class="animated-icon"><span></span><span></span><span></span></div>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center">
                    @foreach($navigations as $navigation)
                        @if(!$navigation['children'])
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $navigation['url'] }}">
                                    <i class="iconfont {{ $navigation['icon'] }}"></i>
                                    {{ $navigation['name'] }}
                                </a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ $navigation['url'] }}" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="iconfont {{ $navigation['icon'] }}"></i>
                                    {{ $navigation['name'] }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($navigation['children'] as $item)
                                        <a class="dropdown-item" href="{{ $item['url'] }}" target="_blank"
                                           rel="noopener external nofollow noreferrer">
                                            {{ $item['name'] }}
                                        </a>
                                    @endforeach
                                </div>
                            </li>
                        @endif
                    @endforeach
                    <li class="nav-item" id="search-btn">
                        <a class="nav-link" data-toggle="modal" data-target="#modalSearch">&nbsp;
                            <i class="iconfont icon-search"></i>&nbsp;
                        </a>
                    </li>
                        <li class="nav-item" id="color-toggle-btn">
                            <a class="nav-link" href="javascript:" rel="external nofollow noreferrer" data-pjax-state="external">&nbsp;<i class="iconfont icon-light" id="color-toggle-icon" data="light"></i>&nbsp;</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="banner intro-2" id="background" parallax="true"
         style="background: url({{ (current_navigation($navigations, $currentPost))['image'] }}) center center / cover no-repeat; transform: translate3d(0px, 0px, 0px);">
        <div class="full-bg-img">
            <div class="mask flex-center" style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="container page-header text-center fade-in-up">
                    <span class="h2" id="subtitle"> </span>
                    <span class="typed-cursor h2 typed-cursor--blink"></span>
                    @if($currentPost)
                        <div class="mt-3">
                            <span class="post-meta mr-2 hint--left hint--rounded" aria-label="作者">
                                <i class="iconfont icon-author" aria-hidden="true"></i>
                                {{ $currentPost->author }}
                            </span>
                            <span class="post-meta hint--top hint--right" aria-label="发布时间">
                                <i class="iconfont icon-date-fill" aria-hidden="true"></i>
                                <time datetime="{{ $currentPost->created_at }}">
                                    {{ $currentPost->created_at }}
                                </time>
                            </span>
                        </div>
                        <div class="mt-1">
                            <span class="post-meta mr-2 hint--bottom hint--rounded" aria-label="文章字数">
                                <i class="iconfont icon-chart"></i>
                                {{ $currentPost->word_count }} 字
                            </span>
                            <span class="post-meta mr-2 hint--bottom hint--rounded" aria-label="阅读时间">
                                <i class="iconfont icon-clock-fill"></i>
                                {{ $currentPost->read_speed }}
                                分钟
                            </span>
                            <span class="hint--bottom hint--rounded" aria-label="阅读次数">
                                <i class="iconfont icon-eye" aria-hidden="true"></i>
                                <span id="leancloud-post-views" >{{ $currentPost->view_count }}</span> 次
                            </span>
                        </div>
                    @endif
                </div>
                @if((current_navigation($navigations))['is_scroll_down_bar'])
                    <div class="scroll-down-bar">
                        <i class="iconfont icon-arrowdown"></i>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>

@section('HeadScript')
    <script>
        /* 打字机 start */
        const typed = new Typed('#subtitle', {
            strings: [
                '  ',
                `{{ (current_navigation($navigations, $currentPost, $currentModel))['sub_title'] }}&nbsp;`,
            ],
            cursorChar: "_",
            typeSpeed: 80,
            loop: false,
        });
        typed.stop();
        $(document).ready(function () {
            $(".typed-cursor").addClass("h2");
            typed.start();
        });
    </script>
@endsection
