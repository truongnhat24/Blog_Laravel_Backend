@extends('layouts.new')
@push('style')
	@vite('resources/css/signin.css')
@endpush
@section('content')

<section class="col-lg-8 col-md-10 d-flex justify-content-center recovery-contain row mt-md-0">
    <div class="col-xl-6 col-md-8">
        <div class="px-md-0 px-xxl-4">
            <div class="text-center">
                <div class="px-4">
                    <img src="{{ asset('images/check_inbox.png') }}" alt="" class="img-check-inbox">
                </div>
            </div>
            <div class="mt-28 text-center">
                <h1 class="fw-bolder header-recovery">Check your inbox</h1>
                <p class="fs-6 mt-2 text-recovery text-recovery-back">
                    Click on the link we sent to <strong>asxasdasdascasx@gmail.com</strong> to finish your account setup
                </p>
            </div>
            <div class="mt-28 btn-check-group px-4">
                <a href="#" class="d-flex flex-row align-items-center justify-content-center text-decoration-none text-primary-color btn-check-inbox mb-3 btn-hover">
                    <div class="">
                        <img src="{{asset('images/Google_logo.svg ')}}" alt="">
                    </div>
                    <span class="fs-18">
                        Open Gmail
                    </span>
                </a>
                <a href="#" class="d-flex flex-row align-items-center justify-content-center text-decoration-none text-primary-color btn-check-inbox btn-hover">
                    <div class="">
                        <img src="{{asset('images/Outlook_logo.svg ')}}" alt="">
                    </div>
                    <span class="fs-18">
                        Open Outlook
                    </span>
                </a>                
            </div>
            <div class="form-signin mt-28">
                <div class="d-flex justify-content-center text-center flex-column">
                    <p class="mb-0">No email in your inbox or spam folder?</p>
                    <a href="#" class="text-decoration-none text-primary-color fs-6 fw-bolder">
                        <span>Let's resend it</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
