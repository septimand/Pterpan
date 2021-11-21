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
          <a class="nav-link active" href="#"> &nbsp&nbsp&nbsp MANAJEMEN DATA > INVENTARIS > EDIT INVENTARIS</a>
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
    @foreach($inv as $i)
        <form method="post" action="/manajemenInventaris/update">{{csrf_field()}}
            <input type="hidden" class="form-control mb-2" name="id_unit" value='{{$i->id_unit}}' >
            <div class="row">
                <div class="mb-3">
                    <label class="form-label"><br>Kode Barcode</label>
                    <input type="text" class="form-control "  name="kode_barcode" value="{{$i->kode_barcode}}" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_inventaris" value="{{$i->nama_inventaris}}"  >
                </div>

                <div class="mb-3">
                    <label class="form-label"> Jumlah</label>
                    <input type="text" class="form-control"  name="jumlah" value="{{$i->jumlah}}" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="text" class="form-control"  name="harga" value="{{$i->harga}}"  >
                </div>
                <div class="mb-3">
                    <label class="form-label"> Kategori</label>
                    <input type="text" class="form-control" name="nama_kategori" value="{{$i->nama_kategori}}" >
                </div>
                <div class="mb-3">
                    <label class="form-label"> Tanggal Beli</label>
                    <input type="date" class="form-control"  name="tgl_inventaris" value="{{$i->tgl_inventaris}}" >
                </div>
                <div class="mb-3">
                    <label class="form-label"> Deskripsi</label>
                    <input type="text" class="form-control"  name="deskripsi_inventaris" value="{{$i->deskripsi_inventaris}}" >
                </div>
                <div class="mb-3">
                    <label for="#">Status</label><br>
                    <input class="form-check-input" type="radio" name="status_inventaris" value="Baik" {{($i->status_inventaris == 'Baik')? "checked": ""}}>
                        <label class="form-check-label" for="exampleRadios1">
                            Baik &nbsp&nbsp&nbsp&nbsp
                        </label>
                    <input class="form-check-input" type="radio" name="status_inventaris" value="Rusak/Hilang" {{($i->status_inventaris == 'Rusak/Hilang')? "checked": ""}}>
                        <label class="form-check-label" for="exampleRadios1">
                            Rusak/Hilang
                        </label>
                </div>
                <div>
                    <label for="#" class="col-2">Foto</label><br>
                    <input type="file" name="gambar_inventaris" value="{{$i->gambar_inventaris}}">
                </div>
                <input class="btn btn-primary mt-4" type="submit" value="Simpan">

        </div></form> @endforeach
    </main>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="/js/dashboard.js"></script>
  </body>
</html>
