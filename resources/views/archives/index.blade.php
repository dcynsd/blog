@extends('layouts.app')
@section('title', '归档')

@section('content')
    @include('layouts._archive', ['posts' => $posts])
@stop
