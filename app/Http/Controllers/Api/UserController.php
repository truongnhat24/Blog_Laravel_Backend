<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\EditRequest;
use App\Services\Api\User\EditService;
use App\Services\Api\Auth\LoginService;
use Illuminate\Http\RedirectResponse;
use App\ApiResponse\ApiResponse;

class UserController extends Controller
{
    use ApiResponse;
    public function update(EditRequest $request, string $id)
    {
        return resolve(EditService::class)->setData($request->all())->setId($id)->handle();
    }
    public function login(LoginRequest $request)
    {
        return resolve(LoginService::class)->setRequest($request)->handle();
    }

    public function logout()
    {
        try 
        {
            Auth::logout();
            session()->invalidate();
            session()->regenerate();
            session()->flash('loggedOutMsg', __('Log out'));
            return $this->successResponse('Logout Succeed', []);            
        } catch (Exception $e) 
        {
            return $this->errorResponse('Failed', []) ;
        }
    }
}