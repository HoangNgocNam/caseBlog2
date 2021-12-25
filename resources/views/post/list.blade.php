<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{ route("posts.create") }}">Them Moi</a>
<a href="{{ route("logout") }}">Dang xuat</a>
<a href="{{route("reset")}}">Doi mat khau</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
{{--        <th>Content</th>--}}
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
{{--            <td>{{ $post->content }}</td>--}}
            <td>
                @if(count($post->categories) > 0)
                    @foreach($post->categories as $category)
                        {{ $category->name }}
                    @endforeach
                @else
                    <p>Chua phan loai</p>
                @endif
            </td>
            <td>{{ $post->user->name }}</td>
            <td><a href="{{ route("posts.detail",$post->id ) }}">Detail</a>
            <td><a href="{{ route("posts.update",$post->id ) }}">Update</a>
            <td><a onclick="return confirm('may chac chua')" href="{{ route("posts.delete",$post->id ) }}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
