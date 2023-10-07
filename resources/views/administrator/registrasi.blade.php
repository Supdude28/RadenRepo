<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    <div id="main" class="d-flex align-items-center vh-100">
            <div class="container">
                <div class=" card shadow m-auto" style="width: 400px" >
                    <div class="card-body">
                        <div class="alert alert-success" role="alert">
                            A simple success alert—check it out!
                          </div>    
                        <h4 class="h4">Daftarkan diri anda</h4>
                        <form action="{{url('lagideh')}}" method="POST" >
                            @csrf
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <label for="passwrod" class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <label for="telpon" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="telpon" id="telpon" placeholder="No Telepon">
                            </div>
                                <button class="btn form-control btn-primary mb-2">Register</button>
                                <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>