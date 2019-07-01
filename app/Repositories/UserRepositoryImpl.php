<?php
/**
 * Created by PhpStorm.
 * User: bisesh
 * Date: 01/07/2019
 * Time: 13:58
 */

namespace App\Repositories;


use App\User;

class UserRepositoryImpl implements UserRepository
{
    /**
     * @var User
     */
    private $model;

    /**
     * UserRepositoryImpl constructor.
     * @param User $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model->all();
    }
}
