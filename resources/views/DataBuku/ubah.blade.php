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
                    <h5><i class="fas fa-user-circle"></i>{{ Auth::user()->name }}</h5>
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
            <center><h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;UBAH DATA</h1></center><br><br>
            <h4><a href="/daftarbuku" class="badge bg-info">Kembali</a></h4><br><br>
            
            <div class="hero rounded-3 px-5 pb-5 pt-5">
                <form  enctype="multipart/form-data" action="/daftarbuku/update/{{ $DataBuku->id }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" class="form-control" value="{{ $DataBuku->judul }}">
                    </div>

                    <div class="form-group">
                        <label for="tahun">Tahun</label>
                        <select name="tahun" id="tahun" class="form-control">
                            <option value="{{ $DataBuku->tahun }}">{{ $DataBuku->tahun }} (Ganti tahun)</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{ $DataBuku->penerbit }}">
                    </div>

                    <div class="form-group">
                        <label for="subjek">Subjek</label>
                        <input type="text" name="subjek" id="subjek" class="form-control" value="{{ $DataBuku->subjek }}">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" id="kategori" value="{{ $DataBuku->kategori }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="bahasa">Bahasa</label>
                        <select name="bahasa" id="bahasa"  class="form-control">
                            <option value="{{ $DataBuku->bahasa }}">{{ $DataBuku->bahasa }} (Ganti bahasa)</option>
                            <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                            <option value="Bahasa Inggris">Bahasa Inggris</option>
                            <option value="Bahasa Perancis">Bahasa Perancis</option>
                            <option value="Bahasa Jerman">Bahasa Jerman</option>
                            <option value="Bahasa Jepang">Bahasa Jepang</option>
                            <option value="Bahasa Cina">Bahasa Cina</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <select name="keterangan" id="keterangan" class="form-control">
                            <option value="{{ $DataBuku->keterangan }}">{{ $DataBuku->keterangan }} (Ganti Keterangan)</option>
                            <option value="Original">Original</option>
                            <option value="Copy">Copy</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" name="lokasi" id="lokasi" class="form-control" value="{{ $DataBuku->lokasi }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="jumlah_buku">Jumlah Buku</label>
                        <input type="text" name="jumlah_buku" id="jumlah_buku" class="form-control" value="{{ $DataBuku->jumlah_buku }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="status_buku">Status</label>
                        <select name="status_buku" id="status_buku" class="form-control">
                            @if ($DataBuku->status_buku == 0) {
                                <option value="{{$DataBuku->status_buku}}">Tersedia (Ganti status)</option>
                            }
                            @else {
                                <option value="{{$DataBuku->status_buku}}">Dipinjam (Ganti status)</option>
                            }
                            @endif
                            <option value="0">Tersedia</option>
                            <option value="1">Dipinjam</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control">{{ $DataBuku->deskripsi }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control" value=" {{ $DataBuku->gambar }}">
                        <img src="{{asset('gambar')}}/{{ $DataBuku->gambar }}" alt="gambar buku" style="max-width:100px; margin-top:20px;">
                    </div>
                    <div class="form-group">
                    <br><br>
                        <button type="submit" class="btn btn-warning px-5">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
        <br><br><br><br><br><br><br>

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