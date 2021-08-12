@extends('layouts.template-admin')

@section('title', 'Edit')

@section('content')

<!-- ========== section start ========== -->
<section class="section">
<div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30 mb-30">
        <div class="row align-items-center">
            <div class="col-md-6">
            <div class="titlemb-30">
                <h2>Regist Edit</h2>
            </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>      
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card-style settings-card-1">
                    <div class="profile-info">
                    <div class="row">
                        <div class="col">
                            <div class="input-style-1">
                                <label>Registrant</label>
                                <input type="text" name="registrant" id="registrant" autocomplete="registrant" placeholder="Enter Registrant" class="form-control @error('registrant') is-invalid @enderror" value="{{ old('registrant') }}" autofocus/>

                                @error('registrant')
                                <div id="registrant" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-style-1">
                                <label>Email Registrant</label>
                                <input type="email" name="email_registrant" id="email_registrant" autocomplete="email_registrant" placeholder="Enter Registrant" class="form-control @error('email_registrant') is-invalid @enderror" value="{{ old('email_registrant') }}" autofocus/>

                                @error('email_registrant')
                                <div id="email_registrant" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>                      
                    </div>
                    {{-- <div class="row">
                        <div class="col-6">
                            <div class="input-style-1">
                                <label >Destination</label>
                                <select name="date_start" id="date_start" type="text" value="{{ $dateStart }}" autocomplete="date_start" autofocus class="form-control @error('email_registrant') is-invalid @enderror" aria-label=".form-select-lg example" style="background: white; border-color: gray;">
                                    @foreach ($date_start as $date_start)
                                    <option value="{{ $date_start }}">{{ $date_start }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-style-1">
                                <label >Start</label>
                                <input type="text" placeholder="{{ $dateStart }}" value="{{ $dateStart }}" readonly/>
                                <small><i>Disabled to change</i></small>
                                <select name="date_start" id="date_start" type="text" value="{{ $dateStart }}" autocomplete="date_start" autofocus class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="background: white; border-color: gray;">
                                    @foreach ($date_start as $date_start)
                                    <option value="{{ $date_start }}">{{ $date_start }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> 
                        <div class="col">
                            <div class="input-style-1">
                                <label >Until</label>
                                <input type="text" placeholder="{{ $dateEnd }}" value="{{ $dateEnd }}" readonly/>
                                <small><i>Disabled to change</i></small>
                                <select name="date_end" id="date_end" type="text" value="{{ $dateEnd }}" autocomplete="date_end" autofocus class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example" style="background: white; border-color: gray;">
                                    @foreach ($date_end as $date_end)
                                    <option value="{{ $date_end }}">{{ $date_end }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>     
                    </div> --}}
                    
                    {{-- <div class="row">
                        <div class="col-6">
                            <div class="input-style-1">
                                <label >Destination</label>
                                <input type="text" placeholder="{{ $dest }}" value="{{ $dest }}" readonly/>
                                <small><i>Disabled to change</i></small>
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-style-1">
                                <label >Start</label>
                                <input type="text" placeholder="{{ $dateStart }}" value="{{ $dateStart }}" readonly/>
                                <small><i>Disabled to change</i></small>
                                <select name="date_start" id="date_start" type="text" value="{{ $dateStart }}" autocomplete="date_start" autofocus class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="background: white; border-color: gray;">
                                    @foreach ($date_start as $date_start)
                                    <option value="{{ $date_start }}">{{ $date_start }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> 
                        <div class="col">
                            <div class="input-style-1">
                                <label >Until</label>
                                <input type="text" placeholder="{{ $dateEnd }}" value="{{ $dateEnd }}" readonly/>
                                <small><i>Disabled to change</i></small>
                                <select name="date_end" id="date_end" type="text" value="{{ $dateEnd }}" autocomplete="date_end" autofocus class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example" style="background: white; border-color: gray;">
                                    @foreach ($date_end as $date_end)
                                    <option value="{{ $date_end }}">{{ $date_end }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>     
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-style-1">
                                <label >Payment</label>
                                <select name="payment" id="payment" type="text" value="{{ $payment }}" autocomplete="payment" autofocus class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="background: white; border-color: gray;">                    
                                    <option value="PayPal">PayPal</option>
                                    <option value="BCA">BCA</option>
                                    <option value="Mandiri">Mandiri</option>                             
                                </select>
                            </div>
                        </div> 
                        <div class="col">
                            <div class="input-style-1">
                                <label>Status</label>
                                <select name="status" id="status" type="text" value="{{ $status }}" autocomplete="status" autofocus class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="background: white; border-color: gray;">                    
                                    @if ($status === "Unpaid")
                                        <option selected>{{ $status }}</option>
                                        <option value="Paid">Paid</option>
                                    @else 
                                        <option selected>{{ $status }}</option>
                                        <option value="Unpaid">Unpaid</option>                            
                                    @endif
                                </select>
                            </div>
                        </div>     
                    </div> --}}

                <div class="row">
                    <div class="col">
                        <div class="text-end">
                            <a href="{{ url()->previous(); }}" class="btn btn-secondary">Back</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
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