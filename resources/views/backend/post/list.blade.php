{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--    @toastr_css--}}
{{--</head>--}}
{{--<body>--}}
{{--<a href="{{ route("posts.create") }}">Thêm Mới</a>--}}
{{--<a href="{{ route("logout") }}">Đăng Xuất</a>--}}
{{--<a href="{{route("reset")}}">Đổi Mật Khẩu</a>--}}
{{--<table border="1px">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>ID</th>--}}
{{--        <th>Title</th>--}}
{{--        <th>Category</th>--}}
{{--        <th>User</th>--}}
{{--        <th colspan="3">Action</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($posts as $post)--}}
{{--        <tr>--}}
{{--            <td>{{ $post->id }}</td>--}}
{{--            <td>{{ $post->title }}</td>--}}
{{--            <td>--}}
{{--                @if(count($post->categories) > 0)--}}
{{--                    @foreach($post->categories as $category)--}}
{{--                       <p>{{ $category->name }}</p>--}}
{{--                    @endforeach--}}
{{--                @else--}}
{{--                    <p>Chưa Phân Loại</p>--}}
{{--                @endif--}}
{{--            </td>--}}
{{--            <td>{{ $post->user->name }}</td>--}}
{{--            <td><a href="{{ route("posts.detail",$post->id ) }}">Detail</a>--}}
{{--            <td><a href="{{ route("posts.update",$post->id ) }}">Update</a>--}}
{{--            <td><a onclick="return confirm('Bạn chắc choắn chưa ??')" href="{{ route("posts.delete",$post->id ) }}">Delete</a>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--</body>--}}
{{--@jquery--}}
{{--@toastr_js--}}
{{--@toastr_render--}}
{{--</html>--}}

@extends("backend.layout.master")
@section("title","Post")
@section("title-content","Danh sách bài viết")
@toastr_css
@section("content")
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>User</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    @if(count($post->categories) > 0)
                        @foreach($post->categories as $category)
                            <p>{{ $category->name }}</p>
                        @endforeach
                    @else
                        <p>Chưa Phân Loại</p>
                    @endif
                </td>
                <td>{{ $post->user->name }}</td>
                <td><a href="{{ route("posts.detail",$post->id ) }}">Detail</a>
                <td><a href="{{ route("posts.update",$post->id ) }}">Update</a>
                <td><a onclick="return confirm('Bạn chắc choắn chưa ??')" href="{{ route("posts.delete",$post->id ) }}">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@jquery
@toastr_js
@toastr_render
