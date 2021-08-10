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
    @foreach ($hike as $hike)       
    <form action="{{ route('CrudRegist.update', $hike->registId) }}" method="POST">
        <div class="row justify-content-center">
            @csrf
            @method('PUT')
            <div class="col-lg-7">
            <div class="card-style settings-card-1">
                <div class="title mb-30 d-flex justify-content-between align-items-center">
                <h2><b> </b></h2>
                <a href="{{ route('CrudMountain.edit',$hike->registId); }}" >
                    <button class="border-0 bg-transparent">
                    <i class="lni lni-pencil-alt"></i>
                    </button>
                </a>
                </div>
                <div class="profile-info">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-style-1">
                                <label>ID Registration</label>
                                <input type="text" placeholder="{{ $hike->registId }}" value="{{ $hike->registId }}" readonly/>
                                <small><i>Disabled to change</i></small>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-style-1">
                                <label>Registrant</label>
                                <input type="text" placeholder="{{ $hike->name }}" value="{{ $hike->name }}" readonly/>
                                <small><i>Disabled to change</i></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-style-1">
                                <label>Registrant Email</label>
                                <input type="text" placeholder="{{ $hike->email }}" value="{{ $hike->email }}"  readonly/>
                                <small><i>Disabled to change</i></small>
                            </div>
                        </div>                            
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-style-1">
                                <label >Destination</label>
                                <input type="text" placeholder="{{ $hike->mountain_name }}" value="{{ $hike->mountain_name }}" readonly/>
                                <small><i>Disabled to change</i></small>
                            </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-style-1">
                                <label >Start</label>
                                <select name="date_start" id="date_start" type="text" value="{{ $hike->date_start }}" autocomplete="date_start" autofocus class="form-select form-select-lg mb-3 @error('date_start') is-invalid @enderror" aria-label=".form-select-lg example" style="background: white; border-color: gray;">
                                    @foreach ($date_start as $date_start)
                                    <option value="{{ $date_start }}">{{ $date_start }}</option>
                                    @endforeach
                                </select>
                                @error('date_start')
                                    <div id="date_start" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div> 
                        <div class="col">
                            <div class="input-style-1">
                                <label >Start</label>
                                <select name="date_end" id="date_end" type="text" value="{{ $hike->date_end }}" autocomplete="date_end" autofocus class="form-select form-select-lg mb-3 @error('date_end') is-invalid @enderror" aria-label=".form-select-lg example" style="background: white; border-color: gray;">
                                    @foreach ($date_end as $date_end)
                                    <option value="{{ $date_end }}">{{ $date_end }}</option>
                                    @endforeach
                                </select>
                                @error('date_end')
                                    <div id="date_end" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>     
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-style-1">
                                <label >Payment</label>
                                <select name="payment" id="payment" type="text" value="{{ $hike->payment }}" autocomplete="payment" autofocus class="form-select form-select-lg mb-3 @error('payment') is-invalid @enderror" aria-label=".form-select-lg example" style="background: white; border-color: gray;">                    
                                    <option value="PayPal">PayPal</option>
                                    <option value="BCA">BCA</option>
                                    <option value="Mandiri">Mandiri</option>                             
                                </select>
                                @error('payment')
                                    <div id="payment" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div> 
                        <div class="col">
                            <div class="input-style-1">
                                <label>Status</label>
                                <select name="status" id="status" type="text" value="{{ $hike->status }}" autocomplete="status" autofocus class="form-select form-select-lg mb-3 @error('status') is-invalid @enderror" aria-label=".form-select-lg example" style="background: white; border-color: gray;">                    
                                    @if ($hike->status === "Unpaid")
                                        <option selected>{{ $hike->status }}</option>
                                        <option value="Paid">Paid</option>
                                    @else 
                                        <option selected>{{ $hike->status }}</option>
                                        <option value="Unpaid">Unpaid</option>                            
                                    @endif
                                </select>
                                @error('status')
                                    <div id="status" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>     
                    </div>
                    
                <h2 style="margin-bottom: 20px"><b>Members</b></h2>

                <div class="row">
                    @foreach ($member as $member)
                    <h5 style="margin-bottom: 20px;"><b>Member {{ $loop->iteration }}</b></h5>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Identity Number</label>
                                    <input type="text" placeholder="{{ $member->identity }}" value="{{ $member->identity }}" name="identity" id="identity" class="form-control @error('identity') is-invalid @enderror" autocomplete="identity" style="background: white; border-color: gray;" autofocus/>
                                    @error('identity')
                                    <div id="identity" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Email</label>
                                    <input type="email" placeholder="{{ $member->member_email }} mdpl" value="{{ $member->member_email }}" name="email" id="email" class="form-control @error('email') is-invalid @enderror" autocomplete="email" autofocus  style="background: white; border-color: gray;"/>

                                    @error('email')
                                    <div id="email" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Phone Number</label>
                                    <input type="tel" placeholder="{{ $member->phone }} mdpl" value="{{ $member->phone }}" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" autocomplete="phone_number" autofocus style="background: white; border-color: gray;"/>

                                    @error('phone_number')
                                    <div id="phone_number" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Name</label>
                                    <input type="text" placeholder="{{ $member->member_name }} mdpl" value="{{ $member->member_name }}" name="name" id="name" class="form-control @error('name') is-invalid @enderror" autocomplete="name" autofocus style="background: white; border-color: gray;"/>
                                    
                                    @error('name')
                                    <div id="name" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Date of birth</label>
                                    <input type="text" placeholder="{{ $member->birthdate }}" onfocus="(this.type='date')" onblur="(this.type='text')" value="{{ $member->birthdate }}" name="birthdate" id="birthdate" class="form-control @error('birthdate') is-invalid @enderror" autocomplete="birthdate" autofocus style="background: white; border-color: gray;"/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Gender</label>
                                    <select name="gender" id="gender" type="text" value="{{ $member->gender }}" autocomplete="gender" autofocus class="form-select form-select-lg mb-3 @error('gender') is-invalid @enderror" aria-label=".form-select-lg example" style="background: white; border-color: gray;">                    
                                        @if ($hike->status === "Male")
                                            <option selected>{{ $member->gender }}</option>
                                            <option value="Female">Female</option>
                                        @else 
                                            <option selected>{{ $member->gender }}</option>
                                            <option value="Male">Male</option>                            
                                        @endif
                                    </select>
                                    @error('gender')
                                        <div id="gender" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Addres</label>
                                    <textarea placeholder="{{ $member->address }} mdpl" value="{{ $member->address }}" name="address" id="address" class="form-control @error('address') is-invalid @enderror" autocomplete="address" autofocus rows="7" style="background: white; border-color: gray;">{{ $member->address }}</textarea>

                                    @error('address')
                                        <div id="address" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <input type="text" name ="memberId" value="{{ $member->id }}"hidden>
                    @endforeach
                </div>
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
    @endforeach   

    <!-- ========== title-wrapper end ========== -->
</div>
<!-- end container -->
</section>
<!-- ========== section end ========== -->

@endsection