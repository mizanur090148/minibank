<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TransactionProfileRepositoryInterface;

class TransactionProfileController extends Controller
{
    
    private $tp;
    public function __construct(TransactionProfileRepositoryInterface $tp)
    {
    	$this->tp = $tp;
    }

    public function index()
    {   		
   		$orderByColumn = 'id';
   		$orderDirection = 'desc';
	    $where = [
	        'transaction_status' => OWN
	    ];
   		$deposites = $this->tp->all($with = [], $where, $orderByColumn, $orderDirection);

   		return view('backend.pages.transaction_profiles', [
   			'deposites' => $deposites
   		]);
    }

    public function create()
    {
    	return view('backend.forms.transaction_profile');
    }

    public function TransactionPost(DepositRequest $request)
    {
    	try {
    		$input = [
    			'receiver_id' => userId(),
    			'amount' => $request->amount,
    			'sender_id' => userId(),
    			'remarks' => $request->remarks
    		];
   			$this->transaction->store($input);
        
   			Session::flash('success', S_SAVE);
   			return redirect('deposites');
   		} catch (Exception $e) {
   			Session::flash('success', $e->getMessage());
   		}
   		return redirect()->back();
    }

    public function accountInfo()
    {

      $transactions = $this->transaction->accountInfo();;
      
      $total_deposit = $transactions->where('receiver_id', userId())
          ->where('transaction_status', OWN)
          ->sum('amount');

      $total_sent = $transactions->where('sender_id', userId())
          ->where('transaction_status', OTHERS)
          ->sum('amount');

      $current_balance = $total_deposit - $total_sent; 

      return view('backend.pages.account', [
        'current_balance' => $current_balance,
        'total_deposit' => $total_deposit,
        'total_sent' => $total_sent
      ]);     
    }
}
