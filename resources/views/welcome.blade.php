@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row vertical-center">
        <form action="{{route('email-check')}}" class="bg-main col-6 mx-auto p-0 rounded-3 shadow-sm" method="POST">
            @csrf
            <div class="text-center mb-4 bg-white">
                <img src="https://cdn.rollerdigital.com/image/ZYgohD-N7ES84oOr_J6Q_A.png">
            </div>
            <div class="content p-5">
                <h1>{{env('APP_NAME')}}</h1>
                <b>Unsure if you have an existing waiver? Enter your email address and we'll let you know.</b>

                <div class="input-group my-5">
                    <input type="email" name="email" class="form-control ch-50" placeholder="Pleas enter your email" required>
                    @error('email')
                        
                    @enderror
                    <button class="btn btn-primary w-25" type="submit">Continue</button>
                </div>
                <p class="text-muted">You must be 18 or older to sign this document.</p>
            </div>
        </form>
    </div>
</div>
@endsection
