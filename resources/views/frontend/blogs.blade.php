@extends('theme')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/blogs.css') }}">

<div class="blogs">
    <div class="headings">
        <div class="title">Our Blogs</div>
        <div class="sub-title">Read Our Latest Articles</div>
    </div>

    <div class="blog-cards">
        @foreach($blogs as $blog)
            <div class="blog-card">
                <!-- Thumbnail Image -->
                <div class="blog-thumbnail">
                    <img src="{{ asset('storage/thumbnails/' . $blog->thumbnail) }}" alt="{{ $blog->title }}" />
                </div>
                <h3><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h3>
                <p>{{ Str::limit($blog->content, 150) }}</p>
                <a href="{{ route('blogs.show', $blog->id) }}">Read more...</a>
            </div>
        @endforeach
    </div>
</div>
@endsection