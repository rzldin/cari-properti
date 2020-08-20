@extends('layouts.master')

@section('content')
<div class="iklan">
    <img src="{{ asset('./assets/background/iklan.png')}}" class="img-fluid" alt="Responsive image" style="height: 300px">
</div>
<div class="rekomendasi-baru">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="container">
        <h3 class="mb-4">Properti Terbaru</h3>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4 col-xs-6 mb-4">
                <div class="card rapih">
                    @php
                        $images = explode("|", $post->photo);
                    @endphp
                    <img src="{{ asset('./assets/upload/produk/'.$images[0])}}" class="card-img-top" width="150" height="300" alt="{{ $post->title }}">
                    <div class="card-body">
                      <h5 class="card-title"><a href="" style="text-decoration: none;color:black;">{{ $post->title }}</a></h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::words($post->description, 20, '...') }}</p>
                      <div class="tombol-info text-center">
                        <a class="btn btn-danger m-2 text-white" href="/post/detail/{{ $post->slug }}"><i class="fa fa-eye"></i> Detail</a><button class="btn btn-info"><i class="fa fa-plus-circle  "></i> Favorite</button>
                      </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-6">
                                <small class="text-muted"><i class="fa fa-map-marker"></i> {{ $post->city}}, {{ $post->district}}</small>
                            </div>
                            <div class="col-6 text-right">
                            <small class="text-muted"><i class="fa fa-calendar"></i> {{ Carbon\Carbon::parse(strtotime($post->date))->translatedFormat('F d, Y') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="iklan">
    <img src="{{ asset('./assets/background/iklan.png')}}" class="img-fluid" alt="Responsive image" style="height: 300px">
</div>
@endsection
  