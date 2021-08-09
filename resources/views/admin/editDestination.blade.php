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
                                <input name="name" id="name" type="text" placeholder="{{ $mount->mountain_name }}" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus />

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
                                <input name="image" id="image" type="file" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" autocomplete="image" autofocus/>
                                
                                @error('image')
                                <div id="image" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="input-style-1">
                                <label>Height</label>
                                <input name="height" id="height" type="number" placeholder="{{ $mount->height }}" class="form-control @error('height') is-invalid @enderror" value="{{ old('height') }}" autocomplete="height" autofocus/>

                                @error('height')
                                <div id="height" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                          <div class="col-xxl-6">
                            <div class="input-style-1">                            
                                <label>Maximum Member</label>
                                <input name="maximum_member" id="maximum_member" type="number" placeholder="{{ $mount->max }}" class="form-control @error('maximum_member') is-invalid @enderror" value="{{ old('maximum_member') }}" autocomplete="maximum_member" autofocus/>

                                @error('maximum_member')
                                <div id="maximum_member" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="input-style-1">
                                <label>Quota/Day</label>
                                <input name="quota" id="quota" type="number" placeholder="{{ $mount->quota }}" class="form-control @error('quota') is-invalid @enderror" value="{{ old('quota') }}" autocomplete="quota" autofocus/>

                                @error('quota')
                                <div id="quota" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                          <div class="col-xxl-6">
                            <div class="input-style-1">                            
                                <label>Maximum Stay</label>
                                <input name="maximum_stay" id="maximum_stay" type="number" placeholder="{{ $mount->days }}" class="form-control @error('maximum_stay') is-invalid @enderror" value="{{ old('maximum_stay') }}" autocomplete="maximum_stay" autofocus/>

                                @error('maximum_stay')
                                <div id="maximum_stay" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                         </div>
                    </div>
                    <div class="input-style-1">
                        <label>Description</label>
                        <textarea name="description" id="description" rows="10" placeholder="{{ $mount->description }}" type="text" class="form-control @error('description') is-invalid @enderror" value="{{ old('desc') }}" autocomplete="description" autofocus></textarea>
                        
                        @error('description')
                        <div id="description" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
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
