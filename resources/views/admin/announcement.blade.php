<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../../public/css/admin.css" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
<div class="admin-panel clearfix">
    @include('admin/adminmenu');
  <div class="main">
      <div class="container mt-3">

        <h2>Duyuru Ekle</h2>
            <form action="{{route('adminannouncement.store')}}" method="POST">
                @csrf
                <div class="duyuruekle">
                    <div class="baslik mt-3">
                        <label for="duyurubaslik" class="form-label">Duyuru Başlık</label>
                        <input type="text" name="title" class="form-control" id="duyurubaslik" placeholder="Başlık">
                    </div>
                    <div class="icerik mt-3">
                        <label for="icerik" class="form-label">İçerik</label>
                        <textarea name="content" class="form-control" id="icerik" rows="3" placeholder="İçerik"></textarea>
                    </div>
                    <div class="eklebuton mt-3">
                        <button type="submit" class="btn btn-outline-success">Ekle</button>
                    </div>
                </div>
            </form>
        </div>
   </div>
</div>
</body>
</html>
