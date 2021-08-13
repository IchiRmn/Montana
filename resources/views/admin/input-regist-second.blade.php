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
    <form action="/input-regist-third" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card-style settings-card-1">
                    <div class="profile-info">
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label >Date Start</label>
                                    <select name="date_start" id="date_start" type="text" value="{{ old('date_start') }}" autocomplete="date_start" autofocus class="form-control" aria-label=".form-select-lg example" style="background: white; border-color: gray;" required>
                                        <option selected value="">Choose</option>
                                        @foreach ($date_start as $date_start)
                                        <option value="{{ $date_start }}">{{ $date_start }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> 
                            <div class="col">
                                <div class="input-style-1">
                                    <label >Member</label>
                                    <select type="text" name="member" id="member" autocomplete="member" placeholder="Enter Registrant" class="form-control" value="{{ old('member') }}" autofocus style="background: white; border-color: gray;" required>
                                        <option selected value="">Choose</option>
                                        @foreach ($mount as $mount)
                                            @for ($i = 1; $i <= $mount->max; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>                                                      
                                            @endfor
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
  
                        <input type="text" name="registrant" id="registrant" value="{{ $registrant }}" hidden>
                        <input type="text" name="destination" id="destination" value="{{ $destination }}" hidden>
                        <input type="text" name="payment" id="payment" value="{{ $payment }}" hidden>

                        <div class="row">
                            <div class="col">
                                <div class="text-end">
                                    <a href="{{ url()->previous(); }}" class="btn btn-secondary">Back</a>
                                    <button submit class="btn btn-primary">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end card -->
                </div>
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