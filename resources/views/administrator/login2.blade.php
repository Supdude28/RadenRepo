<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<style>
    body {
    padding: 10;
    margin: 0;
    background-color: #4384EE;
    background-size: cover;
    font-family: Arial, Helvetica, sans-serif;
}

.container {
    height: 60%;
    width: 500px;
    top: 50%;
    left: 50%;
    position: absolute;
    padding: 20px;
    transform: translate(-50%, -50%);
    text-align: center;
    border-radius: 40px;
    border-radius: 20px;
}

img {
    position: absolute;
    width: 100px;
    height: 100px;
    top: -50px;
    left: calc(50% - 60px);
}

h1 {
    color: rgb(0, 0, 0);
    padding-top: 20px;
    font-size: 30px;
}

h2 {
    color: #fcfcfc;
    padding-top: 10px;
    font-size: 30px;
}

#input {
    border: none;
    border-bottom: 2px solid rgb(0, 0, 0);
    padding: 11px;
    margin: 15px;
    outline: none;
    color: rgb(0, 0, 0);
}

#submit {
    padding: 10px;
    margin: 10px;
    width: 200px;
    border-radius: 20px;
}

#submit:hover {
    color: rgb(0, 0, 0);
    background-color: #57ee43;
    cursor: pointer;
}

a {
    font-size: 12px;
    color: rgb(0, 0, 0);
    text-decoration: #57ee43;
}

a:hover{
    color: #57ee43;
}
</style>

<body>
    <div class="container">
        <div class="col">
        </div>
        <h1>SELAMAT DATANG</h1>
        <h2>LOGIN ADMIN</h2>
        <!-- Login -->
        <form action="{{url('cekloginadmin')}}" method="POST">
            @csrf
            @if (session('info'))
                            <div class="alert alert-success" role="alert">
                                {{session('info')}}
                            </div>
                        @endif
            @if ($errors->any())
            <div class="alert alert-success" role="alert">
                {{session('pesan')}}
            </div>
            @endif
            @csrf
            <div class="gung">
                <input type="text" name="username" placeholder="username" id="input"><br>
            </div>
            <div class="agung">
                <input type="password" name="password" placeholder="password" id="input"><br>
            </div>
            <input type="submit" name="submit" value="login" id="submit"><br>
            
            <a href="#">Forgot Password ?</a><br>
            <a href="{{url('registrasiadmin')}}">Registrasi</a><br>
        </form>
    </div>
</body>

</html>