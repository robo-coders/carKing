@extends('layouts.default')
@section('content')
<header class="content__title">
    <h1>Settings</h1>

	<div class="actions">
		<div class="dropdown actions__item">
			<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="" class="dropdown-item">Refresh</a>
			</div>
		</div>
	</div>
</header>

<div class="row">
	<div class="col-md-12">
		<div data-columns>
			
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Upload NRIC & Details</h4>
					<form class="row">
						<div class="col-md-12" style="padding:0">
							<div class="form-group">
								<label>Full Name</label>
								<input type="email" class="form-control" placeholder="David Smith">
								<i class="form-group__bar"></i>
							</div>

							<div class="form-group">
								<label>Email address</label>
								<input type="email" class="form-control" placeholder="name@example.com">
								<i class="form-group__bar"></i>
							</div>

							<div class="form-group">
								<label>Example select</label>
								<div class="select">
									<select class="form-control">
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
									<i class="form-group__bar"></i>
								</div>
							</div>

							<div class="form-group">
								<label>Example textarea</label>
								<textarea class="form-control"></textarea>
								<i class="form-group__bar"></i>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Bank Account Details</h4>
					<form class="row">
						<div class="col-md-12" style="padding:0">
							<div class="form-group">
								<label>Full Name</label>
								<input type="email" class="form-control" placeholder="David Smith">
								<i class="form-group__bar"></i>
							</div>

							<div class="form-group">
								<label>Email address</label>
								<input type="email" class="form-control" placeholder="name@example.com">
								<i class="form-group__bar"></i>
							</div>

							<div class="form-group">
								<label>Example select</label>
								<div class="select">
									<select class="form-control">
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
									<i class="form-group__bar"></i>
								</div>
							</div>

							<div class="form-group">
								<label>Example textarea</label>
								<textarea class="form-control"></textarea>
								<i class="form-group__bar"></i>
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="card">
				<div class="card-body">
					<h4 class="card-title">Phone Number</h4>
					<form class="row">
						<div class="col-md-12" style="padding:0">
							<div class="form-group">
								<label>Full Name</label>
								<input type="email" class="form-control" placeholder="David Smith">
								<i class="form-group__bar"></i>
							</div>

							<div class="form-group">
								<label>Email address</label>
								<input type="email" class="form-control" placeholder="name@example.com">
								<i class="form-group__bar"></i>
							</div>

							<div class="form-group">
								<label>Example select</label>
								<div class="select">
									<select class="form-control">
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
										<option>Option 5</option>
									</select>
									<i class="form-group__bar"></i>
								</div>
							</div>

							<div class="form-group">
								<label>Example textarea</label>
								<textarea class="form-control"></textarea>
								<i class="form-group__bar"></i>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
@stop