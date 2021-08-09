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
                <h2>Destination Details</h2>
            </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <div class="row justify-content-center">        
        <div class="col-lg-7">
          <div class="card-style settings-card-1 mb-30">
            <div class="title mb-30 d-flex justify-content-between align-items-center">
              <h2><b> Mt. {{ $mount->mountain_name }}</b></h2>
              <a href="{{ route('CrudMountain.edit',$mount->id); }}" >
                <button class="border-0 bg-transparent">
                  <i class="lni lni-pencil-alt"></i>
                </button>
              </a>
            </div>
            <div class="profile-info">
              <div class="d-flex align-items-center mb-30">                
                <img src="{{ asset('img/Mountain/'.$mount->img) }}" alt="" style="width: 40%; filter: brightness(90%);"/>         
                <div class="input-style-1"  style="margin-left: 20px">
                  <label>Height</label>
                  <input type="text" placeholder="{{ $mount->height }}" value="{{ $mount->height }}" style="width: 60%;" readonly/>

                  <label style="margin-top: 20px">Quota/Day</label>
                  <input type="text" placeholder="{{ $mount->quota }}" value="{{ $mount->quota }}" style="width: 60%;" readonly/>
                </div>
                <div class="input-style-1">
                    <label>Maximum Member</label>
                    <input type="text" placeholder="{{ $mount->max }}" value="{{ $mount->max }}" style="width: 60%" readonly/>
                    
                    <label style="margin-top: 20px">Maximum Stay</label>
                  <input type="text" placeholder="{{ $mount->days }}" value="{{ $mount->days }}" style="width: 60%;" readonly/>
                </div>
              </div>
              <div class="input-style-1">
                <label>Description</label>
                <textarea style="text-indent: 7%;" rows="10" readonly>{{ $mount->description }}</textarea>
              </div>
              <div class="text-end">
                <a href="{{ url()->previous(); }}" class="btn btn-secondary">Back</a>
                <a href="{{ route('CrudMountain.edit',$mount->id); }}" class="btn btn-success">Edit</a>
              </div>
            </div>
          </div>
          <!-- end card -->
        </div>
        <!-- end col -->
    <!-- ========== title-wrapper end ========== -->
</div>
<!-- end container -->
</section>
<!-- ========== section end ========== -->

@endsection