<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duyurular</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
@include('menu');
<div class="container">
    <form>
    <div class="input-group mb-3">
        <div class="form-floating">
            <input type="search" class="form-control" id="search-input" name="search" placeholder="Arama Yap">
            <label for="search-input">Arama Yap</label>
        </div>
        <button  id="search-button" type="" class="btn btn-primary">
            <i class="bi bi-search"></i>
        </button>
    </div>
    </form>
    <!-- card başlangıcı -->
    @foreach($announcements as $announcement)
        <div class="card mb-2">
            <div class="card-header">
                Duyuru
            </div>
            <div class="card-body">


                <h5 class="card-title">{{$announcement->title}}</h5>
                <p class="card-text">{{$announcement->content}}</p>
                <a href="{{url('/announcement/' . $announcement->id)}}" class="btn btn-primary">İçeriğe git</a>


            </div>
        </div>
    @endforeach

    <!-- card bitiş kısmı -->
    <!-- card başlangıcı -->

</div>
</body>
</html>
