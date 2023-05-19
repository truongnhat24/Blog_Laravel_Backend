@extends('layouts.app')
@push('style')
	@vite('resources/css/users.css');
@endpush
@section('content')

<div class="container">
    <form method="POST" enctype="multipart/form-data" action="{{ route('users.editUser',$usersData->id)}}">
        {{ csrf_field() }}
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
            <div class="col-sm-10">
            <input name="name" type="text" class="form-control" id="name" placeholder="name" value = "{{ $usersData->name }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
            <input name="email" type="text" class="form-control" id="email" placeholder="email" value = "{{ $usersData->email }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
            <input name="phone" type="text" class="form-control" id="phone" placeholder="phone" value = "{{ $usersData->phone }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
            <input name="address" type="text" class="form-control" id="address" placeholder="address" value = "{{ $usersData->address }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="career" class="col-sm-2 col-form-label">Career</label>
            <div class="col-sm-10">
            <input name="career" type="text" class="form-control" id="career" placeholder="career" value = "{{ $usersData->career }}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="image" class="col-sm-2 col-form-label">image</label>
            <div class="col-sm-10 image-upload">
                <input name="image" type="file" class="form-control" id="image" placeholder="image">
                @if($usersData->image == "NULL")
                    <img alt="avatar" class="img-thumbnail profile-image" src="{{asset('public/avatar_default.png')}}">
                @else 
                    <img alt="avatar" class="img-thumbnail profile-image" src="{{asset($usersData->image)}}">
                @endif
            </div>
        </div>
        <div class="row mb-3">
            <div class="offset-sm-2 col-sm-10">
                <button name="edit-btn" type="submit" class="btn btn-custom-auth text-light">Edit</button>
            </div>
        </div>
    </form>
</div>

@endsection
