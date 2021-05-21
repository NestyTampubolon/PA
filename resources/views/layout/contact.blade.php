@include('layout.nav')
<style>
img{
margin:30px;
}</style>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
      <div class="container container-contact" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
        <img src="{{asset('profil')}}/tobatio1.jpeg" alt="" width="50%" height="20%">
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

          <div class="col-lg-8 mt-5 mt-lg-0">

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


@include('layout.footer')