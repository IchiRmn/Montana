
@extends('layouts.tamplate')

@section('title', 'Mount')

@section('top', 'Details')

@section('previous')
<a href={{ url('/list'); }}>
  <i class="bi bi-arrow-left-circle""></i>
  <span>Previous</span>
</a>
@endsection

@section('section')

@include('layouts.top')

@include('modals.member')

<!-- ======= Mount Section ======= -->
<main id="main">
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      @foreach ($selectMountain as $mount)
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="{{ asset('img/Mountain/'.$mount->img) }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>{{ $mount->mountain_name }}</h3>
         <h2 style="margin-top: 20px">Height {{ $mount->height }} MDPL</h2>
          {{-- <ul>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul> --}}
          <p style="margin-top: 20px; text-align: justify; text-indent: 0.5in">
            {{ $mount->description }}
        </div>
        @endforeach
        

      </div>
    </div>
  </section>
  <!-- End Mount Section -->

  <!-- ======= Date Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Choose</h2>
        <p>When you wanna to go</p>
      </div>
      <div class="row">
        
        @foreach ($dates as $index => $value)
        <div class="col-lg-2 mb-5" style="margin-right: 15px; margin-left:15px;">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">            
           @if ($qta[$index]=== 0)
           <h4><b>{{ $dates[$index] }}</b></h4>
           <h2>unavalible</h2>
           <h3 class="text-danger">{{ $qta[$index] }}</h3>
           <div class="btun">
            <a class="bg-secondary">Full</a>
           </div>
           @else
           <h4><b>{{ $dates[$index] }}</b></h4>
           <h2>avalible</h2>
           <h3>{{ $qta[$index] }}</h3>
           <div class="btun">
             <a href="#my_modal" data-bs-toggle="modal" data-book-id="{{ $dates[$index] }}">Book</a>
            </div>
            @endif

          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Date Section -->
</main>


<!-- End #main -->
  @endsection