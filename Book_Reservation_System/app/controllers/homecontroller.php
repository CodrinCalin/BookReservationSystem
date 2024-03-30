<?php
namespace App\Controllers;

class HomeController
{
    private $userService;

    function __construct()
    {
        $this->userService = new \App\Services\UserService();
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();
        require __DIR__ . '/../views/home/index.php';
    }

    public function about()
    {
        require __DIR__ . '/../views/home/about.php';
    }
}