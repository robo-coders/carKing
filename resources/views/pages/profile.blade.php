@extends('layouts.default')
@section('content')
<header class="content__title">
	<h1>Calvin Yap</h1>
	<small>Car Agent, Puspakom Agent, MYEG Agent, JPJ Agent</small>
	<div class="actions">
		<div class="dropdown actions__item">
			<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="" class="dropdown-item">Edit</a>
			</div>
		</div>
	</div>
</header>

<div class="col-md-12">
	<div class="card profile">
		<div class="profile__img">
			<img src="demo/img/contacts/2.jpg" alt="">
			<a href="" class="zmdi zmdi-camera profile__img__edit"></a>
		</div>

		<div class="profile__info">
			<p>Cras mattis consectetur purus sit amet fermentum. Maecenas sed diam eget risus varius blandit sit amet non magnae tiam porta sem malesuada magna mollis euismod.</p>

			<ul class="icon-list">
				<li><i class="zmdi zmdi-phone"></i> 308-360-8938</li>
				<li><i class="zmdi zmdi-email"></i> malinda@inbound.plus</li>
				<li><i class="zmdi zmdi-twitter"></i> @mallinda-hollaway</li>
			</ul>
		</div>
	</div>
</div>
@stop