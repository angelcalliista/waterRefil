<nav>
    <div class="navbar">
        <div class="container nav-container">
            <input class="checkbox" type="checkbox" name="" id="" />
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <div class="logo">
             @can('user')  
             <h3>Selamat Datang {{ Auth::user()->name }}</h3>
             @endcan   
             @auth
                 @else
                 <h1>WaterR</h1>
             @endauth
            </div>
            <div class="menu-items">
            <li><a href="/">HOME</a></li>
            <li><a href="#">INFO</a></li>
            <li><a href="/jns-pemesanan">PESAN</a></li>
            @can('user')
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <li>
                    <button type="submit" class="btn btn-danger justify-content-center text-center">Log Out</button>
                </li>
            </form>
                
            @endcan
            @auth
                @else
                <li><a href="/register">SIGN UP</a></li>
                <li><a href="/login">SIGN IN</a></li>
            @endauth
            </div>
        </div>
    </div>
</nav>
