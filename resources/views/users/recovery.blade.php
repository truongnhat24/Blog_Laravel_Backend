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
                <p class="fs-6 mt-2 text-recovery">Enter your email to reset password</p>
            </div>
            <div>
                <form action="#" class="form-signin mt-28">
                    <div class="d-flex flex-column">
                        <label for="email" class="mb-2">Email</label>
                        <input type="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="px-md-2 btn-contain mx-md-1">
                        <button type="submit" class="btn btn-submit btn-custom">
                            <span class="text-white fs-18">Reset password</span>
                        </button>
                    </div>
                    <div class="d-flex justify-content-center text-center">
                        <a href="#" class="text-decoration-none text-primary-color fs-6 fw-bolder" class="btn">
                            <span>Cancel</span>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
