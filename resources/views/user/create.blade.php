<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhap ten">
    <input type="email" name="email" placeholder="Nhap Email">
    <input type="password" name="password" placeholder="Nhap Password">
    <button type="submit">Add New</button>
    <a href="{{ route("users.index") }}">Quay lai</a>
</form>
