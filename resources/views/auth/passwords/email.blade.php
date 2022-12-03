@extends('admin.login_master')

        <div class="wrapper-page">
            <div class="container-fluid p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center mt-4">
                            <div class="mb-3">
                                <a href="index.html" class="auth-logo">
                                    <img src="assets/images/logo-dark.png" height="30" class="logo-dark mx-auto" alt="">
                                    <img src="assets/images/logo-light.png" height="30" class="logo-light mx-auto" alt="">
                                </a>
                            </div>
                        </div>
    
                        <h4 class="text-muted text-center font-size-18"><b>{{ __('Reset Password') }}</b></h4>
    
                        <div class="p-3">
                            @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                            <form class="form-horizontal mt-3" action="{{ route('password.email') }}" method="post">
                                @csrf                       
                                <div class="form-group mb-3 row">
                                    <div class="col-12">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>    
    
                                <div class="form-group mb-0 row mt-2">
                                    <div class="col-12 mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>                                     
                                    </div>                                   
                                </div>
                            </form>
                        </div>
                        <!-- end -->
                    </div>
                    <!-- end cardbody -->
                </div>
                <!-- end card -->
            </div>
            <!-- end container -->
        </div>
        <!-- end -->

       