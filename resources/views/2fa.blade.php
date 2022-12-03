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
    
                        <h4 class="text-muted text-center font-size-18"><b>Sign In</b></h4>
    
                        <div class="p-3">
                            <form method="POST" action="{{ route('2fa.post') }}">
                                @csrf              
                                <p class="text-center">We sent code to email : {{ substr(auth()->user()->email, 0, 5) . '******' . substr(auth()->user()->email,  -2) }}</p>         
                                @if ($message = Session::get('success'))        
                                    <div class="row">        
                                      <div class="col-md-12">        
                                          <div class="alert alert-success alert-block">        
                                            <button type="button" class="close" data-dismiss="alert">×</button>         
                                              <strong>{{ $message }}</strong>        
                                          </div>       
                                      </div>        
                                    </div>        
                                @endif              
                                @if ($message = Session::get('error'))        
                                    <div class="row">        
                                      <div class="col-md-12">        
                                          <div class="alert alert-danger alert-block">        
                                            <button type="button" class="close" data-dismiss="alert">×</button>         
                                              <strong>{{ $message }}</strong>        
                                          </div>        
                                      </div>        
                                    </div>        
                                @endif           
                                <div class="form-group row">        
                                    <label for="code" class="col-md-4 col-form-label text-md-right">Code</label>           
                                    <div class="col-md-6">        
                                        <input id="code" type="number" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>        
                                         @error('code')
        
                                        <span class="invalid-feedback" role="alert">        
                                            <strong>{{ $message }}</strong>        
                                        </span>        
                                        @enderror        
                                    </div>        
                                </div>        
                                <div class="form-group row mb-0">        
                                    <div class="col-md-8 offset-md-4">        
                                        <a class="mt-3 mb-3 btn-link" href="{{ route('2fa.resend') }}">Resend Code?</a>        
                                    </div>        
                                </div>            
                                <div class="form-group row mb-0">        
                                    <div class="col-md-8 offset-md-4">        
                                        <button type="submit" class="btn btn-primary">        
                                            Submit        
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

       