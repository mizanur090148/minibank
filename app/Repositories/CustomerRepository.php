<?php

namespace App\Repositories;
use App\Models\User;

class CustomerRepository implements CustomerRepositoryInterface
{
	public function all()
	{
		return User::where('role_type', USER)
			->where('id', '!=', userId())
			->get();
	}

	public function create()
	{
		return User::where('role_type', USER)->get();
	}
	
	public function store(array $input)
	{
		return User::create($input);
	}	

	public function find($id)
    {
        return User::findOrFail($id);
    }

	public function update(array $input)
    {
        return User::where('id', userId())->update($input);
    }
    
    public function delete($id)
	{
		return User::destroy($id);
	}
	
}