@extends('layouts.master')
@section('content')
<div class="welcome-screen">
    <div class="container">
        <div class="row justify-content-center vertical-center">
            <div class="col-12 col-sm-12 col-md-10 col-lg-8">
                <div class="bg-main rounded-3 shadow-sm">
                    <form action="{{route('email-check')}}" method="POST">
                        @csrf
                        <div class="bg-white text-center mb-4 py-3">
                            <img src="https://air-nation.com/waiv-lvpt/public/build/assets/logo.png" class="img-fluid" width="200px">
                        </div>
                        <div class="content p-3 m-md-4">
                            <h2 class="fw-bold">Air Nation Waiver</h2>
                            <b>Unsure if you have an existing waiver? Enter your email address and we'll let you know.</b>

                            <div class="input-group my-5">
                                <input type="email" name="email" class="form-control ch-50" placeholder="Pleas enter your email" required>
                                @error('email')
                                    
                                @enderror
                                <button  type="submit" class="btn btn-primary input-group-text">Continue</button>
                            </div>
                            <ul>
                                <li class="text-muted">16 and Over must sign the waiver for themselves.</li>
                                <li class="text-muted">You must be 18 or older to sign this Waiver  on behalf of a minor or a dependent.</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
