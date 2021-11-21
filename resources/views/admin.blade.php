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
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

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
                <div class="col-sm-2"><a class="navbar-brand col-2" href="#" ><strong>&nbsp&nbsp&nbspS I R I S</strong></a></div>
                <div><span data-feather="menu"></span></div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-10 mb-3 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"> &nbsp&nbsp&nbsp DASHBOARD</a>
                        </li>
                    </ul>
                </div>
                <span>
                    <a class="navbar-brand" href="">Welcome, Zerlinda!</a>
                    <a href="logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#FF0000" class="bi bi-box-arrow-right mb-1" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </a>
                    &nbsp&nbsp&nbsp&nbsp
                </span>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row align-items-start">
                <div class="col">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                        <div class="position-sticky pt-3">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <div class="row row-cols-auto">
                                        <div class="col ms-4 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
                                                <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                                                <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <a class="nav-link active" aria-current="page" href="dashboard" data-feather="layers">Dashboard</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item ">
                                    <div class="row row-cols-auto">
                                        <div class="col ms-4 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
                                                <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <a class="nav-link" href="tambahPengguna" data-feather="folder">Manajemen Data</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item ">
                                    <div class="row row-cols-auto">
                                        <div class="col ms-5 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <a class="nav-link" href="tambahPengguna" data-feather="users">Pengguna</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="row row-cols-auto">
                                        <div class="col ms-5 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag" viewBox="0 0 16 16">
                                                <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                                <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <a class="nav-link" href="unit" data-feather="tag">Unit</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="row row-cols-auto">
                                        <div class="col ms-5 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-seam" viewBox="0 0 16 16">
                                                <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <a class="nav-link" href="kategori" data-feather="grid">Kategori</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="row row-cols-auto">
                                        <div class="col ms-5 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                                                <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                            </svg>
                                        </div>
                                        <div class="col">
                                            <a class="nav-link" href="inventaris" data-feather="archive">Inventaris</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-10">
                    <main class="content">
                        <div class="container-fluid pt-4">
                            <div class="row">
                                <div class="col-sm-3 d-inline-flex">
                                    <div class="card flex-fill" style="background-color: #39D5D5">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <p class="mb-0">PENGGUNA</p>
                                                    <h3 class="mb-2">angka</h3>
                                                    <a class="mb-0" href="tambahPengguna">Lihat detail</a>
                                                </div>
                                                <div class="d-inline-block ms-3">
                                                    <div class="stat mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#29BDBD" class="bi bi-person" viewBox="0 0 16 16">
                                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 d-inline-flex">
                                    <div class="card flex-fill" style="background-color: #6D8BA5">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <p class="mb-0" style="color: white;">UNIT</p>
                                                    <h3 class="mb-2" style="color: white;">angka</h3>
                                                    <a class="mb-0" href="unit" style="color:#89C5CC;">Lihat detail</a>
                                                </div>
                                                <div class="d-inline-block ms-3">
                                                    <div class="stat mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#507A9E" class="bi bi-tag" viewBox="0 0 16 16">
                                                            <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                                            <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 d-inline-flex">
                                    <div class="card flex-fill" style="background-color: #E5E5E5">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <p class="mb-0">KATEGORI</p>
                                                    <h3 class="mb-2">angka</h3>
                                                    <a class="mb-0" href="kategori" style="color:#507A9E;">Lihat detail</a>
                                                </div>
                                                <div class="d-inline-block ms-3">
                                                    <div class="stat mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#BEBDBD" class="bi bi-box-seam" viewBox="0 0 16 16">
                                                            <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 d-inline-flex">
                                    <div class="card flex-fill" style="background-color: #93BFC1">
                                        <div class="card-body py-4">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <p class="mb-0" style="color: white;">INVENTARIS</p>
                                                    <h3 class="mb-2" style="color: white;">angka</h3>
                                                    <a class="mb-0" href="kategori" style="color:#507A9E;">Lihat detail</a>
                                                </div>
                                                <div class="d-inline-block ms-3">
                                                    <div class="stat mt-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#69A1AC" class="bi bi-archive" viewBox="0 0 16 16">
                                                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </body>
</html>
