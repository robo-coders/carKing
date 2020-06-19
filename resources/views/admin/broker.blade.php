@extends('layouts.default')
@section('content')
<div class="content__inner">
    <header class="content__title">
        <h1> List of Brokers </h1>

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
                  <th scope="col">Registered at</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              @foreach ($brokers as $broker)
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>{{$broker->name}}</td>
                    <td>{{$broker->email}}</td>
                    <td>{{$broker->created_at->toFormattedDateString()}}</td>
                    @foreach ($broker->brokers as $register)
                      <td>{{$register->created_at->toFormattedDateString()}} ({{$register->created_at->diffForHumans()}})</td>
                    @endforeach
                    <td>
                        <div class="btn-group">
                          <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Actions
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('brokerWallet', ['id'=>$broker->id]) }}">Edit Wallet</a>
                          </div>
                        </div>
                    </td>
                  </tr>
                </tbody>
              @endforeach
            </table>
    			</div>
    		</div>
    	</div>

    </div>
@stop