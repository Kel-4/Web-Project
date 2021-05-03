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

        <!-- Iconify Script -->
        <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Halaman Daftar Peminjaman</title>
    </head>
  <body>
    
    <nav class="navbar">
        <div class="container">
            <label for="menu-bar" style="cursor: pointer;">
            <i class="fas fa-bars fa-2x"></i>
            </label>
            <h1 class="fw-bold" style="color: blue;"><img src="images/logo.png" style="width: 70px;" alt=""> del<span style="color: red;">ibr</span><span style="color: #41A0FF;">ary</h1>
            <div class="navbar2">
            <div class="d-flex">
                <h5><i class="fas fa-user-circle"></i> {{ Auth::user()->name }} &nbsp;<a href="{{ route('logout') }}" class="btn btn-danger btn-sm"><i class="fas fa-sign-out-alt"></i> Logout</a> </h5>
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
        <center><h1>TAMBAH DATA</h1></center><br><br>
        <h4><a href="/DataPeminjaman" class="badge bg-info">Kembali</a></h4><br><br>
        
        <div class="hero rounded-3 px-5 pb-5 pt-5">
            <form enctype="multipart/form-data" action="/DataPeminjaman/simpan" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="id_peminjaman">ID</label>
                    <input type="text" name="id_peminjaman" id="id_peminjaman" class="form-control" autocomplete="off">
                </div>
                @error('id_peminjaman')
                    <div class="alert-danger mt-1">{{$message}}</div>
                @enderror

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off">
                </div>
                @error('id_peminjaman')
                    <div class="alert-danger mt-1">{{$message}}</div>
                @enderror

                <div class="form-group mt-3">
                    <label for="judul_buku">Judul Buku</label>
                    <input type="text" name="judul_buku" id="judul_buku" class="form-control" autocomplete="off">
                </div>
                @error('judul_buku')
                    <div class="alert-danger mt-1">{{$message}}</div>
                @enderror

                <div class="form-group mt-3">
                    <label for="tgl_pinjam">Tgl Pinjam</label>
                    <input type="text" name="tgl_pinjam" id="tgl_pinjam" class="form-control" autocomplete="off">
                </div>
                @error('tgl_pinjam')
                    <div class="alert-danger mt-1">{{$message}}</div>
                @enderror

                <div class="form-group mt-3">
                    <label for="tgl_jatuh_tempo">Tgl Jatuh Tempo</label>
                    <input type="text" name="tgl_jatuh_tempo" id="tgl_jatuh_tempo" class="form-control" autocomplete="off">
                </div>
                @error('tgl_jatuh_tempo')
                    <div class="alert-danger mt-1">{{$message}}</div>
                @enderror

                <div class="form-group mt-3">
                    <label for="tgl_kembali">Tgl Kembali</label>
                    <input type="text" name="tgl_kembali" id="tgl_kembali" class="form-control" autocomplete="off">
                </div>
                @error('tgl_kembali')
                    <div class="alert-danger mt-1">{{$message}}</div>
                @enderror

                <div class="form-group">
                <br><br>
                    <button type="submit" class="btn btn-success px-5">Tambah</button>
                </div>
            </form>
        </div>
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
  </body>
</html>