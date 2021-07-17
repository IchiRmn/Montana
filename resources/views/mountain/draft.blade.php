@extends('layouts.tamplate')

@section('title', 'Draft')

@section('top', 'Draft')

@section('section')

@include('layouts.top')
<main id="main">
    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-20 mt-4 mt-lg-0">
              <div class="row">
                <div class="col">
                    <h1>Mt. Semeru</h1>
                    <div class="section-title" style="margin-bottom: 0; padding-bottom:4px; padding-top: 12px">
                        <h2>Registrant</h2>
                    </div>
                    <div class="row mt-3" >
                        <div class="col">
                          <p style="font-size: 15px">Name </p>
                        </div>
                        <div class="col">
                          <p style="font-size: 15px">Email </p>
                        </div>
                      </div>
                      <div class="row mt-0 pt-0">
                        <div class="col">
                          <h5>{{ Auth::user()->name }}</h5>
                        </div>
                        <div class="col">
                          <h5>{{ Auth::user()->email }}</h5>
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <h2><i class="bi bi-people-fill"></i> 3 People</h2>
                    </div>
                </div>
                <div class="col">
                  <div class="row">
                      <img src="{{ asset('img/Mountain/semeru.jpg') }}" alt="" class="img-fluid" style="filter: brightness(80%); width: 100%;">
                  </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="section-title" style="margin-bottom: 0; padding-bottom:4px; padding-top: 12px">
                            <h2>Register ID</h2>
                        </div>
                        <h3 style="font-family: Poppins,
                        sans-serif;">P20001</h3>
                    </div>
                    <div class="row">
                        <div class="section-title" style="margin-bottom: 0; padding-bottom:4px; padding-top: 12px">
                            <h2>Date</h2>
                        </div>
                        <div class="col">
                            <p style="color: #aaaaaa; padding-bottom: 0px; margin-bottom:0px; margin-top: 10px">Start</p>
                            <h5>20-07-2021</h5>
                        </div>
                        <div class="col">
                          <p style="color: #aaaaaa; padding-bottom: 0px; margin-bottom:0px; margin-top: 10px">End</p>
                          <h5>21-07-2021</h5>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col">
                          <p style="color: #aaaaaa; padding-bottom: 0px; margin-bottom:0px;">Status</p>
                          <h5>Unpaid</h5>
                      </div>
                      <div class="col">
                        <p style="color: #aaaaaa; padding-bottom: 0px; margin-bottom:0px;">Payment</p>
                        <h5>BCA</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mt-3">

            <div class="section-title mt-5">
                <p>Member</p>
              </div>

            <div class="row" style="margin-left: 10px">   
              <div class="col-lg-4 col-md-6" style="margin-bottom: 40px;">
                  <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                    <div class="card-header bg-success fs-5" style="font-family: Poppins,
                    sans-serif;">
                      <span style="margin-left: 9px;">Member 1</span> 
                    </div>
                    <div class="card-body">
                     <div class="row">
                         <div class="col" style="margin-left: 9px;">
                              <div class="mt-2">Identity Number</div>
                              <div class="mt-2">Name</div>
                              <div class="mt-2">Email</div>
                              <div class="mt-2">Phone Number</div>
                              <div class="mt-2">Birthdate</div>
                              <div class="mt-2">Gender</div>
                              <div class="mt-2">Address</div>
                         </div>
                         <div class="col">
                              <div class="mt-2">: 32105428816329</div>
                              <div class="mt-2">: Riri</div>
                              <div class="mt-2">: riri@gmail.com</div>
                              <div class="mt-2">: 085461523021</div>
                              <div class="mt-2">: 20-12-2000</div>
                              <div class="mt-2">: Female</div>
                              <div class="mt-2">: Kota Bogor</div>
                         </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6" style="margin-bottom: 40px;">
                <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                  <div class="card-header bg-success fs-5" style="font-family: Poppins,
                  sans-serif;">
                    <span style="margin-left: 9px;">Member 2</span> 
                  </div>
                  <div class="card-body">
                   <div class="row">
                       <div class="col" style="margin-left: 9px;">
                            <div class="mt-2">Identity Number</div>
                            <div class="mt-2">Name</div>
                            <div class="mt-2">Email</div>
                            <div class="mt-2">Phone Number</div>
                            <div class="mt-2">Birthdate</div>
                            <div class="mt-2">Gender</div>
                            <div class="mt-2">Address</div>
                       </div>
                       <div class="col">
                            <div class="mt-2">: 32105428810000</div>
                            <div class="mt-2">: Ruru</div>
                            <div class="mt-2">: ruru@gmail.com</div>
                            <div class="mt-2">: 085461521111</div>
                            <div class="mt-2">: 05-09-2000</div>
                            <div class="mt-2">: Female</div>
                            <div class="mt-2">: Kota Bogor</div>
                       </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" style="margin-bottom: 40px;">
              <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                <div class="card-header bg-success fs-5" style="font-family: Poppins,
                sans-serif;">
                  <span style="margin-left: 9px;">Member 3</span> 
                </div>
                <div class="card-body">
                 <div class="row">
                     <div class="col" style="margin-left: 9px;">
                          <div class="mt-2">Identity Number</div>
                          <div class="mt-2">Name</div>
                          <div class="mt-2">Email</div>
                          <div class="mt-2">Phone Number</div>
                          <div class="mt-2">Birthdate</div>
                          <div class="mt-2">Gender</div>
                          <div class="mt-2">Address</div>
                     </div>
                     <div class="col">
                          <div class="mt-2">: 3210542881111</div>
                          <div class="mt-2">: Rara</div>
                          <div class="mt-2">: rara@gmail.com</div>
                          <div class="mt-2">: 085461521111</div>
                          <div class="mt-2">: 26-05-2000</div>
                          <div class="mt-2">: Female</div>
                          <div class="mt-2">: Kota Bogor</div>
                     </div>
                  </div>
                </div>
              </div>
          </div>
            </div>
            <div class="row text-end">
              <div class="col">
                <a class="btn btn-secondary btn" style="margin-right: 10px">Back to home</a>
                <a class="btn btn-danger btn" href="{{ url('/print-pdf') }}">
                  <i class="bi bi-file-earmark-pdf-fill"></i>
                  Print PDF
                </a>
              </div>
            </div>
          </div>
        </div>                    
      </section>
</main>
@endsection