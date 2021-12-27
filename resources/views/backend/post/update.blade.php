<form action="" method="post">
    @csrf
    <input type="text" name="title" placeholder="Nhâp Tiêu Đề" value="{{ $post->title }}">
    @error('title')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="text" name="content" placeholder="Nhâp nội Dung" value="{{ $post->content }}">
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
        <input type="checkbox" {{ $post->checkCategory($category->id)?"checked":"" }} name="category[]"
               value="{{ $category->id }}">{{ $category->name }} <br>
    @endforeach
    <button type="submit">Cập Nhật</button>
    <a href="{{ route("posts.index") }}">Quay lại</a>
</form>
