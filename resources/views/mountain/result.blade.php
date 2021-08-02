@extends('layouts.tamplate')

@section('title', 'History')

@section('top', 'History')

@section('previous')
<div data-aos="fade-up">
  <a href={{ url('/list'); }}>
    <i class="bi bi-arrow-left-circle""></i>
    <span>Previous</span>
  </a>
</div>
@endsection

@section('section')

@include('layouts.top')
    <!-- ======= List Section ======= -->
<main id="main">
  
    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">
          @foreach ($regist as $mount)
          <div class="row mb-3" data-aos="fade-up" data-aos-delay="100">
            <div class="col justify-content-center">
              <div class="row">
                <img src="{{ asset('img/Mountain/'.$mount->img) }}" alt="" class="img-fluid" style="filter: brightness(80%); width: 75%; height:75%;">    
              </div>               
            </div>
            <div class="col">
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
                      <h5>{{ $mount->name }}</h5>
                    </div>
                    <div class="col">
                      <h5>{{ $mount->email }}</h5>
                    </div>
                </div>
                <hr>
                <div class="text-center">
                    <h2><i class="bi bi-people-fill"></i> {{ App\Models\Regist::regist()->where('registId', $mount->registId)->count('member_name') }} People</h2>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="section-title" style="margin-bottom: 0; padding-bottom:4px; padding-top: 12px">
                        <h2>Registration</h2>
                    </div>
                    <h3 style="font-family: Poppins,
                    sans-serif;">{{ $mount->registId }}</h3>
                </div>
                <div class="row">
                    <div class="col">
                        <p style="color: #aaaaaa; padding-bottom: 0px; margin-bottom:0px; margin-top: 10px">Start From</p>
                        <h5>{{ $mount->date_start }}</h5>
                    </div>
                    <div class="col">
                      <p style="color: #aaaaaa; padding-bottom: 0px; margin-bottom:0px; margin-top: 10px">Until</p>
                      <h5>{{ $mount->date_end }}</h5>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                      <p style="color: #aaaaaa; padding-bottom: 0px; margin-bottom:0px;">Status</p>
                      <h5>{{ $mount->payment }}</h5>
                  </div>
                  <div class="col">
                    <p style="color: #aaaaaa; padding-bottom: 0px; margin-bottom:0px;">Payment</p>
                    <h5>{{ $mount->payment }}</h5>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col d-grid gap-2 col-6 mx-auto">
                    <a href="{{ url('/print-pdf/'.$mount->registId) }}" class="btn btn-danger"><i class="bi bi-file-earmark-pdf-fill" style="margin-right: 5px"></i>Print PDF</a>
                  </div>
                </div>
            </div>
            <hr class="mb-5 mt-3">
          </div>
          @endforeach
        </div>
    </section>
    
</main><!-- End #main -->

@endsection

