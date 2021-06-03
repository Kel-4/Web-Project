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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <title>Halaman Data Peminjaman</title>
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
            <li><a href="/DataAnggota"><i class="fas fa-users"></i> &nbsp;Data Anggota</a> </li>
            <li><a href="/DataPeminjaman"><i class="fas fa-address-book"></i> &nbsp;Peminjaman</a> </li>
            <li><a href="/DataPengembalian"><i class="fas fa-calendar-check"></i> &nbsp;Pengembalian</a> </li>
        </ul>
    </div> 

    <div class="container">
        <br>
        <center><h1>DATA PEMINJAMAN</h1></center><br>

        <div id="info">
        <div class="info1"> <h4><a href="/DataPeminjaman/tambah" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Tambah Data</a></h4></div>
            <div class="info1"><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-question" aria-hidden="true"></i>&nbsp;Info</button></div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Peraturan Peminjaman Buku</h5>
                    </div>
                    <div class="modal-body justify-content">
                       Peminjaman buku perpustakaan dapat dilakukan dengan syarat : <br><br>
                       1. Memiliki kartu anggota perpustakaan <br>
                       2. Data peminjam telah terdaftar di data perpustakaan <br>
                       3. Setiap peminjam hanya boleh meminjam maksimal sebanyak 2 buku setiap peminjaman <br> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="info">
            <form class="form-inline" method="get">
                <div class="info1"><input type="search" name="cari" size="50" class="form-control" style="font-family: Arial, FontAwesome;" value="{{Request::get('cari')}}" placeholder="&#xf002 Ketik Keyword Pencarian...."></div>
                <div class="info1"><button class="btn btn-outline-light" type="submit">Cari !</button></div>
            </form>
        </div>

        <table class="table table-bordered table-striped" style="text-align:center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Judul Buku</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Jatuh Tempo</th>
                    <th>Tgl Kembali</th> 
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=0 ?>
                @foreach ($data as $pinjam)
                <tr>
                    <td>PM{{ $data->firstItem() + $i }}</td>
                    <td>{{ $pinjam->nama  }}</td>
                    <td>{{ $pinjam->judul }}</td>
                    <td>{{ $pinjam->tgl_pinjam }}</td>
                    <td>{{ $pinjam->tgl_jatuh_tempo }}</td>
                    <td>{{ $pinjam->tgl_kembali }}</td>
                    <td>
                        <a href="/DataPeminjaman/hapus/{{ $pinjam->id }}" class="badge bg-danger">hapus</a>
                        <a href="/DataPeminjaman/ubah/{{ $pinjam->id }}" class="badge bg-warning">ubah</a>
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
        <br>
        <div class="item rounded-3 fs-6">
            &nbsp;Showing
            {{ $data->firstItem() }}
            to
            {{ $data->lastItem() }}
            of
            {{ $data->total() }}
            entries
        </div>
        <div class="pagination mt-3">
            {{ $data->links() }}
        </div>
    </div>
    <br><br><br><br>

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