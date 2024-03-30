<?php
namespace App\Services;

class UserService{
    public function getAllUsers() {
        $repository = new \App\Repositories\UserRepository();
        return $repository->getAllUsers();
    }
}