<?php
namespace App\Controllers;

class UserController
{
    private $userService;

    function __construct()
    {
        $this->userService = new \App\Services\UserService();
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        var_dump($users);
        require __DIR__ . '/../views/home/index.php';
    }
}