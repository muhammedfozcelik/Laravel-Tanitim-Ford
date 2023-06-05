<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana Sayfa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
       a{

        text-decoration: none;
       }
       a:hover{
           color:white;
       }
      body::-webkit-scrollbar {
        display: none;
      }
      body {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    </style>
</head>
<body>



<div id="menu" class="menu" style="position: fixed; top: 0; width: 100%; z-index: 1;">
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none text-white"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Ford-Motor-Company-Logo.png/800px-Ford-Motor-Company-Logo.png?20171218145605" height="30px"></a>
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#ilk" class="nav-link px-2 link-secondary text-white">Mach-e</a></li>
        <li><a href="#ikinci" class="nav-link px-2 text-white">Ranger</a></li>
        <li><a href="#ucuncu" class="nav-link px-2 text-white">Focus</a></li>
        <li><a href="#dorduncu" class="nav-link px-2 text-white">Fiesta</a></li>
      </ul>


      <div class="col-md-3 text-end">
            @guest()

          <a href="login"> <button type="button" class="btn btn-outline-primary me-2"> Giriş Yap</button></a>
       <a href="register"> <button type="button" class="btn btn-primary">Kayıt Ol</button></a>
          @endguest
              <div class="row">

          <div class="col">
          </div>
            @auth

                      <div class="col">
                          <a href="{{route('announcements')}}" class="nav-link px-2 text-white">Duyurular</a>
                      </div>
          <div class="col">
            <div class="dropdown text-end">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/1200px-Default_pfp.svg.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>

              <ul class="dropdown-menu text-small" style="">
                <li><a class="dropdown-item" href="{{route('message')}}">Mesajlar</a></li>
                <li><a class="dropdown-item" href="{{route('profile')}}">Profil</a></li>
                <li><hr class="dropdown-divider"></li>

                <li><a class="dropdown-item" href="{{route('logout')}}">Çıkış Yap</a></li>

              </ul>
            </div>
          </div>
                  @endauth
        </div>
      </div>
    </header>
  </div>
</div>
<div data-bs-spy="scroll" data-bs-target="#menu" data-bs-smooth-scroll="true" tabindex="0">
  <div id="ilk" class="bg-image"
      style="background-image: url('https://cdnepws.azureedge.net/getmedia/90ca125b-cae3-49f9-b1b6-50c43925a319/mach-e-2160x925-1.jpg.aspx?width=2160&height=925&ext=.jpg~/getmedia/90ca125b-cae3-49f9-b1b6-50c43925a319/mach-e-2160x925-1.jpg.aspx?width=2160&height=925&ext=.jpg');
      background-repeat: no-repeat;
      background-position: center;
      height:100vh;
       background-size: cover ">
      <div class="position-absolute bottom-0 start-50 translate-middle text-light">
        <div><h1>MACH-E</h1></div>
      </div>
  </div>
  <div id="ikinci" class="bg-image position-relative"
      style="background-image: url('https://cdnepws.azureedge.net/getmedia/2726dc5b-aa7c-4594-8606-3fba1d767d2c/MicrosoftTeams-image-_1_.jpg.aspx?width=2160&height=925&ext=.jpg~/getmedia/2726dc5b-aa7c-4594-8606-3fba1d767d2c/MicrosoftTeams-image-_1_.jpg.aspx?width=2160&height=925&ext=.jpg');
      background-repeat: no-repeat;
      background-position: center;
      height:100vh; background-size: cover ">
      <div class="position-absolute bottom-0 start-50 translate-middle text-light">
        <div><h1>RANGER</h1></div>
      </div>
  </div>
  <div id="ucuncu" class="bg-image position-relative"
      style="background-image: url('https://cdnepws.azureedge.net/getmedia/8a1ebbb5-ffad-4a12-a510-acb8f37a17f2/Focus-Galeri-1440x810-9.jpg.aspx?width=1440&height=810&ext=.jpg~/getmedia/8a1ebbb5-ffad-4a12-a510-acb8f37a17f2/Focus-Galeri-1440x810-9.jpg.aspx?width=1440&height=810&ext=.jpg');
      background-repeat: no-repeat;
      background-position: center;
      height:100vh;
       background-size: cover ">
      <div class="position-absolute bottom-0 start-50 translate-middle text-light">
        <div><h1>FOCUS</h1></div>
      </div>
  </div>
  <div id="dorduncu" class="bg-image position-relative"
      style="background-image: url('https://cdnepws.azureedge.net/getmedia/732867d3-5a34-4fc2-978d-4a283d06ebd1/Static_Talent-Slider-1440x810.jpg.aspx?width=1440&height=810&ext=.jpg');
      background-repeat: no-repeat;
      background-position: center;
      height:100vh;
      background-size: cover ">
      <div class="position-absolute bottom-0 start-50 translate-middle text-light">
        <div><h1>FİESTA</h1></div>
      </div>
  </div>
</div>
</body>
</html>


