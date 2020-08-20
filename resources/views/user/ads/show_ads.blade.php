@extends('layouts.master')

@section('content')
    <div class="iklan">
        <img src="{{ asset('./assets/background/iklan.png')}}" class="img-fluid" alt="Responsive image" style="height: 300px">
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="show-image">
                @php
                    $images = explode("|", $posts->photo);
                @endphp
                <img src="{{ asset('./assets/upload/produk/'.$images[0])}}" alt="" class="jumbo">
                @foreach ($images as $image)
                <div class="thumbnail">
                    <img src="{{ asset('./assets/upload/produk/'.$image)}}" alt="" class="thumb">
                </div>  
                @endforeach
            </div>
            <div class="price-item">
                <div class="card item">
                    <div class="card-body" style="height: 200px;">
                        <div align="right">
                            <h6 style="width: 60%;"><i class="fa fa-calendar"></i> <span>{{ Carbon\Carbon::parse(strtotime($posts->date))->translatedFormat('F d, Y') }}<br><i class="fa fa-map-marker"></i> 
                            {{ $posts->district.','. ' '. $posts->city.','. ' '. $posts->province }}
                            </span></h6>
                            <h3><b>IDR <span style="font-size:25pt;">{{ number_format($posts->price, 2) }}</span></b></h3>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <h3>Profile Penjual</h3>
                        <img src="{{ asset('./assets/img/profile_user/'. $posts->photo_user)}}" alt="Profile" class="img-fluid rounded-circle" height="60" width="60">
                        <h5><b>{{ ucwords($posts->name_user) }}</b></h5>
                        <p><i class="fa fa-map-marker"></i> {{ ucwords($posts->location_user)}} <br>
                            Bergabung Sejak, {{ Carbon\Carbon::parse(strtotime($posts->user_created))->translatedFormat('F Y') }} 
                        </p>
                        @if (Auth::user()->name != $posts->name_user) 
                            <button class="btn btn-info"><i class="fa fa-envelope"></i> Chat penjual</button>
                        @else 
                            <button class="btn btn-primary"><i class="fa fa-pencil"></i> Edit Iklan</button>
                            <form action="{{ url('/post/delete/'. $posts->post_id) }}" method="POST" class="d-inline" onsubmit="return confirm('apakah anda ingin menghapus iklan ini?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger d-inline"><i class="fa fa-trash"></i> Hapus Iklan</button>
                            </form>
                        @endif    
                    </div> 
                </div>
            </div>
            <div class="detail mt-3">
                <div class="card">
                    <div class="card-body">
                        <h3 style="font-size: 20px">Detail</h3>
                        <table style="width: 100%">
                            <tr style="width: 100%">
                                <td style="width: 25%">Category :</td>
                                <th style="width: 25%">{{ ucwords($posts->category) }}</th>
                                <td style="width: 25%">Luas Bangunan :</td>
                                <th style="width: 25%">{{ $posts->building_area }} m²</th>
                            </tr>
                            <tr style="width: 100%">
                                <td style="width: 25%">Kamar :</td>
                                <th style="width: 25%">{{ ($posts->room) }}</th>
                                <td style="width: 25%">Luas Tanah :</td>
                                <th style="width: 25%">{{ $posts->land_area }} m²</th>
                            </tr>
                            <tr style="width: 100%">
                                <td style="width: 25%">Lantai :</td>
                                <th style="width: 25%">{{ ($posts->floor) }} Lantai</th>
                                <td style="width: 25%">Fasilitas :</td>
                                <th style="width: 25%">{{ $posts->facilities }}</th>
                            </tr>
                            <tr style="width: 100%">
                                <td style="width:25%">Lokasi</td>
                                <th style="width:25%">{{ $posts->location }}</th>
                            </tr>
                        </table>
                        <div class="dropdown-divider"></div>
                        <h3 style="font-size:20px;">Deskripsi</h3>
                        <p style="width: 100%">{{ $posts->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection