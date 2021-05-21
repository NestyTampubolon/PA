@include('layout.nav')

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container container-gallery" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">
@foreach($informasi as $informasi)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{asset('image')}}/{{$informasi->gambar}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{asset('image')}}/{{$informasi->gambar}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
@endforeach
         
      </div>
    </section><!-- End Gallery Section -->

@include('layout.footer')