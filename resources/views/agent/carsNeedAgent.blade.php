@extends('layouts.default')
@section('content')
<header class="content__title">
    <h1>Cars need agents</h1>
    <small>Cars you added here should be exclusive to you</small>
</header>
<div class="col-md-12">
	@if(session('success'))
		<div class="alert alert-success">{{session('success')}} </div>
	@endif

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
						<a href="{{ route('car_need_agent', ['id'=>$car->id]) }}" class="dropdown-item">Apply as a agent</a>						
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
						<td>RM<?php echo rand(0,20) ?></td>
					</tr>
					<tr style="font-weight:bold;color:orange">
						<th scope="row">Agent Assignment</th>
						<td>
							<a href="{{ route('car_need_agent', ['id'=>$car->id]) }}">
								<span class="badge badge-pill badge-warning">
									Apply 
								</span>
							</a>
							</td>
					</tr>

				</tbody>
			</table>
		</div>
		@endforeach
	</div>
</div>
@stop