    @include('layout.nav')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container container-about" data-aos="fade-up">
      <div class="section-title">
          <h2>About</h2>
          <p>Why Choose Us</p>
        </div>
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
            <!-- <ul>
              <li><i class="bi bi-check-circle"></i> Memberikan pelayanan terbaik kepada seluruh konsumen</li>
              <li><i class="bi bi-check-circle"></i> Menyajikan menu-menu terbaik</li>
              <li><i class="bi bi-check-circle"></i> Menyajikan menu-menu terbaik dan menjaga cita rasa masakan daerah</li>
              <li><i class="bi bi-check-circle"></i> Menjamin kualitas bahan makanan untuk disajikan kepada konsumen</li>
              <li><i class="bi bi-check-circle"></i> Memberikan kepuasan kepada pelanggan dengan menu terbaik, pelayanan yang diberikan, serta lingkungan</li>
              <li><i class="bi bi-check-circle"></i> Mengutamakan kualitas dalam pelayanan</li>
              <li><i class="bi bi-check-circle"></i> Menyediakan aneka rasa dan jenis makanan bagi pelanggan dengan pelayanan yang tepat demi kepuasan pelangan</li>

            </ul> -->
            <p> </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

       

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
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


    @include('layout.footer')
