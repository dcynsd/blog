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
                                @foreach($tags as $tag)
                                <a href="{{ $tag->link() }}"
                                   style="font-size: {{ $tag->size }}px; color: {{ $tag->color }}">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
