@extends('admin/theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/enquiries.css') }}">
<style>
    .add-blog-btn {
        background-color: #0c2957;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .add-blog-btn:hover {
        background-color: #1e7ea0;
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        transform: translateY(-2px);
    }

    .add-blog-btn:active {
        background-color: #155d75;
        transform: translateY(0);
        box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        text-align: left;
        padding: 8px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f4f4f4;
    }

    td img {
        max-width: 100px;
        height: auto;
    }
</style>
<div class="container">
    <div class="page-heading-section">
        <div class="page-upper">
            <div>
                <div class="page-heading">
                    Blogs
                </div>
                <div class="page-sub-heading">
                    Manage your blogs from here.
                </div>
            </div>
            <div>
                <a href="{{ url('admin/blogs/add') }}" class="add-blog-btn">Add New Blog</a>
            </div>
        </div>
        <div class="main-section">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            <table>
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Blog Title</th>
                        <th>Thumbnail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($blogs as $index => $blog)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>
                            <img src="{{ asset(str_replace('public/', 'storage/', $blog->thumbnail)) }}" alt="Thumbnail">
                        </td>
                        <td>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" title="Delete Blog" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this blog?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="16" height="16">
                                        <path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                                    </svg>
                                </button>
                            </form>

                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4">No blogs found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection