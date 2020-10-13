@extends('layouts.app')
@section('title', '友链')

@section('content')
    <main>

        <div class="container nopadding-md">
            <div class="py-5" id="board">

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 m-auto">


                            <div class="row links">


                                <div class="card col-lg-4 col-md-6 col-sm-12">
                                    <a href="https://hexo.fluid-dev.com/docs/" class="card-body hover-with-bg" target="_blank" rel="noopener external nofollow noreferrer">
                                        <div class="card-content">

                                            <div class="link-avatar my-auto">
                                                <img src="./友链 - Hexo Theme Fluid_files/favicon.png" srcset="https://hexo.fluid-dev.com/img/favicon.png" alt="Fluid Docs">
                                            </div>

                                            <div class="link-text">
                                                <div class="link-title">Fluid Docs</div>
                                                <div class="link-intro">主题使用指南</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="card col-lg-4 col-md-6 col-sm-12">
                                    <a href="https://github.com/fluid-dev/hexo-theme-fluid" class="card-body hover-with-bg" target="_blank" rel="noopener external nofollow noreferrer">
                                        <div class="card-content">

                                            <div class="link-avatar my-auto">
                                                <img src="./友链 - Hexo Theme Fluid_files/favicon.png" srcset="https://hexo.fluid-dev.com/img/favicon.png" alt="Fluid Repo">
                                            </div>

                                            <div class="link-text">
                                                <div class="link-title">Fluid Repo</div>
                                                <div class="link-intro">主题 GitHub 仓库</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                                <div class="card col-lg-4 col-md-6 col-sm-12">
                                    <a href="https://hexo.fluid-dev.com/docs/example/" class="card-body hover-with-bg" target="_blank" rel="noopener external nofollow noreferrer">
                                        <div class="card-content">

                                            <div class="link-avatar my-auto">
                                                <img src="./友链 - Hexo Theme Fluid_files/favicon.png" srcset="https://hexo.fluid-dev.com/img/favicon.png" alt="Fluid Example">
                                            </div>

                                            <div class="link-text">
                                                <div class="link-title">Fluid Example</div>
                                                <div class="link-intro">主题操作示例</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@stop
