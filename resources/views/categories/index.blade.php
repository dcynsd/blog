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
                                @for($i = 0; $i < 20; $i++)
                                <div class="category row">
                                    <a class="category-item collapsed list-group-item category-item-action col-10 col-md-11"
                                       role="tab" data-toggle="collapse"
                                       href="#collapseOne-{{ $i }}"
                                       aria-expanded="false">
                                        功能增强
                                        <i class="iconfont icon-arrowright"></i>
                                    </a>
                                    <a href="/categories"
                                       class="category-count col-2 col-md-1">
                                        <i class="iconfont icon-articles"></i>
                                        <span>6</span>
                                    </a>
                                    <div class="category-collapse">
                                        <div id="collapseOne-{{ $i }}" class="collapse in" role="tabpanel"
                                             aria-labelledby="collapseOne{{ $i }}">
                                            <a href="https://hexo.fluid-dev.com/posts/hexo-echarts/"
                                               class="list-group-item list-group-item-action">
                                                <span class="category-post">使用 ECharts 插件绘制炫酷图表</span>
                                            </a>
                                            <a href="https://hexo.fluid-dev.com/posts/hexo-nodeppt/"
                                               class="list-group-item list-group-item-action">
                                                <span class="category-post">给博客文章嵌入 PPT 演示</span>
                                            </a>
                                            <a href="https://hexo.fluid-dev.com/posts/fluid-hitokoto/"
                                               class="list-group-item list-group-item-action">
                                                <span class="category-post">在 Fluid 主题首页上加入一言</span>
                                            </a>
                                            <a href="https://hexo.fluid-dev.com/posts/hexo-rainbow/"
                                               class="list-group-item list-group-item-action">
                                                <span class="category-post">使用 Rainbow 展示随机的英语句子</span>
                                            </a>
                                            <a href="https://hexo.fluid-dev.com/posts/hexo-darkmode/"
                                               class="list-group-item list-group-item-action">
                                                <span class="category-post">Hexo 暗黑模式</span>
                                            </a>
                                            <a href="https://hexo.fluid-dev.com/posts/hexo-pwa/"
                                               class="list-group-item list-group-item-action">
                                                <span class="category-post">给 Hexo 博客添加 PWA 支持</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
