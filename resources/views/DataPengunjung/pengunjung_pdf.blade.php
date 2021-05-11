<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>delibrary</title>
  </head>
  <body>
    <br>
    <h3 class="text-center">Data Pengunjung</h3>
    <table class="table rounded-3 table-striped">
            <thead>
                <tr>
                    <th>ID Pengunjung</th>
                    <th>Nama</th>
                    <th>Tanggal terdaftar</th>
                    <th>Kontak</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=1 ?>
                @foreach ($pengunjung as $pengunjung)
                <tr>
                    <td>PE00{{ $i }}</td>
                    <td>{{ $pengunjung->nama }}</td>
                    <td>{{ $pengunjung->tanggal_terdaftar }}</td>
                    <td>{{ $pengunjung->kontak }}</td>
                    <td>{{ $pengunjung->alamat }}</td>
                </tr>
                <?php $i++ ?>
                @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>