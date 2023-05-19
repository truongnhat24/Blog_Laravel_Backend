@extends('layouts.app')
@push('style')
	@vite('resources/css/users.css');
@endpush
@section('content')

<section class="profile-page">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('users.userIndex', ['id' => Auth::id()]) }}">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">                        
                        <img alt="avatar" class="rounded-circle img-fluid profile-avatar" src="@if($usersData->image == "NULL") {{asset('public/avatar_default.png')}} @else {{asset($usersData->image)}} @endif">
                        <h5 class="my-3">{{ $usersData->name }}</h5>
                        <p class="text-muted mb-1">Career: {{ $usersData->career }}</p>
                        <p class="text-muted mb-4">Address: {{ $usersData->address }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $usersData->name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $usersData->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $usersData->phone }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ $usersData->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('users.editUserForm', ['id' => $usersData->id]) }}" class="btn btn-custom-auth text-light ">Edit</a>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
