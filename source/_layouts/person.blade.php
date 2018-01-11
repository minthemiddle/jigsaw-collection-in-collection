@extends('_layouts.master')

@section('body')
<h1>{{ $page->name }}</h1>

@foreach ($posts as $post)
@if ($post->id === $page->id)
<a href="{{ $post->getURL() }}">{{  $post->title }} <span class="text-grey-darker">(by {{ $post->date }})</span></a>
@endif
@endforeach

@yield('content')

@endsection