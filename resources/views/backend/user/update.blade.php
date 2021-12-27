<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên" value="{{ $user->name }}">
    @error('name')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="email" name="email" placeholder="Nhập Email" value="{{ $user->email }}">
    @error('email')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="password" name="password" placeholder="Nhập Password" value="{{ $user->password }}">
    @error('password')
    <p style="color: red">{{$message}}</p>
    @enderror
    <button type="submit">Cập Nhật</button>
    <a href="{{ route("users.index") }}">Quay lại</a>
</form>
