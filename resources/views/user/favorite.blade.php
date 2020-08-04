@extends('layouts.master')

@section('content')
    <div class="jarak-atas"></div>
    <div class="favorite-user">
        <div class="container">
            <h3>Daftar Iklan Favorite</h3>
            <div class="dropdown-divider"></div>
            <div class="row">
                <div class="col-md-4 col-xs-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('./assets/produk/rumah1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="" style="text-decoration: none;color:black;"><h5 class="card-title">DIJUAL RUMAH</h5></a>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit</p>
                          <div class="tombol-info text-center">
                            <button class="btn btn-info m-1"><i class="fa fa-eye"></i> Lihat Iklan</button>
                            <button class="btn btn-danger m-1"><i class="fa fa-trash"></i> Hapus</button>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('./assets/produk/rumah1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="" style="text-decoration: none;color:black;"><h5 class="card-title">DIJUAL RUMAH</h5></a>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit</p>
                            <div class="tombol-info text-center">
                              <button class="btn btn-info m-1"><i class="fa fa-eye"></i> Lihat Iklan</button>
                              <button class="btn btn-danger m-1"><i class="fa fa-trash"></i> Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-6 mb-4">
                    <div class="card">
                        <img src="{{ asset('./assets/produk/rumah1.jpg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="" style="text-decoration: none;color:black;"><h5 class="card-title">DIJUAL RUMAH</h5></a>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit</p>
                            <div class="tombol-info text-center">
                              <button class="btn btn-info m-1"><i class="fa fa-eye"></i> Lihat Iklan</button>
                              <button class="btn btn-danger m-1"><i class="fa fa-trash"></i> Hapus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection