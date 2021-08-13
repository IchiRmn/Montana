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
          <form action="{{ route('CrudMountain.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-style settings-card-1 mb-30">
                <div class="profile-info">
                    <div class="row">
                        <div class="col-xxl-7">
                            <div class="input-style-1">
                                <label>Name</label>
                                <input name="name" id="name" type="text" placeholder="Destination Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus  style="background: white; border-color: gray;"/>

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
                                <input name="image" id="image" type="file" class="form-control @error('image') is-invalid @enderror" value="{{ old('name') }}" autocomplete="image" autofocus/>
                                
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
                                <input name="height" id="height" type="number" placeholder="Enter Height" class="form-control @error('height') is-invalid @enderror" value="{{ old('height') }}" autocomplete="height" autofocus style="background: white; border-color: gray;"/>

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
                                <input name="maximum_member" id="maximum_member" type="number" placeholder="Enter maximum member" class="form-control @error('maximum_member') is-invalid @enderror" value="{{ old('maximum_member') }}" autocomplete="maximum_member" autofocus style="background: white; border-color: gray;"/>

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
                                <input name="quota" id="quota" type="number" placeholder="Enter Kuota" class="form-control @error('quota') is-invalid @enderror" value="{{ old('quota') }}" autocomplete="quota" autofocus style="background: white; border-color: gray;"/>

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
                                <input name="maximum_stay" id="maximum_stay" type="number" placeholder="Enter maximum stay" class="form-control @error('maximum_stay') is-invalid @enderror" value="{{ old('maximum_stay') }}" autocomplete="maximum_stay" autofocus style="background: white; border-color: gray;"/>

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
                        <textarea name="description" id="description" rows="10" placeholder="Enter description" type="text" class="form-control @error('description') is-invalid @enderror"  autocomplete="description" autofocus style="background: white; border-color: gray;" value = "{{ old('description') }}"></textarea>
                        
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

