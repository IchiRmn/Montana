@extends('layouts.template-admin')

@section('title', 'Input')

@section('content')

<!-- ========== section start ========== -->
<section class="section">
<div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30 mb-30">
        <div class="row align-items-center">
            <div class="col-md-6">
            <div class="titlemb-30">
                <h2>Regist Input</h2>
            </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>      
    <form action="/input-regist-second" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card-style settings-card-1">
                    <div class="profile-info">
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Registrant</label>
                                    <select type="text" name="registrant" id="registrant" autocomplete="registrant" placeholder="Enter Registrant" class="form-control @error('registrant') is-invalid @enderror" value="{{ old('registrant') }}" autofocus style="background: white; border-color: gray; width: 50%;" required>
                                        <option selected value="">Choose</option>
                                        @foreach ($user as $user)
                                            <option value="{{ $user->id }}">{{ $user->email }}</option>
                                        @endforeach
                                    </select>

                                    @error('registrant')
                                    <div id="registrant" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>              
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-style-1">
                                    <label >Destination</label>
                                    <select type="text" name="destination" id="destination" autocomplete="destination" placeholder="Enter Registrant" class="form-control @error('destination') is-invalid @enderror" value="{{ old('destination') }}" autofocus style="background: white; border-color: gray;" required>
                                        <option selected value="">Choose</option>
                                        @foreach ($mount as $mount)
                                            <option value="{{ $mount->id }}">{{ $mount->mountain_name }}</option>                                        
                                        @endforeach
                                    </select>

                                    @error('destination')
                                    <div id="destination" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label >Payment</label>
                                    <select name="payment" id="payment" type="text" value="{{ old('payment') }}" autocomplete="payment" autofocus class="form-control @error('payment') is-invalid @enderror" aria-label=".form-select-lg example" style="background: white; border-color: gray;" required>                    
                                        <option selected value="">Choose</option>
                                        <option value="PayPal">PayPal</option>
                                        <option value="BCA">BCA</option>
                                        <option value="Mandiri">Mandiri</option>                             
                                    </select>
                                </div>
                            </div>  
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="text-end">
                                    <a href="{{ url()->previous(); }}" class="btn btn-secondary">Back</a>
                                    <button submit class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>   
            <!-- end col -->
        </div>
    </form>     

    <!-- ========== title-wrapper end ========== -->
</div>
<!-- end container -->
</section>
<!-- ========== section end ========== -->

@endsection