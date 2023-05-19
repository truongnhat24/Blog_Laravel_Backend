@extends('layouts.app')
@push('style')
	@vite('resources/css/users.css');
@endpush
@section('content')

<div class="container">
    <div class="content">
        <h1>Qeo cam, </h1><br/>
    
        <div class="row control-group">
            <div class="control-btn col-4 d-flex justify-content-center">
                <a href="{{ route('users.viewUser', ['id' => Auth::id()]) }}" class="link-btn d-flex align-items-center flex-column">
                    <img class="img-btn" src="{{ asset('public/profile.png') }}" alt="profile">
                    <h3>My profile</h3>
                </a>
            </div>
    
            <div class="control-btn col-4 d-flex justify-content-center">
                <a href="#" class="link-btn d-flex align-items-center flex-column">
                    <img class="img-btn" src="{{ asset('public/changepass.png') }}" alt="pass">
                    <h3>Change password</h3>
                </a>
            </div>
    
            <div class="control-btn col-4 d-flex justify-content-center">
                <a href="{{ route('blogs.blogIndex', ['id' => Auth::id()]) }}" class="link-btn d-flex align-items-center flex-column">
                    <img class="img-btn" src="{{ asset('public/writeblog.png') }}" alt="add">
                    <h3>My blogs</h3>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection