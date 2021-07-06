@extends('layouts.tamplate')
@section('title', 'Home')
@section('section')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
 <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
   <div class="row">
     <div class="col text-center">
       <h1>Enjoy Your Trip With <span style="color:#27AE60;">Montana</span></h1>
       <h2>Book Your Ticket Now!</h2>

       <div class="btns">
         <a href="{{ url('/mount') }}" class="btn-menu animated fadeInUp scrollto">see the list</a>
       </div>
     </div>

   </div>
 </div>
</section><!-- End Hero -->
@endsection