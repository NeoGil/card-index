@extends('Pub::layouts.layout')


@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">{{__('public.login_title')}}</p>

            <form method="POST" class="login-form" action="{{ route('login.post') }}">
                @csrf
                <div class="input-group mb-3">
                    <input id="email" type="email"
                           class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                            placeholder="{{ __('public.email') }}" name="email" value="{{ old('email') }}" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id="password" type="password"
                           class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" placeholder="{{ __('public.password') }}" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">{{ __('public.sing_in') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        <!-- /.login-card-body -->
    </div>
@endsection
