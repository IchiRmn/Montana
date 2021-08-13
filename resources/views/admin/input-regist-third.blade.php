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
    <form action="{{ route('CrudRegist.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card-style settings-card-1">
                    <div class="profile-info">
                        <div class="row">
                            <div class="col-6">
                                <div class="input-style-1">
                                    <label>End Date</label>
                                    <select name="date_end" id="date_end" type="text" value="{{ old('date_end') }}" autocomplete="date_end" autofocus class="form-control" aria-label=".form-select-lg example" style="background: white; border-color: gray;" required>
                                        <option selected value="">Choose</option>
                                        @foreach ($date_end as $date_end)
                                        <option value="{{ $date_end }}">{{ $date_end }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> 
                        </div>
                        
                        <h2 style="margin-bottom: 40px"><b>Members</b></h2>

                        <div class="row">
                            @for ($i = 1; $i <= $member; $i++)
                            <h5 style="margin-bottom: 20px;"><b>Member {{ $i }}</b></h5>
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="input-style-1">
                                            <label>Identity Number</label>
                                            <input type="text" placeholder="Identity number" value="{{ old('identity') }}" name="identity[]" id="identity" class="form-control" autocomplete="identity" style="background: white; border-color: gray;" autofocus required/>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-style-1">
                                            <label>Email</label>
                                            <input type="email" placeholder="Your Email" value="{{ old('email') }}" name="email[]" id="email" class="form-control" autocomplete="email" autofocus  style="background: white; border-color: gray;" required/>
                                        </div>
                                    </div>
                                    
                                    <div class="col">
                                        <div class="input-style-1">
                                            <label>Phone Number</label>
                                            <input type="tel" placeholder="Phone Number" value="{{ old('phone') }}" name="phone[]" id="phone_number" class="form-control" autocomplete="phone_number" autofocus style="background: white; border-color: gray;" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="input-style-1">
                                            <label for="validationDefault01">Name</label>
                                            <input type="text" placeholder="Your Name" value="{{ old('name') }}" name="name[]" id="validationDefault01" class="form-control" autocomplete="name" autofocus style="background: white; border-color: gray;" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-style-1">
                                            <label>Date of birth</label>
                                            <input type="text" placeholder="Date of birth" onfocus="(this.type='date')" onblur="(this.type='text')" value="{{ old('birthdate') }}" name="birthdate[]" id="birthdate" class="form-control" autocomplete="birthdate" autofocus style="background: white; border-color: gray;" required/>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-style-1">
                                            <label>Gender</label>
                                            <select name="gender[]" id="gender" type="text" value="{{ old('gender') }}" autocomplete="gender" autofocus class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="background: white; border-color: gray;" required>                                                                 
                                                    <option selected value="">Choose</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Male">Male</option>                            
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="input-style-1">
                                            <label>Addres</label>
                                            <textarea placeholder="Enter your address" value="{{ old('address') }}" name="address[]" id="address" class="form-control" autocomplete="address" autofocus rows="7" style="background: white; border-color: gray;" required></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            @endfor
                        </div>

                        <input type="text" name="registrant" id="registrant" value="{{ $registrant }}" hidden>
                        <input type="text" name="idMount" id="idMount" value="{{ $destination }}" hidden>
                        <input type="text" name="payment" id="payment" value="{{ $payment }}" hidden>
                        <input type="text" name="date_start" id="date_start" value="{{ $date_start }}" hidden>
                        <input type="text" name="member" id="member" value="{{ $member }}" hidden>

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