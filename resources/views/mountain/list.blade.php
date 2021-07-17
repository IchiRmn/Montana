@extends('layouts.tamplate')

@section('title', 'List')

@section('top', 'Mountain List')

@section('section')

@include('layouts.top')
    <!-- ======= List Section ======= -->
<main id="main">
  
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mountain List</h2>
          <p>Where do you wanna go?</p>
        </div>

        <div class="row">
          @foreach ($mount as $mount)
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{ asset('img/Mountain/'.$mount->img) }}" class="img-fluid" alt="" >
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mt. {{ $mount->mountain_name }}</h4>
                </div>
                <div class="social" style="margin-bottom: 20px">
                  <a href="{{ url('/mount', [$mount->id] ) }}">
                    <span>
                      BOOK
                    </span> 
                  </a>
                </div>
              </div>
            </div>
          </div>              
          @endforeach
        </div>

      </div>
    </section><!-- End List Section -->
    
</main><!-- End #main -->

@endsection

