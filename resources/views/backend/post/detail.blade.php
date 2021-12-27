<h2>{{$post->user->name }}</h2>
<h3>{{ $post->title }}</h3>

<pre>{{ $post->content }}</pre>

<hr>
<h3>Chu de</h3>
@foreach($categories as $category)
    <input type="checkbox" {{ $post->checkCategory($category->id)? "checked":"" }} name="category[]"
           value="{{ $category->id }}">{{ $category->name }} <br>
@endforeach

<a href="{{ route("posts.index") }}">Quay lại</a>
