@extends('admin/theme')
@section('content')
<head>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 30px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            font-size: 30px;
            margin-bottom: 20px;
            color: #0c2957;
            text-align: center;
            font-weight: 700;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        label {
            font-size: 14px;
            font-weight: 600;
            color: #555;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 6px;
            outline: none;
            transition: border-color 0.3s;
            background-color: #f9f9f9;
        }

        input[type="text"]:focus,
        textarea:focus {
            border-color: #0c2957;
            background-color: #fff;
        }

        textarea {
            resize: vertical;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .wysiwyg-editor {
            border: 1px solid #ddd;
            border-radius: 6px;
            overflow: hidden;
            min-height: 150px;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .form-buttons {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
        }

        button {
            background-color: #0c2957;
            color: white;
            border: none;
            border-radius: 6px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: #1e7ea0;
            transform: translateY(-2px);
        }

        button:active {
            background-color: #155d75;
            transform: translateY(0);
        }

        .cancel-btn {
            background-color: #ccc;
        }

        .cancel-btn:hover {
            background-color: #aaa;
        }
    </style>
    <!-- Include a WYSIWYG Editor library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/trix@2.0.0/dist/trix.css">
    <script src="https://cdn.jsdelivr.net/npm/trix@2.0.0/dist/trix.umd.min.js"></script>
</head>
<div class="body">

    <div class="container">
        <h1>Add New Blog</h1>
        <form action="{{ route('saveblog')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" id="title" name="title" placeholder="Enter blog title" required>
            </div>

            <div class="form-group">
                <label for="description">Blog Description</label>
                <input id="description" type="hidden" name="description">
                <trix-editor input="description"></trix-editor>
            </div>

            <div class="form-group">
                <label for="thumbnail">Blog Thumbnail</label>
                <input type="file" id="thumbnail" name="thumbnail" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="seo-tags">SEO Tags</label>
                <input type="text" id="seo-tags" name="seo_tags" placeholder="Enter SEO tags (comma-separated)">
            </div>

            <div class="form-buttons">
                <button type="submit">Save Blog</button>
            </div>
        </form>
    </div>
</div>
@endsection
