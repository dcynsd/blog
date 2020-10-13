<header style="height: {{ get_page_param('vh') }};">
    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">&nbsp;<strong>{{ config('app.name') }}</strong>&nbsp;</a>

            <button id="navbar-toggler-btn" class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <div class="animated-icon"><span></span><span></span><span></span></div>
            </button>

            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="iconfont icon-home-fill"></i>
                            首页
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/archives">
                            <i class="iconfont icon-archive-fill"></i>
                            归档
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">
                            <i class="iconfont icon-category-fill"></i>
                            分类
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tags">
                            <i class="iconfont icon-tags-fill"></i>
                            标签
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">
                            <i class="iconfont icon-user-fill"></i>
                            关于
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/links">
                            <i class="iconfont icon-link-fill"></i>
                            友链
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="https://hexo.fluid-dev.com/#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="iconfont icon-books"></i>
                            文档
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://hexo.fluid-dev.com/docs/guide/" target="_blank"
                               rel="noopener external nofollow noreferrer">
                                配置指南
                            </a>
                            <a class="dropdown-item" href="https://hexo.fluid-dev.com/docs/example/" target="_blank"
                               rel="noopener external nofollow noreferrer">
                                操作示例
                            </a>
                            <a class="dropdown-item" href="https://hexo.fluid-dev.com/docs/icon/" target="_blank"
                               rel="noopener external nofollow noreferrer">
                                图标用法
                            </a>
                        </div>
                    </li>
                    <li class="nav-item" id="search-btn">
                        <a class="nav-link" data-toggle="modal" data-target="#modalSearch">&nbsp;
                            <i class="iconfont icon-search"></i>&nbsp;
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="banner intro-2" id="background" parallax="true"
         style="background: url({{ get_page_param('image') }}) center center / cover no-repeat; transform: translate3d(0px, 0px, 0px);">
        <div class="full-bg-img">
            <div class="mask flex-center" style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="container page-header text-center fade-in-up">
                    <span class="h2" id="subtitle"></span>
                    <span class="typed-cursor h2 typed-cursor--blink"></span>
                    <div class="mt-3">
                        <span class="post-meta mr-2">
                            <i class="iconfont icon-author" aria-hidden="true"></i>
                            pxxyyz
                        </span>
                        <span class="post-meta">
                            <i class="iconfont icon-date-fill" aria-hidden="true"></i>
                            <time datetime="2020-05-28 14:30" pubdate="">
                                2020年5月28日 下午
                            </time>
                        </span>
                    </div>
                    <div class="mt-1">
                        <span class="post-meta mr-2">
                            <i class="iconfont icon-chart"></i>
                            4k 字
                        </span>
                        <span class="post-meta mr-2">
                            <i class="iconfont icon-clock-fill"></i>
                            57
                            分钟
                        </span>
                        <!-- LeanCloud 统计文章PV -->
                        <span id="leancloud-post-views-container" class="post-meta" style="display: inline;">
                            <i class="iconfont icon-eye" aria-hidden="true"></i>
                            <span id="leancloud-post-views">714</span> 次
                        </span>
                    </div>
                </div>
                @if(get_page_param('is_scroll_down_bar'))
                    <div class="scroll-down-bar">
                        <i class="iconfont icon-arrowdown"></i>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>
