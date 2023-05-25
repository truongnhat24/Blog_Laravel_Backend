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
                <h1 class="fw-bolder header-recovery">Reset Password</h1>
            </div>
            <div>
                <form action="#" class="form-signin mt-28">
                    <div class="d-flex flex-column">
                        <label for="npassword" class="mb-2">New Password</label>
                        <input type="password" name="npassword" placeholder="New Password">
                    </div>
                    <div class="d-flex flex-column mt-28">
                        <label for="cpassword" class="mb-2">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password">
                    </div>
                    <div class="px-md-2 btn-contain mx-md-1">
                        <button type="submit" class="btn btn-submit btn-custom">
                            <span class="text-white fs-18">Submit</span>
                        </button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
