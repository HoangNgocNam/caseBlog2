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
<a href="{{ route("users.create") }}">Them Moi</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td><a href="{{ route("users.detail", $user->id) }}">Detail</a></td>
            <td><a href="{{ route("users.update", $user->id) }}">Update</a></td>
            <td><a onclick="return confirm('may chac chua ???')" href="{{ route("users.delete", $user->id) }}">Delete</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
