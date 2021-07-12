@extends('layouts.tamplate')

@section('title', 'Regist')

@section('top', 'Registration')
@section('previous')
<a href={{ url()->previous(); }}>
  <i class="bi bi-arrow-left-circle""></i>
  <span>Previous</span>
</a>
@endsection

@section('section')

@include('layouts.top')

<!-- ======= Registration Section ======= -->
<main id="main">
   <section id="specials" class="specials">
    <div class="container" data-aos="fade-up">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-20 mt-4 mt-lg-0">
          <div class="row">
            <div class="col-lg-4 text-center order-1 order-lg-1">
              <img src="{{ asset('img/Mountain/'.$img ) }}" alt="" class="img-fluid" style="filter: brightness(80%)">
            </div>
            <div class="col-lg-8 details order-2 order-lg-2">
              <div class="section-title" style="margin-bottom: 0; padding-bottom:8px;">
                <h2>User</h2>
              </div>
              <div class="row">
                <div class="col">
                  <p style="font-size: 15px">Name </p>
                </div>
                <div class="col">
                  <p style="font-size: 15px">Email </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h5>{{ Auth::user()->name }}</h5>
                </div>
                <div class="col">
                  <h5>{{ Auth::user()->email }}</h5>
                </div>
              <div class="section-title" style="margin-bottom: 0; padding-bottom:8px; padding-top:25px">
                <h2>Mountaineering Details </h2>
              </div>
              <div class="row">
                <div class="col">
                  <p style="font-size: 15px">Destination</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h5>{{ $name }}, mountain</h5>
                </div>
              </div>
              <div class="row pt-2">
                <div class="col">
                  <p style="font-size: 15px">Started at </p>
                </div>
                <div class="col">
                  <p style="font-size: 15px">Ended at </p>
                </div>
              </div>
              <div class="row pt-2">
                <div class="col">
                  <input type="text" class="form-control" placeholder="{{ $date }}" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="col">
                  <select class="form-select" aria-label="Default select example">
                    @foreach ($date_ as $date_)
                      <option value="3">{{ $date_ }}</option>
                    @endforeach
                  </select>   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>                    
  </section>
</main>
<!-- End Registration Section -->
  
@endsection