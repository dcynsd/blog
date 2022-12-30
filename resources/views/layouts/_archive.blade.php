<main>
    <div class="container nopadding-md">
        <div class="py-5" id="board">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-10 m-auto">
                        <div class="list-group">
                            <p class="h4">共计 {{ $posts->total() }} 篇文章</p>
                            <hr>
                            @foreach($posts as $year => $item)
                                <p class="h5">{{ $year }}</p>
                                @foreach($item as $post)
                                    <a href="{{ $post->link() }}"
                                       class="list-group-item list-group-item-action">
                                        <span class="archive-post-title">{{ $post->title }}</span>
                                        <time style="float: right;">{{ $post->created_at->format('m-d') }}</time>
                                    </a>
                                @endforeach
                            @endforeach
                        </div>

                        @include('layouts._pagination', ['model' => $posts])
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
