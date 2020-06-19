@extends('layouts.default')
@section('content')
<header class="content__title">
    <h1>Dashboard</h1>

    <div class="actions">
        <div class="dropdown actions__item">
            <i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="" class="dropdown-item">Refresh</a>
                <a href="" class="dropdown-item">Manage Widgets</a>
                <a href="" class="dropdown-item">Settings</a>
            </div>
        </div>
    </div>
</header>

<div class="row quick-stats">
    <div class="col-md-4">
        <a href="/ewallet">
        <div class="quick-stats__item bg-green">
            <div class="quick-stats__info">
                <h2>RM2,102 / <i>RM156,785</i></h2>
                <small>E-Wallet / <i>Broker Wallet </i>Balance</small>
            </div>

            <div style="position:absolute;right:30px">
                <i class="zmdi zmdi-balance-wallet zmdi-hc-fw white" style="color:white;font-size:xx-large;"></i>
            </div>

        </div>
        </a>
    </div>

    <div class="col-md-4">
        <div class="quick-stats__item bg-amber">
            <div class="quick-stats__info">
                <h2>58,778 + 3,493 = RM61,243</h2>
                <small>Your Sales + Override (this month)</small>
            </div>

            <div style="position:absolute;right:30px">
                <i class="zmdi zmdi-device-hub zmdi-hc-fw white" style="color:white;font-size:xx-large;"></i>
            </div>

        </div>
    </div>        

    <div class="col-md-4">
        <a href="/ewallet">
        <div class="quick-stats__item bg-purple">
            <div class="quick-stats__info">
                <h2></>2,423 CKC (5.4%) / RM3,123.43</h2>
                <small>CarKing Coin / Pool Fund Share</small>
            </div>

            <div style="position:absolute;right:30px">
                <i class="zmdi zmdi-blur-circular zmdi-hc-fw white" style="color:white;font-size:xx-large;"></i>
            </div>

        </div>
        </a>
    </div>        

    <div class="col-md-4">
        <div class="quick-stats__item bg-blue">
            <a href="/cars"><div class="quick-stats__info">                    
                <h2>987 / 1294</h2>
                <small>Available / Sold Cars (this month)</small>                    
            </div></a>
            <div style="position:absolute;right:30px">
                <i class="zmdi zmdi-car zmdi-hc-fw white" style="color:white;font-size:xx-large;"></i>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="quick-stats__item bg-red">
            <a href="/gigs"><div class="quick-stats__info">
                <h2>356 / 2932</h2>
                <small>Available / Completed Gigs (this month)</small>
            </div></a>

            <div style="position:absolute;right:30px">
                <i class="zmdi zmdi- zmdi-directions-bike zmdi-hc-fw white" style="color:white;font-size:xx-large;"></i>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Referrals Sales Weekly</h4>
                <h6 class="card-subtitle">Vestibulum purus quam scelerisque, mollis nonummy metus</h6>

                <div class="flot-chart flot-curved-line"></div>
                <div class="flot-chart-legends flot-chart-legends--curved"></div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Referrals Sign Up (2 Level Down)</h4>
                <h6 class="card-subtitle">Commodo luctus nisi erat porttitor ligula eget lacinia odio semnec elit</h6>

                <div class="flot-chart flot-line"></div>
                <div class="flot-chart-legends flot-chart-legends--line"></div>
            </div>
        </div>
    </div>
</div>

<div class="row col-md-12">
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


        <div class="card widget-pictures">
            <div class="card-body">
                <h4 class="card-title">Honda CR-V 1.5 VTEC Premium SUV</h4>
                <h6 class="card-subtitle">2018, 5k-10k, Accident-Free</h6>
            </div>

            <div class="widget-pictures__body row">
                <a href="" class="col-4"><img src="demo/img/gallery/25.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/26.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/27.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/28.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/29.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/30.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/31.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/32.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/33.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/34.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/35.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/36.jpg" alt=""></a>                    
            </div>
        </div>

        <div class="card widget-pictures">
            <div class="card-body">
                <h4 class="card-title">BMW 316i 1.6 Sedan</h4>
                <h6 class="card-subtitle">2011, 5k-10k, Accident-Free</h6>
            </div>

            <div class="widget-pictures__body row">
                <a href="" class="col-4"><img src="demo/img/gallery/25.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/27.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/26.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/29.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/28.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/32.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/35.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/36.jpg" alt=""></a>                    
                <a href="" class="col-4"><img src="demo/img/gallery/31.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/30.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/33.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/34.jpg" alt=""></a>
            </div>

        </div>

        <div class="card widget-pictures">
            <div class="card-body">
                <h4 class="card-title">Ford Ranger 3.2 Wildtrak Pickup</h4>
                <h6 class="card-subtitle">2013, 5k-10k, Accident-Free</h6>
            </div>

            <div class="widget-pictures__body row">
                <a href="" class="col-4"><img src="demo/img/gallery/30.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/26.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/28.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/29.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/31.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/32.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/36.jpg" alt=""></a>                    
                <a href="" class="col-4"><img src="demo/img/gallery/25.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/34.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/27.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/33.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/35.jpg" alt=""></a>
            </div>
        </div>

        <div class="card widget-pictures">
            <div class="card-body">
                <h4 class="card-title">Mazda CX-30</h4>
                <h6 class="card-subtitle">2012, 5k-10k, Accident-Free</h6>
            </div>

            <div class="widget-pictures__body row">
                <a href="" class="col-4"><img src="demo/img/gallery/26.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/30.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/33.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/28.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/35.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/27.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/29.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/25.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/32.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/36.jpg" alt=""></a>                    
                <a href="" class="col-4"><img src="demo/img/gallery/34.jpg" alt=""></a>
                <a href="" class="col-4"><img src="demo/img/gallery/31.jpg" alt=""></a>
            </div>
        </div>
    </div>
</div>

@stop