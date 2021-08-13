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
          <form action="{{ route('CrudUser.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-style settings-card-1 mb-30">
                <div class="profile-info">
                    <div class="row">
                        <div class="col-xxl-7">
                            <div class="input-style-1">
                                <label>Name</label>
                                <input name="name" id="name" type="text" placeholder="Enter Name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus  style="background: white; border-color: gray;"/>

                                @error('name')
                                <div id="name" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-7">
                            <div class="input-style-1">
                                <label>Email</label>
                                <input name="email" id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus style="background: white; border-color: gray;"/>

                                @error('email')
                                <div id="email" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6">
                            <div class="input-style-1">
                                <label>Password</label>
                                <input name="password" id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" autofocus style="background: white; border-color: gray;"/>

                                @error('password')
                                <div id="password" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                          <div class="col-xxl-6">
                            <div class="input-style-1">                            
                                <label>Confirmation Password</label>
                                <input name="password_confirmation" id="password-confirm" type="Password" placeholder="Enter confirm password" class="form-control " autocomplete="new-password" autofocus style="background: white; border-color: gray;"/>
                            </div>
                         </div>
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

