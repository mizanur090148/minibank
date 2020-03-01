<?php

namespace App\Repositories;

interface TransactionProfileRepositoryInterface 
{
	public function all(array $with, $search_key, $orderByColumn, $orderDirection);
	public function store(array $input);
	public function update($id, array $array);
	public function show($id);
    public function search($q);
    public function destroy($id);
}