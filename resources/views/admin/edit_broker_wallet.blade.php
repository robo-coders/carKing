@extends('layouts.default')
@section('content')
<div class="content__inner">
    <header class="content__title">
        <h1>Broker Wallet Details</h1>

        <div class="actions">
            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item">Nothing Here</a>
                </div>
            </div>
        </div>
    </header>

    <div class="col-sm-12">
        @if (session()->has('message'))
<div class="alert alert-success" role="alert">
   <div class="alert-text"> {{session()->get('message')}}</div>
</div>
@endif
@if (session()->has('update'))
<div class="alert alert-success" role="alert">
   <div class="alert-text"> {{session()->get('update')}}</div>
</div>
@endif
@if (session()->has('delete'))
<div class="alert alert-danger" role="alert">
   <div class="alert-text"> {{session()->get('delete')}}</div>
</div>
@endif	
@if (count($errors) > 0 )
	<div class="alert alert-danger" role="alert">
		<ul>
			@foreach ($errors->all() as $error)
				<div class="danger"> 
					<li> {{$error}}  </li>
				</div>
			@endforeach
		</ul>
	</div>
@endif	
        <div class="quick-stats__item bg-amber">
            <div class="quick-stats__info">
                <form action="{{ route('updateWallet', ['id'=>$id]) }}" method="post">
                    @csrf
                        {{-- <h2>RM114,280.00</h2> --}}
                        @if(empty($wallet))
                            <input type="text" style="border:0;" name="price" class="form-control" value="" placeholder="Rm 00.0000">
                        @else
                        <input type="text" style="border:0;" name="price" class="form-control" value="Rm {{$wallet->wallet}}">
                        @endif
                        <small>Broker Wallet Balance</small>
                    </div>
                    <div style="position:absolute;right:30px;">
                        <button type="submit" style="background: none;
                        color: inherit;
                        border: none;
                        padding: 0;
                        font: inherit;
                        cursor: pointer;
                        outline: inherit; ">
                            <i class="zmdi zmdi-balance-wallet zmdi-hc-fw white" style="color:white;font-size:xx-large;"></i>
                        </button>
                </form>
            </div>
        </div>

        <div class="card">
            <table class="table mb-0">
                <thead>
                    <tr>
                        
                        <th>Details</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-warning">
                        <td>Comission Earnings</td>
                        <td>RM4,323.22</td>
                    </tr>
                    <tr>
                        <td>Pool funds share</td>
                        <td>RM5,323.77</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Reward</td>
                        <td>RM1,323.23</td>
                    </tr>
                    <tr>
                        <td>Downline comissions</td>
                        <td>RM7,323.75</td>
                    </tr>
                    <tr class="table-danger">
                        <td>Sent to azman2099</td>
                        <td>RM3,323.85</td>
                    </tr>
                    <tr>
                        <td>Downline comissions</td>
                        <td>RM9,323.34</td>
                    </tr>
                    <tr class="table-warning">
                        <td>Downline comissions</td>
                        <td>RM4,323.85</td>
                    </tr>
                    <tr>
                        <td>Downline comissions</td>
                        <td>RM5,323.34</td>
                    </tr>
                    <tr class="table-danger">
                        <td>Sent to calvinyap</td>
                        <td>RM5,323.64</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
    </div>
</div>
@stop