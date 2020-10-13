@extends('layouts.app')
@section('title', '首页')

@section('content')
    <main>
        <div class="container nopadding-md">
            <div class="py-5" id="board" style="margin-top:0">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 m-auto">
                            <div class="row mx-auto index-card">
                                <div class="col-12 col-md-4 m-auto index-img">
                                    <a href="/posts/1" target="_self">
                                        <img src="./main_files/cover.png"
                                             srcset="https://rmt.dogedoge.com/fetch/fluid/storage/hexo-echarts/cover.png?w=480&amp;fmt=webp"
                                             alt="使用 ECharts 插件绘制炫酷图表">
                                    </a>
                                </div>

                                <article class="col-12 col-md-8 mx-auto index-info">
                                    <h1 class="index-header">
                                        <a href="https://hexo.fluid-dev.com/posts/hexo-echarts/">使用 ECharts 插件绘制炫酷图表</a>
                                    </h1>
                                    <p class="index-excerpt">
                                        <a href="https://hexo.fluid-dev.com/posts/hexo-echarts/">
                                            ECharts 是一个使用 JavaScript 实现的开源可视化库，涵盖各行业图表，满足各种需求，本文介绍如何在 Hexo 博客中使用 ECharts
                                            插件。
                                        </a>
                                    </p>

                                    <div class="index-btm post-metas">
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-date"></i>
                                            <time datetime="2020-06-20 23:00" pubdate="">
                                                2020-06-20
                                            </time>
                                        </div>
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-category"></i>
                                            <a href="https://hexo.fluid-dev.com/categories/%E5%8A%9F%E8%83%BD%E5%A2%9E%E5%BC%BA/">功能增强</a>
                                        </div>
                                        <div class="post-meta">
                                            <i class="iconfont icon-tags"></i>
                                            <a href="https://hexo.fluid-dev.com/tags/Hexo/">Hexo</a>
                                            <a href="https://hexo.fluid-dev.com/tags/%E7%94%A8%E6%88%B7%E7%BB%8F%E9%AA%8C/">用户经验</a>
                                            <a href="https://hexo.fluid-dev.com/tags/%E8%8A%B1%E9%87%8C%E8%83%A1%E5%93%A8/">花里胡哨</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="row mx-auto index-card">
                                <div class="col-12 col-md-4 m-auto index-img">
                                    <a href="https://hexo.fluid-dev.com/posts/hexo-nodeppt/" target="_self">
                                        <img src="./main_files/cover(1).png"
                                             srcset="https://rmt.dogedoge.com/fetch/fluid/storage/hexo-nodeppt/cover.png?w=480&amp;fmt=webp"
                                             alt="给博客文章嵌入 PPT 演示">
                                    </a>
                                </div>
                                <article class="col-12 col-md-8 mx-auto index-info">
                                    <h1 class="index-header">
                                        <a href="https://hexo.fluid-dev.com/posts/hexo-nodeppt/">给博客文章嵌入 PPT 演示</a>
                                    </h1>
                                    <p class="index-excerpt">
                                        <a href="https://hexo.fluid-dev.com/posts/hexo-nodeppt/">
                                            在 Hexo 博客使用 NodePPT 插件实现演示功能
                                        </a>
                                    </p>
                                    <div class="index-btm post-metas">
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-date"></i>
                                            <time datetime="2020-06-09 12:30" pubdate="">
                                                2020-06-09
                                            </time>
                                        </div>
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-category"></i>
                                            <a href="https://hexo.fluid-dev.com/categories/%E5%8A%9F%E8%83%BD%E5%A2%9E%E5%BC%BA/">功能增强</a>
                                        </div>
                                        <div class="post-meta">
                                            <i class="iconfont icon-tags"></i>
                                            <a href="https://hexo.fluid-dev.com/tags/Hexo/">Hexo</a>
                                            <a href="https://hexo.fluid-dev.com/tags/%E7%94%A8%E6%88%B7%E7%BB%8F%E9%AA%8C/">用户经验</a>
                                            <a href="https://hexo.fluid-dev.com/tags/%E8%8A%B1%E9%87%8C%E8%83%A1%E5%93%A8/">花里胡哨</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="row mx-auto index-card">
                                <div class="col-12 col-md-4 m-auto index-img">
                                    <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/" target="_self">
                                        <img src="./main_files/cover(2).png"
                                             srcset="https://rmt.dogedoge.com/fetch/fluid/storage/fluid-hitokoto/cover.png?w=480&amp;fmt=webp"
                                             alt="在 Fluid 主题首页上加入一言">
                                    </a>
                                </div>
                                <article class="col-12 col-md-8 mx-auto index-info">
                                    <h1 class="index-header">
                                        <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">在 Fluid 主题首页上加入一言</a>
                                    </h1>
                                    <p class="index-excerpt">
                                        <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">
                                            介绍如何改造在首页 Slogan 上显示一言(hitokoto)
                                        </a>
                                    </p>
                                    <div class="index-btm post-metas">
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-date"></i>
                                            <time datetime="2020-06-03 23:30" pubdate="">
                                                2020-06-03
                                            </time>
                                        </div>
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-category"></i>
                                            <a href="https://hexo.fluid-dev.com/categories/%E5%8A%9F%E8%83%BD%E5%A2%9E%E5%BC%BA/">功能增强</a>
                                        </div>
                                        <div class="post-meta">
                                            <i class="iconfont icon-tags"></i>
                                            <a href="https://hexo.fluid-dev.com/tags/%E7%94%A8%E6%88%B7%E7%BB%8F%E9%AA%8C/">用户经验</a>
                                            <a href="https://hexo.fluid-dev.com/tags/%E8%8A%B1%E9%87%8C%E8%83%A1%E5%93%A8/">花里胡哨</a>
                                            <a href="https://hexo.fluid-dev.com/tags/Fluid/">Fluid</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="row mx-auto index-card">
                                <div class="col-12 col-md-4 m-auto index-img">
                                    <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/" target="_self">
                                        <img src="./main_files/cover(2).png"
                                             srcset="https://rmt.dogedoge.com/fetch/fluid/storage/fluid-hitokoto/cover.png?w=480&amp;fmt=webp"
                                             alt="在 Fluid 主题首页上加入一言">
                                    </a>
                                </div>
                                <article class="col-12 col-md-8 mx-auto index-info">
                                    <h1 class="index-header">
                                        <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">在 Fluid 主题首页上加入一言</a>
                                    </h1>
                                    <p class="index-excerpt">
                                        <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">
                                            介绍如何改造在首页 Slogan 上显示一言(hitokoto)
                                        </a>
                                    </p>
                                    <div class="index-btm post-metas">
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-date"></i>
                                            <time datetime="2020-06-03 23:30" pubdate="">
                                                2020-06-03
                                            </time>
                                        </div>
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-category"></i>
                                            <a href="https://hexo.fluid-dev.com/categories/%E5%8A%9F%E8%83%BD%E5%A2%9E%E5%BC%BA/">功能增强</a>
                                        </div>
                                        <div class="post-meta">
                                            <i class="iconfont icon-tags"></i>
                                            <a href="https://hexo.fluid-dev.com/tags/%E7%94%A8%E6%88%B7%E7%BB%8F%E9%AA%8C/">用户经验</a>
                                            <a href="https://hexo.fluid-dev.com/tags/%E8%8A%B1%E9%87%8C%E8%83%A1%E5%93%A8/">花里胡哨</a>
                                            <a href="https://hexo.fluid-dev.com/tags/Fluid/">Fluid</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="row mx-auto index-card">
                                <div class="col-12 col-md-4 m-auto index-img">
                                    <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/" target="_self">
                                        <img src="./main_files/cover(2).png"
                                             srcset="https://rmt.dogedoge.com/fetch/fluid/storage/fluid-hitokoto/cover.png?w=480&amp;fmt=webp"
                                             alt="在 Fluid 主题首页上加入一言">
                                    </a>
                                </div>
                                <article class="col-12 col-md-8 mx-auto index-info">
                                    <h1 class="index-header">
                                        <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">在 Fluid 主题首页上加入一言</a>
                                    </h1>
                                    <p class="index-excerpt">
                                        <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">
                                            介绍如何改造在首页 Slogan 上显示一言(hitokoto)
                                        </a>
                                    </p>
                                    <div class="index-btm post-metas">
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-date"></i>
                                            <time datetime="2020-06-03 23:30" pubdate="">
                                                2020-06-03
                                            </time>
                                        </div>
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-category"></i>
                                            <a href="https://hexo.fluid-dev.com/categories/%E5%8A%9F%E8%83%BD%E5%A2%9E%E5%BC%BA/">功能增强</a>
                                        </div>
                                        <div class="post-meta">
                                            <i class="iconfont icon-tags"></i>
                                            <a href="https://hexo.fluid-dev.com/tags/%E7%94%A8%E6%88%B7%E7%BB%8F%E9%AA%8C/">用户经验</a>
                                            <a href="https://hexo.fluid-dev.com/tags/%E8%8A%B1%E9%87%8C%E8%83%A1%E5%93%A8/">花里胡哨</a>
                                            <a href="https://hexo.fluid-dev.com/tags/Fluid/">Fluid</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="row mx-auto index-card">
                                <div class="col-12 col-md-4 m-auto index-img">
                                    <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/" target="_self">
                                        <img src="./main_files/cover(2).png"
                                             srcset="https://rmt.dogedoge.com/fetch/fluid/storage/fluid-hitokoto/cover.png?w=480&amp;fmt=webp"
                                             alt="在 Fluid 主题首页上加入一言">
                                    </a>
                                </div>
                                <article class="col-12 col-md-8 mx-auto index-info">
                                    <h1 class="index-header">
                                        <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">在 Fluid 主题首页上加入一言</a>
                                    </h1>
                                    <p class="index-excerpt">
                                        <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">
                                            介绍如何改造在首页 Slogan 上显示一言(hitokoto)
                                        </a>
                                    </p>
                                    <div class="index-btm post-metas">
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-date"></i>
                                            <time datetime="2020-06-03 23:30" pubdate="">
                                                2020-06-03
                                            </time>
                                        </div>
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-category"></i>
                                            <a href="https://hexo.fluid-dev.com/categories/%E5%8A%9F%E8%83%BD%E5%A2%9E%E5%BC%BA/">功能增强</a>
                                        </div>
                                        <div class="post-meta">
                                            <i class="iconfont icon-tags"></i>
                                            <a href="https://hexo.fluid-dev.com/tags/%E7%94%A8%E6%88%B7%E7%BB%8F%E9%AA%8C/">用户经验</a>
                                            <a href="https://hexo.fluid-dev.com/tags/%E8%8A%B1%E9%87%8C%E8%83%A1%E5%93%A8/">花里胡哨</a>
                                            <a href="https://hexo.fluid-dev.com/tags/Fluid/">Fluid</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="row mx-auto index-card">
                                <div class="col-12 col-md-4 m-auto index-img">
                                    <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/" target="_self">
                                        <img src="./main_files/cover(2).png"
                                             srcset="https://rmt.dogedoge.com/fetch/fluid/storage/fluid-hitokoto/cover.png?w=480&amp;fmt=webp"
                                             alt="在 Fluid 主题首页上加入一言">
                                    </a>
                                </div>
                                <article class="col-12 col-md-8 mx-auto index-info">
                                    <h1 class="index-header">
                                        <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">在 Fluid 主题首页上加入一言</a>
                                    </h1>
                                    <p class="index-excerpt">
                                        <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/">
                                            介绍如何改造在首页 Slogan 上显示一言(hitokoto)
                                        </a>
                                    </p>
                                    <div class="index-btm post-metas">
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-date"></i>
                                            <time datetime="2020-06-03 23:30" pubdate="">
                                                2020-06-03
                                            </time>
                                        </div>
                                        <div class="post-meta mr-3">
                                            <i class="iconfont icon-category"></i>
                                            <a href="https://hexo.fluid-dev.com/categories/%E5%8A%9F%E8%83%BD%E5%A2%9E%E5%BC%BA/">功能增强</a>
                                        </div>
                                        <div class="post-meta">
                                            <i class="iconfont icon-tags"></i>
                                            <a href="https://hexo.fluid-dev.com/tags/%E7%94%A8%E6%88%B7%E7%BB%8F%E9%AA%8C/">用户经验</a>
                                            <a href="https://hexo.fluid-dev.com/tags/%E8%8A%B1%E9%87%8C%E8%83%A1%E5%93%A8/">花里胡哨</a>
                                            <a href="https://hexo.fluid-dev.com/tags/Fluid/">Fluid</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <nav aria-label="navigation">
                                <span class="pagination" id="pagination">
                                    <span class="page-number current">1</span>
                                    <a class="page-number" href="https://hexo.fluid-dev.com/page/2/#board">2</a>
                                    <a class="extend next" rel="next" href="https://hexo.fluid-dev.com/page/2/#board">
                                        <i class="iconfont icon-arrowright"></i>
                                    </a>
                                </span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
