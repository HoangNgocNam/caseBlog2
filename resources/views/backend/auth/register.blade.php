<form action=""method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên">
    @error('name')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="email" name="email" placeholder="Nhập Email">
    @error('email')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="password" name="password" placeholder="Nhập Mật khâuu">
    @error('password')
    <p style="color: red">{{$message}}</p>
    @enderror
    <button type="submit">Đăng ký</button>
</form>
