<?php

namespace App\Services;

use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function saveUser($data)
    {
        $password = substr(md5(uniqid(rand(1, 6))), 0, 10);
        $data['password'] = Hash::make($password);
        return [
            'repo' => $this->userRepository->create($data),
            'password' => $password
        ];
    }

    public function saveWithBrokenName(array $data)
    {
        $data['name'] = $data['first_name'] . $data['middle_name'] . $data['last_name'];
        $password = substr(md5(uniqid(rand(1, 6))), 0, 10);
        $data['password'] = Hash::make($password);
        return [
            'repo' => $this->userRepository->create($data),
            'password' => $password
        ];
    }
}
