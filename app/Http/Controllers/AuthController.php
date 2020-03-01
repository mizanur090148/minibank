<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Repositories\AuthRepositoryInterface;
use Session;

class AuthController extends Controller
{
    private $auth;
    public function __construct(AuthRepositoryInterface $auth)
    {
        $this->auth = $auth; 
    }

    public function home()
    {
        return view('backend.pages.home');
    }

    public function signupForm()
    {
        return view('backend.forms.signup_form');
    }

    public function signupPost(SignupRequest $request)
    {
 		try {
   			$this->auth->signup($request->all());

   			Session::flash('success', 'Successfully registered');
 		} catch (Exception $e) {
 			  Session::flash('success', $e->getMessage());
 		}
 		return redirect('login');
    }

    public function login()
    {
    	return view('backend.forms.login');
    }

    public function loginPost(LoginRequest $request)
    {
      	$field = filter_var($request->usernameOrEmail, FILTER_VALIDATE_EMAIL) ? 'email' : 'personal_code';
        $request->merge([$field => $request->usernameOrEmail]);

        try {
   			$login_status = $this->auth->login($request->only($field, 'password'));
   			if ($login_status) {
   				  return redirect('dashboard');
   			}
 		} catch (Exception $e) {
 			
 		}
 		Session::flash('error', 'Sorry!! Your credentials mismatch');
 		return redirect()->back();
    }

    public function changePasswordPost(ChangePasswordRequest $request)
    {
        try {
            $input = [
                'password' => $request->new_password
            ];
            $this->auth->changePassword($input);
            
            Session::flash('success', S_UPDATE);
        } catch (Exception $e) {
            Session::flash('success', $e->getMessage());
        }
        return redirect()->back();
    }

    public function logout()
    {
        $this->auth->logout();
        return redirect('login');
    }
}
