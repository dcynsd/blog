@extends('layouts.app')
@section('title', '归档')

@section('content')
    <main>
        <div class="container nopadding-md">
            <div class="py-5" id="board">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 m-auto">
                            <div class="list-group">
                                <p class="h4">共计 11 篇文章</p>
                                <hr>
                                <p class="h5">2020</p>
                                <a href="https://hexo.fluid-dev.com/posts/hexo-echarts/"
                                   class="list-group-item list-group-item-action">
                                    <span class="archive-post-title">使用 ECharts 插件绘制炫酷图表</span>
                                    <time style="float: right;">06-20</time>
                                </a>
                                <a href="https://hexo.fluid-dev.com/posts/hexo-nodeppt/"
                                   class="list-group-item list-group-item-action">
                                    <span class="archive-post-title">给博客文章嵌入 PPT 演示</span>
                                    <time style="float: right;">06-09</time>
                                </a>
                                <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/"
                                   class="list-group-item list-group-item-action">
                                    <span class="archive-post-title">在 Fluid 主题首页上加入一言</span>
                                    <time style="float: right;">06-03</time>
                                </a>
                                <a href="https://hexo.fluid-dev.com/posts/hexo-server/"
                                   class="list-group-item list-group-item-action">
                                    <span class="archive-post-title">Hexo 云服务备份与使用 Jupyter</span>
                                    <time style="float: right;">05-28</time>
                                </a>
                                <a href="https://hexo.fluid-dev.com/posts/hexo-static/"
                                   class="list-group-item list-group-item-action">
                                    <span class="archive-post-title">常见静态网站托管平台使用及多节点部署方案</span>
                                    <time style="float: right;">05-27</time>
                                </a>
                                <a href="https://hexo.fluid-dev.com/posts/actions-deploy/"
                                   class="list-group-item list-group-item-action">
                                    <span class="archive-post-title">利用 GitHub Actions 自动部署 Hexo 博客</span>
                                    <time style="float: right;">05-23</time>
                                </a>
                                <a href="https://hexo.fluid-dev.com/posts/fluid-write/"
                                   class="list-group-item list-group-item-action">
                                    <span class="archive-post-title">搭配 Fluid 如何优雅的写一篇文章</span>
                                    <time style="float: right;">05-13</time>
                                </a>
                                <a href="https://hexo.fluid-dev.com/posts/hexo-rainbow/"
                                   class="list-group-item list-group-item-action">
                                    <span class="archive-post-title">使用 Rainbow 展示随机的英语句子</span>
                                    <time style="float: right;">05-08</time>
                                </a>
                                <a href="https://hexo.fluid-dev.com/posts/hexo-darkmode/"
                                   class="list-group-item list-group-item-action">
                                    <span class="archive-post-title">Hexo 暗黑模式</span>
                                    <time style="float: right;">04-23</time>
                                </a>
                                <a href="https://hexo.fluid-dev.com/posts/hexo-pwa/"
                                   class="list-group-item list-group-item-action">
                                    <span class="archive-post-title">给 Hexo 博客添加 PWA 支持</span>
                                    <time style="float: right;">04-23</time>
                                </a>
                            </div>

                            <nav aria-label="navigation">
                                <span class="pagination" id="pagination">
                                    <span class="page-number current">1</span>
                                    <a class="page-number" href="https://hexo.fluid-dev.com/archives/page/2/#board">2</a>
                                    <a class="extend next" rel="next" href="https://hexo.fluid-dev.com/archives/page/2/#board">
                                        <i class="iconfont icon-arrowright"></i>
                                    </a>
                                </span>
                            </nav>

                            <script>
                                for (ele of document.getElementById("pagination").getElementsByTagName("a")) {
                                    ele.href += '#board';
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
