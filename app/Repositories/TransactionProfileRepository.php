<?php

namespace App\Repositories;
use App\Models\TransactionProfile;
use App\Models\User;

class TransactionProfileRepository implements TransactionProfileRepositoryInterface
{
	public function all(array $with, array $where, $orderByColumn, $orderDirection)
	{
		return TransactionProfile::with($with)
			->where($where)
			->orderBy($orderByColumn, $orderDirection)
			->paginate(15);
	}

	public function show($id)
	{
		return TransactionProfile::findOrFail($id);
	}

	public function store(array $input)
	{
		return TransactionProfile::create($input);
	}

	public function update($id, array $input)
	{
		return TransactionProfile::findOrFail($id)->update($input);
	}

	public function search($q)
	{
		return TransactionProfile::where('name', 'like', '%'. $q .'%')->paginate();
	}

	public function destroy($id)
    {
    	return TransactionProfile::destroy($id);
    }   
	
}