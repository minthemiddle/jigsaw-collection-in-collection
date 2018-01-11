@extends('_layouts.master')

@section('body')
<header class="mb-4">
    <h1>Hello world!</h1>
</header>

<h2 class="mb-4">Posts</h2>

<ul>
@foreach ($posts as $post)
    @if ($post->id === 2)
    <li><a href="{{ $post->getURL() }}">{{  $post->title }} <span class="text-grey-darker">(by {{ $post->author }})</span></a></li>
    @endif
@endforeach
</ul>


<h2 class="mb-4 mb-8">People</h2>

<ul>
@foreach ($people as $person)
    <li><a href="{{ $person->getURL() }}">{{  $person->name }}</a></li>
@endforeach
</ul>

@endsection
