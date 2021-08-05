@extends('layouts.template-admin')

@section('title', 'Dashboard')

@section('content')	
<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">
	<!-- ========== title-wrapper start ========== -->
	<div class="title-wrapper pt-30">
	  <div class="row align-items-center">
		<div class="col-md-6">
		  
		</div>
		<!-- end col -->
		<div class="col-md-6">
		  <div class="breadcrumb-wrapper mb-30">
			<nav aria-label="breadcrumb">
			  
			</nav>
		  </div>
		</div>
		<!-- end col -->
	  </div>
	  <!-- end row -->
	</div>
	<!-- ========== title-wrapper end ========== -->
	<div class="row">
	  <div class="col-lg">
		<div class="card-style mb-30">
		  <div class="title d-flex flex-wrap justify-content-between">
			<div class="left">
			  <h6 class="text-medium mb-10">Yearly</h6>
			  <h3 class="text-bold">245,479</h3>
			</div>
		  </div>
		  <!-- End Title -->
		  <div class="chart">
			<canvas
			  id="Chart1"
			  style="width: 100%; height: 400px"
			></canvas>
		  </div>
		  <!-- End Chart -->
		</div>
	  </div>
	  <!-- End Col -->
	</div>
	<!-- End Row --> 
   
	<div class="row">
	  <div class="col-xl-3 col-lg-4 col-sm-6">
		<div class="icon-card mb-30">
		  <div class="icon purple">
			<i class="lni lni-users"></i>
		  </div>
		  <div class="content">
			<h6 class="mb-10">Users</h6>
			<h3 class="text-bold mb-10">{{ $user->count() }}</h3>
		  </div>
		</div>
		<!-- End Icon Cart -->
	  </div>
	  <!-- End Col -->
	  <div class="col-xl-3 col-lg-4 col-sm-6">
		<div class="icon-card mb-30">
		  <div class="icon success">
			<i class="lni lni-map-marker"></i>
		  </div>
		  <div class="content">
			<h6 class="mb-10">Destination</h6>
			<h3 class="text-bold mb-10">{{ $mount->count() }}</h3>
		  </div>
		</div>
		<!-- End Icon Cart -->
	  </div>
	  <!-- End Col -->
	  <div class="col-xl-3 col-lg-4 col-sm-6">
		<div class="icon-card mb-30">
		  <div class="icon primary">
			<i class="lni lni-clipboard"></i>
		  </div>
		  <div class="content">
			<h6 class="mb-10">Registration</h6>
			<h3 class="text-bold mb-10">{{ $result->count() }}</h3>
		  </div>
		</div>
		<!-- End Icon Cart -->
	  </div>
	  <!-- End Col -->
	  <div class="col-xl-3 col-lg-4 col-sm-6">
		<div class="icon-card mb-30">
		  <div class="icon orange">
			<i class="lni lni-network"></i>
		  </div>
		  <div class="content">
			<h6 class="mb-10">Members</h6>
			<h3 class="text-bold mb-10">{{ $regist->count() }}</h3>
		  </div>
		</div>
		<!-- End Icon Cart -->
	  </div>
	  <!-- End Col -->
	</div>
	<!-- End Row -->
	
	<div class="row">
	  <div class="col-lg-4">
		<div class="card-style mb-30">
		  <div
			class="title d-flex flex-wrap justify-content-between  align-items-center"
		  >
			<div class="left">
			  <h6 class="text-medium mb-30">Users</h6>
			</div>
		  </div>
		  <!-- End Title -->
		  <div class="table-responsive" style="height: 300px; overflow: auto;">
			<table class="table top-selling-table">
			  <thead>
				<tr>
				  <th class="min-width">
					<h6 class="text-sm text-medium">ID</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Name</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Email</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Role</h6>
				  </th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
				  @foreach (App\Models\User::all() as $auth)
				  <tr>
					<td>	
					  <p class="text-sm text-start">{{ $auth->id }}</p>
					</td>
					<td>
					  <p class="text-sm">{{ $auth->name }}</p>
					</td>
					<td>
					  <p class="text-sm">{{ $auth->email }}</p>
					</td>
					<td>
						@php
							$r = App\Models\Role::where('id', $auth->role_id)->get();
						@endphp
						@foreach ($r as $r)				
							<p class="text-sm">{{ $r->role}}</p>
						@endforeach
					</td>
				  </tr>
				  @endforeach
			  </tbody>
			</table>
			<!-- End Table -->
		  </div>
		</div>
	  </div>
	  <!-- End Col -->
	<div class="col-lg-8">
		<div class="card-style mb-30">
		  <div
			class="title d-flex flex-wrap justify-content-between align-items-center"
		  >
			<div class="left">
			  <h6 class="text-medium mb-30">Destination</h6>
			</div>
		  </div>
		  <!-- End Title -->
		  <div class="table-responsive" style="height: 300px; overflow: auto;">
			<table class="table top-selling-table">
			  <thead>
				<tr>
				  <th>
					<h6 class="text-sm text-medium">No</h6>
				  </th>
				  <th>
					<h6 class="text-sm text-medium">Name</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Height</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Maximum Quota/Day</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Member Limit</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Maximum Stay</h6>
				  </th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
				@foreach ($mount as $mount)	
				<tr>
				  <td>				
					<p class="text-sm">{{ $loop->iteration }}</p>
				  </td>	
				  <td>				
					<p class="text-sm">{{ $mount->mountain_name }}</p>
				  </td>
				  <td>
					<p class="text-sm">{{ $mount->height }}</p>
				  </td>
				  <td>
					<p class="text-sm">{{ $mount->quota }}</p>
				  </td>
				  <td>
					<p class="text-sm">{{ $mount->max }}</p>
				  </td>
				  <td>
					<p class="text-sm">{{ $mount->days }}</p>
				  </td>
				  <td>
					<div class="action justify-content-end">
						<a href="#0" class="main-btn dark-btn rounded-md btn-hover btn-sm text-sm" style="padding: 5px;">Details</a>
					</div>
				  </td>
				</tr>
				@endforeach
			  </tbody>
			</table>
			<!-- End Table -->
		  </div>
		</div>
	  </div>
	  <!-- End Col -->
	</div>

	<div class="row" >
	  <div class="col-lg" >
		  <div class="card-style mb-30">
			<div
			  class="title d-flex flex-wrap justify-content-between align-items-center"
			>
			  <div class="left">
				<h6 class="text-medium mb-30">Registration</h6>
			  </div>
			</div>
			<!-- End Title -->
			<div class="table-responsive" style="height: 400px; overflow: auto;">
			  <table class="table top-selling-table" >
				<thead>
				<tr>
					<th>
					<h6 class="text-sm text-medium">No</h6>
					</th>
					<th>
					<h6 class="text-sm text-medium">ID Registration</h6>
					</th>
					<th class="min-width">
					<h6 class="text-sm text-medium">Registrant</h6>
					</th>
					<th class="min-width">
					<h6 class="text-sm text-medium">Destination</h6>
					</th>
					<th class="min-width">
					<h6 class="text-sm text-medium">Number Of Members</h6>
					</th>
					<th class="min-width">
					<h6 class="text-sm text-medium">Date Start</h6>
					</th>
					<th class="min-width">
					<h6 class="text-sm text-medium">End Date</h6>
					</th>
					<th class="min-width">
					<h6 class="text-sm text-medium">Status</h6>
					</th>
					<th class="min-width">
					<h6 class="text-sm text-medium">Payment</h6>
					</th>
					<th></th>
				</tr>
				</thead>
				<tbody>
				@foreach ($result as $result)	
				<tr>
				  <td>				
					<p class="text-sm">{{ $loop->iteration }}</p>
				  </td>	
				  <td>				
					<p class="text-sm">{{ $result->registId }}</p>
				  </td>
				  <td>
					<p class="text-sm">{{ $result->name }}</p>
				  </td>
				  <td>
					<p class="text-sm">Mt. {{ $result->mountain_name }}</p>
				  </td>
				  <td>
					<p class="text-sm">{{ $regist->where('regists_id', $result->registId)->count() }}</p>
				  </td>
				  <td>
					<p class="text-sm">{{ $result->date_start }}</p>
				  </td>
				  <td>
					<p class="text-sm">{{ $result->date_end }}</p>
				  </td>
				  @if ($result->status === "Unpaid")
				  <td>
					<span class="status-btn close-btn">Unpaid</span>
				  </td>
				  @else
				  <td>
					<span class="status-btn succes-btn">Paid</span>
				  </td>
				  @endif
				  <td>
					<p class="text-sm">{{ $result->payment }}</p>
				  </td>
				  <td>
					<div class="action justify-content-end">
						<a href="#0" class="main-btn dark-btn rounded-md btn-hover btn-sm text-sm" style="padding: 5px;">Details</a>
					</div>
				  </td>
				</tr>
				@endforeach
				</tbody>
			  </table>
			  <!-- End Table -->
			</div>
		  </div>
		</div>
	</div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->
@endsection