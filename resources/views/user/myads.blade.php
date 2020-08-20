@extends('layouts.master')

@section('content')
    <div class="jarak-atas"></div>
    <div class="myads">
        <div class="container">
            <h3>Iklan Saya</h3>
            <div class="dropdown-divider"></div>
            @foreach ($posts as $post)
            <div class="media mt-4 mb-4">
                @php
                    $images = explode("|", $post->photo);
                @endphp
                <img src="{{ asset('./assets/upload/produk/'.$images[0])}}" class="align-self-start mr-3" alt="" width="100" height="70">
                <div class="media-body">
                    <a href="" style="text-decoration: none;color:black;"><h5 class="mt-0">{{ $post->title }}</h5></a>
                    <p class="text-iklan">{{ $post->description }}
                    <br>
                    <div class="status">
                        <i class="fa fa-eye mr-2"> Dilihat: 169</i>
                        <i class="fa fa-heart mr-2"> Favorite: 169</i>
                    </div>
                    </p>
                    <button type="button" class="btn btn-info"><i class="fa fa-edit"> Edit</i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"> Hapus</i></button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection