<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Register</title>
    <style>
        @font-face {
            font-family: fontgua;
            src: url('font/Chalk Stick.otf');
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
        input[type="text"]{
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
        h5 a{
            color: lightblue;
        }
    </style>
  </head>
  <body><br><br>
    <h1 class="text-center mt-3">delibrary</h1><br>
    <div class="justify-content-center container col-8 reg">
        <form action="">
            <h5 class="text-center"><i style="font-size: 22px" class="fas fa-registered"></i> REGISTER</h5><br>
        <div class="row">
        <div class="col-md-6">
            <label for=""><h6>NAMA</h6></label>
            <input type="text" class="form-control bg-transparent text-light" placeholder="YOUR NAME"><br>
            <label for=""><h6>USERNAME</h6></label>
            <input type="text" class="form-control bg-transparent text-light" placeholder="YOUR USERNAME"><br>
            <label for=""><h6>EMAIL</h6></label>
            <input type="email" class="form-control bg-transparent text-light" placeholder="YOUR EMAIL"><br>
        </div>
        <div class="col-md-6">
            <label for=""><h6>TOKEN</h6></label>
            <input type="text" class="form-control bg-transparent text-light" placeholder="TYPE TOKEN"><br>
            <label for=""><h6>PASSWORD</h6></label>
            <input type="password" class="form-control bg-transparent text-light" placeholder="YOUR PASSWORD">
        </div>
        <div class="mt-4 col-8 container">
        <div class="row container">
            <div class="col-md-6 container">
                <button type="submit" class="btn btn-outline-light"><i class="fas fa-user-plus"></i> &nbsp;<b id="daftar">DAFTAR</b></button>&nbsp;
            </div>
            <div class="col-md-6 container">
                <button type="reset" class="btn btn-outline-light"><i class="fas fa-times-circle"></i> &nbsp;<b id="reset">RESET</b></button>
            </div><br>
            <h5 class="text-center mt-3">HAVE AN ACCOUNT? <a class="" href="/">LOGIN HERE</a></h5>
        </div>
    </div>
    </form>
    </div>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>