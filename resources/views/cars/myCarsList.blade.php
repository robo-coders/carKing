@extends('layouts.default')
@section('content')
<header class="content__title">
    <h1>My Cars</h1>
    <small>Cars you added here should be exclusive to you</small>
</header>
<div class="col-md-12">
	@if(session('success'))
		<div class="alert alert-success">{{session('success')}} </div>
	@endif
@if (session()->has('update'))
<div class="alert alert-success" role="alert">
   <div class="alert-text"> {{session()->get('update')}}</div>
</div>
@endif
@if (session()->has('delete'))
<div class="alert alert-danger" role="alert">
   <div class="alert-text"> {{session()->get('delete')}}</div>
</div>
@endif
	<div class="alert alert-danger">Please approve gig activity of car 2912 <a href="/mycar"><button class="btn btn-outline-warning" style="position:absolute;right:16px;bottom:8px">View</button></a></div>

	<div data-columns>
		@foreach ($cars as $car)
		<div class="card">
			{{-- <img class="card-img-top" src="demo/img/gallery/31.jpg" alt=""> --}}
			@if (isset($car->avatar))
			<td> <img class="card-img-top" src="{{url($car->avatar)}}" alt="{{$car->name}}"></td>
			@else
			<td><img src="{{url('assets/backend/app-assets/images/extras/dummy.png')}}" alt="{{$car->name}}"></td>
			@endif 
			<div class="actions" style="background:white">
				<div class="dropdown actions__item">
					<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{ route('mycarDetails', ['id'=>$car->id]) }}" class="dropdown-item">Edit Details</a>						
						<a href="" class="dropdown-item">Delete</a>
					</div>
				</div>
			</div>

			<div class="card-body">
				<h4 class="card-title"><a href="/mycar">{{$car->title}}</a></h4>
			</div>

			<table class="table table-striped table-bordered mb-0">
				<tbody>
					<tr>
						<th scope="row">Make / Model / Year</th>
						<td>{{$car->make}} {{$car->model}} {{$car->year}}</td>                                
					</tr>
					<tr>
						<th scope="row">Trans. / Engine</th>
						<td>{{$car->transmission}} / {{$car->engineCapacity}}</td>
					</tr>
					<tr>
						<th scope="row">Mileage</th>
						<td>{{$car->mileage}}</td>
					</tr>
					<tr>
						<th scope="row">Location</th>
						<td>Kajang, Selangor</td>
					</tr>
					<tr>
						<th scope="row">Selling Price</th>
						<td>{{$car->price}}</td>
					</tr>
					<tr style="font-weight:bold;color:orange">
						<th scope="row">Agent Assignment</th>
						<td><span class="badge badge-pill badge-warning">Pending...</button></td>
					</tr>

				</tbody>
			</table>
		</div>
		@endforeach
	</div>
</div>
<header class="content__title">
    <h1>My Cars </h1>
    <small>Cars you registered as a agent</small>
</header>
<div class="col-md-12">
	<div data-columns>
		@foreach ($agents as $agent)
		<div class="card">
			{{-- <img class="card-img-top" src="demo/img/gallery/31.jpg" alt=""> --}}
			@if (isset($agent->avatar))
			<td> <img class="card-img-top" src="{{url($agent->avatar)}}" alt="{{$agent->name}}"></td>
			@else
			<td><img src="{{url('assets/backend/app-assets/images/extras/dummy.png')}}" alt="{{$agent->name}}"></td>
			@endif 
			<div class="actions" style="background:white">
				<div class="dropdown actions__item">
					<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{ route('mycarDetails', ['id'=>$agent->id]) }}" class="dropdown-item">Edit Details</a>						
						<a href="" class="dropdown-item">Delete</a>
					</div>
				</div>
			</div>

			<div class="card-body">
				<h4 class="card-title"><a href="/mycar">{{$agent->title}}</a></h4>
			</div>

			<table class="table table-striped table-bordered mb-0">
				<tbody>
					<tr>
						<th scope="row">Make / Model / Year</th>
						<td>{{$agent->make}} {{$agent->model}} {{$agent->year}}</td>                                
					</tr>
					<tr>
						<th scope="row">Trans. / Engine</th>
						<td>{{$agent->transmission}} / {{$agent->engineCapacity}}</td>
					</tr>
					<tr>
						<th scope="row">Mileage</th>
						<td>{{$agent->mileage}}</td>
					</tr>
					<tr>
						<th scope="row">Location</th>
						<td>Kajang, Selangor</td>
					</tr>
					<tr>
						<th scope="row">Selling Price</th>
						<td>RM<?php echo rand(0,20) ?></td>
					</tr>
					<tr style="font-weight:bold;color:orange">
						<th scope="row">Agent Assignment</th>
						<td><span class="badge badge-pill badge-warning">Pending...</button></td>
					</tr>

				</tbody>
			</table>
		</div>
		@endforeach
	</div>
</div>
<header class="content__title">
    <h1>My Cars </h1>
    <small>Cars you registered as Broker</small>
</header>
<div class="col-md-12">
	<div data-columns>
		@foreach ($brokers as $broker)
		<div class="card">
			{{-- <img class="card-img-top" src="demo/img/gallery/31.jpg" alt=""> --}}
			@if (isset($broker->avatar))
			<td> <img class="card-img-top" src="{{url($broker->avatar)}}" alt="{{$broker->name}}"></td>
			@else
			<td><img src="{{url('assets/backend/app-assets/images/extras/dummy.png')}}" alt="{{$broker->name}}"></td>
			@endif 
			<div class="actions" style="background:white">
				<div class="dropdown actions__item">
					<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="{{ route('mycarDetails', ['id'=>$broker->id]) }}" class="dropdown-item">Edit Details</a>						
						<a href="" class="dropdown-item">Delete</a>
					</div>
				</div>
			</div>

			<div class="card-body">
				<h4 class="card-title"><a href="/mycar">{{$broker->title}}</a></h4>
			</div>

			<table class="table table-striped table-bordered mb-0">
				<tbody>
					<tr>
						<th scope="row">Make / Model / Year</th>
						<td>{{$broker->make}} {{$broker->model}} {{$broker->year}}</td>                                
					</tr>
					<tr>
						<th scope="row">Trans. / Engine</th>
						<td>{{$broker->transmission}} / {{$broker->engineCapacity}}</td>
					</tr>
					<tr>
						<th scope="row">Mileage</th>
						<td>{{$broker->mileage}}</td>
					</tr>
					<tr>
						<th scope="row">Location</th>
						<td>Kajang, Selangor</td>
					</tr>
					<tr>
						<th scope="row">Selling Price</th>
					<td>RM {{$broker->price}}</td>
					</tr>
					<tr style="font-weight:bold;color:orange">
						<th scope="row">Agent Assignment</th>
						<td><span class="badge badge-pill badge-warning">Pending...</button></td>
					</tr>
				</tbody>
			</table>
				<a href="{{ route('buyCar', ['id'=>$broker->id]) }}" style="font-color:#ffffff;" class="btn btn-success">Buy now</a>
		</div>
		@endforeach
	</div>
</div>
@stop