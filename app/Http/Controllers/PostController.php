<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postRepository;
    protected $categoryRepository;

    public function __construct(PostRepository $postRepository, CategoryRepository $categoryRepository)
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->getAll();
        return view("backend.post.list", compact("posts"));
    }

    public function create()
    {
        $users = User::all();
        $categories = $this->categoryRepository->getAll();
        return view("backend.post.create", compact("categories", "users"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|min:6|max:200",
            "content" => "required",
            "user_id" => "required",
        ]);
        $this->postRepository->create($request);
        toastr()->success('Thành Công');
        return redirect()->route("posts.index");
    }

    public function show($id)
    {
        $user = User::all();
        $categories = $this->categoryRepository->getAll();
        $post = $this->postRepository->getById($id);
        return view("backend.post.detail", compact("post", "user", "categories"));
    }

    public function edit($id)
    {
        $users = User::all();
        $post = $this->postRepository->getById($id);
        $categories = $this->categoryRepository->getAll();
        return view("backend.post.update", compact("post", "categories", "users"));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "title" => "required|min:6|max:200",
            "content" => "required",
            "user_id" => "required",
        ]);
        $this->postRepository->update($id, $request);
        toastr()->success('Thành Công');
        return redirect()->route("posts.index");
    }

    public function destroy($id)
    {
        $this->postRepository->delete($id);
        return redirect()->route("posts.index");
    }
}
