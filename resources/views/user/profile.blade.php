@extends('layouts.master')

@section('content')
    <div class="jarak-atas"></div>
    <div class="profile-user">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('./assets/background/user.png')}}" alt="Profile" class="img-fluid rounded-circle" height="170" width="170">
                    <h1>Rizal Aldin</h1>
                    <p><i class="fa fa-map-marker"></i> Depok <br>
                        Bergabung Sejak, Agustus 2020 
                    </p>
                    <button class="btn btn-secondary"><i class="fa fa-edit"></i> Edit Profile</button>
                </div>
                <div class="col-9">
                    <h3>Daftar Iklan</h3>
                    <div class="dropdown-divider"></div>
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col mb-4">
                          <div class="card">
                            <img src="{{ asset('./assets/produk/rumah1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <div class="text-center">
                                <button class="btn btn-danger m-2"><i class="fa fa-eye"></i> Detail</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-4">
                          <div class="card">
                            <img src="{{ asset('./assets/produk/rumah1.jpg')}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <div class="text-center">
                                    <button class="btn btn-danger m-2"><i class="fa fa-eye"></i> Detail</button>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card">
                                <img src="{{ asset('./assets/produk/rumah1.jpg')}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="text-center">
                                        <button class="btn btn-danger m-2"><i class="fa fa-eye"></i> Detail</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col mb-4">
                            <div class="card">
                                <img src="{{ asset('./assets/produk/rumah1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="text-center">
                                        <button class="btn btn-danger m-2"><i class="fa fa-eye"></i> Detail</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <div class="col mb-4">
                            <div class="card">
                                <img src="{{ asset('./assets/produk/rumah1.jpg')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="text-center">
                                        <button class="btn btn-danger m-2"><i class="fa fa-eye"></i> Detail</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection