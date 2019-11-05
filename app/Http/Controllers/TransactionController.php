<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests\TransactionRequest;
use App\Repositories\TransactionRepositoryInterface;
use App\Repositories\CustomerRepositoryInterface;
use Session;

class TransactionController extends Controller
{
    private $transaction;
    public function __construct(
    		TransactionRepositoryInterface $transaction,
    		CustomerRepositoryInterface $customer
    	)
    {
    	$this->transaction = $transaction; 
    	$this->customer = $customer; 
    }

    public function all()
    {
   		$with = [
   			'receiver:id,email',
   			'sender:id,email'
   		];
   		$orderByColumn = 'id';
   		$orderDirection = 'desc';
      $where = [
        'transaction_status' => OTHERS
      ];

   		$transactions = $this->transaction->all($with, $where, $orderByColumn, $orderDirection);

   		return view('backend.pages.transactions', [
   			'transactions' => $transactions
   		]);
    }

    public function create()
    {
    	$receiver_customers = $this->customer->all()->pluck('email', 'id')->all();
 	
    	return view('backend.forms.Transaction', [
   			'receiver_customers' => $receiver_customers
   		]);
    }

    public function TransactionPost(TransactionRequest $request)
    {
    	try {
    		$input = [
    			'receiver_id' => $request->receiver_id,
    			'amount' => $request->amount,
    			'sender_id' => userId(),
          'transaction_status' => OTHERS,
    			'remarks' => $request->remarks
    		];
   			$this->transaction->store($input);
        
   			Session::flash('success', S_SAVE);
   			return redirect('transactions');
   		} catch (Exception $e) {
   			Session::flash('success', $e->getMessage());
   		}
   		return redirect()->back();
    }
}
