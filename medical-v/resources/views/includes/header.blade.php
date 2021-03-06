<nav class="navbar navbar-expand-lg" style="background: white">
    <div class="container-fluid ms-5">
        <a class="navbar-brand medical-v-color-text posisi-nav-logo" href="/home"><img src="{{ asset('assets/img/logo/Logo-Medical-V.png') }}" alt="logo-navbar" width="120"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link font-nav posisi-nav-telusuri mt-2" href="/telusuricampaign" style="color: black">Telusuri Campaign</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-nav posisi-nav-tentang mt-2" href="#" style="color: black">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-nav posisi-nav-cara mt-2" href="#" style="color: black; width: 50%">Cara Kerja</a>
                </li>
            </ul>
            @auth
                <ul class="navbar-nav me-5">
                    <li class="nav-item dropdown posisi-nav-campaign">
                        <a class="nav-link dropdown-toggle font-nav mt-2 inline" href="#" style="color: black" role="button" data-bs-toggle="dropdown" aria-expanded="true">Campaign Saya</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/campaignsaya">Terdaftar</a></li>
                            <li><a class="dropdown-item" href="/campaignfavorit">Favorit</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link posisi-profile-header" href="#" style="color: black"><img src="{{ asset('assets/img/icon/profile.png') }}" alt="icon-profile"></a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="nav-link border-0" style="color: black">Logout</button>
                        </form>
                    </li>
                </ul>
            @endauth
            @guest
                <ul class="navbar-nav me-5">
                    <a class="btn btn-lg medical-v-color-background" href="/registervol" style="color: white">Daftar</a>
                    <a class="btn btn-lg btn-outline-success mx-3" href="/loginvol">Login</a>
                </ul>
            @endguest
        </div>
    </div>
</nav>