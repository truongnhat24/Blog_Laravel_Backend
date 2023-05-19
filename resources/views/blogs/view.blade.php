@extends('layouts.app')
@push('style')
	@vite('resources/css/view_blog.css');
@endpush
@section('content')
    <section class="container blog-view">
        <div class="row">
            {!! $blog->content !!}
        </div>

        <section class="content-item mt-3" id="comments">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-10 comment-contain">

                        <form name="comment-form" class="comment-form">
                            {{ csrf_field() }}
                            <h3>Comment</h3>
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-3 col-lg-2">
                                        <img class="img-responsive" src="@if($user->image == 'NULL') {{asset('public/avatar_default.png')}} @else {{asset($user->image)}} @endif">
                                    </div>
                                    <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                        <textarea class="form-control" id="message" placeholder="Your comment" required></textarea>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="d-flex justify-content-end">
                                <button name="comment" type="submit" class="btn btn-custom-auth text-light comment-btn" alt="#">Comment</button>
                            </div>
                        </form>

                        <h3>{{ count($comment) }} Comments</h3>
                        
                        <!-- COMMENT - START -->
                        <div class="comment-ances">
                            @foreach ($comment as $data)
                                <div alt="{{ $data->id }}" class="media d-flex flex-column @if(substr_count($data->path, '.') == 1)) ms-5 @elseif (substr_count($data->path, '.') > 1)  ms-6 @endif">
                                    <div class="d-flex flex-row">
                                        <a class="pull-left" href="#"><img class="w-75 h-75 rounded-circle" src="@if($data->image == 'NULL') {{asset('public/avatar_default.png')}} @else {{asset($data->image)}} @endif"></a>
                                        <div class="media-body flex-grow-1">
                                            <h4 class="media-heading">{{ $data->name }}</h4>
                                            <p>{{ $data->comment_content }}</p>
            
                                            <div class="d-flex flex-row justify-content-between">
                                                <ul class="list-unstyled list-inline media-detail d-flex">
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        <span>
                                                            {{ $data->created_at }}
                                                        </span>
                                                    </li>
                                                    <li class="like-group @if(!empty($likeRecords) && in_array($data->id, $likeRecords)) liked @endif" alt="{{$data->id}}">
                                                        <i class="fa fa-thumbs-up like-icon"></i>
                                                        <span class="like-count" alt="{{$data->id}}">
                                                            {{$data->like_count}}
                                                        </span>
                                                    </li>
                                                </ul>
                                                <ul class="list-unstyled list-inline media-detail d-flex">
                                                    <li>
                                                        <a class="like-btn" href="" value="">
                                                            Like
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="reply-btn" value="{{$data->id}}">
                                                            Reply
                                                        </a>
                                                    </li>
                                                    @if (Auth::id() == $data->user_id) 
                                                        <li>
                                                            <a class="delete-btn" href="" value="{{$data->id}}" alt="">
                                                                Delete
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="edit-btn" value="{{$data->id}}" >
                                                                Edit
                                                            </a>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="reply-comment" alt="{{$data->id}}">
                                        <form name="reply-form" class="reply-form ps-5 mt-3">
                                            <h3 class="ps-4">Reply</h3>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-sm-3 col-lg-2">
                                                        <img class="img-responsive w-50 h-50 rounded-circle" src="={{ asset($data->image) }}">
                                                    </div>
                                                    <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                                        <textarea class="reply-content form-control" alt="{{$data->id}}"  placeholder="Your comment" required></textarea>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="d-flex justify-content-end">
                                                <button name="reply" type="button" class="btn btn-custom-auth text-light reply-button" value="{{$data->id}}" alt="">Reply</button>
                                            </div>
                                        </form>
                                    </div>
                                    @if (Auth::id() == $data->user_id)
                                        <div class="edit-comment" alt="{{$data->id}}">
                                            <form name="edit-form" class="edit-form ps-5 mt-3">
                                                <h3 class="ps-4">Edit</h3>
                                                <fieldset>
                                                    <div class="row">
                                                        <div class="col-sm-3 col-lg-2">
                                                            <img class="img-responsive w-50 h-50 rounded-circle" src="{{ asset($data->image)}}">
                                                        </div>
                                                        <div class="form-group col-xs-12 col-sm-9 col-lg-10">
                                                            <textarea class="edit-content form-control" alt="{{$data->id}}"  placeholder="Your comment" required></textarea>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="d-flex justify-content-end">
                                                    <button name="edit" type="button" class="btn btn-custom-auth text-light edit-button" value="{{$data->id}}" alt="">Edit</button>
                                                </div>
                                            </form>
                                        </div>                                                    
                                    @endif
                                    <div class="comment-reply ps-5" alt="{{$data->id}}">						
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- COMMENT - END -->

                    </div>
                </div>
            </div>
        </section>
    </section>

@endsection
@push('style')
	@vite('resources/js/blogs.js');
@endpush