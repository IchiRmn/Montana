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
                  @foreach ($mount as $mount)
                  <h1>Mt. {{ $mount->mountain_name }}</h1>              
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
                        <h2><i class="bi bi-people-fill"></i> {{ $member }} People</h2>
                    </div>
                </div>
                <div class="col">
                  <div class="row">
                    <img src="{{ asset('img/Mountain/'.$mount->img) }}" alt="" class="img-fluid" style="filter: brightness(80%); width: 100%;">    
                  @endforeach
                  </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="section-title" style="margin-bottom: 0; padding-bottom:4px; padding-top: 12px">
                            <h2>Register ID</h2>
                        </div>
                        <h3 style="font-family: Poppins,
                        sans-serif;">{{ $id_regist }}</h3>
                    </div>
                    <div class="row">
                        <div class="section-title" style="margin-bottom: 0; padding-bottom:4px; padding-top: 12px">
                            <h2>Date</h2>
                        </div>
                        <div class="col">
                            <p style="color: #aaaaaa; padding-bottom: 0px; margin-bottom:0px; margin-top: 10px">Start From</p>
                            <h5>{{ $date_start }}</h5>
                        </div>
                        <div class="col">
                          <p style="color: #aaaaaa; padding-bottom: 0px; margin-bottom:0px; margin-top: 10px">Until</p>
                          <h5>{{ $date_end }}</h5>
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
                        <h5>{{ $payment }}</h5>
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
              @foreach ($name as $index => $value)
              <div class="col-lg-4 col-md-6" style="margin-bottom: 40px;">
                  <div class="card text-white bg-dark mb-3" style="max-width: 25rem;">
                    <div class="card-header bg-success fs-5" style="font-family: Poppins,
                    sans-serif;">
                      <span style="margin-left: 9px;">Member {{ $loop->iteration }}</span> 
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
                              <div class="mt-2">: {{ $identity[$index] }}</div>
                              <div class="mt-2">: {{ $name[$index] }}</div>
                              <div class="mt-2">: {{ $email[$index] }}</div>
                              <div class="mt-2">: {{ $phone[$index] }}</div>
                              <div class="mt-2">: {{ $birthdate[$index] }}</div>
                              <div class="mt-2">: {{ $gender[$index] }}</div>
                              <div class="mt-2">: {{ $address[$index] }}</div>
                         </div>
                      </div>
                    </div>
                  </div>
              </div>
              @endforeach   
            </div>
            <div class="row text-start">
              <div class="col">
                <a class="btn btn-secondary btn" style="margin-right: 10px">Back to home</a>
                <a class="btn btn-danger btn" href="{{ url('/print-pdf/'.$id_regist) }}">
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