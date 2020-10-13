<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'DCY') - blog</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div id="app">
    @include('layouts._header')
    <div>
        @yield('content')

        <a id="scroll-top-button" href="#" role="button" style="bottom: -60px; right: 334px;">
            <i class="iconfont icon-arrowup" aria-hidden="true"></i>
        </a>

        <div class="modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">搜索</h4>
                        <button type="button" id="local-search-close" class="close" data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <input type="text" id="local-search-input" class="form-control validate">
                            <label data-error="x" data-success="v" for="local-search-input">关键词</label>
                        </div>
                        <div class="list-group" id="local-search-result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._footer')
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
