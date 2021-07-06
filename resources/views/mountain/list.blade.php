@extends('layouts.tamplate')

@section('title', 'List')

@section('section')

<main id="main">

    <main id="main">
        <section class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              {{-- <h2>Inner Page</h2>
              <ol>
                <li><a href="index.html">Home</a></li>
                <li>Inner Page</li>
              </ol>
            </div> --}}
    
          </div>
        </section>
    
    <!-- ======= Chefs Section ======= -->
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
              <img src="{{ asset('img/Mountain/'.$mount->img) }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>{{ $mount->name }}</h4>
                </div>
                <div class="social" style="margin-bottom: 20px">
                  <a href="">
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
    </section><!-- End Chefs Section -->

    
      </main><!-- End #main -->

  </main><!-- End #main -->

@endsection

