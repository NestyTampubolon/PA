@include('layout.nav')

<div class="container">

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
        </div>
        
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
            
              <li data-filter=".filter-Customer" class="filter-active">Customer</li>
              <li data-filter=".filter-Karyawan">Karyawan</li>
            </ul>
          </div>
        </div>
        
             
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <!-- card customer -->
    
    
          <div class="row justify-content-center  menu-item filter-Customer">
            <div class="card card-login justify-content-center ">
            <div class="card-header text-center "> <h1>Login Customer</h1> </div>
    
        <div class="card-body">
            <form action="{{route('login.cekcustomer')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row justify-content-center">
                    <label class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" name="username" class="form-control" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" required="required" name="PASSWORD" class="form-control" value="">
                    </div>
                </div>
                
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <button type="button" class="btn btn-danger" onclick="window.location.href='/'" class="justify-content-between"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Login</button>
               
                </div>
				
                <div class="card-footer text-center">
                 <div class="small"><a href="/registrasi">Need an account? Sign up!</a></div>
                 </div>
            </form>
            
            </div>
        </div>
    


    <div class="row justify-content-center  menu-item filter-Karyawan" data-aos="fade-up" data-aos-delay="200">
            <div class="card card-login justify-content-center ">
            <div class="card-header text-center "> <h1>Login Karyawan</h1> </div>
    
        <div class="card-body">
            <form action="{{route('login.cekkaryawan')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="mb-3 row justify-content-center">
                    <label class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" required="required" name="username" class="form-control" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" required="required" name="PASSWORD" class="form-control" value="">
                    </div>
                </div>
                
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                <button type="button" class="btn btn-danger" onclick="window.location.href='/'" class="justify-content-between"><i class="fas fa-times"></i> Batal</button>
				<button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> Login</button>
               
                </div>
            </form>
            
            </div>
        </div>
          </div>
         </div>
        </div>
      </div>
    </section>



@include('layout.footer')