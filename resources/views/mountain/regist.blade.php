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

<main id="main">

  <!-- ======= Registration Section ======= -->
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
  <!-- End Registration Section -->
  
  <!-- ======= Book A Table Section ======= -->
  <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <p>Form Member</p>
      </div>

      <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        
        @for ($i = 1; $i <= 3; $i++)
        
        <div class="section-title" style="padding-bottom: 20px;">
          <h2>Member {{ $i }}</h2>
        </div>
        <div class="row">

          <div class="col-lg-4 col-md-6 form-group form-floating">
            <input type="text" name="identityNumber" class="form-control" id="identityNumber" placeholder=" " style="height: 60px;" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <label for="identityNumber" style="margin-left: 10px; font-size: 14px; color: rgb(182, 182, 182)">Identity Number (KTP, SIM, etc)</label>
            <div class="validate"></div>
          </div>

          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 form-floating">
            <input type="email" class="form-control" name="email" id="email" placeholder=" " style="height: 60px;" data-rule="email" data-msg="Please enter a valid email">
            <label for="email" style="margin-left: 10px; font-size: 14px; color: rgb(182, 182, 182)">Email address</label>
            <div class="validate"></div>
          </div>

          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0 form-floating">
            <input type="numeric" class="form-control" name="phone" id="phone" placeholder=" " style="height: 60px;" data-rule="email" data-msg="Please enter a valid email">
            <label for="phone" style="margin-left: 10px; font-size: 14px; color: rgb(182, 182, 182)">Phone Number</label>
            <div class="validate"></div>
          </div>

          <div class="col-lg-4 col-md-6 form-group mt-3 form-floating">
            <input type="text" class="form-control" name="name" id="name" placeholder=" " style="height: 60px;" data-rule="email" data-msg="Please enter a valid email">
            <label for="name" style="margin-left: 10px; font-size: 14px; color: rgb(182, 182, 182)">Your Name</label>
            <div class="validate"></div>
          </div>

          <div class="col-lg-4 col-md-6 form-group mt-3 form-floating">
            <input type="date" class="form-control" name="birthdate" id="birtdate" placeholder=" " style="height: 60px;" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <label for="birthdate" style="margin-left: 10px; color: rgb(182, 182, 182)">Birthdate</label>
            <div class="validate"></div>
          </div>
          
          <div class="col-lg-4 col-md-6 form-group mt-3 form-floating">
            <select class="form-select" name="gender" id="gender" aria-label="Floating label select example" style="height: 60px; ">
              <option value="1">Male</option>
              <option value="2">Female</option>
              <i class="bi bi-arrow-down-left-circle"></i>
            </select>
            <label for="gender" style="margin-left: 10px; color: rgb(182, 182, 182)">Gender</label>
            <div class="validate"></div>
          </div>
        </div>

        <div class="form-group mt-3 form-floating" style="margin-bottom: 100px;">
          <textarea class="form-control" name="addres" rows="5" placeholder=" " id="addres" style="height: 100px; "></textarea>
          <label for="addres" style="margin-left: 10px; color: rgb(182, 182, 182)">Address</label>
          <div class="validate"></div>
        </div>

        @endfor

        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Book a Table</button></div>
      </form>

    </div>
  </section><!-- End Book A Table Section -->
</main>


  
@endsection