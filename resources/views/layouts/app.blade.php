<!doctype html>
<html lang="{{ app()->getLocale() }}" data-default-color-scheme="&quot;auto&quot;" data-user-color-scheme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#2f4154">
    <meta name="description" content="@yield('description', 'This Is Dcynsd\'s Blog')" />
    <meta name="author" content="Dcynsd">
    <meta name="keyword" content="@yield('keyword', 'dcynsd,blog,博客,laravel,Laravel')" />
    <link rel="icon" type="image/png" href="{{ asset('storage/images/avatar.png') }}">
    <title>@yield('title', '博客') - DCYNSD</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('Style')
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
                            <input type="text" id="local-search-input" class="form-control validate" autocomplete="off">
                            <label data-error="x" data-success="v" for="local-search-input">关键词</label>
                        </div>
                        <div class="list-group" id="local-search-result">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._footer')
</div>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script src="https://cdn.bootcdn.net/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script>
    var inputArea = document.querySelector("#local-search-input");
    inputArea.onclick = function () {
        searchFunc('local-search-input', 'local-search-result');
        this.onclick = null
    }

    var searchFunc = function (search_id, content_id) {
        var $input = document.getElementById(search_id);
        var $resultContent = document.getElementById(content_id);

        $input.addEventListener('keypress', function (event) {
            if (event.code !== 'Enter') {
                return
            }

            var str = '';
            var keywords = this.value.trim().toLowerCase().split(/[\s-]+/);
            $resultContent.innerHTML = '';
            if (this.value.trim().length <= 0) {
                return;
            }

            axios.get('/search', {params: {q: this.value.trim()}}).then(response => {
                var dataList = response.data.data
                dataList.forEach(function (data) {
                    var isMatch = true;
                    if (!data.title || data.title.trim() === '') {
                        data.title = 'Untitled';
                    }
                    var orig_data_title = data.title.trim();
                    var data_title = orig_data_title.toLowerCase();
                    var orig_data_content = data.content.trim().replace(/<[^>]+>/g, '');
                    var data_content = orig_data_content.toLowerCase();
                    var data_url = data.url;
                    var index_title = -1;
                    var index_content = -1;
                    var first_occur = -1;
                    if (data_content !== '') {
                        keywords.forEach(function (keyword, i) {
                            index_title = data_title.indexOf(keyword);
                            index_content = data_content.indexOf(keyword);

                            if (index_content < 0) {
                                index_content = 0
                            }
                            if (index_content > 0) {
                                first_occur = index_content
                            }
                            // console.log(data.title, index_content, i, keyword)
                        });
                    }
                    keywords.forEach(function (keyword) {
                        var regS = new RegExp(keyword, 'gi');
                        orig_data_title = orig_data_title.replace(regS, '<span class="search-word">' + keyword + '</span>');
                    });
                    str += '<a href=\'' + data_url + '\' class=\'list-group-item list-group-item-action font-weight-bolder search-list-title\'>' + orig_data_title + '</a>';
                    var content = orig_data_content;
                    var match_content = ''
                    if (first_occur >= 0) {
                        var start = first_occur - 20;
                        var end = first_occur + 80;

                        if (start < 0) {
                            start = 0;
                        }

                        if (start === 0) {
                            end = 100;
                        }

                        if (end > content.length) {
                            end = content.length;
                        }

                        match_content = content.substring(start, end);

                        // highlight all keywords
                        keywords.forEach(function (keyword) {
                            var regS = new RegExp(keyword, 'gi');
                            match_content = match_content.replace(regS, '<span class="search-word">' + keyword + '</span>');
                        });

                        str += '<p class=\'search-list-content\'>' + match_content + '...</p>';
                    } else {
                        match_content = content.substring(0, 100);
                        str += '<p class=\'search-list-content\'>' + match_content + '...</p>';
                    }
                });
                const input = $('#local-search-input');
                if (str.indexOf('list-group-item') === -1) {
                    return input.addClass('invalid').removeClass('valid');
                }
                input.addClass('valid').removeClass('invalid');
                $resultContent.innerHTML = str;
            })
        })

        $(document).on('click', '#local-search-close', function () {
            $('#local-search-input').val('').removeClass('invalid').removeClass('valid');
            $('#local-search-result').html('');
        });
    };
</script>
@yield('HeadScript')
@yield('Script')
</body>
</html>
