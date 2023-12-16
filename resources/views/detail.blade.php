@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row vertical-center">
        <form action="{{route('detail-submit')}}" class="bg-main col-6 mx-auto p-0 rounded-3 shadow-sm" id="detail-submit" method="POST">
            @csrf
            <input type="hidden" name="isEmail" value="{{$isEmail}}">
            <input type="hidden" name="email" value="{{$email}}">
            <div class="text-center mb-4 bg-white">
                <img src="https://cdn.rollerdigital.com/image/ZYgohD-N7ES84oOr_J6Q_A.png">
            </div>
            <div class="content px-5">
                <div class="back-btn">
                    <a href="{{url('/')}}" class="btn btn-outline-dark">
                        <svg width="24px" height="24px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#9D9A9B" stroke="#9D9A9B">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill="#9D9A9B" d="M224 480h640a32 32 0 1 1 0 64H224a32 32 0 0 1 0-64z"></path>
                                <path fill="#9D9A9B" d="m237.248 512 265.408 265.344a32 32 0 0 1-45.312 45.312l-288-288a32 32 0 0 1 0-45.312l288-288a32 32 0 1 1 45.312 45.312L237.248 512z"></path>
                            </g>
                        </svg>
                        <span class="ps-2">Back</span>
                    </a>
                </div>
                @if($isEmail)
                <div class="already-form">
                    <div class="text-center">
                        <svg width="100px" height="100px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M12 2C6.49 2 2 6.49 2 12C2 17.51 6.49 22 12 22C17.51 22 22 17.51 22 12C22 6.49 17.51 2 12 2ZM16.78 9.7L11.11 15.37C10.97 15.51 10.78 15.59 10.58 15.59C10.38 15.59 10.19 15.51 10.05 15.37L7.22 12.54C6.93 12.25 6.93 11.77 7.22 11.48C7.51 11.19 7.99 11.19 8.28 11.48L10.58 13.78L15.72 8.64C16.01 8.35 16.49 8.35 16.78 8.64C17.07 8.93 17.07 9.4 16.78 9.7Z" fill="#292D32"></path>
                            </g>
                        </svg>
                    </div>
                    <h2>Looks like you already have a valid waiver at Ninja Warrior UK Adventure Park Wigan.</h2>
                    <div class="py-5">
                        <p>Would you like to add a waiver for minors or dependants?</p>
                        <div class="input-group">
                            <label for="radio-yes me-3">
                                <input type="radio" value="1" name="minor" required id="radio-yes">
                                Yes
                            </label>
                            <label class="ms-3" for="radio-no">
                                <input type="radio" value="0" name="minor" required id="radio-no">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                @endif
                <div class="detail-form mt-3">
                    <h2>Your Details</h2>
                    <p>I'm signing on behalf of a minor or dependent</p>
                    <div class="input-group">
                        <label for="isminor-yes me-3">
                            <input type="radio" value="1" name="isminor" required id="isminor-yes">
                            Yes
                        </label>
                        <label class="ms-3" for="isminor-no">
                            <input type="radio" value="0" name="isminor" required id="isminor-no" checked>
                            No
                        </label>
                    </div>
                    <div class="row py-5">
                        <div class="col-12 mb-4 isMinor dnone">
                            <label class="text-info">YOUR DETAILS (GUARDIAN)</label>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter the first name" required>
                                @error('firstname')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter the last name" required>
                                @error('lastname')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="dob" id="dob" required>
                                @error('dob')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter the phone number" required>
                                @error('phone')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="minor-form isMinor dnone" data-count="0">
                        
                    </div>
                    <div class="col-12 isMinor dnone">
                        <div class="mb-3 float-end">
                            <button type="button" class="addMinor btn btn-success btn-sm">
                                <svg width="20px" height="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#fff" stroke="#fff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <title></title>
                                        <g id="Complete">
                                            <g data-name="add" id="add-2">
                                                <g>
                                                    <line fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="12" x2="12" y1="19" y2="5"></line>
                                                    <line fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="5" x2="19" y1="12" y2="12"></line>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="buttom-btn mb-3 flex">
                        <button class="btn btn-primary w-100 ch-50" type="submit">Continue</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@push('js')
    <script>

        var minorCount = $('.minor-form').data('count');
        function addMinor(count){
            return `<div class="minor-list">
                <div class="col-12 mb-4">
                    <label class="text-info">MINOR ${count}</label>
                    <button type="button" class="removeMinor btn btn-danger float-end btn-sm">
                        <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M10 12V17" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M14 12V17" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M4 7H20" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="minors[${count}][firstname]" placeholder="Enter the first name" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="minors[${count}][lastname]" placeholder="Enter the last name" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label">Date of birth</label>
                        <input type="date" class="form-control" name="minors[${count}][dob]" required>
                    </div>
                </div>
            </div>`;
        }

        function minorYes(){
            minorCount++;
            $('.minor-form').append(addMinor(minorCount));
            $('.minor-form').data('count', minorCount);
            $('.isMinor').removeClass('dnone');
        }
        function minorNo(){
            minorCount = 0;
            $('.minor-form').html('');
            $('.minor-form').data('count', minorCount);
            $('.isMinor').addClass('dnone');
        }

        function checkMinor(){
            minorCount = $('.minor-form').data('count');
            if(minorCount == 0){
                $('#isminor-no').prop('checked', true);
                minorNo();
            }
        }

        
        $(document).ready(function(){
            $('#isminor-yes').click(function(){
                minorYes();
            });
            $('#isminor-no').click(function(){
                minorNo();
            });

            $(document).on('click', '.addMinor', function(){
                minorCount++;
                $('.minor-form').append(addMinor(minorCount));
                $('.minor-form').data('count', minorCount);
            });
            $(document).on('click', '.removeMinor', function(){
                minorCount--;
                $('.minor-form').data('count', minorCount);
                $('.minor-list').last().remove();
                checkMinor();
            });
            
        });
    </script>
@endpush
