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
			<h3 class="text-bold mb-10">34567</h3>
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
			<h3 class="text-bold mb-10">74,567</h3>
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
			<h3 class="text-bold mb-10">24,567</h3>
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
			<h3 class="text-bold mb-10">34567</h3>
		  </div>
		</div>
		<!-- End Icon Cart -->
	  </div>
	  <!-- End Col -->
	</div>
	<!-- End Row -->
	
	<div class="row">
	  <div class="col-lg-6">
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
				  <th></th>
				  <th>
					<h6 class="text-sm text-medium">Products</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Category</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Price</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Sold</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Profit</h6>
				  </th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>
					<div class="check-input-primary">
					  <input
						class="form-check-input"
						type="checkbox"
						id="checkbox-1"
					  />
					</div>
				  </td>
				  <td>
					<div class="product">
					  <div class="image">
						<img
						  src="assets/images/products/product-mini-1.jpg"
						  alt=""
						/>
					  </div>
					  <p class="text-sm">Arm Chair</p>
					</div>
				  </td>
				  <td>
					<p class="text-sm">Interior</p>
				  </td>
				  <td>
					<p class="text-sm">$345</p>
				  </td>
				  <td>
					<p class="text-sm">43</p>
				  </td>
				  <td>
					<p class="text-sm">$45</p>
				  </td>
				  <td>
					<div class="action justify-content-end">
					  <button
						class="more-btn ml-10 dropdown-toggle"
						id="moreAction1"
						data-bs-toggle="dropdown"
						aria-expanded="false"
					  >
						<i class="lni lni-more-alt"></i>
					  </button>
					  <ul
						class="dropdown-menu dropdown-menu-end"
						aria-labelledby="moreAction1"
					  >
						<li class="dropdown-item">
						  <a href="#0" class="text-gray">Remove</a>
						</li>
						<li class="dropdown-item">
						  <a href="#0" class="text-gray">Edit</a>
						</li>
					  </ul>
					</div>
				  </td>
				</tr>
			  </tbody>
			</table>
			<!-- End Table -->
		  </div>
		</div>
	  </div>
	  <!-- End Col -->
	<div class="col-lg-6">
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
				  <th></th>
				  <th>
					<h6 class="text-sm text-medium">Products</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Category</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Price</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Sold</h6>
				  </th>
				  <th class="min-width">
					<h6 class="text-sm text-medium">Profit</h6>
				  </th>
				  <th></th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
				  <td>
					<div class="check-input-primary">
					  <input
						class="form-check-input"
						type="checkbox"
						id="checkbox-1"
					  />
					</div>
				  </td>
				  <td>
					<div class="product">
					  <div class="image">
						<img
						  src="assets/images/products/product-mini-1.jpg"
						  alt=""
						/>
					  </div>
					  <p class="text-sm">Arm Chair</p>
					</div>
				  </td>
				  <td>
					<p class="text-sm">Interior</p>
				  </td>
				  <td>
					<p class="text-sm">$345</p>
				  </td>
				  <td>
					<p class="text-sm">43</p>
				  </td>
				  <td>
					<p class="text-sm">$45</p>
				  </td>
				  <td>
					<div class="action justify-content-end">
					  <button
						class="more-btn ml-10 dropdown-toggle"
						id="moreAction1"
						data-bs-toggle="dropdown"
						aria-expanded="false"
					  >
						<i class="lni lni-more-alt"></i>
					  </button>
					  <ul
						class="dropdown-menu dropdown-menu-end"
						aria-labelledby="moreAction1"
					  >
						<li class="dropdown-item">
						  <a href="#0" class="text-gray">Remove</a>
						</li>
						<li class="dropdown-item">
						  <a href="#0" class="text-gray">Edit</a>
						</li>
					  </ul>
					</div>
				  </td>
				</tr>
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
					<th></th>
					<th>
					  <h6 class="text-sm text-medium">Products</h6>
					</th>
					<th class="min-width">
					  <h6 class="text-sm text-medium">Category</h6>
					</th>
					<th class="min-width">
					  <h6 class="text-sm text-medium">Price</h6>
					</th>
					<th class="min-width">
					  <h6 class="text-sm text-medium">Sold</h6>
					</th>
					<th class="min-width">
					  <h6 class="text-sm text-medium">Profit</h6>
					</th>
					<th></th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>
					  <div class="check-input-primary">
						<input
						  class="form-check-input"
						  type="checkbox"
						  id="checkbox-1"
						/>
					  </div>
					</td>
					<td>
					  <div class="product">
						<div class="image">
						  <img
							src="assets/images/products/product-mini-1.jpg"
							alt=""
						  />
						</div>
						<p class="text-sm">Arm Chair</p>
					  </div>
					</td>
					<td>
					  <p class="text-sm">Interior</p>
					</td>
					<td>
					  <p class="text-sm">$345</p>
					</td>
					<td>
					  <p class="text-sm">43</p>
					</td>
					<td>
					  <p class="text-sm">$45</p>
					</td>
					<td>
					  <div class="action justify-content-end">
						<button
						  class="more-btn ml-10 dropdown-toggle"
						  id="moreAction1"
						  data-bs-toggle="dropdown"
						  aria-expanded="false"
						>
						  <i class="lni lni-more-alt"></i>
						</button>
						<ul
						  class="dropdown-menu dropdown-menu-end"
						  aria-labelledby="moreAction1"
						>
						  <li class="dropdown-item">
							<a href="#0" class="text-gray">Remove</a>
						  </li>
						  <li class="dropdown-item">
							<a href="#0" class="text-gray">Edit</a>
						  </li>
						</ul>
					  </div>
					</td>
				  </tr>
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