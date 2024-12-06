@extends('theme')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/blogs.css') }}">

<div class="blog-detail" style="padding:30px">
    <h1>{{ $blog->title }}</h1>
    <img src="{{ asset('storage/thumbnails/' . $blog->thumbnail) }}" alt="{{ $blog->title }}" style="height:300px" />

    <p>{!! $blog->description !!}</p>
</div>
@endsection