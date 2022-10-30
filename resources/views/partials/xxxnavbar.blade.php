<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex">
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav me-2">
                <li class="nav-item p-2">
                <a class="nav-link active" aria-current="page" href="/Home"><b>HOME</b></a>
                </li>
                <li class="nav-item p-2">
                <a class="nav-link" href="/info"><b>INFO</b></a>
                </li>
                <li class="nav-item p-2">
                <a class="nav-link " href="/jns-pemesanan"><b>PESAN</b></a>
                </li>

                @can('user')
                  <div class="dropdown d-inline-block user-dropdown">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                      data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <a class="nav-link" href=""><b>Selamat Datang {{ Auth::user()->name }}</b></a>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                      <a class="dropdown-item" href="#"><i class="ri-user-line align-middle me-1"></i> Profile</a>
                      <div class="dropdown-divider"></div>
                      <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger" style="margin-left: 40px;">Logout</button>
                      </form>
                            
                    </div>
                  </div>
                </div>
                @endcan
              
            @auth
                @else
            <li class="nav-item p-2">
              <a class="nav-link " href="/register"><b>SIGN UP</b></a>
            </li>
            <li class="nav-item p-2">
              <a class="nav-link" href="/login"><b>LOG IN</b></a>
            </li>
            @endauth
            </ul>
        </div>
    </div>
  </div>
</nav>
