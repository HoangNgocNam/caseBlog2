<table border="1px">
    <h2>{{ $user->name }}</h2>
    <hr>
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Content</th>
    </tr>
    </thead>
    <tbody>
    @if(count($user->posts) > 0)
    @foreach($user->posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title}}</td>
            <td>{{ $post->content }}</td>
        </tr>
    @endforeach
    @else
    <tr>
        <td colspan="3">Chưa có bài viết nào</td>
    </tr>
    @endif
    </tbody>
</table>
<a href="{{ route("users.index") }}">Quay lại</a>
