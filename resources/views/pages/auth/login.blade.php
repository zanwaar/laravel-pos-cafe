@extends('layouts.auth')

@section('title', 'Login')

@push('style')
<!-- CSS Libraries -->
<link rel="stylesheet" href="{{ asset('library/bootstrap-social/bootstrap-social.css') }}">
@endpush

@section('main')
<div class="card card-success mt-5">

    <div class="card-body">
        <div class="login-brand" style="padding: 0; margin:0;">
            <img src="{{ asset('img/logo.jpeg') }}" alt="logo" width="100" class="">
        </div>
        <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email')
                        is-invalid
                    @enderror" name="email" tabindex="1" autofocus>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="form-group">
                <div class="d-block">
                    <label for="password" class="control-label">Password</label>

                </div>
                <input id="password" type="password" class="form-control @error('password')
                        is-invalid
                    @enderror" name="password" tabindex="2">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                    @enderror

                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block" tabindex="4">
                        Login
                    </button>
                </div>
        </form>


    </div>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush