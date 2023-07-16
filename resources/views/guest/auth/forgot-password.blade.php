@extends('guest.auth.default-auth')

@section('auth')
    <div class="account-area ptb-100">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <form method="post"  action="{{ route('auth.password.email') }}"  name='forgot-password'>
                        @csrf
                        <div class="account-form form-style">
                            <p>Email Address *</p>
                            <input name="email" type="email">
                            <button>SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
