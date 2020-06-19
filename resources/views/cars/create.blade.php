@extends('layouts.default')
@section('content')

<header class="content__title">
    <h1>My Cars</h1>
    <small>Create a car list</small>
</header>
<div class="row">
	<div class="col-md-12">
		<div class="card" style="padding:25px;">
			<form action="{{ route('car_list_create') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-row">
					<div class="form-group col-md-3">
					<label>Title</label>
					<input type="text" name="title" class="form-control" placeholder="write Car title here..">
					</div>
					<div class="form-group col-md-3">
					<label>Type</label>
					<input type="text" name="type" class="form-control">
					</div>
					<div class="form-group col-md-3">
					<label>Make</label>
					<input type="text" name="make" class="form-control">
					</div>
					<div class="form-group col-md-2">
					<label>Model</label>
					<input type="text" name="model" class="form-control">
					</div>
					<div class="form-group col-md-1">
					<label>Year</label>
					<input type="text" name="year" class="form-control">
					</div>
				</div>
				{{-- Second Row --}}
				<div class="form-row">
					<div class="form-group col-md-3">
					<label>Variant</label>
					<input type="text" name="variant" class="form-control">
					</div>
					<div class="form-group col-md-3">
					<label>Engine Capacity</label>
					<input type="text" name="engineCapacity" class="form-control">
					</div>
					<div class="form-group col-md-3">
					<label>Tranmission</label>
					<input type="text" name="transmission" class="form-control">
					</div>
					<div class="form-group col-md-3">
					<label>Seat Capacity</label>
					<input type="text" name="seatCapacity" class="form-control">
					</div>
				</div>
				{{-- Third Row --}}
				<div class="form-row">
					<div class="form-group col-md-2">
						<label>Mileage</label>
						<input type="text" name="mileage" class="form-control">
					</div>
					<div class="form-group col-md-2">
						<label>Color</label>
						<input type="text" name="color" class="form-control">
					</div>
					<div class="form-group col-md-3">
						<label>Description</label>
						<input type="textarea" name="description" class="form-control">
					</div>
					<div class="form-group col-md-2">
						<label>Price</label>
						<input type="text" name="price" class="form-control">
					</div>
					<div class="form-group col-md-3">
						<label>Upload Photos</label>
						<input type="file" class="form-control" id="files" name="avatar" multiple >
					</div>
				</div>
				<button type="reset" class="btn btn-dark">Reset</button>
				<button type="submit" class="btn btn-info">Create</button>
			  </form>
		</div>
	</div>
</div>
@stop