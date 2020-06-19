@extends('layouts.default')
@section('content')
<div class="content__inner">
    <header class="content__title">
        <h1>E-Wallet Details</h1>

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

        <div class="quick-stats__item bg-green">
            <div class="quick-stats__info">
                <h2>RM6,122.23</h2>
                <small>E-Wallet Balance</small>
            </div>

            <div style="position:absolute;right:30px;">
                <i class="zmdi zmdi-balance-wallet zmdi-hc-fw white" style="color:white;font-size:xx-large;"></i>
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
                    <tr class="table-success">
                        <td>Comission Earnings</td>
                        <td>RM4,323.22</td>
                    </tr>
                    <tr>
                        <td>Pool funds share</td>
                        <td>RM5,323.77</td>
                    </tr>
                    <tr class="table-success">
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
                    <tr class="table-success">
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