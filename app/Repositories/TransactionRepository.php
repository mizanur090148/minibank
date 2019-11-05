<?php

namespace App\Repositories;
use App\Models\Transaction;
use App\Models\User;

class TransactionRepository implements TransactionRepositoryInterface
{
	public function all(array $with, array $where, $orderByColumn, $orderDirection)
	{
		return Transaction::with($with)
			->where($where)
			->orderBy($orderByColumn, $orderDirection)
			->paginate();
	}

	public function create()
	{
		return User::where('role_type', USER)->get();
	}
	
	public function store(array $credentials)
	{
		return Transaction::create($credentials);
	}	

	public function search($q)
	{
		return Transaction::where('name', 'like', '%'. $q .'%')->paginate();
	}

	public function accountInfo()
	{
		return Transaction::where('receiver_id', userId())
			->orWhere('sender_id', userId())
			->get();
	}
	
}