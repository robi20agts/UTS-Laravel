<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="uts">UTS Laravel</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">UTS Laravel</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product">product</a>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="centered">
            <div class="row" style="margin-top: 60px">
                <div class="col-sm-6">
                    <h1>Halaman Produk</h1>

                </div>
                <div class="col-sm-6 d-grid gap-4 d-md-flex justify-content-md-end">
                    <div class="form-group mt-2">
                        <button class="btn btn-primary" onclick="window.location.href='utssimpan'">Tambahkan
                            Produk</button>
                    </div>
                </div>
            </div>
            <table class="table table-primary table-sm table-hover table-striped table-bordered text-center">
                <thead>
                    <tr>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Jenis Produk</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                @php
                    $nilai_awal = 0;
                @endphp
                @for ($i = 0; $i < $jumlah; $i++)
                    <tr>
                        <td>{{ $kode_produk[$i] }}</td>
                        <td>{{ $nama_produk[$i] }}</td>
                        <td>{{ $jenis_produk[$i] }}</td>
                        <td>{{ $harga[$i] }}</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>