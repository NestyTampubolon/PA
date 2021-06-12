<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
            <h1 class="logo me-auto me-lg-0"><a href="/">Toba Tio</a></h1>
              <p>
              Jl. Sibolahotang, Sibola Hotangsas,<br> 
              Kabupaten Toba Samosir, <br>
              Sumatera<br><br>
                <strong>Phone:</strong>+62 823-8565-6982<br>
                <!-- <strong>Email:</strong> info@example.com<br> -->
              </p>
              <div class="social-links mt-3">
                <a href="https://web.facebook.com/toba.t.resto" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/caferestotobatio/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/menu">Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('login') }}">Login</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('register') }}">Daftar Akun</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" data-bs-toggle="modal" data-bs-target="#Modalpembayaran">Media Pembayaran</a></li>
            </ul>
          </div>

          <style>
          .modal{
            color:black;
          }
          </style>
              <!-- Modal -->
              <div class="modal fade" id="Modalpembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-center" id="exampleModalLabel" >Media Pembayaran</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    Saat ini , Toba Tio hanya menyediakan COD (Bayar di Tempat)

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <p>Memberikan kepuasan kepada pelanggan dengan menu terbaik, pelayanan yang diberikan, serta lingkungan</p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Team 8 PA 1 Institut Teknologi Del 2021</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('template')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('template')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('template')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('template')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template')}}/assets/js/main.js"></script>

</body>

</html>