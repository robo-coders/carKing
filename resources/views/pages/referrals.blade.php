@extends('layouts.default')
@section('content')
<header class="content__title">
	<h1>My referrals</h1>

	<div class="actions">
		<a href="" class="actions__item zmdi zmdi-trending-up"></a>
		<a href="" class="actions__item zmdi zmdi-check-all"></a>

		<div class="dropdown actions__item">
			<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="" class="dropdown-item">Edit</a>
				<a href="" class="dropdown-item">Add to Favourite</a>                
				<a href="" class="dropdown-item" data-toggle="modal" data-id="http://127.0.0.1:8000/login/{{Auth::user()->id}}" data-target="#referralLinkModal">Get Referral Link</a>                
			</div>
		</div>
	</div>
</header>

<div class="col-md-12">
	<div class="quick-stats__item bg-brown">
		<div class="quick-stats__info">
			<h2>1st Level Referrals = 374 </h2>
			<small>2nd Level Referrals = 640 </small>
		</div>

		<div style="position:absolute;right:30px;">
			<i class="zmdi zmdi-account zmdi-hc-fw white" style="color:white;font-size:xx-large;"></i>
		</div>
	</div>

    <div class="card">
        <table class="table mb-0">
            <thead>
                <tr class="table-warning">
                    <th>Top 10 Referrals</th>
                    <th>Your Commisions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td >Dato Dr Calvin Yap</td>
                    <td>RM14,323.22</td>
                </tr>
                <tr>
                    <td>MC Nor Azmi</td>
                    <td>RM5,323.77</td>
                </tr>
                <tr>
                    <td>Nick Chong</td>
                    <td>RM1,323.23</td>
                </tr>
                <tr>
                    <td>Siti Hajar Khalit</td>
                    <td>RM7,323.75</td>
                </tr>
                <tr>
                    <td>Azman Rashid</td>
                    <td>RM3,323.85</td>
                </tr>
                <tr>
                    <td>Ng Kok Chin</td>
                    <td>RM9,323.34</td>
                </tr>
                <tr>
                    <td>Dato Oh Kar Yaw</td>
                    <td>RM4,323.85</td>
                </tr>
                <tr>
                    <td>Alexander Wong</td>
                    <td>RM5,323.34</td>
                </tr>
                <tr>
                    <td>Cher Chin Chai</td>
                    <td>RM5,323.64</td>
                </tr>
            </tbody>
        </table>
    </div>

	<div class="card">
		<div class="card-body">
			<h4 class="card-title">Share your link to get more referrals</h4>
			<h6 class="card-subtitle">http://carking.net/r/azman2099</h6>

			<div class="treeview"></div>
		</div>
	</div>

</div>
@include('modals.referral');

@stop