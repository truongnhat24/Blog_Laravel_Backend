@extends('layouts.detail')

@push('style')
	@vite('resources/css/order.css')
@endpush

@section('content')
    <section class="">
        <div class="detail-header position-relative">
            <div class="detail-text">
                <span class="fs-24 fw-bolder text-white">Order Detail</span>
            </div>
            <div class="d-flex detail-progress justify-content-between align-items-center">
                <div class="progress-group d-flex flex-row align-items-center">
                    <span class="progress-head active">1</span>
                    <span class="fs-10">Order Detail</span>
                </div>
                <div class="process-hori"></div>
                <div class="progress-group d-flex flex-row align-items-center center-hori position-relative">
                    <span class="progress-head">2</span>
                    <span class="fs-10">Payment Detail</span>
                </div>
                <div class="process-hori"></div>
                <div class="progress-group d-flex flex-row align-items-center">
                    <span class="progress-head">3</span>
                    <span class="fs-10">Pay</span>
                </div>
            </div>
            <button class="position-absolute rounded-circle">
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3676 6.42416L3.79175 13L10.3676 19.5758" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22.2083 13H3.97583" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>                    
            </button>
        </div>

        <div class="info-guide mt-28 px-3">
            <div class="d-flex flex-row align-items-center info-header px-3 pt-2 pb-3">
                <div class="info-img">
                    <img src="{{ asset('images/infoguide.png') }}" alt="">
                </div>
                <div class="d-flex flex-column">
                    <span class="fw-bolder fs-6 text-white">
                        Melatiah Indah
                    </span>
                    <span class="fs-10 text-white">
                        Melbourne Tour Guide
                    </span>
                </div>
            </div>

            <div class="info-detail px-2">
                <div class="info-type">
                    <span class="fs-14 fw-bolder">Type</span>
                    <div>
                        <div alt="1" class="interest-tag d-inline-flex align-items-center">
                            <div class="tag-icon">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.70831 10.0018C8.91866 10.0018 10.7245 8.19599 10.7245 4.98564H0.692139C0.692139 8.19599 2.49796 10.0018 5.70831 10.0018Z" stroke="#656565" stroke-width="1.075" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.7085 0.80481L5.7085 2.96243" stroke="#656565" stroke-width="1.075" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.50024 9.66479L3.09133 11.4471" stroke="#656565" stroke-width="1.075" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.91675 9.66479L8.32567 11.4471" stroke="#656565" stroke-width="1.075" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.32568 1.67726L8.32568 2.75607" stroke="#656565" stroke-width="1.075" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.09131 1.67726L3.09131 2.75607" stroke="#656565" stroke-width="1.075" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>                                    
                            </div>
                            <div>
                                <span class="fs-10">Culinary</span>
                            </div>
                        </div>
                        <div alt="2" class="interest-tag d-inline-flex align-items-center">
                            <div class="tag-icon">
                                <svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.83219 8.08909C8.25761 8.67631 7.45627 9.04075 6.5698 9.04075C5.68334 9.04075 4.882 8.67632 4.30742 8.0891C4.2046 8.10158 4.09992 8.10801 3.99373 8.10801C2.57104 8.10801 1.41772 6.95469 1.41772 5.532C1.41772 4.23825 2.37146 3.16726 3.61421 2.98376C4.07038 1.79623 5.22166 0.953339 6.5698 0.953339C7.91794 0.953339 9.06922 1.79622 9.52539 2.98375C10.7682 3.16722 11.722 4.23822 11.722 5.532C11.722 6.95469 10.5686 8.10801 9.14595 8.10801C9.03974 8.10801 8.93503 8.10158 8.83219 8.08909Z" stroke="#656565" stroke-width="1.10378" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.31812 5.60606L6.52868 6.81662V11.2553" stroke="#656565" stroke-width="1.10378" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.52856 6.81662L7.73912 5.60606" stroke="#656565" stroke-width="1.10378" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div>
                                <span class="fs-10">Culture</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="info-hori px-2">
                <div class="info-abi d-inline-flex flex-wrap flex-row">
                    <span class="fs-12">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.00415 12.8333C2.76498 12.8333 2.56665 12.635 2.56665 12.3958V1.60417C2.56665 1.36501 2.76498 1.16667 3.00415 1.16667C3.24332 1.16667 3.44165 1.36501 3.44165 1.60417V12.3958C3.44165 12.635 3.24332 12.8333 3.00415 12.8333Z" fill="#292D32"/>
                            <path opacity="0.4" d="M10.5116 7.1925L9.79997 6.48083C9.6308 6.335 9.53164 6.11917 9.5258 5.88C9.51414 5.6175 9.61914 5.355 9.81164 5.1625L10.5116 4.4625C11.1183 3.85583 11.3458 3.2725 11.1533 2.81167C10.9666 2.35667 10.3891 2.10583 9.53747 2.10583H3.00414C2.88164 2.11167 2.78247 2.21084 2.78247 2.33334V9.33333C2.78247 9.45583 2.88164 9.555 3.00414 9.555H9.53747C10.3775 9.555 10.9433 9.29833 11.1358 8.8375C11.3283 8.37083 11.1066 7.79333 10.5116 7.1925Z" fill="#292D32"/>
                        </svg>
                        <span>
                            Indonesian nationality    
                        </span>
                    </span>
                    <span class="fs-12">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M11.0834 5.25001C11.0834 6.09584 10.8326 6.87168 10.4009 7.51918C9.77092 8.45251 8.77342 9.11167 7.61258 9.28084C7.41425 9.31584 7.21008 9.33334 7.00008 9.33334C6.79008 9.33334 6.58591 9.31584 6.38758 9.28084C5.22675 9.11167 4.22925 8.45251 3.59925 7.51918C3.16758 6.87168 2.91675 6.09584 2.91675 5.25001C2.91675 2.99251 4.74258 1.16667 7.00008 1.16667C9.25758 1.16667 11.0834 2.99251 11.0834 5.25001Z" fill="#292D32"/>
                            <path d="M12.3957 10.7742L11.4332 11.0017C11.2174 11.0542 11.0482 11.2175 11.0015 11.4333L10.7974 12.2908C10.6865 12.7575 10.0915 12.8975 9.78238 12.53L6.99988 9.33333L4.21738 12.5358C3.90822 12.9033 3.31322 12.7633 3.20238 12.2967L2.99822 11.4392C2.94572 11.2233 2.77655 11.0542 2.56655 11.0075L1.60405 10.78C1.16072 10.675 1.00322 10.1208 1.32405 9.79999L3.59905 7.52499C4.22905 8.45833 5.22655 9.11751 6.38738 9.28667C6.58572 9.32167 6.78988 9.33917 6.99988 9.33917C7.20988 9.33917 7.41405 9.32167 7.61238 9.28667C8.77322 9.11751 9.77072 8.45833 10.4007 7.52499L12.6757 9.79999C12.9965 10.115 12.839 10.6692 12.3957 10.7742Z" fill="#292D32"/>
                            <path d="M7.3384 3.48833L7.68257 4.17666C7.72923 4.26999 7.85173 4.36333 7.96257 4.38083L8.58673 4.48582C8.9834 4.54999 9.07673 4.84166 8.7909 5.12749L8.30673 5.61165C8.22507 5.69332 8.1784 5.85083 8.20757 5.96749L8.34757 6.56833C8.4584 7.04083 8.20757 7.22748 7.78757 6.97665L7.20423 6.63249C7.09923 6.56832 6.92423 6.56832 6.81923 6.63249L6.2359 6.97665C5.8159 7.22165 5.56507 7.04083 5.6759 6.56833L5.8159 5.96749C5.83923 5.85666 5.7984 5.69332 5.71673 5.61165L5.23257 5.12749C4.94673 4.84166 5.04007 4.55582 5.43673 4.48582L6.0609 4.38083C6.1659 4.36333 6.2884 4.26999 6.33507 4.17666L6.67923 3.48833C6.8484 3.11499 7.15173 3.11499 7.3384 3.48833Z" fill="#292D32"/>
                        </svg>
                        <span>
                            Vaksin Covid 19    
                        </span>
                    </span>
                    <span class="fs-12">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M9.91675 5.25C9.91675 7.5075 7.95675 9.33333 5.54175 9.33333L4.99925 9.98666L4.67842 10.3717C4.40425 10.6983 3.87925 10.6283 3.69841 10.2375L2.91675 8.51665C1.85508 7.76998 1.16675 6.58583 1.16675 5.25C1.16675 2.9925 3.12675 1.16666 5.54175 1.16666C7.30341 1.16666 8.82592 2.14083 9.50842 3.54083C9.77092 4.06 9.91675 4.6375 9.91675 5.25Z" fill="#292D32"/>
                            <path d="M12.8334 7.50166C12.8334 8.83749 12.1451 10.0217 11.0834 10.7683L10.3018 12.4892C10.1209 12.88 9.59593 12.9558 9.32176 12.6233L8.45843 11.585C7.04676 11.585 5.78677 10.9608 4.99927 9.98667L5.54176 9.33334C7.95676 9.33334 9.91676 7.5075 9.91676 5.25C9.91676 4.6375 9.77093 4.06001 9.50843 3.54084C11.4159 3.97834 12.8334 5.58833 12.8334 7.50166Z" fill="#292D32"/>
                            <path d="M6.99992 5.6875H4.08325C3.84409 5.6875 3.64575 5.48917 3.64575 5.25C3.64575 5.01083 3.84409 4.8125 4.08325 4.8125H6.99992C7.23909 4.8125 7.43742 5.01083 7.43742 5.25C7.43742 5.48917 7.23909 5.6875 6.99992 5.6875Z" fill="#292D32"/>
                        </svg>
                        <span>
                            Can speak English
                        </span>
                    </span>
                </div>
                <hr class="info-hori px-2">
                <div class="info-date">
                    <span class="fw-bolder fs-14">Date</span>
                    <div class="d-flex flex-row justify-content-start">
                        <div class="fs-12 d-flex flex-column">
                            <span>Tanggai Mulai</span>
                            <div class="d-flex flex-column info-price text-gray-color w-100">
                                <span class="fw-bolder">
                                    Sab, 23 Juli 2022
                                </span>
                                <span>
                                    Pukul 10.00
                                </span>
                            </div>
                        </div>
                        <div class="info-date-arrow align-self-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.0249 4.94166L17.0832 10L12.0249 15.0583" stroke="#949494" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.9165 10H16.9415" stroke="#949494" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>                                
                        </div>
                        <div class="fs-12 d-flex flex-column">
                            <span>Tanggai Selesai</span>
                            <div class="d-flex flex-column info-price text-gray-color w-100">
                                <span class="fw-bolder">
                                    Min, 24 Juli 2022
                                </span>
                                <span>
                                    Pukul 07.00
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="detail-info-guide mt-12 px-4 pt-3 pb-5">
            <div class="d-flex flex-row justify-content-between">
                <div>
                    <span class="fs-6 fw-bolder" >Detail Pemesan</span>
                </div>
                <div>
                    <span class="fs-14 text-primary-color me-2">Edit</span>
                </div>
            </div>
            <div class="info-group mt-3 p-3">
                <div>
                    <span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M8.00008 8.20873C9.84103 8.20873 11.3334 6.82772 11.3334 5.12415C11.3334 3.42059 9.84103 2.03957 8.00008 2.03957C6.15913 2.03957 4.66675 3.42059 4.66675 5.12415C4.66675 6.82772 6.15913 8.20873 8.00008 8.20873Z" fill="#292D32"/>
                            <path d="M7.99994 9.75101C4.65994 9.75101 1.93994 11.8238 1.93994 14.3779C1.93994 14.5506 2.08661 14.6863 2.27327 14.6863H13.7266C13.9133 14.6863 14.0599 14.5506 14.0599 14.3779C14.0599 11.8238 11.3399 9.75101 7.99994 9.75101Z" fill="#292D32"/>
                        </svg>                            
                    </span>
                    <span class="fs-14 ms-18">
                        Ravi Ramadhani
                    </span>
                </div>
                <div>
                    <span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M7.85992 9.40796L5.67992 11.4253C5.43992 11.2279 5.20659 11.0243 4.97992 10.8145C4.29325 10.1729 3.67325 9.5005 3.11992 8.79722C2.57325 8.09393 2.13325 7.39065 1.81325 6.69354C1.49325 5.99025 1.33325 5.31782 1.33325 4.67622C1.33325 4.25672 1.41325 3.85573 1.57325 3.48558C1.73325 3.10926 1.98659 2.76379 2.33992 2.45533C2.76659 2.06667 3.23325 1.87543 3.72659 1.87543C3.91325 1.87543 4.09992 1.91244 4.26659 1.98647C4.43992 2.0605 4.59325 2.17155 4.71325 2.33194L6.25992 4.34926C6.37992 4.50349 6.46659 4.64538 6.52659 4.7811C6.58659 4.91065 6.61992 5.0402 6.61992 5.15742C6.61992 5.30548 6.57325 5.45354 6.47992 5.59543C6.39325 5.73732 6.26659 5.88538 6.10659 6.03344L5.59992 6.5208C5.52659 6.58866 5.49325 6.66886 5.49325 6.76757C5.49325 6.81692 5.49992 6.8601 5.51325 6.90946C5.53325 6.95881 5.55325 6.99582 5.56659 7.03284C5.68659 7.23642 5.89325 7.5017 6.18659 7.82249C6.48659 8.14329 6.80659 8.47025 7.15325 8.79722C7.39325 9.01314 7.62659 9.22289 7.85992 9.40796Z" fill="#292D32"/>
                            <path d="M14.6466 11.9497C14.6466 12.1224 14.6132 12.3013 14.5466 12.474C14.5266 12.5234 14.5066 12.5728 14.4799 12.6221C14.3666 12.8442 14.2199 13.0539 14.0266 13.2514C13.6999 13.5845 13.3399 13.8251 12.9332 13.9793C12.9266 13.9793 12.9199 13.9855 12.9132 13.9855C12.5199 14.1335 12.0932 14.2137 11.6332 14.2137C10.9532 14.2137 10.2266 14.0657 9.4599 13.7634C8.69324 13.4611 7.92657 13.0539 7.16657 12.5419C6.90657 12.363 6.64657 12.1841 6.3999 11.9929L8.5799 9.97554C8.76657 10.1051 8.93324 10.2038 9.07324 10.2717C9.10657 10.284 9.14657 10.3025 9.19324 10.321C9.24657 10.3395 9.2999 10.3457 9.3599 10.3457C9.47324 10.3457 9.5599 10.3087 9.63324 10.2408L10.1399 9.77813C10.3066 9.6239 10.4666 9.50668 10.6199 9.43265C10.7732 9.34628 10.9266 9.3031 11.0932 9.3031C11.2199 9.3031 11.3532 9.32778 11.4999 9.3833C11.6466 9.43882 11.7999 9.51902 11.9666 9.6239L14.1732 11.0736C14.3466 11.1847 14.4666 11.3142 14.5399 11.4685C14.6066 11.6227 14.6466 11.7769 14.6466 11.9497Z" fill="#292D32"/>
                        </svg>                            
                    </span>
                    <span class="fs-14 ms-18">
                        +6285280002925
                    </span>
                </div>
                <div>
                    <span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.4" d="M11.3333 12.9002H4.66659C2.66659 12.9002 1.33325 11.9748 1.33325 9.81561V5.49721C1.33325 3.338 2.66659 2.41263 4.66659 2.41263H11.3333C13.3333 2.41263 14.6666 3.338 14.6666 5.49721V9.81561C14.6666 11.9748 13.3333 12.9002 11.3333 12.9002Z" fill="#292D32"/>
                            <path d="M7.99993 8.19311C7.43993 8.19311 6.87327 8.03272 6.43994 7.70575L4.35327 6.16347C4.13993 6.00307 4.09994 5.71312 4.27327 5.5157C4.4466 5.31829 4.75994 5.28128 4.97327 5.44168L7.05993 6.98396C7.5666 7.36028 8.4266 7.36028 8.93326 6.98396L11.0199 5.44168C11.2333 5.28128 11.5533 5.31212 11.7199 5.5157C11.8933 5.71312 11.8599 6.00924 11.6399 6.16347L9.55327 7.70575C9.1266 8.03272 8.55993 8.19311 7.99993 8.19311Z" fill="#292D32"/>
                        </svg>                            
                    </span>
                    <span class="fs-14 ms-18">
                        raviramadhani13@gmail.com
                    </span>
                </div>
            </div>
        </div>

        <hr class="horizon-main">

        <div class="detail-note mt-2 py-3 px-4">
            <div>
                <span class="fs-6 fw-bolder">Permintaan Khusus</span>
            </div>
            <div class="mt-12">
                <textarea name="note" id="note" placeholder="Silakan isi permintaanmu di sini" class="note-text"></textarea>
            </div>
        </div>

        <div class="detail-button">
            <button class="btn-fill fs-6 fw-bolder">
                Lanjutkan
            </button>
        </div>
    </section>
@endsection

@push('script')
	@vite('resources/js/profile.js')
@endpush