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
          <a class="nav-link active" href="#"> &nbsp&nbsp&nbsp MANAJEMEN DATA > PENGGUNA</a>
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
            <a class="nav-link active" href="#">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="users"></span>
              Pengguna
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="tag"></span>
              Unit
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="grid"></span>
              Kategori
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="archive"></span>
              Inventaris
            </a>
          </li>
        </ul>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">


    <div class="container">
        <a class="btn btn-primary mt-2 mb-2" href="mahasiswa/tambah" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Tambah </a>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Tgl Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Hak Akses</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                @php
                    $no =1;
                @endphp
                @foreach($users as $u)
                <tbody>
                    <tr>
                    <th scope="row">{{ $no++}}</th>
                    <td>{{$u -> email}}</td>
                    <td>{{$u -> password}}</td>
                    <td>{{$u -> nama_user}}</td>
                    <td>{{$u -> id_unit}}</td>
                    <td>{{$u -> tgl_lahir}}</td>
                    <td>{{$u -> jenis_kelamin}}</td>
                    <td>{{$u -> no_telp}}</td>
                    <td>{{$u -> hak_akses}}</td>
                    <td>{{$u -> gambar_user}}</td>
                    <td>
                        <a class="btn btn-primary" href="#" role="button" ><span data-feather="edit"></span></a>
                        <a class="btn btn-danger" href="tambahPengguna/delete/{{$u->email}}" role="button"><span data-feather="trash-2"></span></a>
                    </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <form method="post" action="/tambahPengguna/simpan">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="title" id="exampleModalLabel" >Tambah Pengguna</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                </div>
                <div class="modal-body">
                    <label for="#" >E-mail</label>
                    <input type="email" class="form-control mb-2" name="email" placeholder="Masukkan E-mail">
                    <label for="#">Password</label>
                    <input type="password" class="form-control col-sm-1" name="password" placeholder="Masukkan Password">
                    <label for="#">Nama</label>
                    <input type="text" class="form-control col-sm-1" name="nama_user" placeholder="Masukkan Nama">
                    <label for="#">Telp.</label>
                    <input type="number" class="form-control col-sm-1" name="no_telp" placeholder="Masukkan Nomor Telepon">
                    <label for="#">Unit</label>
                    <input type="text" class="form-control col-sm-1" name="id_unit" placeholder="Pilih Unit">
                    <label for="#">Tanggal Lahir</label>
                    <input type="date" class="form-control col-sm-1" name="tgl_lahir" >
                    <label for="#">Jenis Kelamin</label><br>
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="Laki-Laki">
                        <label class="form-check-label col-2" for="flexRadioDefault1">
                            Laki-Laki 
                        </label>
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" value="Perempuan">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Perempuan
                        </label><br>
                    <label for="#">Hak Akses</label><br>
                    <input class="form-check-input" type="radio" name="hak_akses" id="flexRadioDefault1" value="Admin">
                        <label class="form-check-label col-2" for="flexRadioDefault1">
                            Admin
                        </label>
                    <input class="form-check-input" type="radio" name="hak_akses" id="flexRadioDefault1" value="Pengguna">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Pengguna
                        </label><br>
                    <label for="#" class="col-2">Foto</label>
                    <input type="file" name="gambar_user">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
                </div>
                </div>
            </div>
            </div>
            </form>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>
