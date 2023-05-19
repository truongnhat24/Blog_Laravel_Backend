<?php

namespace App\Http\Controllers;

use App\Http\Requests\Blog\EditRequest;
use App\Http\Requests\Blog\AddRequest;
use Illuminate\Http\Request;

use App\Services\Blog\GetBlogByIdService;
use App\Services\Blog\GetBlogByIdBlogService;
use App\Services\Blog\AddService;
use App\Services\Blog\DelService;
use App\Services\Blog\EditService;
use App\Services\User\GetUserService;
use App\Services\Comment\GetCommentService;
use App\Services\Like\GetLikeCommentService;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\VarDumper\VarDumper;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $blogsData = resolve(GetBlogByIdService::class)->setId($id)->handle();
        return view('blogs/index', ['blogsData' => $blogsData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(AddRequest $request)
    {
        return resolve(AddService::class)->setRequest($request)->handle();
    }
    
    public  function createForm() 
    {
        return view('blogs/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $likeCommentData = resolve(GetLikeCommentService::class)->setBlogId($id)->setUserId(Auth::id())->handle();
        //dd($likeCommentData);
        $blogData = resolve(GetBlogByIdBlogService::class)->setId($id)->handle();
        $commentData = resolve(GetCommentService::class)->setId($id)->handle();
        $usersData = resolve(GetUserService::class)->setId(Auth::id())->handle();
        return view('blogs/view', ['blog' => $blogData, 'comment' => $commentData, 'user' => $usersData, 'likeRecords' => $likeCommentData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogData = resolve(GetBlogByIdBlogService::class)->setId($id)->handle();
        return view('blogs/edit', ['blog' => $blogData]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditRequest $request, string $id)
    {
        return resolve(EditService::class)->setRequest($request)->setId($id)->handle();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return resolve(DelService::class)->setId($id)->handle();
    }
}