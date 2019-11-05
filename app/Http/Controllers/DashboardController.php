<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TransactionRepositoryInterface;

class DashboardController extends Controller
{
    private $transaction;
    public function __construct(TransactionRepositoryInterface $transaction)
    {
    	$this->transaction = $transaction;
    }

    public function dashboard()
    {
    	$transactions = $this->transaction->accountInfo();;
      
		$total_deposit = $transactions->where('receiver_id', userId())
			->where('transaction_status', OWN)
			->sum('amount');

		$total_sent = $transactions->where('sender_id', userId())
			->where('transaction_status', OTHERS)
			->sum('amount');

		$current_balance = $total_deposit - $total_sent; 

    	return view('backend.pages.dashboard', [
    		'current_balance' => $current_balance,
			'total_deposit' => $total_deposit,
			'total_sent' => $total_sent
    	]);
    }
}