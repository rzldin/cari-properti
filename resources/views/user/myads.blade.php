@extends('layouts.master')

@section('content')
    <div class="jarak-atas"></div>
    <div class="myads">
        <div class="container">
            <h3>Iklan Saya</h3>
            <div class="dropdown-divider"></div>
            <div class="media mt-4 mb-4">
                <img src="{{ asset('./assets/produk/rumah1.jpg')}}" class="align-self-start mr-3" alt="..." width="100" height="70">
                <div class="media-body">
                    <a href="" style="text-decoration: none;color:black;"><h5 class="mt-0">Jual Rumah di Depok</h5></a>
                    <p class="text-iklan">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
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
            <div class="media mt-4 mb-4">
                <img src="{{ asset('./assets/produk/rumah1.jpg')}}" class="align-self-start mr-3" alt="..." width="100" height="70">
                <div class="media-body">
                    <h5 class="mt-0">Jual Rumah di Depok</h5>
                    <p class="text-iklan">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
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
        </div>
    </div>
@endsection