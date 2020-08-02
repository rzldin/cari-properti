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
    <title>Cari-Properti::Daftar</title>
</head>
<body>
    <div class="site-daftar"></div>
    <div class="daftar-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 form-daftar">
                    <div class="container mt-2">
                        <a class="navbar-brand mb-0 h1 text-dark" href="/">
                            <img src="{{ asset('./assets/favicon/favicon.ico')}}"  width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">Cari-Properti
                        </a>
                    </div>
                    <form action="" class="mt-3">
                        <h4 style="text-align: center">Daftar</h4>
                        <h6 style="text-align: center">Lengkapi pendaftaran berikut.</h6>
                        @csrf
                        <div class="row justify-content-center mt-1 mb-1">
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Name" style="margin-bottom: 5px">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-1 mb-1">
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email" style="margin-bottom: 5px">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-1 mb-1">
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-2 mb-1">
                            <div class="col-8">
                                <div class="input-group">
                                    <input id="confirm_password" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-success mt-3 btn-daftar">Daftar</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 impian">
                    <h4 class="judul-form">Sudah Bergabung?</h4>
                    <button class="btn btn-secondary btn-flat btn-daftar mt-2" style="color: white" name="daftar" id="daftar">Login</button>
                </div>
            </div>
        </div>
    </div>
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

    <script>
        const btn = document.querySelector('button#daftar');
        btn.addEventListener('click', function(){
          location = '{{route('page.login')}}';
        })
    </script>
</body>
</html>