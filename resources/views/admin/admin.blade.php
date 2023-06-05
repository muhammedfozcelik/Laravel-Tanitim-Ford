<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<div class="admin-panel clearfix">
  @include('admin/adminmenu');

  <div class="main">
  <div class="slider">


  <div class="slides">

    <div id="slide-1">
      <div class="card text-center" >
        <div class="card-body">

          <h5 class="card-title">Toplam kullanıcı</h5>
            @if (is_countable($user) && count($user) > 0)
          <p class="card-text">{{count($user)}}</p>
            @endif
        </div>
      </div>

    </div>


    <div id="slide-2">

      <div class="card text-center" >
        <div class="card-body">

          <h5 class="card-title">Toplam Duyuru</h5>
            @if(is_countable($announcement) )
          <p class="card-text">{{count($announcement)}}</p>
            @endif
        </div>

      </div>

    </div>

  </div>


  <a href="#slide-1">1</a>
  <a href="#slide-2">2</a>

</div>

  </div>
</div>
</body>
</html>

<style>
* {
  box-sizing: border-box;
}

.slider {
  width: 100%;
  text-align: center;
  overflow: hidden;
}

.slides {
  display: flex;

  overflow-x: auto;
  scroll-snap-type: x mandatory;

  overflow-x:hidden;

  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;

}
.slides::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}
.slides::-webkit-scrollbar-thumb {
  background: black;
  border-radius: 10px;
}
.slides::-webkit-scrollbar-track {
  background: transparent;
}
.slides > div {
  scroll-snap-align: start;
  flex-shrink: 0;
  width: 100%;
  height: 300px;
  margin-right: 50px;
  background: #eee;
  transform-origin: center center;
  transform: scale(1);
  transition: transform 0.5s;
  position: relative;

  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 100px;
}

.author-info {
  background: rgba(0, 0, 0, 0.75);
  color: white;
  padding: 0.75rem;
  text-align: center;
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  margin: 0;
}
.author-info a {
  color: white;
}
img {
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.slider > a {
  display: inline-flex;
  width: 1.5rem;
  height: 1.5rem;
  background: white;
  text-decoration: none;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  margin: 0 0 0.5rem 0;
  position: relative;
}
.slider > a:active {
  top: 1px;
}
.slider > a:focus {
  background: #000;
}


body {
  display: flex;
  align-items: center;
  justify-content: center;
  font-family: 'Ropa Sans', sans-serif;
}
</style>
