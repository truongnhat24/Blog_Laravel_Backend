<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\RegisterUserRequest;
use App\Services\Api\User\RegisterService;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(RegisterUserRequest $request) 
    {
        return resolve(RegisterService::class)->setRequest($request)->handle();
    }
}