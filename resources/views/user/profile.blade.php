@extends('layouts.master')

@section('content')
    <div class="jarak-atas"></div>
    <div class="profile-user">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="{{ asset('./assets/background/'. Auth::user()->photo)}}" alt="Profile" class="img-fluid rounded-circle" height="170" width="170">
                    <h1>{{ Auth::user()->name}}</h1>
                    <p><i class="fa fa-map-marker"></i> {{ Auth::user()->location}} <br>
                        Bergabung Sejak, {{ Carbon\Carbon::parse(strtotime(Auth::user()->created_at))->translatedFormat('F Y') }} 
                    </p>
                    <button class="btn btn-secondary"><i class="fa fa-edit"></i> Edit Profile</button>
                </div>
                <div class="col-9">
                    <h3>Daftar Iklan Aktif</h3>
                    <div class="dropdown-divider"></div>
                    <div class="row row-cols-1 row-cols-md-2">
                        @foreach ($iklan_aktif as $iklan)
                        <div class="col mb-4">
                          <div class="card rapih">
                            @php
                                $images = explode("|", $iklan->photo);
                            @endphp
                            <img src="{{ asset('./assets/upload/produk/'. $images[0])}}" class="card-img-top" width="150" height="300">
                            <div class="card-body">
                              <h5 class="card-title">{{ $iklan->title}}</h5>
                                <p class="card-text" style="width: 100%">{{ \Illuminate\Support\Str::words($iklan->description, 20, '...') }}</p>
                              <div class="text-center">
                                <a class="btn btn-danger m-2 text-white" href="/post/detail/{{ $iklan->slug }}"><i class="fa fa-eye"></i> Detail</a>
                              </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                    
                                    </div>
                                    <div class="col-6 text-right">
                                    <small class="text-muted"><i class="fa fa-calendar"></i> {{ Carbon\Carbon::parse(strtotime($iklan->date))->translatedFormat('d F, Y') }}</small>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection