<form action=""method="post">
    @csrf
    <input type="text" name="title" placeholder="Nhập Tiêu Đề" value="{{ old('title') }}">
    @error('title')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="text" name="content" placeholder="Nhập nội Dung" value="{{ old('content') }}">
    @error('content')
    <p style="color: red">{{$message}}</p>
    @enderror
    <select name="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    @error('user_id')
    <p style="color: red">{{$message}}</p>
    @enderror
    <hr>
    <h3>Chủ Đề</h3>
        @foreach($categories as $category)
            <input type="checkbox" name="category[]" value="{{ $category->id }}">{{ $category->name }} <br>
        @endforeach
    <button type="submit">Add new</button>
    <a href="{{ route("posts.index") }}">Quay lại</a>
</form>


@extends("backend.layout.master")
@section("title-content", "Thêm bài viết mới")
@section("content")

@endsection
