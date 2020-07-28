<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css')}}">
    <title>cariRumah</title>
  </head>
  <body>
    <div class="cover">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparant">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('/assets/img/logo.png')}}" width="60" height="60" class="d-inline-block align-top" alt="" loading="lazy"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse atas" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Disabled</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disabled</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disabled</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="row justify-content-center bawah">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                         Cari Rumah
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Filter Pencarian</h5>
                          <form action="">
                          <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Pilih Sesuai Lokasi" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                              <span class="input-group-text" id="basic-addon2">Search</span>
                            </div>
                          </div>
                          <div class="btn-group pilih-selera">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Max Harga
                            </button>
                            <div class="dropdown-menu">
                              ...
                            </div>
                            <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Min Harga
                              </button>
                              <div class="dropdown-menu">
                                ...
                              </div>
                              <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Small button
                              </button>
                              <div class="dropdown-menu">
                                ...
                              </div>
                          </div>
                          </form>
                        </div>
                      </div>
                </div>
                <div class="col-3 content-right">
                    <div class="card" style="width: 18rem;height:14rem;">
                        <div class="card-body">
                          <h5 class="card-title">Tau gak sih?</h5>
                          <p class="card-text">Some quick example text to build  on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>