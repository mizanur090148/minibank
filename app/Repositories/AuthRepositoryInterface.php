<?php

namespace App\Repositories;

interface AuthRepositoryInterface 
{
	public function signup(array $input);
	public function login(array $credentials);
	public function logout();
	public function update(array $data, $id, $attribute);
	public function changePassword(array $input);	
    public function search($q);    
}