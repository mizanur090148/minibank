<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TransactionProfileRepositoryInterface;
use App\Http\Requests\TransactionProfileRequest;
use Session;

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
	    $where = [];

   		$transaction_profiles = $this->tp->all($with = [], $where, $orderByColumn, $orderDirection);

   		return view('backend.pages.transaction_profiles', [
   			'transaction_profiles' => $transaction_profiles
   		]);
    }

    public function create()
    {
    	return view('backend.forms.transaction_profile', [
        'transaction_profile' => null
      ]);
    }

    public function store(TransactionProfileRequest $request)
    {
    	try {    		
   			$this->tp->store($request->all());        
   			Session::flash('success', S_SAVE);
   			return redirect('transaction-profiles');
   		} catch (Exception $e) {
   			Session::flash('success', $e->getMessage());
   		}
   		return redirect()->back();
    }

    public function edit($id)
    {
      try {
        $transaction_profile = $this->tp->show($id);

        return view('backend.forms.transaction_profile', [
          'transaction_profile' => $transaction_profile
        ]);

      } catch (Exception $e) {
        Session::flash('success', $e->getMessage());
      }
      return redirect()->back();
    }

    public function update($id, TransactionProfileRequest $request)
    {
      try {
        $this->tp->update($id, $request->all());
        Session::flash('success', S_UPDATE);
        return redirect('transaction-profiles');
      } catch (Exception $e) {
        Session::flash('success', $e->getMessage());
      }
      return redirect()->back();
    }

    public function show($id)
    {
      $transaction_profile = $this->tp->show($id);

      return view('backend.pages.show_transaction_profile', [
        'transaction_profile' => $transaction_profile
      ]);
    }

    public function destroy($id)
    {
      try {
        $this->tp->destroy($id);
        Session::flash('success', S_DELETE);
        return redirect('transaction-profiles');
      } catch (Exception $e) {
        Session::flash('success', $e->getMessage());
      }
      return redirect()->back();
    }    
}
