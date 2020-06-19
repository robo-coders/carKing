@extends('layouts.default')
@section('content')
<header class="content__title">
    <h1>Car Marketplace</h1>
    <small>Cars available for sale! You can broker a sale too!</small>
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
						<a href="" class="dropdown-item">Add to Favourites</a>						
					</div>
				</div>
			</div>

			<div class="card-body">
				<h4 class="card-title"><a href="/car">Audi CR-V <?php echo rand(1.1,4.9) ?> VTEC Premium SUV</a></h4>
			</div>

			<table class="table table-striped table-bordered mb-0">
				<tbody>
					<tr>
						<th scope="row" style="width:50%">Make / Model / Year</th>
						<td>Audi TT 2012</td>                                
					</tr>
					<tr>
						<th scope="row">Trans. / Engine</th>
						<td>Auto / 5000cc</td>                                
					</tr>
					<tr>
						<th scope="row">Mileage</th>
						<td>10,000-15,000 (km)</td>
					</tr>
					<tr>
						<th scope="row">Location</th>
						<td>Kajang, Selangor</td>
					</tr>
					<tr style="font-weight:bold;color:#0066cc">
						<th scope="row">Know someone?<br/><small>Broker this deal & earn</small></th>
						<td><button class="btn btn-success">Earn RM<?php echo rand(1000,9999) ?></td>
					</tr>
					<tr style="background:#BDEBB3;font-weight:bold;color:black;">
						<th scope="row">Selling Price</th>
						<td style="font-size:medium">RM<?php echo number_format(rand(100000,999999)) ?></td>
					</tr>

				</tbody>
			</table>
		</div>
		@endfor

	</div>
</div>
@stop