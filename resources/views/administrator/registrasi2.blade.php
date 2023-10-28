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
{{-- awal nav --}}

{{-- akhir nav --}}
    <div id="main" class="d-flex align-items-center vh-100">
            <div class="container">
                <div class=" card shadow m-auto" style="width: 400px" >
                    <div class="card-body">
                        {{-- <div class="alert alert-success" role="alert">
                            A simple success alert—check it out!
                          </div>     --}}
                        <h4 class="h4">Daftarkan diri anda</h4>
                        @if (session('pesan'))
                            <div class="alert alert-dark">
                                {{session('pesan')}}
                            </div>
                        @endif
                        <form action="{{url('ceking')}}" method="POST" >
                            @csrf
                            <div class="mb-3">
                                <label for="nama_petugas" class="form-label">Nama petugas</label>
                                <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" placeholder="Nama Petugas">
                            </div>
                            @error('nama_petugas')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div>
                            @error('username')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            @error('password')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="telp" class="form-label">No Telepon</label>
                                <input type="number" class="form-control" name="telp" id="telp" placeholder="No Telepon">
                            </div>
                            @error('telp')
                                <div class="form-text">
                                    {{$message}}
                                </div>
                            @enderror
                            <div class="mb-3">
                                <label for="level">Level</label>
                                <select class="form-select" aria-label="Default select example" id="level" name="level">
                                    <option value="petugas">Petugas</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                                <button class="btn form-control btn-primary mb-2">Register</button>
                                <a href="" class="btn form-control btn-outline-success mb-2" type="reset">Batal</a>
                                <a href="{{url('adminin/loginadmin')}}" class="btn form-control btn-outline-success mb-2">Kembali</a>
                                
                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>