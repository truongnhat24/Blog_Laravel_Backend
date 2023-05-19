<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\RegisterUserRequest;
use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\EditRequest;
use App\Services\User\EditService;
use App\Services\User\RegisterService;
use App\Services\User\LoginService;
use App\Services\User\GetUserService;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(string $id)
    {
        $usersData = resolve(GetUserService::class)->setId($id)->handle();
        return view('users/index', ['usersData' => $usersData]);
    }

    public function show(string $id)
    {
        $usersData = resolve(GetUserService::class)->setId($id)->handle();
        return view('users/view', ['usersData' => $usersData]);
    }

    public function edit(string $id)
    {
        $usersData = resolve(GetUserService::class)->setId($id)->handle();
        return view('users/edit', ['usersData' => $usersData]);
    }

    public function update(EditRequest $request, string $id)
    {
        return resolve(EditService::class)->setData($request->all())->setId($id)->handle();
    }

    public function register(RegisterUserRequest $request) 
    {
        return resolve(RegisterService::class)->setRequest($request)->handle();
    }

    public function login(LoginRequest $request)
    {
        return resolve(LoginService::class)->setRequest($request)->handle();
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerate();
        session()->flash('loggedOutMsg', __('Log out'));
        return redirect()->route('home');
    }
}