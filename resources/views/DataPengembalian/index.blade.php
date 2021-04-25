<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

        <!-- Icon -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        
        <title>Halaman Data Pengembalian</title>
    </head>
    <style>
.button {
  background-color: #87CEEB; 
  color: black;
  font-size: 15px;
    width: 75px;
     height: 30px;
     text-align: center;
     border-radius: 30px;
}
</style>
    <body>
  
    <nav class="navbar">
        <div class="container">
            <label for="menu-bar" style="cursor: pointer;">
            <i class="fas fa-bars fa-2x"></i>
            </label>
            <h1 class="fw-bold" style="color: blue;"><img src="images/logo.png" style="width: 70px;" alt=""> del<span style="color: red;">ibr</span><span style="color: #41A0FF;">ary</h1>
            <div class="navbar2">
            <div class="d-flex">
            <h5><i class="fas fa-user-circle"></i> {{ Auth::user()->name }} <a href="{{ route('logout') }}" class="btn btn-danger btn-sm"><i class="fas fa-sign-out-alt"></i> Logout</a> </h5>
            </div>
            </div>
        </div>
    </nav>

    <input type="checkbox" id="menu-bar" style="display: none;">
    <div class="side-navbar container">
        <ul>
            <br>
            <li><a href="/daftarbuku"><i class="fas fa-book"></i> &nbsp;Daftar Buku</a></li>
            <li><a href="/DataPengunjung"><i class="fas fa-users"></i> &nbsp;Data Pengunjung</a> </li>
            <li><a href="/DataPeminjaman"><i class="fas fa-address-book"></i> &nbsp;Peminjaman</a> </li>
            <li><a href="/DataPengembalian"><i class="fas fa-calendar-check"></i> &nbsp;Pengembalian</a> </li>
        </ul>
    </div> 


    <div class="container">
    
        <br>
        <center><h1>DATA PENGEMBALIAN</h1></center><br><br>
        <table class="table rounded-3 table-bordered table-secondary" style="text-align:center;">
            <thead class="table-dark">
            
            <div id="info">
            <form method="GET" action="">
                <input type="hidden" name="_token" value="68laEZPlMUpkqexNGannJbCdojT3nzjmXwAQgbmK">                            
                <input type="text" name="search" id="search" size="30" class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" placeholder="Cari di sini..." value="">
                <button type="submit" class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04"><i class="fas fa-search"></i></button>
            </form>
        </div>
            
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tanggal Kembali</th> 
                    <th>Judul Buku</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $buku)
                <tr>
                    <td>{{ $buku->id_peminjaman }}</td>
                    <td>{{ $buku->nama }}</td>
                    <td>{{ $buku->tgl_kembali }}</td>
                    <td>{{ $buku->judul_buku }}</td>    
                    <td>
                    
                    <button class="btn btn-danger" id="my-button">NEW</button>
                       
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <footer class="bg-dark fixed-bottom">
    <div class="p-2">
        <h6 class="text-center text-light">delibrary Copyright&copy; Aplikasi Pengelolaan Perpustakaan. By <b class="text-warning">Kelompok 4</b> with <i class="fas fa-heart text-danger"></i></h6>
    </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script>
        var button = document.getElementById('my-button');

        button.addEventListener('click', function() {
            if (button.classList.contains('btn-danger')) {   
                button.classList.remove('btn-danger');
                button.classList.add('btn-success');
                button.innerHTML = 'VER';
                }
            else {
                button.classList.remove('btn-success');
                button.classList.add('btn-danger');
                button.innerHTML = 'NEW';
            }
        });
    </script>
  </body>
</html>