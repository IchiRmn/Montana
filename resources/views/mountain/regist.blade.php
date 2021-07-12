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
                <img src="{{ asset('img/Mountain/' ) }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-8 details order-2 order-lg-2">
                <div class="section-title" style="margin-bottom: 0; padding-bottom:0;">
                  <h2>Details</h2>
                </div>
                <h3>Et blanditiis nemo veritatis excepturi</h3>
                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
              </div>
          </div>
        </div>
      </div>
    </div>    
    <select class="form-select" aria-label="Default select example">
      @foreach ($date_ as $date_)
      
      <option value="3">{{ $date_ }}</option>
      @endforeach
    </select>                
  </section>
</main>
<!-- End Registration Section -->
  
@endsection