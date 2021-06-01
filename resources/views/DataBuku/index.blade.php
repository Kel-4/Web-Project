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
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
        <!-- Icon -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <title>Halaman Daftar Buku</title>
    </head>
    <body>
  
    <nav class="navbar">
        <div class="container">
            <label for="menu-bar" style="cursor: pointer;">
            <i class="fas fa-bars fa-2x"></i>
            </label>
            <h1 class="fw-bold" style="color: blue;"><img src="{{asset('images/logo.png')}}" style="width: 70px;" alt=""> del<span style="color: red;">ibr</span><span style="color: #41A0FF;">ary</h1>
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
        <center><h1>DAFTAR BUKU</h1></center><br><br>

        <div id="info">
            <div class="info1"> <h4><a href="/daftarbuku/tambah" class="btn btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Tambah Buku</a></h4></div>
            <div class="info1"><button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-question" aria-hidden="true"></i>&nbsp;Info</button></div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Aplikasi Pengelolaan Perpustakaan</h5>
                    </div>
                    <div class="modal-body justify-content">
                        Selamat Datang !!! <br>Aplikasi ini adalah aplikasi yang ditujukan untuk melakukan pengelolaan data perpustakaan, seperti daftar buku, data anggota, peminjaman, dan pengembalian.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="info">
            <form class="form-inline" method="get">
                <div class="info1"><input type="search" name="cari" size="50" class="form-control" style="font-family: Arial, FontAwesome;" value="{{Request::get('cari')}}" placeholder="&#xf002 Ketik Keyword Pencarian...." autocomplete="off"></div>
                <div class="info1"><button class="btn btn-outline-light" type="submit">Cari !</button></div>
            </form>
        </div>


        <table class="table table-bordered table-striped" style="text-align:center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penerbit</th>
                    <th>Lokasi</th>
                    <th>Status Buku</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=0 ?>
                @foreach ($data as $buku)
                <tr>
                    <td>AA{{ $data->firstItem() + $i }}</td>
                    <td style="text-align:left">{{ $buku->judul }}</td>
                    <td>{{ $buku->penerbit }}</td>
                    <td>{{ $buku->lokasi}}</td>
                    @if($buku->status_buku==0)
                        <td><a class="btn btn-success">TERSEDIA</a></td>
                    @else
                        <td><a class="btn btn-danger">DIPINJAM</a></td>
                    @endif
                    <td>    
                        <a href="/daftarbuku/detail/{{ $buku->id }}" class="badge bg-info" data-bs-toggle="modal" data-bs-target="#ModalBuku{{ $buku->id }}"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;detail</a>
                        <a href="/daftarbuku/ubah/{{ $buku->id }}" class="badge bg-warning"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;ubah</a>
                        <a href="/daftarbuku/hapus/{{ $buku->id }}" class="badge bg-danger"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;hapus</a>
                    </td>
                </tr>
                <?php $i++ ?>
                @endforeach
            </tbody>
        </table>
    </div>

        <!-- Modal -->
        @foreach ($data as $buku)
        <div class="modal fade" id="ModalBuku{{ $buku->id }}" tabindex="-1" aria-labelledby="exampleModalLabelBuku" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fw-bold" id="exampleModalLabelBuku">DETAIL BUKU</h3>
                    </div>
                    <div class="modal-body row">
                        <div class="col-md-4 img-dtl">
                            <img width="100%" src="{{asset('gambar')}}/{{ $buku->gambar }}" alt="not found">
                        </div>
                        <div class="col-md-8 rounded-2">
                            <table class="table table-light table-hover">
                                <tr>
                                    <td>ID</td>
                                    <td>:</td>
                                    <td>AA00{{ $buku->id }}</td>
                                </tr>
                                <tr>
                                    <td>Judul</td>
                                    <td>:</td>
                                    <td>{{ $buku->judul }}</td>
                                </tr>
                                <tr>
                                    <td>Tahun</td>
                                    <td>:</td>
                                    <td>{{ $buku->tahun }}</td>
                                </tr>
                                <tr>
                                    <td>Penerbit</td>
                                    <td>:</td>
                                    <td>{{ $buku->penerbit }}</td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td>{{ $buku->kategori }}</td>
                                </tr>
                                <tr>
                                    <td>Subjek</td>
                                    <td>:</td>
                                    <td>{{ $buku->subjek }}</td>
                                </tr>
                                <tr>
                                    <td>Bahasa</td>
                                    <td>:</td>
                                    <td>{{ $buku->bahasa }}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>:</td>
                                    <td>{{ $buku->keterangan }}</td>
                                </tr>
                            </table>
                        </div>
                        <center>
                        <div class="col-md-10 mt-3">
                            <label style="font-weight: bold">Deskripsi</label><br><br>
                            <p style="text-align: justify">{{ $buku->deskripsi }}</p>
                        </div>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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