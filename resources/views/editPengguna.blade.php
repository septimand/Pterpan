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
          <a class="nav-link active" href="#"> &nbsp&nbsp&nbsp MANAJEMEN DATA > PENGGUNA > EDIT PENGGUNA</a>
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
            <a class="nav-link active" href="/tambahPengguna">
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
            <a class="nav-link" href="#">
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span data-feather="archive"></span>
              Inventaris
            </a>
          </li>
        </ul>
    </nav>
    @foreach($users as $u)
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <form method="post" action="/tambahPengguna/update">
            {{csrf_field()}}
            <input type="hidden" class="form-control "  name="email" value="{{$u->email}}" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="row">
                <div><br><a class="btn btn-secondary" href="/tambahPengguna" role="button" >Kembali</a></div>
                <div class="mb-3">
                    <label class="form-label"><br>Email</label>
                    <input type="text" class="form-control "  name="email" value="{{$u->email}}" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" value="{{$u->password}}"  >
                </div>

                <div class="mb-3">
                    <label class="form-label"> Nama</label>
                    <input type="text" class="form-control"  name="nama_user" value="{{$u->nama_user}}" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Telp.</label>
                    <input type="text" class="form-control"  name="no_telp" value="{{$u->no_telp}}"  >
                </div>
                <div class="mb-3">
                    <label class="form-label"> Unit</label>
                    <input type="text" class="form-control" name="id_unit" value="{{$u->id_unit}}" >
                </div>
                <div class="mb-3">
                    <label class="form-label"> Tanggal Lahir</label>
                    <input type="date" class="form-control"  name="tgl_lahir" value="{{$u->tgl_lahir}}" >
                </div>
                <div class="mb-3">
                    <label for="#">Jenis Kelamin</label><br>
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" {{($u->jenis_kelamin == 'Laki-Laki')? "checked": ""}}>
                        <label class="form-check-label" for="exampleRadios1">
                            Laki-Laki
                        </label>
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" {{($u->jenis_kelamin == 'Perempuan')? "checked": ""}}>
                        <label class="form-check-label" for="exampleRadios1">
                            Perempuan
                        </label>
                </div>
                <div>
                    <label for="#">Hak Akses</label><br>
                    <input class="form-check-input" type="radio" name="hak_akses" id="flexRadioDefault1" value="Admin" {{($u->hak_akses == 'Admin')? "checked": ""}}>
                        <label class="form-check-label col-2" for="flexRadioDefault2">
                            Admin
                        </label>
                    <input class="form-check-input" type="radio" name="hak_akses" id="flexRadioDefault1" value="Pengguna" {{($u->hak_akses == 'Pengguna')? "checked": ""}}>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Pengguna
                        </label>
                </div>
                <div>
                    <label for="#" class="col-2">Foto</label><br>
                    <input type="file" name="gambar_user" value="{{$u->gambar_user}}">
                </div>
                <input class="btn btn-primary mt-4" type="submit" value="Simpan">
                

        </div></form>
    </main>@endforeach
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>