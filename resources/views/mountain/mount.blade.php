
@extends('layouts.tamplate')

@section('title', 'Mount')

@section('section')

@include('layouts.top')

<!-- ======= Mount Section ======= -->
<main id="main">
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
          <div class="about-img">
            <img src="{{ asset('img/Mountain/rinjani.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
          <ul>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
          <p>
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
            culpa qui officia deserunt mollit anim id est laborum
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Mount Section -->

    <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Why Us</h2>
        <p>Why Choose Our Restaurant</p>
      </div>

      <div class="row">
        
        @foreach ($dates as $index => $value)
        <div class="col-lg-2 mb-5" style="margin-right: 15px; margin-left:15px;">
          <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <span></span>
            <h4>{{ $dates[$index] }}</h4>
            <p>{{ $qta[$index] }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Why Us Section -->
  
</main><!-- End #main -->
  @endsection