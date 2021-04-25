<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('css/loginstyle.css') }}" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <title>delibrary</title>
  </head>
  <body style='background-image: url("{{asset('img/bglogin.png')}}");'>
    <br><br><br><br><br>
    <div class="container card" style="width: 23rem;">
    <center>
        <h2><img src="{{ asset('img/logo.png')}}" width="80px" alt="">&nbsp;&nbsp;<b class="title" style="color: navy;">del<b style="color: red;">ibr</b><b style="color: #07C8E3;">ary</b></b></h2>
        <p  style=" margin-right: -83px; margin-top: -28px; font-size: 10px; font-style: italic;">Manage Your Library Better</p>
        </center><br>
    <form class="form container" method="POST" action="{{route('login')}}">
        @csrf
        <div class="loginbody">
        <label for="username"><i class="fas fa-user-circle"></i> Username</label>
        <input id="username" class="form-control border-top-0" type="email" name="email"><br>
        <label class="show-icon" for="show-password"> <i class="fas fa-eye"></i></label>
          <input style="display: none;" type="checkbox" id="show-password">
        <label for="password"><i class="fas fa-key"></i> Password</label>
        <input id="password" class="form-control" type="password" name="password"><br><br>
        <center><button class="btn btn">Login</button></center><br>
        
        {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>{{ session('message') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div> --}}
    </form>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('message'))
    <script src="{{ asset('js/loginalert.js') }}"></script>
    @endif
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    @include('sweetalert::alert')
  </body>
  <script type="" src="{{ asset('js/script.js') }}"></script>
</html>