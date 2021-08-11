@extends('layouts.template-admin')

@section('title', 'Details')

@section('content')

<!-- ========== section start ========== -->
<section class="section">
<div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30 mb-30">
        <div class="row align-items-center">
            <div class="col-md-6">
            <div class="titlemb-30">
                <h2>Regist Details</h2>
            </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <div class="row justify-content-center">
        @foreach ($hike as $hike)     
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
            <div class="row text-start mb-30">
                <h2><b> {{ $hike->registId }}</b></h2>    
            </div> 
            <div class="profile-info">
              <div class="d-flex align-items-center mb-30">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="row"> 
                            <img src="{{ asset('img/Mountain/'.$hike->img) }}" alt="" style="width: 100%; filter: brightness(90%);"/>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Registrant</label>
                                    <input type="text" placeholder="{{ $hike->name }}" value="{{ $hike->name }}"  readonly/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Registrant Email</label>
                                    <input type="text" placeholder="{{ $hike->email }}" value="{{ $hike->email }}"  readonly/>
                                </div>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="input-style-1">
                                    <label >Destination</label>
                                    <input type="text" placeholder="{{ $hike->mountain_name }}" value="{{ $hike->mountain_name }}" readonly/>
                                </div>
                            </div>   
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label >Start</label>
                                    <input type="text" placeholder="{{ $hike->date_start }}" value="{{ $hike->date_start }}" readonly/>
                                </div>
                            </div> 
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Until</label>
                                    <input type="text" placeholder="{{ $hike->date_end }} mdpl" value="{{ $hike->date_end }}" readonly/>
                                </div>
                            </div>     
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="input-style-1">
                                    <label >Payment</label>
                                    <input type="text" placeholder="{{ $hike->payment }}" value="{{ $hike->payment }}" readonly/>
                                </div>
                            </div> 
                            <div class="col">
                                <div class="input-style-1">
                                    <label>Status</label>
                                    <input type="text" placeholder="{{ $hike->status }} mdpl" value="{{ $hike->status }}" readonly/>
                                </div>
                            </div>     
                        </div>
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
                                <input type="text" placeholder="{{ $member->identity }} mdpl" value="{{ $member->identity }}" readonly/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-style-1">
                                <label>Email</label>
                                <input type="text" placeholder="{{ $member->member_email }} mdpl" value="{{ $member->member_email }}" readonly/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-style-1">
                                <label>Phone Number</label>
                                <input type="text" placeholder="{{ $member->phone }} mdpl" value="{{ $member->phone }}" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-style-1">
                                <label>Name</label>
                                <input type="text" placeholder="{{ $member->member_name }} mdpl" value="{{ $member->member_name }}" readonly/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-style-1">
                                <label>Date of birth</label>
                                <input type="text" placeholder="{{ $member->birthdate }} mdpl" value="{{ $member->birthdate }}" readonly/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-style-1">
                                <label>Gender</label>
                                <input type="text" placeholder="{{ $member->gender }} mdpl" value="{{ $member->gender }}" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="input-style-1">
                                <label>Addres</label>
                                <textarea name="" id="" rows="7">{{ $member->address }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    <div class="text-end">
                        <a href="{{ url()->previous(); }}" class="btn btn-secondary">Back</a>
                        <a href="{{ route('CrudRegist.edit', $hike->registId); }}" class="btn btn-success">Edit</a>
                    </div>
                </div>
            </div>
          <!-- end card -->
        </div>
        <!-- end col -->

        {{-- <input type="text" name ="mountId" value="{{ $hike->mountains_id }}"hidden>
        <input type="text" name ="registId" value="{{ $hike->registId }}"hidden> --}}

        @endforeach        
    </div>
    <!-- ========== title-wrapper end ========== -->
</div>
<!-- end container -->
</section>
<!-- ========== section end ========== -->

@endsection