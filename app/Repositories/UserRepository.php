<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Impl\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create($request)
    {
        $data = $request->only("name","email","password");
        User::create($data);
    }

    public function update($id, $request)
    {
        $data = $request->only("name","email","password");
        User::findOrFail($id)->update($data);
    }
}
