


<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    User
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="./assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">User Page</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="index">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
            <link href="index.blade.php" rel="stylesheet" />
          </a>
          <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="register">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
            <link href="register.blade.php" rel="stylesheet" />
          </a>
          <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="login">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">LOGIN</span>
            <link href="login.blade.php" rel="stylesheet" />
          </a>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
      <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyData</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

{{-- <body style="background: lightgray">
    <!-- The sidebar -->
    <div class="sidebar">
        <a class="active" href="#home">Dashboard</a>
        <a href="#news">Posts</a>
    </div> --}}

    <!-- Page content -->
    <div class="content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h3 class="text-center my-4">HALAMAN USER</h3>
                        <hr>
                    </div>
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form action='search' class='d-flex' role='search'>
                                <a href="{{ route('posts.create') }}" class="btn 
btn-md btn-success mb-3">TAMBAH
                                    POST</a>
                                
                                <input name="search" style="margin-left:34px;width:75%;height:36px;"
                                    class= "form-control me-1" type="search" placeholder="search" aria-label="Search">
                                <button style="margin-left:10px;height:40px;" class="btn btn-outline-success"
                                    type="sumbit">Serach</button>
                            </form>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">GAMBAR</th>
                                        <th scope="col">JUDUL</th>
                                        <th scope="col">CONTENT</th>
                                        {{-- <th scope="col">AKSI</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($posts as $post)
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('/storage/posts/' . $post->image) }}" class="rounded"
                                                    style="width: 150px">
                                            </td>
                                            <td>{{ $post->title }}</td>
                                            <td>{!! $post->content !!}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                    action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                    <a href="{{ route('posts.show', $post->id) }}"
                                                        class="btn btn-sm btn-dark">SHOW</a>
                                                    <a href="{{ route('posts.edit', $post->id) }}"
                                                        class="btn btn-sm btn-primary">EDIT</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Post belum Tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
















<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>











































































<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>
  </body>

</html>
