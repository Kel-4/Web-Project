<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>delibrary</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
    *{
      font-family: 'Quicksand', sans-serif;
    }
    h5{
      margin-left: 12%;
      font-weight:bolder;
    }
    .kartu-member-balik{
      background-size: cover;
      border: 5px solid grey;
      width: 400px;
      height: 250px;
      margin-left: 20px;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }
    table{
      font-size: 12px;
    }

    .kartu-member{
      background: url('{{ asset("img/bglogin") }}');
      background-size: cover;
      border: 5px solid grey;
      width: 400px;
      height: 250px;
      margin-left: 20px;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }
    .visible-print{
      /* margin-top: 40px; */
    }
    h6{
      margin-top: -5%;
    }
    #logo{
      margin-left: 1%;
      margin-top: -7%;
    }
    .svgbot{
      margin-top: -3%;
    }
    .div-bul{
      padding: 20px; 
      margin-left: 30%;
      margin-top: -18%;
      box-shadow: rgba(17, 17, 26, 0.1) 0px 1px 0px, rgba(17, 17, 26, 0.1) 0px 8px 24px, rgba(17, 17, 26, 0.1) 0px 16px 48px;
    }

     /* table td{
      border: 1px solid black;
    } */
    .card-member{
      background-image: url('{{ asset("images/cardbg-data.jpg") }}');
      background-size: cover;
      border-radius: 10px; 
      width: 400px;
      height: 225px;
      border: 4px solid lightgrey;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }

    .card-member1{
      background-image: url('{{ asset("images/bgcard.jpg") }}');
      background-size: cover;
      border-radius: 10px; 
      width: 400px;
      height: 225px;
      border: 4px solid lightgrey;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
    }
    .cardtitle{
      margin-left: -1%;
      margin-top: 8px; 
      font-weight: 1000;
      font-size: 26px;
    }
    .logocard{
      margin-top: -13%;
      margin-left: -3%;
    }
    table{
      margin-top: -20px;
    }
    #warning{
      text-shadow: 2px 2px 5px rgba(0,0,0,0.7);
    }
    .visible-print{
      float: right;
      margin-top: -32px;
      margin-right: 14px
    }
    </style>
  </head>
  <body>
  <br><br>

  <div class="card-member1 container">
  <h5 class="cardtitle mx-3" style="color:#1F618D; text-align: justify;">Master <span style="color: #1A5276;">Member</span><br><b class="mx-5" style="color: #154360;">&nbsp;&nbsp;Card</b></h5>
  <div class="logocard">
   <center><img class="mt-4" src="{{ asset('img/logo.png') }}" alt="" width="100px">
   <h2 class="text-primary">del<span class="text-danger">ibr</span><span class="text-info">ary</span></h2>
   {{-- <h6 class="mt-2">member card</h6> --}}
  </div>
  <div class="visible-print">
    {!! QrCode::size(60)->generate(Request::url()); !!}
  </div>
   </center>
  </div>

  <div class="card-member container"><br>
  <p> &nbsp;&nbsp; <i class="fas fa-users"></i> Member Card</p>
  <div class="container mt-3">
    <table cellpadding="5px" style="width: 100%">
      <tr>
        <td>ID</td>
        <td>:</td>
        <td>AP{{ $anggota->id }}</td>
        <td rowspan=4><div class="col-md-5" style="margin-left: 30px;"><img src="{{asset('foto')}}/{{ $anggota->foto }}" class="rounded-2" style="width: 110px; height:120px; border: 1px solid" alt="Foto"></div></td>
      </tr>
      <tr width="50px">
        <td>Nama</td>
        <td>:</td>
        <td>{{ $anggota->nama }}</td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{ $anggota->alamat }}</td>
      </tr>
      <tr>
        <td>Kontak</td>
        <td>:</td>
        <td>{{ $anggota->kontak }}</td>
      </tr>
    </table>
  </div>

  <footer class="container">
      <div class="visible-print text-center mt-3">
        <p id="warning" class="text-danger" style="font-size: 8px; font-style: italic; font-weight:bold;">Jangan melipat, merusak, ataupun menghilangkan kartu member Anda!</p>
      </div>
  </footer>

    <script type="text/javascript">
      window.print();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>