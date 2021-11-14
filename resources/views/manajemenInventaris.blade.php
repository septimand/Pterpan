<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventaris</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"


    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm ">
  <div class="container-fluid ">
    <div class="col-sm-2"><a class="navbar-brand col-2" href="#" > &nbsp&nbsp&nbspS I R I S</a></div>
    <div ><span data-feather="menu"></span></div>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-10 mb-3 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#"> &nbsp&nbsp&nbsp MANAJEMEN DATA > INVENTARIS > UNIT</a>
        </li>
       </ul>
    </div>
  </div>
 </nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="/dashboard">
            &nbsp&nbsp&nbsp<span data-feather="layers"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="#">
            &nbsp&nbsp&nbsp<span data-feather="folder"></span>
              Manajemen Data
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " href="/tambahPengguna">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="users"></span>
              Pengguna
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/unit">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="tag"></span>
              Unit
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kategori">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="grid"></span>
              Kategori
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/inventaris">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="archive"></span>
              Inventaris
            </a>
          </li>
        </ul>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


    <div class="container">
        <div class="row">
            <div class="col-11"><br></div>
            <div class="col"><a class="btn btn-primary mt-2 mb-2" href="#" role="button" data-bs-toggle="modal" data-bs-target="#tambahPengguna">+ Tambah </a></div>
            <div class="col"> </div>
            <div class="col"><form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form></div>
        </div>
        <form method="post" action="/ManajemenInventaris/simpan">
            <div class="modal fade" id="tambahPengguna" tabindex="-1" aria-labelledby="tambahPenggunalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title" id="tambahPenggunaLabel" >Tambah Inventaris</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control mb-2" name="id_unit" value='<?php  echo $_GET["id"]?>' >
                    <label for="#" >Kode Barcode</label>
                    <input type="text" class="form-control mb-2" name="kode_barcode" placeholder="Masukkan Kode">
                    <label for="#">Nama</label>
                    <input type="text" class="form-control col-sm-1" name="nama_inventaris" placeholder="Masukkan Nama Inventaris">
                    <label for="#">Jumlah</label>
                    <input type="text" class="form-control col-sm-1" name="jumlah" placeholder="Masukkan Jumlah">
                    <label for="#">Harga</label>
                    <input type="number" class="form-control col-sm-1" name="harga" placeholder="Masukkan Harga">
                    <label for="#">Kategori</label>
                    <input type="text" class="form-control col-sm-1" name="nama_kategori" placeholder="Pilih Kategori">
                    <label for="#">Tanggal Beli</label>
                    <input type="date" class="form-control col-sm-1" name="tgl_inventaris" >
                    <label for="#">Deskripsi</label>
                    <input type="text" class="form-control col-sm-1" name="deskripsi_inventaris" placeholder="Masukkan Deskripsi">
                    <label for="#">Status</label><br>
                    <input class="form-check-input" type="radio" name="status_inventaris" id="flexRadioDefault1" value="Baik">
                        <label class="form-check-label col-2" for="flexRadioDefault1">
                            Baik
                        </label>
                    <input class="form-check-input" type="radio" name="status_inventaris" id="flexRadioDefault1" value="Rusak/Hilang">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Rusak/Hilang
                        </label><br>
                    <label for="#" class="col-2">Gambar</label><br>
                    <input type="file" name="gambar_inventaris">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                </div>
                </div>
            </div>
            </div>
            </form>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Barcode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Status </th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Tgl Beli </th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                @php
                    $no =1;
                @endphp
                @foreach($iven as $i)
                <tbody>
                    <tr>
                    <th scope="row">{{ $no++}}</th>
                    <td>{{$i -> kode_barcode}}</td>
                    <td>{{$i -> nama_inventaris}}</td>
                    <td>{{$i -> nama_kategori}}</td>
                    <td>{{$i -> deskripsi_inventaris}}</td>
                    <td>{{$i -> gambar_inventaris}}</td>
                    <td>{{$i -> status_inventaris}}</td>
                    <td>{{$i -> jumlah}}</td>
                    <td>{{$i -> harga}}</td>
                    <td>{{$i -> tgl_inventaris}}</td>
                    <td>
                        <a class="btn btn-primary" href="#" role="button" >Cetak</span></a>
                        <!--a class="btn btn-warning" href="#" role="button" data-bs-toggle="modal" data-bs-target="#editInventaris"><span data-feather="edit"></span></a-->
                        <a class="btn btn-warning" href="/inventaris/manajemenInventaris/{{$i->id_unit}}/editInventaris/{{$i->kode_barcode}}" role="button" ><span data-feather="edit"></span></a-->
                        <a class="btn btn-danger" href="/inventaris/manajemenInventaris/delete/{{$i->kode_barcode}}" role="button"><span data-feather="trash"></span></a>
                    </td>
                    </tr>
                </tbody>@endforeach
            </table>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>
