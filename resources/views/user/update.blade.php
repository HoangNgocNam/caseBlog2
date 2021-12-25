<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhap ten" value="{{ $user->name }}">
    <input type="email" name="email" placeholder="Nhap Email" value="{{ $user->email }}">
    <input type="password" name="password" placeholder="Nhap Password" value="{{ $user->password }}">
    <button type="submit">Cap Nhat</button>
    <a href="{{ route("users.index") }}">Quay lai</a>
</form>
