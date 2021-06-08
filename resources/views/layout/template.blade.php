
    @include('layout.nav')

  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    @if(session('error'))
          <div class="dropdown">
              <a class="dropdown">
              <div class="alert alert-warning d-flex align-items-center" role="alert">
            <div>
              Hallo <strong>{{ Auth::user()->name}} </strong>,{{session('error')}}
            </div>
            
          </div>
              </a>                   
            </div>
    @endif
      <div class="row">
        <div class="col-lg-8 ">
          <h1>Welcome to <span>Toba Tio Cafe & Resto</span></h1>
          <h2>To be happy to be life!</h2>
      </div>
    </div>
  </section><!-- End Home -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('image')}}/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>To be happy to be life</h3>
            <p class="font-italic"></p>
            <p>Toba Tio Cafe & Resto merupakan tempat yang berlokasi di Jl. Sibolahotang, Sibola Hotangsas, Kabupaten Toba Samosir, Sumatera</p>
            <p>Tempat ini berada di pinggiran danau, dan memiliki daya tarik kepada pengunjung karena memiliki tempat untuk memandang danau saat makan atau minum.</p> 
            <p>Menyediakan fasilitas Live Music, Wi-Fi, sewa tempat dan ruang VIP </p>
            <p>Toba Tio Cafe & Resto juga menyediakan berbagai menu makanan dan minuman</p> 
            <p> </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
         
         
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-down-left" data-aos-delay="100">
          <div class="swiper-wrapper">
      @foreach($informasi as $informasi)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{$informasi->deskripsi}}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
               
              </div>
            </div><!-- End testimonial item -->
      @endforeach

     

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- About Section -->



    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
            </ul>
          </div>
        </div>
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <!-- card1 -->
        
        @foreach($produks as $produk)
        <div class="card card-menu menu-item filter-{{$produk->kategori}}" style="width: 16rem;">
              <div class="card-body">
                <img class="menuimage" src="{{url('gambarmenu/'.$produk->gambar)}}" width="185px" height="180px" style="display: block;" alt="">
                <h5 class="card-subtitle mb-4 ">{{$produk->nama}}</h5>
                <p class="card-text card-harga">@currency($produk->harga)</p>
                <a href="menu/pesan/{{$produk->id_produk}}" class="btn btn-success">Beli</a>
            </div>
          </div>
          @endforeach




        </div>

      </div>
    </section><!-- End Menu Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
        @foreach($gambar as $gambars)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('image')}}/{{$gambars->gambar}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('image')}}/{{$gambars->gambar}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          @endforeach
         

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>

      <div data-aos="fade-up">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.4793378516642!2d99.07937801385773!3d2.344220358228992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e05f92a4d1539%3A0xbb817246bb297e10!2sTOBA%20TIO%20Cafe%20%26%20Resto!5e0!3m2!1sid!2sid!4v1617982590010!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" ></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Jl. Sibolahotang, Sibola Hotangsas, Kabupaten Toba Samosir, Sumatera</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Friday:<br>
                  10:00 AM - 10:00 PM <br>
                  Saturday-Sunday:<br>
                  10:00 AM - 11:00 PM
                </p>
              </div>

              <!-- <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div> -->

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+62 823-8565-6982</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @include('layout.footer')