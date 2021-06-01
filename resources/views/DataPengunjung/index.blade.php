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

        <title>Data Pengunjung</title>
        <style>
            th, td{
                text-align:center;
            }
            #info{
                float:right;
            }
        </style>
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
            <h5><i class="fas fa-user-circle"></i> {{ Auth::user()->name }};<a href="{{ route('logout') }}" class="btn btn-danger btn-sm"><i class="fas fa-sign-out-alt"></i> Logout</a> </h5>
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
        <center><h1>DATA PENGUNJUNG</h1></center><br><br>
        <div class="info1"> <h4><a href="/DataPengunjung/tambah" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Tambah Data</a></h4></div>
        <br>
        <div id="info">
            <form method="GET">
                <div class="info1container d-flex"><input type="search" id="cari" size="35" name="cari"class="form-control rounded-pill " style="font-family: Arial, FontAwesome;" value="{{Request::get('cari')}}" placeholder="&#xf002 Ketik Keyword Pencarian....">&nbsp;&nbsp;<button id="bcari" class="btn btn-outline-primary rounded-circle" type="submit"><i class="fas fa-search"></i></button></div>
            </form>
        </div> 

        <table class="table rounded-3 table-striped">
            <thead>
                <tr>
                    <th>ID Anggota</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal terdaftar</th>
                    <th>Kontak</th>
                    <th>Alamat</th>
                    <th>Status Pinjam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=1 ?>
                @foreach ($data as $pengunjung)
                <tr>
                    <td>PE00{{ $i }}</td>
                    <td>{{ $pengunjung->nama }}</td>
                    <td>{{ $pengunjung->jenis_kelamin }}</td>
                    <td>{{ $pengunjung->tanggal_terdaftar }}</td>
                    <td>{{ $pengunjung->kontak }}</td>
                    <td>{{ $pengunjung->alamat }}</td>
                    <td>{{ $pengunjung->status_pinjam }}</td>
                    <td>
                        <a href="/DataPengunjung/ubah/{{ $pengunjung->id }}"><i class="far fa-edit btn btn-success"></i></a>
                        <a href="/DataPengunjung/hapus/{{ $pengunjung->id }}"><i class="fas fa-trash-alt btn btn-danger"></i></a>
                        <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Print Card Member" href="/DataPengunjung/cetak_kartu/{{ $pengunjung->id }}"> <i class="fas text-light fa-id-card btn btn-warning"></i></a>
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="item rounded-3 fs-6">
            &nbsp;Menampilkan
            {{ $data->firstItem() }}
            -
            {{ $data->lastItem() }}
            dari
            {{ $data->total() }}
            entri data
        </div>
        <div class="pagination mt-3">
            {{ $data->links() }}
        </div>
    </div>
    <br><br>
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
    @include('sweetalert::alert')
  </body>
</html>