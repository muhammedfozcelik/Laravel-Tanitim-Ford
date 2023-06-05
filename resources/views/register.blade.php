<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
</head>
<body>
@include('menu');
<section class="vh-100 bg-image"
         style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="mt-5">
                @if($errors->any())
                    <div class="col-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">{{$error}}</div>

                        @endforeach
                    </div>

                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
            </div>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Kayıt Ol</h2>

                            <form action="{{route('register.post')}}" method="POST">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" name="name" class="form-control" id="name_surname" placeholder="ad soyad">
                                    <label for="name_surname">Ad Soyad</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="eposta">
                                    <label for="email">E-posta</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="şifre">
                                    <label for="password">Şifre</label>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg"/>
                                    <label class="form-check-label" for="form2Example3g">
                                        Tüm şartları okudum ve kabul ediyorum
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit"
                                            class="btn btn-outline-warning">Kayıt Ol
                                    </button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Zaten bir hesabın var mı? <a href="login"
                                                                                                         class="fw-bold text-body"><u>Giriş
                                            Yap</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
