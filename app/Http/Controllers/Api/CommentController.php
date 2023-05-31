<?php

namespace App\Http\Controllers\Api;

use App\ApiResponse\ApiResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\AddRequest;
use App\Http\Requests\Comment\EditRequest;
use App\Services\Api\Comment\AddService;
use App\Services\Api\Comment\DelService;
use App\Services\Api\Comment\EditService;
use App\Services\Api\Like\GetLikeCommentService;
use App\Services\Comment\GetCommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    use ApiResponse;

    public function index (string $id)
    {
        $likeCommentData = resolve(GetLikeCommentService::class)->setId($id)->handle();
        $commentData = resolve(GetCommentService::class)->setId($id)->handle();
        return $this->successResponse(
            "", 
            [$likeCommentData,
            $commentData,]
        ); 
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
}
