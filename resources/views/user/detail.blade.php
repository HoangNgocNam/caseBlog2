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
    @foreach($user->posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title}}</td>
            <td>{{ $post->content }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
