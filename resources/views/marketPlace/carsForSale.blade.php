@extends('layouts.default')
@section('content')
<header class="content__title">
    <h1>Car Marketplace</h1>
    <small>Cars available for sale! You can broker a sale too!</small>
</header>

<div class="col-md-12">
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
					<tr style="font-weight:bold;color:#0066cc">
						<th scope="row">Know someone?<br/><small>Broker this deal & earn</small></th>
						<td>
							<a href="{{ route('applyBroker', ['id'=>$car->id]) }}" style="font-color:#ffffff;" class="btn btn-success">Apply as a Broker</a>
						</td>
					</tr>
					<tr style="background:#BDEBB3;font-weight:bold;color:black;">
						<th scope="row">Selling Price</th>
						<td style="font-size:medium">RM<?php echo number_format(rand(100000,999999)) ?></td>
					</tr>

				</tbody>
			</table>
		</div>
		@endforeach
	</div>
</div>
@stop