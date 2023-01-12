@extends('layouts.frontend.app')
@section('title')
    Register
@endsection
@push('styles')
    
@endpush
@section('content')
<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <div class="register-form">
                    <div class="title">
                        <h3>No Account? Register</h3>
                        <p>Registration takes less than a minute but gives you full control over your orders.</p>
                    </div>
                    <form class="row" method="post" action="{{ route('signup.store') }}">
                        @csrf
                        <div class="col-sm-6">
                            <x-front.inputbox labelName="First Name" required="required" name="first_name" />
                        </div>
                        <div class="col-sm-6">
                            <x-front.inputbox labelName="Last Name" required="required" name="last_name"/>
                        </div>
                        <div class="col-sm-6">
                            <x-front.inputbox labelName="Email" required="required" name="email" type="email" />
                        </div>
                        <div class="col-sm-6">
                            <x-front.inputbox labelName="Phone" optional="(Optional)" name="phone"  type="tel"/>
                        </div>
                        <div class="col-sm-6">
                            <x-front.inputbox labelName="Password" required="required" name="password" type="password"/>
                        </div>
                        <div class="col-sm-6">
                            <x-front.inputbox labelName="Confirm Password" required="required" name="password_confirmation" type="password"/>
                        </div>
                        <div class="button">
                            <button class="btn" type="submit">Register</button>
                        </div>
                        <p class="outer-link">Already have an account? <a href="{{ url('signin') }}">Login Now</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    
@endpush