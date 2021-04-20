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

    <title>Halaman Daftar Buku</title>
    <style>
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            font-family: 'Quicksand', sans-serif;
        }

        body{
            background-color: #f3f5f9;
        }

        .wrapper{
            display: flex;
            position: relative;
        }

        .wrapper .sidebar{
            width: 220px;
            height: 100%;
            background: #4b4276;
            padding: 30px 0px;
            position: fixed;
        }

        .wrapper .sidebar h2{
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
        }

        .wrapper .sidebar ul li{
            padding-top: 30px;
            padding-bottom: 30px;
            padding-left: 10px;
            border-bottom: 1px solid #bdb8d7;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            border-top: 1px solid rgba(255,255,255,0.05);
        }    

        .wrapper .sidebar ul li a{
            color: #bdb8d7;
            display: block;
        }

        .wrapper .sidebar ul li a .fas{
            width: 100px;
        }

        .wrapper .sidebar ul li:hover{
            background-color: #594f8d;
        }
            
        .wrapper .sidebar ul li:hover a{
            color: #fff;
        }
        

        .wrapper .main_content{
            width: 100%;
            margin-left: 220px;
        }

        .wrapper .main_content .header{
            padding: 20px;
            background: #fff;
            color: #717171;
            border-bottom: 1px solid #e0e4e8;
        }

        .wrapper .main_content .info{
            margin: 20px;
            color: #717171;
            line-height: 25px;
        }

        .wrapper .main_content .info div{
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
        }
    </style>
  </head>
  <body>

    <div class="wrapper">
        <div class="sidebar">
            <h2>Delibrary</h2>
            <ul>

                <li><a href="#"><span class="iconify" data-inline="false" data-icon="entypo:book" style="font-size: 24px; color: white;"></span>&nbsp;Daftar Buku</a></li>

                <li><a href="#"><span class="iconify" data-inline="false" data-icon="clarity:group-solid" style="font-size: 24px; color: white;"></span>&nbsp;Data Pengunjung</a></li>

                <li><a href="#"><span class="iconify" data-inline="false" data-icon="ic:sharp-library-add" style="font-size: 24px; color: white;"></span>&nbsp;Peminjaman</a></li>

                <li><a href="#"><span class="iconify" data-inline="false" data-icon="ic:baseline-library-add-check" style="font-size: 24px; color: white;"></span>&nbsp;Pengembalian</a></li>
                
            </ul> 
        </div>
        <div class="main_content">
            <div class="header">Welcome!! Have a nice day.</div>  
            <div class="container">
                <br>
                <center><h1>TAMBAH DATA</h1></center><br><br>
                <a href="/" class="badge bg-info">Kembali</a><br><br>
                
                <form action="/simpan" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>ID</label>
                        <input type="text" name="id_buku" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Rak</label>
                        <input type="text" name="rak" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="form-group">
                    <br><br>
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    

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