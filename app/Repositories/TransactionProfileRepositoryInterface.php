<?php

namespace App\Repositories;

interface TransactionProfileRepositoryInterface 
{
	public function all(array $with, array $where, $orderByColumn, $orderDirection);
	public function create();
	public function store(array $credentials);
    public function search($q);
    public function accountInfo();
}