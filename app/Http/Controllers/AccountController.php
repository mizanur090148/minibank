<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\CustomerRepositoryInterface;
use App\HTTP\Requests\AccountProfileRequest;
use Session;

class AccountController extends Controller
{
    private $model;
    public function __construct(CustomerRepositoryInterface $model)
    {
    	$this->model = $model; 
    }

    public function changeAccountInfo()
    {
   		$accountInfo = $this->model->find(userId());

      return view('backend.forms.change_account_info', [
        'accountInfo' => $accountInfo
      ]);
    }
   
    public function changeAccountInfoPost(AccountProfileRequest $request)
    {
    	try {    		
   			$this->model->update($request->except('_token'));
        
   			Session::flash('success', S_UPDATE);   			
   		} catch (Exception $e) {
   			Session::flash('success', $e->getMessage());
   		}
   		return redirect()->back();
    }
}
