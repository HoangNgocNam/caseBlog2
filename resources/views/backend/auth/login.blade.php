<form action="" method="post">
    @csrf
    <input type="text" name="email" placeholder="Nhập email">
    <input type="password" name="password" placeholder="Nhập password">
    <button type="submit">Login</button>
    <a href="{{ route("showFormRegister") }}">Đăng ký</a>
</form>
