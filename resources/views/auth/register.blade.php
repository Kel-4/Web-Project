{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Register</title>
    <style>
        @font-face {
            font-family: fontgua;
            src: url('font/Chalktastic.otf');
        }
        body{
            background-image: url('img/green-slate.jpg') ;
            font-family: fontgua;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
            font-size: 10px;
        }
        h1{
            font-size: 60px;
        }
        strong{
            text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.7);
            font-size: 16px;
        }
        .reg{
            padding: 20px;
            border-radius: 20px;
            box-shadow: rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 56px, rgba(17, 17, 26, 0.1) 0px 24px 80px;
        }
        label{
            margin-bottom: 10px;
            margin-top: 10px;
        }
        button{
            width: 100%;
        }
        input:focus{
            color: white;
        }
        input[type="text"]{
            color: white;
            font-size:;
            outline: 0;
            border-width: 0 0 2px;
            transition: 0.5s;
        }
        input[type="email"]{
            font-size:;
            outline: 0;
            border-width: 0 0 2px;
            transition: 0.5s;
        }
        input[type="password"]{
            font-size:;
            outline: 0;
            border-width: 0 0 2px;
            transition: 0.5s;
        } 
        h6 a{
            color: lightblue;
        }
    </style>
  </head>
  <body>
    <h1 class="text-center mt-3">delibrary</h1><br>
    <div class="justify-content-center container col-8 reg">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h3 class="text-center"><i style="font-size: 27px" class="fas fa-registered"></i> REGISTER</h3><br>
        <div class="row">
        <div class="col-md-6">
            <label for=""><h6>NAMA</h6></label>
            <input id="name" style="color: white;" type="text" class="form-control bg-transparent @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Your name"  autocomplete="off" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror<br>
            <label for=""><h6>USERNAME</h6></label>
            <input id="username" style="color: white;" type="text" class="form-control bg-transparent @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Your username"  autocomplete="off" autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror<br>
        </div>
        <div class="col-md-6">
            <label for=""><h6>EMAIL</h6></label>
            <input id="email" style="color: white;" type="email" class="form-control bg-transparent @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your email"  autocomplete="off">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for=""><h6>PASSWORD</h6></label>
            <input id="password" style="color: white;" type="password" class="form-control bg-transparent @error('password') is-invalid @enderror" name="password" placeholder="Your password"  autocomplete="off">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <br>
            <label for="password-confirm" class="col-md-12 col-form-label text-md-right"><h6>{{ __('CONFIRM PASSWORD') }}</h6></label>
                <div class="">
                    <input style="color: white;" id="password-confirm" type="password" class="form-control bg-transparent" name="password_confirmation" placeholder="Confirm your password" autocomplete="off">
                </div>
          </div>
        <div class="mt-4 col-8 container">
        <div class="row container">
            <div class="col-md-6 container">
                <button type="submit" class="btn btn-outline-light">
                   <b><i class="fas fa-user-plus"></i> {{ __('REGISTER') }}</b>
                </button>
                {{-- <button type="submit" class="btn btn-outline-light"><i class="fas fa-user-plus"></i> &nbsp;<b id="daftar">DAFTAR</b></button>&nbsp; --}}
            </div>
            <div class="col-md-6 container">
                <button type="reset" class="btn btn-outline-light"><i class="fas fa-times-circle"></i> &nbsp;<b id="reset">RESET</b></button>
            </div><br>
            <h6 class="text-center mt-3">HAVE AN ACCOUNT? <a class="" href="/">LOGIN HERE</a></h6>
        </div>
    </div>
    </form>
    </div>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>