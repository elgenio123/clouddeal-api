@extends('auth.default')

@section('auth-pages')
    <div class="account-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="account-form form-style">
                        <p>New Password *</p>
                        <input type="Password">
                        <p>Confirm Password *</p>
                        <input type="Password">
                        <button>SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection