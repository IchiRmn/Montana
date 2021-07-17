@extends('layouts.tamplate')

@section('title', 'Draft')

@section('top', 'Draf')

@section('section')

@include('layouts.top')
<main id="main">
    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">
          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-20 mt-4 mt-lg-0">
              <div class="row">
                <div class="col">
                    <h1>Semeru, mountain</h1>
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
                        <h2> 3 People</h2>
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
                            <h2>Register Code</h2>
                        </div>
                        <h1 style="font-family: Poppins,
                        sans-serif;">P20001</h1>
                    </div>
                    <div class="row mt-4">
                        <div class="section-title" style="margin-bottom: 0; padding-bottom:4px; padding-top: 12px">
                            <h2>Date</h2>
                        </div>
                        <div class="col mt-3">
                            <h6 style="color: #aaaaaa">Start at</h6>
                            <h4>07-20-2021</h2>
                        </div>
                        <div class="col mt-3">
                                <h6 style="color: #aaaaaa">Ended at</h6>
                            <h4>07-20-2021</h2>
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
                                <div class="mt-2">: 32100221550034</div>
                                <div class="mt-2">: Sakata</div>
                                <div class="mt-2">: sakata@gmail.com</div>
                                <div class="mt-2">: 089374856732</div>
                                <div class="mt-2">: 04-08-2021</div>
                                <div class="mt-2">: Male</div>
                                <div class="mt-2">: Jakarta</div>
                           </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>                    
      </section>
</main>
@endsection