@extends('layouts.master')
@section('content')
<div class="success-screen">
    <div class="container">
        <div class="row vertical-center justify-content-center">
            <div class="col-12 col-sm-12 col-md-9 col-lg-8">
                <div class="bg-main rounded-3 shadow-sm">
                    <div class="bg-white text-center mb-4 py-3">
                        <img src="https://air-nation.com/waiv-lvpt/public/build/assets/logo.png" class="img-fluid" width="200px">
                    </div>
                    <div class="content p-3">
                        <div>
                            <div class="waiver__inner">
                                <h2>Thanks, {{$emailData['firstname']}}.</h2>
                                <p>A signed copy has been sent to {{$emailData['email']}} and is valid from {{ now()->format('d M Y') }} until {{ now()->addYears(1)->format('d M Y') }}.</p>

                                <p>Please show the signed copy (or just this screen) to one of our staff when you arrive.</p>
                                <p>If there are still guests on your booking that need to sign a waiver, you can give them this link:</p>
                                <p class="text-break">
                                    <a href="https://air-nation.com/">https://air-nation.com/</a>
                                </p>
                                <p>This link can be used by anyone to sign a waiver for Air Nation</p>
                                <h2>Waiver holders</h2>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span><strong>{{$emailData['firstname'] . ' ' . $emailData['lastname']}}</strong></span>
                                        <span class="float-end">{{\Carbon\Carbon::parse($emailData['dob'])->format('d M Y')}}</span>
                                    </li>
                                    @if(isset($emailData['minors']))
                                    @foreach($emailData['minors'] as $minor)
                                    <li class="list-group-item">
                                        <span><strong>{{$minor['firstname'] . ' ' . $minor['lastname']}}</strong> <span class="btn btn-outline-warning btn-sm">Minor</span></span>
                                        <span class="float-end">{{\Carbon\Carbon::parse($minor['dob'])->format('d M Y')}}</span>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>

                        <div class="footer">
                            <div class="buttom-btn my-3 flex">
                                <a href="{{url('/')}}" class="btn btn-primary btn-lg w-100">Sign another waiver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
