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

<form action="/inputRegist" method="POST" data-aos-delay="100" id="form" name="form" class="needs-validation" novalidate>
  @csrf
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
                <div class="col">
                  <p style="font-size: 15px">Members</p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h5>Mt. {{ $name }}</h5>
                </div>
                <div class="col">
                  <h5>{{ $member }} People</h5>
                </div>
              </div>
              <div class="row pt-2">
                <div class="col">
                  <p style="font-size: 15px">Start from </p>
                </div>
                <div class="col">
                  <p style="font-size: 15px">Until </p>
                </div>
              </div>
              <div class="row pt-2">
                <div class="col">
                  <input type="text" class="form-control" placeholder="{{ $date }}" aria-label="Disabled input example" disabled readonly>
                </div>
                <div class="col  position-relative">
                  <select class="form-select" aria-label="Default select example" name="dateEnd" id="dateEnd" required>
                    <option value="">Choose...</option>
                    @foreach ($date_ as $date_)
                      <option value={{ $date_ }}>{{ $date_ }}</option>
                    @endforeach
                  </select>
                  <div class="invalid-tooltip">
                    Please select a date!
                  </div>   
                </div>
              </div>
              <div class="row pt-4">
                <div class="col">
                  <p style="font-size: 15px">Payment</p>
                </div>
              </div>
              <div class="row pt-2">
                <div class="col-sm-3">
                  <select class="form-select" aria-label="Default select example" name="payment" id="payment" required>
                    <option value="">Choose...</option>
                    <option value="PayPal">PayPal</option>
                    <option value="BCA">BCA</option>
                    <option value="Mandiri">Mandiri</option>
                  </select>
                  <div class="invalid-tooltip">
                    Please select a payment method!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>                    
  </section>
  <!-- End Registration Section -->

  @include('mountain.form')

</main>

<!-- Js Form Section -->
<script type="text/javascript">

(function () {
  'use strict'
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')
  const message = document.getElementById('message')
  const btn1 = document.getElementById('btn1');
  const btn2 = document.getElementById('btn2');
  

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()

          message.innerText = 'Something wrong, make sure your data is valid'
        }
        
        form.classList.add('was-validated')
      }, false)

      btn1.addEventListener('click', function(e){
        
        message.innerText = ''
      })
      btn2.addEventListener('click', function(e){
        
        message.innerText = ''
      })
    })
})()

</script>
{{-- <script type="text/javascript">
const form = document.getElementById('form');
const identity = document.getElementById('identityNumber');

form.addEventListener('submit', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs(){
  const identityValue = identity.value.trim();

  if(identityValue ==== ''){
    setErrorFor(identity, 'Required');
  }else {
    setSuccessFor(identity);
  }
}

function setErrorFor(input, message){
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');

  small.innerText = massage;

  formControl.className = 'form-control is-invalid';
}


function setSuccessFor(input){
  const formControl = input.parentElement;
  formControl.className = 'form-control is-valid';
}
</script> --}}
<!-- End  of Js Form Section -->
  
@endsection