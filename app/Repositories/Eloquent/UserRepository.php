<?php
namespace App\Repositories\Eloquent;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\UserRepositoryInterface;
use Exception;

class UserRepository implements UserRepositoryInterface
{
    public function getAll()
    {
        return User::all()->toArray();
    }

    public function create(array $data)
    {
        //Kiểm tra người dùng đã có tài khoản hoặc username chưa
        if (User::where('email', $data['email'])->orWhere('username', $data['username'])->exists()) {
            throw new Exception('Email hoặc Username đã được sử dụng.');
        }

        //Tạo tài khoản người dùng
        return User::create($data);
    }
}
