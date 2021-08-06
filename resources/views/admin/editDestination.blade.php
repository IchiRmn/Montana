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
          <form action="/updateDestination" method="POST">
            @csrf
            <div class="card-style settings-card-1 mb-30">
                <div class="profile-info">
                    <div class="row">
                        <div class="col-xxl-7">
                            <div class="input-style-1">
                                <label>Name</label>
                                <input type="text" placeholder="" value=""/>
                            </div>
                        </div>
                          <div class="col-xxl-5">
                            <div class="input-style-1">                            
                                <label>Image</label>
                                <input type="file" placeholder="" value=""/>
                            </div>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="input-style-1">
                                <label>Name</label>
                                <input type="text" placeholder="" value=""/>
                            </div>
                        </div>
                          <div class="col-xxl-6">
                            <div class="input-style-1">                            
                                <label>Name</label>
                                <input type="text" placeholder="" value=""/>
                            </div>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="input-style-1">
                                <label>Name</label>
                                <input type="text" placeholder="" value=""/>
                            </div>
                        </div>
                          <div class="col-xxl-6">
                            <div class="input-style-1">                            
                                <label>Name</label>
                                <input type="text" placeholder="" value=""/>
                            </div>
                         </div>
                    </div>
                    <div class="input-style-1">
                        <label>Description</label>
                        <textarea placeholder="Write your bio here" rows="10">
                            {{ $mount->description }}
                        </textarea>
                    </div>
                    <div class="text-end">
                        <a href="{{ url()->previous(); }}" class="btn btn-secondary">Back</a>
                        <button type="submit" href="{{ url('/editDestination/'.$mount->id); }}" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
          <!-- end card -->
        </div>
        <!-- end col -->
    <!-- ========== title-wrapper end ========== -->
</div>
<!-- end container -->
</section>
<!-- ========== section end ========== -->

@endsection