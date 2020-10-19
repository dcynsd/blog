@extends('layouts.app')
@section('title', $currentModel->name)

@section('content')
    @include('layouts._archive', ['posts' => $posts])
@stop
