<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilan Utama</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .pale {
            padding: 8px
        }
        body{
            background-image: url();
            background-repeat: no-repeat;
            background-size: 100%;
            
        }
        .puwa{
            text-align: center;
        }
        .din{
            margin-top: 100px;
            /* margin-bottom: 100px; */
            margin-left: 45%;
            

        }
        .carousel-innerP{
            width:100%;
        }
        .udin{
            margin-right: 75%; 
            margin-top: 2px;
            color: white;
            font-family: sans-serif;
            float: left;
        }
        .pir{
            margin-right: 
        
        }
        
    </style>
</head>
<body>
    {{-- navbar awal --}}
    {{-- <nav class="navbar bg-primary " data-bs-theme="dark">
  <div class="container-fluid collapse navbar-collapse">
      <a class="navbar-brand">Menu Utama</a>
      <div class="udin">
          <a class="nav-link active" aria-current="page" class="navbar-brand" href="#">Syarat & Ketentuan</a>
        </div>
        <div class="pir">
        </div>
        <form class="d-flex" role="search">
            <div class="pale">
                <button href="#" class="btn" role="button" data-bs-toggle="button">Login</button>
                <button type"button" class="btn btn-outline-light" href="">Daftar</button>
    </div>
    </form>
  </div>
</nav> --}}
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Menu Utama</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          {{-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="#">Syarat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Ketentuan</a>  
          </li>
        </ul>
        <form class="d-flex">
            <div class="pale">
                <button href="#" class="btn btn-outline-danger" role="button" data-bs-toggle="button">Logout</button>
            </div>
        </form>
      </div>
    </div>
  </nav>
{{-- navbar akhir --}}
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="" class="d-block w-100" alt="" style= "widht:20px; height:520px";>
      </div>
      <div class="carousel-item">
        <img src="" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="..." >
      
  
</div>
</div>

<div class="puwa">
    <h1>Layanan Pengaduan Masyarakat</h1>
    <h3>Anda Melapor Anda Hebat</h3>
</div>
<div class="din" style="height: 100px;">
    
    <button type"button" class="btn btn-outline-dark">Tulis Laporan Anda</button>
</div>

</body>
</html>