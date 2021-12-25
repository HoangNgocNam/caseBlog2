<form action=""method="post">
    @csrf
    <input type="text" name="title" placeholder="Nhap Tieu De" value="{{ $post->title }}">
    <input type="text" name="content" placeholder="Nhap noi Dung" value="{{ $post->content }}">
    {{--    <input type="text" name="user_id" placeholder="ID">--}}
    <select name="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
    <hr>
    <h3>danh sach chu de</h3>
    @foreach($categories as $category)
        <input type="checkbox" {{ $post->checkCategory($category->id)?"checked":"" }} name="category[]" value="{{ $category->id }}">{{ $category->name }} <br>
    @endforeach
    <button type="submit">Add new</button>
    <a href="{{ route("posts.index") }}">Quay lai</a>
</form>
