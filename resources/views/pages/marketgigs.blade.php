@extends('layouts.default')
@section('content')
<header class="content__title">
    <h1>Gigs available for grabs</h1>
    <small>Please commit completion of your gigs or you will be penalized!</small>
</header>

<div class="col-md-12">
	<div data-columns>
		@for ($i = 0; $i < 10; $i++)
		<div class="card">
			<img class="card-img-top" src="demo/img/gallery/<?php echo rand(25,50) ?>.jpg" alt="">
			
			<div class="actions" style="background:white">
				<div class="dropdown actions__item">
					<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="" class="dropdown-item">Edit Details</a>
						<a href="" class="dropdown-item">Delete</a>
					</div>
				</div>
			</div>

			<div class="card-body">
				<h4 class="card-title"><a href="/car">Audi CR-V <?php echo rand(1.1,4.9) ?> VTEC Premium SUV</a></h4>
			</div>

			<table class="table table-striped table-bordered mb-0">
				<tbody>
					<tr>
						<th scope="row" style="width:60%">Puspakom Check<br/><small>Pickup & Return: Kajang</small></th>
						<td><button class="btn btn-success">Earn RM<?php echo rand(100,999) ?></td>                                
					</tr>
					<tr>
						<th scope="row">Interchange<br/><small>Location: Kajang + Damansara</small></th>
						<td><button class="btn btn-success">Earn RM<?php echo rand(100,999) ?></td>
					</tr>
					<tr>
						<th scope="row">JPJ Registration<br/><small>Any JPJ branch</small></th>
						<td><button class="btn btn-success">Earn RM<?php echo rand(100,999) ?></td>
					</tr>
					<tr>
						<th scope="row">Insurance & Roadtax<br/><small>Refer buyer for preference</small></th>
						<td><button class="btn btn-success">Earn RM<?php echo rand(100,999) ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		@endfor
	</div>
</div>
@stop