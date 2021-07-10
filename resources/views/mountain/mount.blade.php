
@extends('layouts.tamplate')

@section('title', 'Mount')

@section('section')

@include('layouts.top')

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
          <h3>{{ $mount->name }}</h3>
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
            <h4><b>{{ $dates[$index] }}</b></h4>
            <h2>avalible</h2>
            <h3>{{ $qta[$index] }}</h3>
            <div class="btun">
              <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                book
              </button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Date Section -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p style="color: black">apak benar?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->

</main>
<!-- End #main -->
  @endsection