@extends('layouts.default')
@section('content')
<div class="content__inner">
    <header class="content__title">
        <h1> List of Agents </h1>

	    <div class="actions">
	        <div class="dropdown actions__item">
	            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
	            <div class="dropdown-menu dropdown-menu-right">
	                <a href="" class="dropdown-item">Edit Details</a>
	                <a href="" class="dropdown-item">Add to Favourite</a>                
	            </div>
	        </div>
	    </div>
    </header>

    <div class="row">

    	<div class="col-sm-12">
    		<div class="card">
    			<div class="card-body">
    				<table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Created at</th>
                </tr>
              </thead>
              @foreach ($agents as $agent)
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$agent->name}}</td>
                    <td>{{$agent->email}}</td>
                    <td>{{$agent->created_at->toFormattedDateString()}}</td>
                  </tr>
                </tbody>
              @endforeach
            </table>
    			</div>
    		</div>
    	</div>

    </div>
@stop