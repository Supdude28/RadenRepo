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
            margin-top: 300px;
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
            text-align: center;
        }
        .pir{
            margin-right: 
        
        }
        
        .navin{
          background-color: rgb(203, 87, 87);
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
<nav class="navbar navbar-expand-md navbar-dark fixed-top navin">
    <div class="container-fluid">
      <a class="navbar-brand" >Menu Utama</a>
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
              <a href="" class="btn btn-outline-light ">Login</a>
              <a href="" class="btn btn-outline-info">Daftar</a>
            </div>
        </form>
      </div>
    </div>
  </nav>
{{-- navbar akhir --}}
@yield('isi_halaman')

</body>
</html>