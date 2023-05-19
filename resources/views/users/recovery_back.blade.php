@extends('layouts.new')
@push('style')
	@vite('resources/css/signin.css')
@endpush
@section('content')

<section class="col-lg-8 col-md-10 d-flex justify-content-center recovery-contain row mt-md-0">
    <div class="col-xl-6 col-md-8">
        <div class="px-md-0 px-xxl-4">
            <div class="text-center">
                <img src="{{ asset('images/recovery.png')}}" alt="" class="w-100">
            </div>
            <div class="mt-28 text-center">
                <h1 class="fw-bolder header-recovery">Password recovery</h1>
                <p class="fs-6 mt-2 text-recovery text-recovery-back">
                    If an account exists for wlewlewle@gmail.com, 
                    you will get an email with instructions on resetting your password. 
                    If it doesn't arrive, be sure to check your spam folder.
                </p>
            </div>
            <div>
                <div class="form-signin mt-28">
                    <div class="d-flex justify-content-center text-center">
                        <a href="#" class="text-decoration-none text-primary-color fs-6 fw-bolder" class="btn">
                            <span>Back to Login</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
