@extends('layouts.detail')

@push('style')
	@vite('resources/css/profile.css')
@endpush

@section('content')
    <section>
        <div class="position-relative img-background">
            <div class="image-slide">
                <div class="image-slide-item">
                    <img src="{{ asset('images/guideimg.svg') }}" alt="">
                </div>
                <div class="image-slide-item">
                    <img src="{{ asset('images/guideimg.svg') }}" alt="">
                </div>
                <div class="image-slide-item">
                    <img src="{{ asset('images/guideimg.svg') }}" alt="">
                </div>
            </div>
            <div class="btn-slide-container position-absolute">
            </div>
            <button class="rounded-circle bg-white position-absolute">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.57617 4.69458L2.77075 9.5L7.57617 14.3054" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.2293 9.5H2.90552" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <section class="detail">
            <div class="d-flex flex-row justify-content-between">
                <div class="detail-header">
                    <div class="mb-1">
                        <h2 class="mb-0 fs-22 fw-bolder lh-28">
                            <span>
                                Melatiah Indah
                            </span>
                            <span>
                                <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <path d="M0 22.5127H21.6105V0.902281H0V22.5127Z" fill="url(#pattern0)"/>
                                    <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_116_361" transform="scale(0.00625)"/>
                                    </pattern>
                                    <image id="image0_116_361" width="160" height="160" xlink:href="data:image/png;base64,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"/>
                                    </defs>
                                </svg>                                    
                            </span>
                        </h2>
                    </div>
                    <div class="fs-14 text-gray-2-color d-flex">
                        <span class="">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.56135 13.7L4.41135 16.2C4.22802 16.3167 4.03635 16.3667 3.83635 16.35C3.63635 16.3333 3.46135 16.2667 3.31135 16.15C3.16135 16.0333 3.04468 15.8877 2.96135 15.713C2.87802 15.5377 2.86135 15.3417 2.91135 15.125L4.01135 10.4L0.33635 7.225C0.169683 7.075 0.065683 6.904 0.0243497 6.712C-0.0176503 6.52067 -0.00531702 6.33333 0.0613497 6.15C0.128016 5.96667 0.228016 5.81667 0.36135 5.7C0.494683 5.58333 0.678016 5.50833 0.91135 5.475L5.76135 5.05L7.63635 0.6C7.71968 0.4 7.84902 0.25 8.02435 0.15C8.19902 0.0500001 8.37802 0 8.56135 0C8.74468 0 8.92402 0.0500001 9.09935 0.15C9.27402 0.25 9.40302 0.4 9.48635 0.6L11.3614 5.05L16.2113 5.475C16.4447 5.50833 16.628 5.58333 16.7614 5.7C16.8947 5.81667 16.9947 5.96667 17.0613 6.15C17.128 6.33333 17.1407 6.52067 17.0993 6.712C17.0574 6.904 16.953 7.075 16.7864 7.225L13.1113 10.4L14.2113 15.125C14.2613 15.3417 14.2447 15.5377 14.1614 15.713C14.078 15.8877 13.9613 16.0333 13.8113 16.15C13.6614 16.2667 13.4864 16.3333 13.2864 16.35C13.0864 16.3667 12.8947 16.3167 12.7113 16.2L8.56135 13.7Z" fill="#FFB31C"/>
                            </svg>                            
                        </span>
                        <div class="ms-1 detail-rate">
                            <span class="">
                                4.8
                            </span>
                            <span class="">/5</span>
                            <span class=""> | </span>
                            <span class="">9</span>
                            <span class=""> reviews</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-end">
                    <p class="fs-22 fw-bolder mb-1 lh-28">
                        <span>$</span>
                        <span>5</span>
                    </p>
                    <div class="fs-14">
                        <span>per hour</span>
                    </div>
                </div>
            </div>

            <hr class="detail-hori mt-">

            <div class="detail-interest">
                <h5 class="fs-6 fw-bolder">
                    Speciality
                </h5>
                <div>
                    <div alt="1" class="interest-tag d-inline-flex align-items-center">
                        <div class="tag-icon">
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.73022 13.8172C12.2102 13.8172 14.7302 11.4417 14.7302 7.21846H0.730225C0.730225 11.4417 3.25022 13.8172 7.73022 13.8172Z" stroke="#656565" stroke-width="1.45074" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.73022 1.71855L7.73022 4.55689" stroke="#656565" stroke-width="1.45074" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.64868 13.3742L4.07804 15.7188" stroke="#656565" stroke-width="1.45074" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.8118 13.3742L11.3824 15.7188" stroke="#656565" stroke-width="1.45074" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.3823 2.86626L11.3823 4.28542" stroke="#656565" stroke-width="1.45074" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.07812 2.86626L4.07813 4.28542" stroke="#656565" stroke-width="1.45074" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                        
                        </div>
                        <div>
                            <span>Culinary</span>
                        </div>
                    </div>
                    <div alt="2" class="interest-tag d-inline-flex align-items-center">
                        <div class="tag-icon">
                            <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.4021 11.4879C15.4021 13.2756 12.2683 14.7187 8.4021 14.7187C4.53595 14.7187 1.4021 13.2756 1.4021 11.4879" stroke="#656565" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.11889 4.36938C5.15072 4.01312 4.15277 3.7465 3.13763 3.57243C2.5194 3.46641 1.99938 3.98911 2.1039 4.6076C2.3333 5.96516 2.84063 8.11974 3.84658 9.11861C4.92351 10.1955 8.03581 10.2601 8.41274 9.88323" stroke="#656565" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.6852 4.36938C11.6534 4.01312 12.6513 3.7465 13.6665 3.57243C14.2847 3.46641 14.8047 3.98911 14.7002 4.6076C14.4708 5.96516 13.9635 8.11974 12.9575 9.11861C11.8806 10.1955 8.76828 10.2601 8.39136 9.88323" stroke="#656565" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M11.0943 6.10329C11.0943 7.58944 8.94049 9.87252 8.40202 9.87252C7.86356 9.87252 5.70972 7.58944 5.70972 6.10329C5.70972 4.68352 6.87957 2.7958 7.67699 1.67398C8.03881 1.16497 8.76524 1.16497 9.12706 1.67398C9.92448 2.7958 11.0943 4.68352 11.0943 6.10329Z" fill="white" stroke="#656565" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                                                                        
                        </div>
                        <div>
                            <span>Culture</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="detail-about">
                <h4 class="fs-6 fw-bolder">About</h4>
                <p class="fs-14 text-gray-2-color">
                    Berpengalaman tinggal lebih dari 4 tahun di Melbourne, AUS, Memiliki lebih dari 50+ rekomendasi tempat fantastis di Melbourne
                </p>
            </div>

            <div class="d-flex detail-btn-group mb-1">
                <button class="detail-btn detail-btn-change">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.6637 24.8102C26.6637 27.0557 24.8413 28.8782 22.5958 28.8782C20.3503 28.8782 18.9794 26.6164 18.9794 26.6164M18.9794 26.6164H20.8181M18.9794 26.6164V28.6504M18.5278 24.8102C18.5278 22.5647 20.334 20.7423 22.5958 20.7423C25.3091 20.7423 26.6637 23.0041 26.6637 23.0041M26.6637 23.0041V20.9701M26.6637 23.0041H24.8575" stroke="#656565" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.5001 15.5C19.0669 15.5 21.9584 12.6085 21.9584 9.04171C21.9584 5.47487 19.0669 2.58337 15.5001 2.58337C11.9332 2.58337 9.04175 5.47487 9.04175 9.04171C9.04175 12.6085 11.9332 15.5 15.5001 15.5Z" stroke="#656565" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M4.40454 28.4167C4.40454 23.4179 9.37749 19.375 15.5 19.375" stroke="#656565" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                                            
                </button>
                <button class="detail-btn detail-btn-book">
                    <span class="fs-18 fw-bolder text-white">Book Now</span>
                </button>
            </div>

        </section>
    </section>
@endsection

@push('script')
	@vite('resources/js/profile.js')
@endpush