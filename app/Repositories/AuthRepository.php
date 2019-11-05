<?php

namespace App\Repositories;
use App\Models\User;
use Auth;

class AuthRepository implements AuthRepositoryInterface
{
	public function signup(array $input)
	{
		return User::create($input);
	}
	
	public function login(array $credentials)
	{
		return Auth::attempt($credentials);
	}

	public function logout()
	{
		return Auth::logout();
	}

	public function update(array $data, $id, $attribute)
    {
        return User::where($attribute, $id)->update($data);
    }

    public function changePassword(array $input)
	{
		return User::find(userId())->update($input);    		
	}

	public function search($q)
	{
		return User::where('name', 'like', '%'. $q .'%')->paginate();
	}
	
}