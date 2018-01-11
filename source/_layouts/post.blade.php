@extends('_layouts.master')

@section('body')
<h1>{{ $page->title }}</h1> by {{ $page->author }}

@yield('content')

@endsection