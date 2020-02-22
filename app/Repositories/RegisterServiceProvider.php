<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AuthRepositoryInterface;
use App\Repositories\AuthRepository;
use App\Repositories\TransactionRepositoryInterface;
use App\Repositories\TransactionRepository;
use App\Repositories\CustomerRepositoryInterface;
use App\Repositories\CustomerRepository;

class RegisterServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind(
			AuthRepositoryInterface::class,
			AuthRepository::class
		);

		$this->app->bind(
			TransactionProfileRepositoryInterface::class,
			TransactionProfileRepository::class	
		);

		$this->app->bind(
			CustomerRepositoryInterface::class,
			CustomerRepository::class	
		);
	}
}