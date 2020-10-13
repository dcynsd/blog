@extends('layouts.app')
@section('title', '标签')

@section('content')
    <main>
        <div class="container nopadding-md">
            <div class="py-5" id="board">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 m-auto">
                            <div class="text-center tagcloud">
                                <a href="https://hexo.fluid-dev.com/tags/Fluid/"
                                   style="font-size: 18px; color: #bbe">Fluid</a>
                                <a href="https://hexo.fluid-dev.com/tags/Hexo/"
                                   style="font-size: 26px; color: #6090c9">Hexo</a>
                                <a href="https://hexo.fluid-dev.com/tags/%E7%94%A8%E6%88%B7%E7%BB%8F%E9%AA%8C/"
                                   style="font-size: 30px; color: #337ab7">用户经验</a>
                                <a href="https://hexo.fluid-dev.com/tags/%E7%A4%BA%E4%BE%8B/"
                                   style="font-size: 18px; color: #bbe">示例</a>
                                <a href="https://hexo.fluid-dev.com/tags/%E8%8A%B1%E9%87%8C%E8%83%A1%E5%93%A8/"
                                   style="font-size: 22px; color: #8ea5dc">花里胡哨</a>
                                <a href="https://hexo.fluid-dev.com/tags/%E9%83%A8%E7%BD%B2/"
                                   style="font-size: 18px; color: #bbe">部署</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
