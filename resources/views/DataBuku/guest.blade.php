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
        <link rel="stylesheet" href="{{asset('css/styleguest.css')}}">
        <title>Halaman Daftar Buku</title>
    </head>
    <body>
    <nav class="navbar">
        <div class="container">
            <h1 class="" style="color: blue;"><img src="{{asset('images/logo.png')}}" style="width: 70px;" alt=""> del<span style="color: red;">ibr</span><span style="color: #41A0FF;">ary</h1>
            <div class="navbar2">
            <div class="d-flex">
                <h5><a href="/" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Exit</a> </h5>
            </div>
            </div>
        </div>
    </nav><br><br>

        <div class="container col-10 list-buku">
        <center>
        <div id="info container row">
                <form class="" method="get">
                   <div class="info1container d-flex"><input type="search" id="cari" name="cari"class="form-control rounded-pill " style="font-family: Arial, FontAwesome;" value="{{Request::get('cari')}}" placeholder="&#xf002 Ketik Keyword Pencarian....">&nbsp;&nbsp;<button id="bcari" class="btn btn-outline-primary rounded-circle" type="submit"><i class="fas fa-search"></i></button></div>
                </form>
            </div> 
        </center>   
            <br><br>
        <div class="container row">
            @foreach ($data as $buku)
            
            <div class="card col-md-3 container" style="width: 12rem;">
                <img src="{{ asset('gambar')}}/{{$buku->gambar}}" style="height: 200px" class="card-img-top mt-3" alt="not-found">
                <div class="card-body text-center">
                  <h6 class="fw-bold">{{$buku->judul}}</h6>

                    @if($buku->status_buku==0)
                        <a href="#" class="btn btn-success">TERSEDIA</a>
                    @else
                        <a href="#" class="btn btn-danger">DIPINJAM</a>
                    @endif
                </div>
                <div class="container det-btn">
                    <button id="btn-detail" data-bs-toggle="modal" data-bs-target="#abc<?= $buku->id ?>" class="btn btn-outline-success btn-sm mb-2">
                    <i class="fas fa-info-circle"></i> Detail</button>
                </div>
            </div>

        {{-- detail-modal --}}
        <div class="modal fade" id="abc<?= $buku->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title fw-bold" id="exampleModalLabel">{{$buku->judul}}</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row">
                    <div class="col-md-5 img-dtl">
                        <img width="100%" src="{{asset('gambar')}}/{{ $buku->gambar }}" alt="not found">
                    </div>
                    <div class="col-md-7 fw-bold">
                        <table class="table table-hover" cellpadding="10">
                        <tr>
                                    <td>ID Buku</td>
                                    <td>:</td>
                                    <td>AA{{ $buku->id }}</td>
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
                  <button style="width: 100%" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
              @endforeach
            </div>
        </div>
        <br>
        <center>
        <div>
        <div class="item rounded-3 fs-6 container">
            &nbsp;Showing
            {{ $data->firstItem() }}
            to
            {{ $data->lastItem() }}
            of
            {{ $data->total() }}
            entries
        </div>
        <div class="mt-3 container">
            {{ $data->links() }}
        </div>
    </div>
</center>

    <br><br><br><br>
    <footer class="bg-dark">
    <div class="p-2">
        <h6 class="text-center text-light">delibrary Copyright&copy; Aplikasi Pengelolaan Perpustakaan. By <b class="text-warning">Kelompok 4</b> with <i class="fas fa-heart text-danger"></i></h6>
    </div>
    </footer>

   

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