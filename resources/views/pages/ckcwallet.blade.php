@extends('layouts.default')
@section('content')
<div class="content__inner">
    <header class="content__title">
        <h1>CKC Wallet Details</h1>

        <div class="actions">

            <div class="dropdown actions__item">
                <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="" class="dropdown-item">Nothing Here</a>                    
                </div>
            </div>
        </div>
    </header>

    <div class="col-md-12">
        
            <div class="quick-stats__item bg-purple">
                <div class="quick-stats__info">
                    <h2>2,431 CKC</h2>
                    <small>CarKing Coin Balance</small>
                </div>

                <div style="position:absolute;right:30px;">
                    <i class="zmdi zmdi-balance-wallet zmdi-hc-fw white" style="color:white;font-size:xx-large;"></i>
                </div>
            </div>
    
    <div data-columns>
            <div class="card">
                <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/QR_code_Wikimedia_Commons_%28URL%29.png/600px-QR_code_Wikimedia_Commons_%28URL%29.png">
                <div class="card-body">
                    <h4 class="card-title">CKC Wallet Address</h4>
                    <h6 class="card-subtitle">ERC-20 Ehtereum Address</h6>       
                    <a href="http://etherscan.io" target="_blank"><p class="card-text">0x2536c09E5F5691498805884fa37811Be3b2BDdb4</a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">What is CarKing Coin (CKC)?</h4>
                    <h6 class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur.</h6>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Donec sed odio dui.</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">What is pool money?</h4>
                    <h6 class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur.</h6>
                    <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Donec sed odio dui.</p>
                </div>
            </div>

        </div>
    </div>
</div>
@stop