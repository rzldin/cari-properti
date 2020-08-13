<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container">
            <div class="d-flex flex-grow-1">
                <a href="/dashboard" class="navbar-brand">
                    <img src="{{ asset('./assets/favicon/favicon.ico')}}"  width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> Cari-Properti
                </a>
                <form class="mr-2 my-auto w-100 d-inline-block order-1">
                    <div class="input-group">
                        <input type="text" class="form-control border border-right-0" placeholder="Temukan Properti impianmu...">
                        <span class="input-group-append">
                            <button class="btn btn-outline-light border border-left-0" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        <button class="navbar-toggler order-0" type="button" data-toggle="collapse" data-target="#navbar7">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse flex-shrink-1 flex-grow-0 order-last" id="navbar7">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-bell bundar"></i>
                        <span class="badge badge-danger">5</span>
                    </a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="/message"><i class="fa fa-envelope bundar"></i></a>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('./assets/img/profile_user/' . Auth::user()->photo)}}" alt="Profile" class="img-fluid avatar">
                          </button>
                        <div class="dropdown-menu">
                            <span class="dropdown-item">Hai, <br><b>{{ ucwords(Auth::user()->name) }}</b></span>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/profile"><i class="fa fa-user"></i> Profile</a>
                            <a class="dropdown-item" href="/favorite"><i class="fa fa-star"></i> Favorite</a>
                            <a class="dropdown-item" href="/myads"><i class="fa fa-list-alt"></i> Iklan Saya</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                               <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <button type="button" id="jual" class="btn btn-light jual"><i class="fa fa-plus"></i> <b>Jual</b></button>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    