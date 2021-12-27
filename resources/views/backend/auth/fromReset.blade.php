<form action=""method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
    <input type="email" name="email" placeholder="Nhập Email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
    <input type="password" name="currenPassword" placeholder="Nhập mật khẩu hiện tại">
    <input type="password" name="newPassword" placeholder="Nhập mật khẩu mới">
    <button type="submit">Reset</button>
    <a href={{route("posts.index")}}>Quay lại</a>
</form>
