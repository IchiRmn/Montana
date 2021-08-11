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
    <form action="{{ route('CrudRegist.update', $registId) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card-style settings-card-1">
                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                        <h2><b> </b></h2>
                        <a href="{{ route('CrudMountain.edit',$registId); }}" >
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
                                <input type="text" placeholder="{{ $registId }}" value="{{ $registId }}" readonly/>
                                <small><i>Disabled to change</i></small>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-style-1">
                                <label>Registrant</label>
                                <input type="text" placeholder="{{ $userName }}" value="{{ $userName }}" readonly/>
                                <small><i>Disabled to change</i></small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-style-1">
                                <label>Registrant Email</label>
                                <input type="text" placeholder="{{ $userEmail }}" value="{{ $userEmail }}"  readonly/>
                                <small><i>Disabled to change</i></small>
                            </div>
                        </div>                            
                    </div>
                    <div class="row">
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
                                {{-- <select name="date_start" id="date_start" type="text" value="{{ $dateStart }}" autocomplete="date_start" autofocus class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="background: white; border-color: gray;">
                                    @foreach ($date_start as $date_start)
                                    <option value="{{ $date_start }}">{{ $date_start }}</option>
                                    @endforeach
                                </select> --}}
                            </div>
                        </div> 
                        <div class="col">
                            <div class="input-style-1">
                                <label >Until</label>
                                <input type="text" placeholder="{{ $dateEnd }}" value="{{ $dateEnd }}" readonly/>
                                <small><i>Disabled to change</i></small>
                                {{-- <select name="date_end" id="date_end" type="text" value="{{ $dateEnd }}" autocomplete="date_end" autofocus class="form-select form-select-lg mb-3 " aria-label=".form-select-lg example" style="background: white; border-color: gray;">
                                    @foreach ($date_end as $date_end)
                                    <option value="{{ $date_end }}">{{ $date_end }}</option>
                                    @endforeach
                                </select> --}}
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
                    </div>

                <h2 style="margin-bottom: 40px"><b>Members</b></h2>

                <div class="row">
                    @foreach ($member as $member)
                    <h5 style="margin-bottom: 20px;"><b>Member {{ $loop->iteration }}</b></h5>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Identity Number</label>
                                    <input type="text" placeholder="Identity number" value="{{ $member->identity }}" name="member[{{$loop->index}}][identity]" id="identity" class="form-control @error('identity') is-invalid @enderror" autocomplete="identity" style="background: white; border-color: gray;" autofocus required/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Email</label>
                                    <input type="email" placeholder="Your Email" value="{{ $member->member_email }}" name="member[{{$loop->index}}][email]" id="email" class="form-control @error('email') is-invalid @enderror" autocomplete="email" autofocus  style="background: white; border-color: gray;" required/>
                                </div>
                            </div>
                            
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Phone Number</label>
                                    <input type="tel" placeholder="Phone Number" value="{{ $member->phone }}" name="member[{{$loop->index}}][phone_number]" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" autocomplete="phone_number" autofocus style="background: white; border-color: gray;" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label for="validationDefault01">Name</label>
                                    <input type="text" placeholder="Your Name" value="{{ $member->member_name }}" name="member[{{$loop->index}}][name]" id="validationDefault01" class="form-control" autocomplete="name" autofocus style="background: white; border-color: gray;" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Date of birth</label>
                                    <input type="text" placeholder="Date of birth" onfocus="(this.type='date')" onblur="(this.type='text')" value="{{ $member->birthdate }}" name="member[{{$loop->index}}][birthdate]" id="birthdate" class="form-control @error('birthdate') is-invalid @enderror" autocomplete="birthdate" autofocus style="background: white; border-color: gray;" required/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Gender</label>
                                    <select name="member[{{$loop->index}}][gender]" id="gender" type="text" value="{{ $member->gender }}" autocomplete="gender" autofocus class="form-select form-select-lg mb-3 @error('gender') is-invalid @enderror" aria-label=".form-select-lg example" style="background: white; border-color: gray;" required>                    
                                        @if ($member->gender === "Male")
                                            <option selected>{{ $member->gender }}</option>
                                            <option value="Female">Female</option>
                                        @else 
                                            <option selected>{{ $member->gender }}</option>
                                            <option value="Male">Male</option>                            
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Addres</label>
                                    <textarea placeholder="Enter your address" value="{{ $member->address }}" name="member[{{$loop->index}}][address]" id="address" class="form-control @error('address') is-invalid @enderror" autocomplete="address" autofocus rows="7" style="background: white; border-color: gray;" required>{{ $member->address }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <input type="text" name ="member[{{$loop->index}}][id]" value="{{ $member->id }}"hidden>
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

    <!-- ========== title-wrapper end ========== -->
</div>
<!-- end container -->
</section>
<!-- ========== section end ========== -->

@endsection