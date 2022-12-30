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
                                @foreach($links as $link)
                                    <div class="card col-lg-4 col-md-6 col-sm-12">
                                        <a href="{{ $link->url }}" class="card-body hover-with-bg"
                                           target="_blank" rel="noopener external nofollow noreferrer">
                                            <div class="card-content">
                                                <div class="link-avatar my-auto">
                                                    <img src="{{ $link->avatar }}"
                                                         srcset="{{ $link->avatar }}"
                                                         alt="{{ $link->name }}">
                                                </div>
                                                <div class="link-text">
                                                    <div class="link-title">{{ $link->name }}</div>
                                                    <div class="link-intro">{{ $link->title }}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
