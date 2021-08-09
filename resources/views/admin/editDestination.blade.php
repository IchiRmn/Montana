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
          <form action="{{ route('CrudMountain.update', $mount->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-style settings-card-1 mb-30">
                <div class="profile-info">
                    <div class="row">
                        <div class="col-xxl-7">
                            <div class="input-style-1">
                                <label>Name</label>
                                <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus />

                                @error('name')
                                <div id="name" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                          <div class="col-xxl-5">
                            <div class="input-style-1">                            
                                <label>Image</label>
                                <input name="image" id="image" type="file" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus/>
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
                        <button type="submit" class="btn btn-primary">Submit</button>
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