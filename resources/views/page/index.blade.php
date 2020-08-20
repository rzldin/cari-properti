<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Icon --}}
    <link rel="icon" href="{{ asset('./assets/favicon/favicon.ico')}}" type='image/x-icon'/>
    {{-- MyCSS --}}
    <link rel="stylesheet" href="{{ asset('./assets/css/style.css')}}">
    {{-- Bootstrap --}}
    <link href="{{ asset('./assets') }}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('./assets') }}/font-awesome/css/font-awesome.min.css">
    <style type="text/css">
      a.scrolltotop {
          background: #D50000 none repeat scroll 0 0;
          border-radius: 5px;
          bottom: 20px;
          color: #ffffff;
          display: none;
          font-size: 20px;
          height: 40px;
          padding-top: 5px;
          position: fixed;
          right: 20px;
          text-align: center;
          width: 40px;
          z-index: 99;
      }      
    </style>
    <title>Cari-Properti</title>
</head>
<div id="home"></div>
<body>
    <div class="bagian-atas">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand mb-0 h1 text-white" href="/home">
                    <img src="{{ asset('./assets/favicon/favicon.ico')}}"  width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    Cari-Properti
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav mr-auto ">
              <li class="nav-item">
                <div class="custom-control custom-switch mt-2">
                  <input type="checkbox" class="custom-control-input" id="switch1" name="darkMode">
                  <label class="custom-control-label" for="switch1"></label>
                </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#"><img src="{{ asset('./assets/favicon/indonesia.svg') }}" width="20" height="20" alt=""></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{ asset('./assets/favicon/uk.svg') }}" width="20" height="20" alt=""></a>
              </li>
            </ul>
        </nav>
    </div>
    <div class="cover-atas">
        <h1 class="heading">Properti.</h1>
        <p class="paragraf">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt quia aperiam exercitationem.!</p>
        <div class="filter-pencarian">
            <div class="col-6 search">
                <div class="card">
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Rumah</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Apartemen</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Gudang</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Ruko</a>
                      </li>
                    </ul>
                  </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group">
                                <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" placeholder="Cari Lokasi sesuai Kota Anda" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text btn btn-dark" id="basic-addon2"><i class="fa fa-search"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <select name="min_harga" id="min_harga" class="form-control">
                                            <option value="" selected>Harga(min)</option>
                                            <option value="1000000">1 Juta</option>
                                            <option value="10000000">10 Juta</option>
                                            <option value="100000000">100 Juta</option>
                                            <option value="1000000000">1 Milyar</option>
                                            <option value="10000000000">10 Milyar</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="max_harga" id="max_harga" class="form-control">
                                            <option value="" selected>Harga(max)</option>
                                            <option value="1000000">1 Juta</option>
                                            <option value="10000000">10 Juta</option>
                                            <option value="100000000">100 Juta</option>
                                            <option value="1000000000">1 Milyar</option>
                                            <option value="10000000000">10 Milyar</option>
                                        </select>
                                    </div>   
                                    <div class="col-md-2">
                                        <div class="custom-control custom-checkbox mt-2 text-info">
                                            <input type="checkbox" class="custom-control-input" id="garasi" name="garasi">
                                            <label class="custom-control-label" for="garasi">Garasi</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="custom-control custom-checkbox mt-2 text-info">
                                            <input type="checkbox" class="custom-control-input" id="taman" name="taman">
                                            <label class="custom-control-label" for="taman">Taman</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="custom-control custom-checkbox mt-2 text-info">
                                            <input type="checkbox" class="custom-control-input" id="kolam" name="kolam">
                                            <label class="custom-control-label" for="kolam">Kolam</label>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bagian-tengah">
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12 col-xs-12">
              <img src="{{ asset('./assets/background/home1.png') }}" alt="" style="width: 180px;height:180px;" class="center-block">
              <br>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus recusandae, voluptate adipisci nisi fuga eaque aliquam corrupti? Eveniet magni minus, eum nam accusamus nemo et accusantium, totam aliquid laboriosam rem?</p>
              </div>
              <div class="col-lg-4 col-md-12 col-xs-12">
                <img src="{{ asset('./assets/background/money1.png') }}" alt="" style="width: 180px;height:180px;" class="center-block">
                <br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ipsa qui maxime laboriosam molestias vitae? Hic vitae nesciunt quos veniam optio cupiditate at earum aliquid. Mollitia corporis aliquid soluta a.</p>
              </div>
              <div class="col-lg-4 col-md-12 col-xs-12">
                <img src="{{ asset('./assets/background/family1.png') }}" alt="" style="width: 180px;height:180px;" class="center-block">
                <br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium enim vel tempore nam voluptatum rerum, numquam officia totam consectetur? Adipisci magnam nisi dolorum magni architecto corporis distinctio quam,</p>
              </div>
            </div>
        </div>
    </div>
    <div class="bagian-bawah text-center">
        <button id="tombol_login" class="button"><span>Temukan Impianmu! </span></button>
    </div>
    <!-- ScrollTop -->
    <div>
      <a href="javascript:;" class="scrolltotop"><span class="fa fa-chevron-up"></span></a>
    </div>
    <!-- /ScrollTop -->
    <footer class="site-footer">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Cari-Properti sit amet consectetur adipisicing elit. Possimus labore sit ipsam dolore reiciendis repudiandae modi corrupti repellendus dolorem neque debitis eius tempora, similique architecto nulla. Magnam accusamus provident earum.</p>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Address</h6>
              <ul class="footer-links">
                <li><a href="">Depok, Indonesia</a></li>
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">Contribute</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; <?= date('Y') ?> All Rights Reserved 
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-instagram"></i></a></li>
                {{-- <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>    --}}
              </ul>
            </div>
          </div>
        </div>
    </footer>
  
    
    
    {{-- Javascript Bootstrap --}}
    <script src="{{ asset('./assets')}}/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('./assets') }}/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        const darkMode = document.querySelector("input[name=darkMode]");
        const card = document.querySelector('.card');
        // const judul = document.querySelector('a.h1');
        darkMode.addEventListener('change', function () {
            document.body.classList.toggle('dark-mode');
            card.classList.toggle('bg-dark');
            // judul.classList.toggle('text-white');
        });

        const btn = document.querySelector('button#tombol_login');
        btn.addEventListener('click', function(){
          location = '{{route('login')}}';
        });

        // ScrollTop
        $(window).scroll(function () {
          var totalHeight = $(window).scrollTop();
          if (totalHeight > 500) {
                $(".scrolltotop").fadeIn();
            } else {
                $(".scrolltotop").fadeOut();
            }
        });
      
        //proses scroll
        let scroll = document.querySelector('a.scrolltotop');
        console.log(scroll);

        scroll.addEventListener('click', function(e){
          $([document.documentElement, document.body]).animate({
              scrollTop: $("#home").offset().top
            }, 600);
        });
    </script>
</body>
</html>