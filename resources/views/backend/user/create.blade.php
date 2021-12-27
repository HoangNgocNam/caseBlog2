<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên" value="{{ old('name') }}">
    @error('name')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="email" name="email" placeholder="Nhâp Email" value="{{ old('email') }}">
    @error('email')
    <p style="color: red">{{$message}}</p>
    @enderror
    <input type="password" name="password" placeholder="Nhập Password" value="{{ old('password') }}">
    @error('password')
    <p style="color: red">{{$message}}</p>
    @enderror
    <button type="submit">Add New</button>
    <a href="{{ route("users.index") }}">Quay lại</a>
</form>
