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
use App\Services\Like\GetLikeCommentService;
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
        //dd(123);
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
        $likeCommentData = resolve(GetLikeCommentService::class)->setBlogId($id)->setUserId(Auth::id())->handle();
        $blogData = resolve(GetBlogByIdBlogService::class)->setId($id)->handle();
        $commentData = resolve(GetCommentService::class)->setId($id)->handle();
        $usersData = resolve(GetUserService::class)->setId(Auth::guard('api-member')->id())->handle();
        return $this->successResponse(
            "", 
            [$likeCommentData, 
            $blogData, 
            $commentData,
            $usersData]
        ); 
    }
}