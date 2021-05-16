@include('layout.nav')

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
              <li data-filter=".filter-aneka_nasi">Aneka Nasi</li>
              <li data-filter=".filter-aneka_ikan">Aneka Ikan</li>
              <li data-filter=".filter-aneka_seafood">Aneka Seafood</li>
              <li data-filter=".filter-aneka_mie">Aneka Mie</li>
              <li data-filter=".filter-ayam_bebek">Ayam / Bebek</li>
              <li data-filter=".filter-soup">Soup</li>
              <li data-filter=".filter-fasta">Fasta</li>
              <br>
              <li data-filter=".filter-aneka_juice">Aneka Juice</li>
              <li data-filter=".filter-kopi-susu">Kopi/Susu</li>
              <li data-filter=".filter-bir">Bir</li>
              <li data-filter=".filter-steak">Steak</li>
              <li data-filter=".filter-sayur">Sayur</li>
              <li data-filter=".filter-snack">Snack</li>
              <li data-filter=".filter-dessert-salad">Dessert/Salad</li>

            </ul>
          </div>
        </div>
        
             
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <!-- card1 -->
        
        @foreach($produks as $produk)
        <div class="card card-menu menu-item filter-{{$produk->kategori}}" style="width: 18rem;">
              <div class="card-body">
              <h5 class="card-title"><img src="{{url('gambarmenu/'.$produk->gambar)}}" width="95%" height="90%" style="display: block; margin: 5px auto;" alt=""></h5>
              <h5 class="card-subtitle mb-4 ">{{$produk->nama}}</h5>
              <p class="card-text">@currency($produk->harga)</p>
              <a href="menu/pesan/{{$produk->id_produk}}" class="btn btn-success">Beli</a>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Menu Section -->
    @include('layout.footer')