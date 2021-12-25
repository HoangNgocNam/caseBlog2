<?php

namespace App\Repositories\Impl;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function create($request);

    public function update($id, $request);
}
