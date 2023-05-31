<?php

namespace App\Http\Controllers\Api;

use App\ApiResponse\ApiResponse;
use App\Http\Requests\Blog\EditRequest;
use App\Http\Requests\Blog\AddRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Services\Api\Post\GetBlogByIdService;
use App\Services\Blog\GetBlogByIdBlogService;
use App\Services\Api\Post\AddService;
use App\Services\Api\Post\DelService;
use App\Services\Api\Post\EditService;
use App\Services\User\GetUserService;
use App\Services\Comment\GetCommentService;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

class BlogController extends Controller 
{
    use ApiResponse;
    public function index (string $id)
    {
        return resolve(GetBlogByIdService::class)->setId($id)->handle();
    }
    public function create(AddRequest $request)
    {
        return resolve(AddService::class)->setRequest($request)->handle();
    }

    public function update(EditRequest $request, string $id)
    {
        return resolve(EditService::class)->setRequest($request)->setId($id)->handle();
    }
    
    public function destroy(string $id)
    {
        return resolve(DelService::class)->setId($id)->handle();
    }

    public function show(string $id)
    {
        return resolve(GetBlogByIdBlogService::class)->setId($id)->handle();
    }
}