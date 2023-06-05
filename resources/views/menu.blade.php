<div id="menu" class="menu">
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none text-white"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Ford-Motor-Company-Logo.png/800px-Ford-Motor-Company-Logo.png?20171218145605" height="30px"></a>
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"></ul>
      <div class="col-md-3 text-end">

        @guest
          <a href="{{route('login')}}"> <button type="button" class="btn btn-outline-primary me-2"> Giriş Yap</button></a>
              <a href="{{route('register')}}"> <button type="button" class="btn btn-primary">Kayıt Ol</button></a>
          @endguest
              <div class="row">
          <div class="col">

          </div>

                  @auth

                      <div class="col">
                          <a href="{{route('announcements')}}" class="nav-link px-2 text-black">Duyurular</a>
                      </div>
          <div class="col">
            <div class="dropdown text-end">
              <a href="announcement.blade.php" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/1200px-Default_pfp.svg.png" alt="mdo" width="32" height="32" class="rounded-circle">
              </a>
              <ul class="dropdown-menu text-small" style="{{url('message')}}">
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
