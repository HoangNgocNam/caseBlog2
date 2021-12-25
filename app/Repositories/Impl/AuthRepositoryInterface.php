<?php

namespace App\Repositories\Impl;

interface AuthRepositoryInterface extends BaseRepositoryInterface
{
    public function login($request);
}
