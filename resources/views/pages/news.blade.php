@extends('layouts.default')
@section('content')
<header class="content__title">
    <h1>News / Blog</h1>

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
				<img class="card-img-top" src="demo/img/gallery/calvinyap.jpg" alt="">
				<div class="card-body">
					<h4 class="card-title">Message from the King</h4>

					<p>Pellentesque lacinia sagittis libero et feugiat. Etiam volutpat adipiscing tortor non
						luctus. Vivamus venenatis vitae metus et aliquet. Praesent vitae justo purus. In
						hendrerit lorem nisl, ac lacinia urna aliquet non. Quisque nisi tellus, rhoncus quis est
						sit amet, lacinia euismod nunc. Aenean nec nibh velit. Fusce quis ante in nisl molestie
						fringilla. Nunc vitae ante id magna feugiat condimentum. Maecenas sit amet urna
					massa.</p>

					<p>Integer eu lectus sollicitudin, hendrerit est ac, sollicitudin nisl. Quisque viverra
						sodales lectus nec ultrices. Fusce elit dolor, dignissim a nunc id, varius suscipit
						turpis. Cras porttitor turpis vitae leo accumsan molestie. Morbi vitae luctus leo. Sed
						nec scelerisque magna, et adipiscing est. Proin lobortis lectus eu sem ullamcorper,
						commodo malesuada quam fringilla. Curabitur ac nunc dui. Class aptent taciti sociosqu ad
						litora torquent per conubia nostra, per inceptos himenaeos. Fusce sagittis enim eu est
					lacinia, ut egestas ligula imperdiet.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@stop