@extends('layouts.master')

@section('content')
    <div class="jarak-atas"></div>
    <div class="profile-user">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="card inbox-user">
                        <div class="card-header">
                          <h4>Inbox</h4>
                        </div>
                        <div class="card-body">
                            <div class="media">
                            <img src="{{ asset('./assets/background/user.png')}}" class="mr-3" alt="..." width="50" height="50">
                                <div class="media-body">
                                  <h5 class="mt-0">Veylyn</h5>
                                  <a href="">Lihat Pesan</a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="media">
                            <img src="{{ asset('./assets/background/user.png')}}" class="mr-3" alt="..." width="50" height="50">
                                <div class="media-body">
                                    <h5 class="mt-0">Wira Nagara</h5>
                                    <a href="">Lihat Pesan</a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="media">
                            <img src="{{ asset('./assets/background/user.png')}}" class="mr-3" alt="..." width="50" height="50">
                                <div class="media-body">
                                    <h5 class="mt-0">Nuansa Senja</h5>
                                    <a href="">Lihat Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="card inbox-user">
                        <div class="card-header">
                            <h4>Pilih Pesan</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection