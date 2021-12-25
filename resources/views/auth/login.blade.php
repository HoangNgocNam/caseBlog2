<form action="" method="post">
    @csrf
    <input type="text" name="email" placeholder="Nhap email">
    <input type="password" name="password" placeholder="Nhap password">
    <button type="submit">Login</button>
    <a href="{{ route("register.showFormRegister") }}">Dang ky</a>
</form>
