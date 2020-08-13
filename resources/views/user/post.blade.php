<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Icon --}}
    <link rel="icon" href="{{ asset('./assets/favicon/favicon.ico')}}" type='image/x-icon'/>
    {{-- MyCSS --}}
    <link rel="stylesheet" href="{{ asset('./assets/css/style.css')}}">
    {{-- Page User --}}
    <link rel="stylesheet" href="{{ asset('./assets/css/custom.css')}}">
    {{-- Post User --}}
    <link rel="stylesheet" href="{{ asset('./assets/admin/build/css/post-user.css')}}">
    {{-- Bootstrap --}}
    <link href="{{ asset('./assets') }}/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('./assets') }}/font-awesome/css/font-awesome.min.css">
    {{-- Select 2 --}}
    <link href="{{ asset('./assets') }}/select2/dist/css/select2.min.css" rel="stylesheet" />

    <title>Cari-Properti</title>
    <script src="{{ asset('assets/admin/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
          });
        });
    </script> 
  </head>
  <div id="home"></div>
  <body>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <a href="/dashboard" onclick="return confirm('Anda yakin ingin keluar? informasi iklan tidak akan disimpan.')" style="text-decoration: none; padding-left:20px;"><i class="fa fa-chevron-left"></i></a>
            <div class="d-flex flex-grow-1">
                <a href="javascript:;" class="navbar-brand" style="padding-left: 40px;">
                    <img src="{{ asset('./assets/favicon/favicon.ico')}}"  width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> Cari-Properti
                </a>
            </div>
        <div class="navbar-collapse collapse flex-shrink-1 flex-grow-0 order-last" id="navbar7">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="btn-group">
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="user-post">
        <div class="container">
            <div class="jarak">
                <h4 class="judul"><b>PASANG IKLAN ANDA</b></h4>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4><b>FORM PENJUALAN</b></h4>
                            </div>
                            <div class="card-body">
                                <form action="">
                                    {{ csrf_field() }}
                                    <div class="form-group col-md-6">
                                        <label for="category">Pilih Kategori <font style="color: red">*</font></label>
                                        <select name="category" class="form-control" id="category">
                                            <option value="1" selected>--Pilih--</option>
                                            @foreach ($category as $c)
                                                <option value="{{ $c->category_id }}">{{ ucwords($c->name) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="building_area">Luas Bangunan <font style="color: red">*</font></label>
                                        <input type="number" class="form-control" id="building_area" placeholder="1,2,3, etc">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="land_area">Luas Tanah <font style="color: red">*</font></label>
                                        <input type="number" class="form-control" id="land_area" placeholder="1,2,3, etc">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="room">Ruang Kamar <font style="color: red">*</font></label>
                                        <select name="room" class="form-control" id="room">
                                            <option value="1" selected>--Pilih--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value=">7">>7</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="floor">Lantai <font style="color: red">*</font></label>
                                        <input type="number" class="form-control" id="floor" placeholder="1,2,3, etc">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Fasilitas <font style="color:red;">*</font></label>
                                        <div class="form-check" style="margin-bottom: 7px;">
                                            <input class="form-check-input" type="checkbox" id="garasi" value="option1">
                                            <label class="form-check-label" for="garasi">Garasi</label>
                                        </div>
                                        <div class="form-check" style="margin-bottom: 7px;">
                                            <input class="form-check-input" type="checkbox" id="taman" value="option2">
                                            <label class="form-check-label" for="taman">Taman</label>
                                        </div>
                                        <div class="form-check" style="margin-bottom: 7px;">
                                            <input class="form-check-input" type="checkbox" id="taman" value="option2">
                                            <label class="form-check-label" for="taman">Kolam Renang</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="location">Lokasi <font style="color: red">*</font></label>
                                        <input type="text" class="form-control" id="location" placeholder="Jln. Mawar">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="judul">Judul Iklan <font style="color: red">*</font></label>
                                        <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Iklan Anda">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="building_area">Luas Bangunan <font style="color: red">*</font></label>
                                        <input type="number" class="form-control" id="building_area" placeholder="1,2,3, etc">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="deskripsi">Deskripsi <font style="color: red">*</font></label>
                                        <textarea class="form-control" id="deskripsi" rows="6"></textarea>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="form-group col-md-6">
                                        <h4><b>Tentukan Harga</b></h4>
                                        <label for="price">Harga <font style="color: red">*</font></label>
                                        <input type="number" class="form-control" id="price" placeholder="RP">
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="form-group col-md-12">
                                        <h4><b>UNGGAH FOTO (Minimal 5 Foto)</b></h4>
                                        <fieldset class="form-group">
                                            <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
                                            <input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
                                        </fieldset>
                                        <div class="preview-images-zone">
                                            <div class="preview-image preview-show-1">
                                                <div class="image-cancel" data-no="1">x</div>
                                                <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>
                                                <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>
                                            </div>
                                            <div class="preview-image preview-show-2">
                                                <div class="image-cancel" data-no="2">x</div>
                                                <div class="image-zone"><img id="pro-img-2" src="https://images.unsplash.com/photo-1516156008625-3a9d6067fab5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80"></div>
                                                <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="from-group col-md-6">
                                        <h4><b>KONFIRMASIKAN LOKASI SAAT INI</b></h4>
                                        <label for="province" class="col-md-4 col-form-label">Provinsi <font style="color: red">*</font></label>
                                        <select name="province" id="province" class="form-control">
                                            <option value="">--Pilih Provinsi--</option>
                                            @foreach ($provinces as $id => $name)
                                                <option value="{{ $id }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="from-group col-md-6">
                                        <label for="city" class="col-md-4 col-form-label">Kota <font style="color: red">*</font></label>
                                        <select name="city" id="city" class="form-control">
                                            <option value="">--Pilih Kota--</option>
                                        </select>
                                    </div>
                                    <div class="from-group col-md-6 mb-5">
                                        <label for="district" class="col-md-4 col-form-label">Kecamatan <font style="color: red">*</font></label>
                                        <select name="district" id="district" class="form-control">
                                            <option value="">--Pilih Kecamatan--</option>
                                        </select>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="form-group col-md-6 mb-5">
                                        <h4><b>DETAIL INFORMASI PENJUAL</b></h4>
                                        <div class="row">
                                            <div class="col-3">
                                                <img src="{{ asset('./assets/img/profile_user/' . Auth::user()->photo)}}" alt="Profile" class="img-fluid avatar2">
                                            </div>
                                            <div class="col mt-4">
                                                <input type="text" name="user" value="{{ Auth::user()->name }}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <button type="submit" class="btn btn-primary mt-5 mb-3">Pasang Iklan Sekarang</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
      <script src="{{ asset('./assets')}}/select2/dist/js/select2.min.js"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      <script type="text/javascript" src="{{ asset('./assets') }}/bootstrap/dist/js/bootstrap.min.js"></script>
      <script>
          
        //Get City By Province
        $(function () {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });

            $('#province').on('change', function () {
                $.ajax({
                    url: '{{ route('dependent-dropdown.store') }}',
                    method: 'POST',
                    data: {id: $(this).val()},
                    success: function (response) {
                        $('#city').empty();

                        $.each(response, function (id, name) {
                            $('#city').append(new Option(name, id))
                        })
                    }
                })
            });
        });

        //Get District By City
        $(function () {
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });

            $('#city').on('change', function () {
                $.ajax({
                    url: '{{ route('dependent-dropdown.district') }}',
                    method: 'POST',
                    data: {id: $(this).val()},
                    success: function (response) {
                        $('#district').empty();

                        $.each(response, function (id, name) {
                            $('#district').append(new Option(name, id))
                        })
                    }
                })
            });
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
        // console.log(scroll);
  
        scroll.addEventListener('click', function(e){
          $([document.documentElement, document.body]).animate({
              scrollTop: $("#home").offset().top
            }, 600);
        });
      </script>
  </body>
  </html>