@extends('layouts.new')
@push('style')
	@vite('resources/css/signin.css')
@endpush
@section('content')

<section class="col-md-8 d-flex justify-content-center form-signin-contain row">
    <div class="col-xl-6 col-lg-10">
        <div class="text-center d-none logo-mobile">
            <img src="{{ asset('images/logo_mobile.png') }}" alt="">
        </div>
        <div class="d-flex justify-content-center">
            <h1 class="fs-2rem">Sign in</h1>
        </div>
        <div>
            <form action="#" class="form-signin mt-4">
                <div class="d-flex flex-column mb-3">
                    <label for="email" class="mb-2">Email</label>
                    <input type="email" name="email" placeholder="Your Email">
                </div>
                <div class="d-flex flex-column mb-2">
                    <label for="password" class="mb-2">Password</label>
                    <input type="password" name="password" placeholder="Enter Your Password">
                </div>
                <div>
                    <span class="text-primary-color text-forgot-pass">Forgot password?</span>
                </div>
                <div class="px-md-2 btn-contain">
                    <button type="submit" class="btn btn-submit btn-custom">
                        <span class="text-white fs-18">Log in</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="position-relative horizon-other d-block">
            <div class="d-flex justify-content-center">
                <span class="text-other px-2 bg-white">or sign in with</span>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <a href="#" class="text-decoration-none logo-link d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/Google_logo.png') }}" alt="">
            </a>
            <a href="#" class="text-decoration-none logo-link d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/Facebook_logo.png') }}" alt=""> 
            </a>
            <a href="#" class="text-decoration-none logo-link d-flex align-items-center justify-content-center">
                <img src="{{ asset('images/Apple_logo.png') }}" alt="">
            </a>
        </div>
        <div class="fs-6 mt-28 text-center d-md-none">
            <p>
                Don't have an account?
                <a href="#" class="text-decoration-none text-primary-color fw-bolder ">
                    <span>Regiter Now</span>
                </a>
            </p>
        </div>
    </div>
</section>

@endsection
