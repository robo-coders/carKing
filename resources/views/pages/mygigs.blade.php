@extends('layouts.default')
@section('content')
<header class="content__title">
    <h1>My Gigs</h1>
    <small>Please complete and commit the gigs at a timely manner or you will be penalized</small>
</header>

<div class="col-md-12">
	<div data-columns>
		@for ($i = 0; $i < 1; $i++)
		<div class="card">
			<img class="card-img-top" src="demo/img/gallery/<?php echo rand(25,50) ?>.jpg" alt="">
			
			<div class="actions" style="background:white">
				<div class="dropdown actions__item">
					<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="" class="dropdown-item">Request Extension</a>
						<a href="" class="dropdown-item">Cancel Gig (-RM250)</a>
					</div>
				</div>
			</div>

			<div class="card-body">
				<h4 class="card-title"><a href="/car">Audi CR-V <?php echo rand(1.1,4.9) ?> VTEC Premium SUV</a></h4>
			</div>

			<table class="table table-striped table-bordered mb-0">
				<tbody>
					<tr>
						<th scope="row">Puspakom Check<br/><small>Pickup & Return: Kajang</small></th>
						<td align="center"><div class="time btn btn-info">Complete Gig</div><span style="color:red;font-size:small"><br/>(<span class="time__hours">00:</span>:<span class="time__min">0:</span>:<span class="time__sec">0</span>)</span></td>
					</tr>
					<tr>
						<th scope="row">WhatsApp Agent<br/><small>Nick Chong</small></th>
						<td align="center"><button class="btn btn-success">WhatsApp</button></td>
					</tr>
					<tr>
						<th scope="row">WhatsApp Owner<br/><small>Azman Rashid</small></th>
						<td align="center"><button class="btn btn-success">WhatsApp</button></td>
					</tr>

				</tbody>
			</table>
		</div>
		@endfor
	</div>
</div>
@stop