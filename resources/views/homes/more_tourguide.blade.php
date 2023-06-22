@extends('layouts.detail')

@push('style')
	@vite('resources/css/homepage.css')
@endpush

@section('content')
    <section class="container">
        <div class="more-guide-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex flex-row align-items-center">
                    <div>
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3675 6.42419L3.79169 13L10.3675 19.5759" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22.2083 13H3.97583" stroke="#292D32" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                        
                    </div>
                    <span class="fs-22 fw-bolder ms-3">Chat with Tour Guide</span>
                </div>
                <div>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.0625 19.0313C5.11875 19.0313 1.09375 15.0063 1.09375 10.0625C1.09375 5.11875 5.11875 1.09375 10.0625 1.09375C15.0063 1.09375 19.0313 5.11875 19.0313 10.0625C19.0313 15.0063 15.0063 19.0313 10.0625 19.0313ZM10.0625 2.40625C5.83625 2.40625 2.40625 5.845 2.40625 10.0625C2.40625 14.28 5.83625 17.7188 10.0625 17.7188C14.2888 17.7188 17.7188 14.28 17.7188 10.0625C17.7188 5.845 14.2888 2.40625 10.0625 2.40625Z" fill="#292D32"/>
                        <path d="M19.25 19.9063C19.0838 19.9063 18.9175 19.845 18.7863 19.7138L17.0363 17.9638C16.7825 17.71 16.7825 17.29 17.0363 17.0363C17.29 16.7825 17.71 16.7825 17.9638 17.0363L19.7138 18.7863C19.9675 19.04 19.9675 19.46 19.7138 19.7138C19.5825 19.845 19.4163 19.9063 19.25 19.9063Z" fill="#292D32"/>
                    </svg>                        
                </div>
            </div>
            <div class="d-flex justify-content-between fs-14 mt-3">
                <div>
                    <span>Filter by</span>
                </div>
                <div>
                    <span class="text-red-color">Delete Filter</span>
                </div>
            </div>
            <div class="filter-guide d-flex flex-row flex-wrap justify-content-start mt-3">
                <div class="select-contain">
                    <select class="select-guide" name="gender" id="gender-guide">
                        <option value="" disabled selected hidden>
                            Gender 
                            <span>
                                <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 1.5L5 5.5L1 1.5" stroke="#949494" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </option>
                        <option value="1">Man</option>
                        <option value="2">Woman</option>
                    </select>
                </div>
                <div class="select-contain">
                    <select class="select-guide" name="rating" id="rating-guide">
                        <option value="" disabled selected hidden>Rating</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="select-contain">
                    <select class="select-guide" name="price" id="price-guide">
                        <option value="" disabled selected hidden>Price</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </div>
                <div class="select-contain">
                    <select class="select-guide" name="country" id="country-guide">
                        <option value="" disabled selected hidden>Country</option>
                        <option value="1">New York</option>
                        <option value="2">Moscow</option>
                        <option value="3">Beijing</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="more-guide-body">
            <div class="tour-guide-member d-flex flex-row align-items-center pb-20">
                <div class="guide-avatar me-3">
                    <img src="{{ asset('images/guide2.png')}}" alt="1" class="h-100">
                </div>
                <div class="d-flex flex-column flex-grow-1">
                    <div>
                        <span class="fw-bolder fs-6 lh-20 text-wrap">Satya Winnie</span>
                    </div>
                    <div class="d-flex flex-row align-items-end flex-wrap">
                        <div class="d-flex flex-column flex-grow-1">
                            <span class="fs-12 text-gray-2-color mt-6 lh-15">Singapore Tour Guide</span>
                            <div class="fs-12 text-gray-2-color d-flex mt-1 lh-15">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.40724 11.7286L4.7718 13.8689C4.6112 13.9688 4.4433 14.0116 4.26809 13.9973C4.09289 13.9831 3.93959 13.926 3.80819 13.8261C3.67679 13.7262 3.57458 13.6015 3.50158 13.452C3.42858 13.3019 3.41398 13.1341 3.45778 12.9486L4.4214 8.9035L1.20206 6.18536C1.05605 6.05695 0.964949 5.91055 0.92874 5.74618C0.891948 5.58238 0.902752 5.422 0.961153 5.26505C1.01955 5.1081 1.10715 4.97968 1.22396 4.8798C1.34076 4.77992 1.50136 4.71571 1.70576 4.68718L5.95441 4.32333L7.59693 0.513664C7.66994 0.342443 7.78323 0.214026 7.93683 0.128416C8.08984 0.0428054 8.24664 0 8.40724 0C8.56785 0 8.72494 0.0428054 8.87854 0.128416C9.03155 0.214026 9.14455 0.342443 9.21755 0.513664L10.8601 4.32333L15.1087 4.68718C15.3131 4.71571 15.4737 4.77992 15.5905 4.8798C15.7073 4.97968 15.7949 5.1081 15.8533 5.26505C15.9117 5.422 15.9228 5.58238 15.8866 5.74618C15.8498 5.91055 15.7584 6.05695 15.6124 6.18536L12.3931 8.9035L13.3567 12.9486C13.4005 13.1341 13.3859 13.3019 13.3129 13.452C13.2399 13.6015 13.1377 13.7262 13.0063 13.8261C12.8749 13.926 12.7216 13.9831 12.5464 13.9973C12.3712 14.0116 12.2033 13.9688 12.0427 13.8689L8.40724 11.7286Z" fill="#FFB31C"/>
                                </svg>
                                <span class="ms-1">4.8/5</span>
                            </div>
                            <span class="fw-bolder fs-6 mt-12 lg-20">$20</span>
                        </div>
                        <div class="guide-chat">
                            <button class="btn btn-fill text-white fw-bolder">
                                Chat
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tour-guide-member d-flex flex-row align-items-center pb-20">
                <div class="guide-avatar me-3">
                    <img src="{{ asset('images/guide2.png')}}" alt="1" class="h-100">
                </div>
                <div class="d-flex flex-column flex-grow-1">
                    <div>
                        <span class="fw-bolder fs-6 lh-20 text-wrap">Satya Winnie</span>
                    </div>
                    <div class="d-flex flex-row align-items-end flex-wrap">
                        <div class="d-flex flex-column flex-grow-1">
                            <span class="fs-12 text-gray-2-color mt-6 lh-15">Singapore Tour Guide</span>
                            <div class="fs-12 text-gray-2-color d-flex mt-1 lh-15">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.40724 11.7286L4.7718 13.8689C4.6112 13.9688 4.4433 14.0116 4.26809 13.9973C4.09289 13.9831 3.93959 13.926 3.80819 13.8261C3.67679 13.7262 3.57458 13.6015 3.50158 13.452C3.42858 13.3019 3.41398 13.1341 3.45778 12.9486L4.4214 8.9035L1.20206 6.18536C1.05605 6.05695 0.964949 5.91055 0.92874 5.74618C0.891948 5.58238 0.902752 5.422 0.961153 5.26505C1.01955 5.1081 1.10715 4.97968 1.22396 4.8798C1.34076 4.77992 1.50136 4.71571 1.70576 4.68718L5.95441 4.32333L7.59693 0.513664C7.66994 0.342443 7.78323 0.214026 7.93683 0.128416C8.08984 0.0428054 8.24664 0 8.40724 0C8.56785 0 8.72494 0.0428054 8.87854 0.128416C9.03155 0.214026 9.14455 0.342443 9.21755 0.513664L10.8601 4.32333L15.1087 4.68718C15.3131 4.71571 15.4737 4.77992 15.5905 4.8798C15.7073 4.97968 15.7949 5.1081 15.8533 5.26505C15.9117 5.422 15.9228 5.58238 15.8866 5.74618C15.8498 5.91055 15.7584 6.05695 15.6124 6.18536L12.3931 8.9035L13.3567 12.9486C13.4005 13.1341 13.3859 13.3019 13.3129 13.452C13.2399 13.6015 13.1377 13.7262 13.0063 13.8261C12.8749 13.926 12.7216 13.9831 12.5464 13.9973C12.3712 14.0116 12.2033 13.9688 12.0427 13.8689L8.40724 11.7286Z" fill="#FFB31C"/>
                                </svg>
                                <span class="ms-1">4.8/5</span>
                            </div>
                            <span class="fw-bolder fs-6 mt-12 lg-20">$20</span>
                        </div>
                        <div class="guide-chat">
                            <button class="btn btn-fill text-white fw-bolder">
                                Chat
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tour-guide-member d-flex flex-row align-items-center pb-20">
                <div class="guide-avatar me-3">
                    <img src="{{ asset('images/guide2.png')}}" alt="1" class="h-100">
                </div>
                <div class="d-flex flex-column flex-grow-1">
                    <div>
                        <span class="fw-bolder fs-6 lh-20 text-wrap">Satya Winnie Satya Winnie Satya Winnie Satya Winnie</span>
                    </div>
                    <div class="d-flex flex-row align-items-end flex-wrap">
                        <div class="d-flex flex-column flex-grow-1">
                            <span class="fs-12 text-gray-2-color mt-6 lh-15">Singapore Tour Guide</span>
                            <div class="fs-12 text-gray-2-color d-flex mt-1 lh-15">
                                <svg width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.40724 11.7286L4.7718 13.8689C4.6112 13.9688 4.4433 14.0116 4.26809 13.9973C4.09289 13.9831 3.93959 13.926 3.80819 13.8261C3.67679 13.7262 3.57458 13.6015 3.50158 13.452C3.42858 13.3019 3.41398 13.1341 3.45778 12.9486L4.4214 8.9035L1.20206 6.18536C1.05605 6.05695 0.964949 5.91055 0.92874 5.74618C0.891948 5.58238 0.902752 5.422 0.961153 5.26505C1.01955 5.1081 1.10715 4.97968 1.22396 4.8798C1.34076 4.77992 1.50136 4.71571 1.70576 4.68718L5.95441 4.32333L7.59693 0.513664C7.66994 0.342443 7.78323 0.214026 7.93683 0.128416C8.08984 0.0428054 8.24664 0 8.40724 0C8.56785 0 8.72494 0.0428054 8.87854 0.128416C9.03155 0.214026 9.14455 0.342443 9.21755 0.513664L10.8601 4.32333L15.1087 4.68718C15.3131 4.71571 15.4737 4.77992 15.5905 4.8798C15.7073 4.97968 15.7949 5.1081 15.8533 5.26505C15.9117 5.422 15.9228 5.58238 15.8866 5.74618C15.8498 5.91055 15.7584 6.05695 15.6124 6.18536L12.3931 8.9035L13.3567 12.9486C13.4005 13.1341 13.3859 13.3019 13.3129 13.452C13.2399 13.6015 13.1377 13.7262 13.0063 13.8261C12.8749 13.926 12.7216 13.9831 12.5464 13.9973C12.3712 14.0116 12.2033 13.9688 12.0427 13.8689L8.40724 11.7286Z" fill="#FFB31C"/>
                                </svg>
                                <span class="ms-1">4.8/5</span>
                            </div>
                            <span class="fw-bolder fs-6 mt-12 lg-20">$20</span>
                        </div>
                        <div class="guide-chat">
                            <button class="btn btn-fill text-white fw-bolder">
                                Chat
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
	@vite('resources/js/profile.js')
@endpush