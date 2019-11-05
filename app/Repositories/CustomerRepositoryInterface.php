<?php

namespace App\Repositories;

interface CustomerRepositoryInterface 
{
	public function all();
	public function create();
	public function store(array $input);	
	public function find($id);
	public function update(array $input);
	public function delete($id);
}