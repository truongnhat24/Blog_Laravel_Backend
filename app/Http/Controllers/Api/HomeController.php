<?php

namespace App\Http\Controllers\Api;

use App\ApiResponse\ApiResponse;
use App\Http\Requests\Blog\EditRequest;
use App\Http\Requests\Blog\AddRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Services\Blog\GetBlogByIdService;
use App\Services\Blog\GetBlogByIdBlogService;
use App\Services\Api\Post\AddService;
use App\Services\Api\Post\DelService;
use App\Services\Api\Post\EditService;
use App\Services\User\GetUserService;
use App\Services\Comment\GetCommentService;
use App\Services\Like\GetLikeCommentService;
use App\Services\Api\Post\GetAllBlogsService;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

class HomeController extends Controller 
{
    use ApiResponse;

    public function index()
    {
        return resolve(GetAllBlogsService::class)->handle();
    }
}