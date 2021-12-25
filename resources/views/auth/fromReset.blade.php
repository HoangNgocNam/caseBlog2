<form action=""method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhap ten" value="{{\Illuminate\Support\Facades\Auth::user()->name}}">
    <input type="email" name="email" placeholder="Nhap Email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}">
    <input type="password" name="currenPassword" placeholder="Nhap Mat khau hien tai">
    <input type="password" name="newPassword" placeholder="Nhap Mat khau moi">
    <button type="submit">Reset</button>
    <a href={{route("posts.index")}}>Quay lai</a>
</form>
