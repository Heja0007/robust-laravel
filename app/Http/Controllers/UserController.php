<?php

namespace App\Http\Controllers;
use App\Repositories\UserRepository;


class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    private $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function getAllUsers()
    {
        return $this->user->getAll();
    }
}
