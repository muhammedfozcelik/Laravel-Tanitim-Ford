<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
</head>
<body>
@include('menu');

<form action="{{route('profile.edit')}}" method="POST">
    @csrf

    @method('PUT')
<div class="profile">
    <div class="wrapper bg-white mt-sm-5">
        <h4 class="pb-4 border-bottom">Hesap Ayarları</h4>
        <div class="py-2">
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="firstname">Ad Soyad</label>
                    <input type="text" name="name" class="bg-light form-control" placeholder="" value="{{Auth::user()->name}}">
                </div>

            </div>
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="email">E-Posta</label>
                    <input type="text" class="bg-light form-control" name="email" placeholder="" value="{{Auth::user()->email}}">
                </div>
                <div class="col-md-6 pt-md-0 pt-3">
                    <label for="phone">Şifre</label>
                    <input type="password" class="bg-light form-control" name="password" placeholder="" value="{{Auth::user()->password}}">
                </div>
            </div>
            <div class="py-3 pb-4 border-bottom">
                <button type="submit" class="btn btn-primary mr-3">Kaydet</button>
            </div>
        </div>
    </div>
</div>
</form>
</body>
</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background-color: aliceblue;
    }

    .wrapper {
        padding: 30px 50px;
        border: 1px solid #ddd;
        border-radius: 15px;
        margin: 10px auto;
        max-width: 600px;
    }

    h4 {
        letter-spacing: -1px;
        font-weight: 400;
    }

    .img {
        width: 70px;
        height: 70px;
        border-radius: 6px;
        object-fit: cover;
    }

    #img-section p, #deactivate p {
        font-size: 12px;
        color: #777;
        margin-bottom: 10px;
        text-align: justify;
    }

    #img-section b, #img-section button, #deactivate b {
        font-size: 14px;
    }

    label {
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 500;
        color: #777;
        padding-left: 3px;
    }

    .form-control {
        border-radius: 10px;
    }

    input[placeholder] {
        font-weight: 500;
    }

    .form-control:focus {
        box-shadow: none;
        border: 1.5px solid #0779e4;
    }

    select {
        display: block;
        width: 100%;
        border: 1px solid #ddd;
        border-radius: 10px;
        height: 40px;
        padding: 5px 10px;
        /* -webkit-appearance: none; */
    }

    select:focus {
        outline: none;
    }

    .button {
        background-color: #fff;
        color: #0779e4;
    }

    .button:hover {
        background-color: #0779e4;
        color: #fff;
    }

    .btn-primary {
        background-color: #0779e4;
    }

    .danger {
        background-color: #fff;
        color: #e20404;
        border: 1px solid #ddd;
    }

    .danger:hover {
        background-color: #e20404;
        color: #fff;
    }

    @media (max-width: 576px) {
        .wrapper {
            padding: 25px 20px;
        }

        #deactivate {
            line-height: 18px;
        }
    }
</style>
