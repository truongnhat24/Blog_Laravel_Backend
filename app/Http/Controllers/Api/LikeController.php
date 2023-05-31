<?php

namespace App\Http\Controllers\Api;

use App\ApiResponse\ApiResponse;
use App\Http\Controllers\Controller;
use App\Services\Api\Like\AddService;
use Illuminate\Http\Request;
use App\Http\Requests\Like\LikeRequest;

class LikeController extends Controller
{
    use ApiResponse;

    public function index (string $id)
    {
        return resolve(GetCommentService::class)->setId($id)->handle();
    }

    public function create(LikeRequest $request)
    {
        return resolve(AddService::class)->setRequest($request)->handle();
    }
}
