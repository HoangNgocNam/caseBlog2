<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
   protected $userRepository;

   public function __construct(UserRepository $userRepository)
   {
       $this->userRepository = $userRepository;
   }

    public function index()
    {
        $users = $this->userRepository->getAll();
        return view("backend.user.list", compact('users'));
    }


    public function create()
    {
        return view("backend.user.create");
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required",
        ]);
        $this->userRepository->create($request);
        toastr()->success('Thành Công');
        return redirect()->route("users.index");
    }


    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        return view("backend.user.detail",compact("user"));
    }


    public function edit($id)
    {
        $user = $this->userRepository->getById($id);
        return view("backend.user.update", compact("user"));
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "name"=>"required",
            "email"=>"required|email",
            "password"=>"required",
        ]);
        $this->userRepository->update($id,$request);
        toastr()->success('Thành Công');
        return redirect()->route("users.index");
    }

    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return redirect()->route("users.index");
    }
}
