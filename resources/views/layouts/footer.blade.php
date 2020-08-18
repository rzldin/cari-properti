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
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script>

      //Jual
      let jual = document.querySelector('button.jual');
      // console.log(jual);
      jual.addEventListener('click', function(e){
        window.location.href = "{{ route('user.post') }}";
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