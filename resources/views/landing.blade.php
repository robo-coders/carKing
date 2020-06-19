<html class="fontawesome-i2svg-active fontawesome-i2svg-complete js-focus-visible">

<head>
    <title>CarKing - Now Everyone Can Sell</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/img/landing/carking.css">
    <link rel="icon" href="">

</head>

<body data-gr-c-s-loaded="true">
    <div id="app">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand"><a class="navbar-item" href=""><object data="/img/landing/carkingLogo.svg" type="image/svg+xml"></object></a><a href="/login" role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
                    data-target="navbarBasicExample"><span aria-hidden="true"></span><span
                        aria-hidden="true"></span><span aria-hidden="true"></span></a></div>
            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-end"><a class="navbar-item">How does it work?</a><a class="navbar-item">Buy</a>
                    @if (Auth::check())
                        <a class="navbar-item">Sell</a><a href="/login" class="navbar-item">Dashboard</a>
                    @else
                        <a class="navbar-item">Sell</a><a href="/login" class="navbar-item">Login</a>
                    @endif

                    <div class="navbar-item has-dropdown is-hoverable"><a class="navbar-link"><img id="language-flag"
                                src="/img/landing/English-flag.a589a609.png" alt="">English</a>
                        <div class="navbar-dropdown"><a class="navbar-item"><img id="language-flag"
                                    src="/img/landing/Malaysia-flag.f6ab6fb0.png" alt="">Bahasa</a><a class="navbar-item"><img
                                    id="language-flag" src="/img/landing/Indonesia-flag.e00e78f7.png" alt="">Bahasa</a><a
                                class="navbar-item"><img id="language-flag" src="/img/landing/Chinese-flag.ef20ecf1.png"
                                    alt="">中文</a></div>
                    </div>
                </div>
            </div>
        </nav>
        <section class="hero">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">Now Everyone Can Sell...</h1>
                    <h3 class="subtitle">No more middle-man, you get what you deserve. Get value out of your purchase. Transparent process and detailed breakdown. Sell your car at the price that is fair! Earn income from gigs and commisions on this platform!</h3><a href="/register" class="navbar-item">Register now!</a> or <a class="navbar-item" href="/login">Login</a>
                    
                </div>
            </div>
            <div class="car-hero"><img class="is-hidden-touch" src="/img/landing/BGorange.d2cfc8ea.png" alt=""><img
                    class="is-hidden-desktop" src="/img/landing/BGorange-mobile.c9956a40.png" alt="">
                <div class="hero-cars-container is-hidden-touch"><img class="" id="leftCar"
                        src="/img/landing/PickupTruck@2x.93a7a797.png" alt=""><img id="centerCar"
                        src="/img/landing/HeaderCar.9bcf7b70.png" alt=""><img class="" id="rightCar"
                        src="/img/landing/SUV@2x.1df3d9c7.png" alt=""></div>
                <div class="hero-cars-container-mobile is-hidden-desktop"><img id="centerCar"
                        src="/img/landing/HeaderCar.9bcf7b70.png" alt=""></div>
                <div class="section-services">
                    <div class="services-card-item">
                        <div class="card-title"><img id="CarServiceLogo" src="/img/landing/ServiceIcon.be82e5bb.png" alt="">
                            <h3>car<span class="text-lighter">check</span></h3>
                        </div>
                        <p>Certified agents will inspect to prevent scam.</p>
                    </div>
                    <div class="services-card-item">
                        <div class="card-title"><img id="CarServiceLogo" src="/img/landing/ServiceIcon.be82e5bb.png" alt="">
                            <h3>car<span class="text-lighter">insure</span></h3>
                        </div>
                        <p>Insure your new ride with plans that fits your lifestyle.</p>
                    </div>
                    <div class="services-card-item">
                        <div class="card-title"><img id="CarServiceLogo" src="/img/landing/ServiceIcon.be82e5bb.png" alt="">
                            <h3>car<span class="text-lighter">plate</span></h3>
                        </div>
                        <p>New or used, we'll get it for you.</p>
                    </div>
                    <div class="services-card-item">
                        <div class="card-title"><img id="CarServiceLogo" src="/img/landing/ServiceIcon.be82e5bb.png" alt="">
                            <h3>car<span class="text-lighter">saman</span></h3>
                        </div>
                        <p>We'll do summons background check before you buy.</p>
                    </div>
                    <div class="services-card-item">
                        <div class="card-title"><img id="CarServiceLogo" src="/img/landing/ServiceIcon.be82e5bb.png" alt="">
                            <h3>car<span class="text-lighter">bid</span></h3>
                        </div>
                        <p>Get the best price for your vehicle.</p>
                    </div>
                    <div class="services-card-item">
                        <div class="card-title"><img id="CarServiceLogo" src="/img/landing/ServiceIcon.be82e5bb.png" alt="">
                            <h3>car<span class="text-lighter">kit</span></h3>
                        </div>
                        <p>Customize your ride hassle-free.</p>
                    </div>
                    <div class="services-card-item">
                        <div class="card-title"><img id="CarServiceLogo" src="/img/landing/ServiceIcon.be82e5bb.png" alt="">
                            <h3>car<span class="text-lighter">rental</span></h3>
                        </div>
                        <p>Get best deal for short term usage.</p>
                    </div>
                    <div class="services-card-item">
                        <div class="card-title"><img id="CarServiceLogo" src="/img/landing/ServiceIcon.be82e5bb.png" alt="">
                            <h3>car<span class="text-lighter">loan</span></h3>
                        </div>
                        <p>Apply loan with our certified agents with a click of a button.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero how-to-use-section">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">How to use</h1>
                    <h3 class="subtitle">Hassle-free selling experince. List your car on carking and we'll do rest. Get
                        paid directly to your bank account in 1 week.</h3>
                </div>
            </div>
            <div class="howto-category tabs is-toggle is-centered">
                <ul>
                    <li class="is-active"><a><span class="icon is-small"><svg class="svg-inline--fa fa-car fa-w-16"
                                    aria-hidden="true" data-prefix="fas" data-icon="car" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z">
                                    </path>
                                </svg><!-- <i class="fas fa-car"></i> --></span><span style="font-family: arial">Seller</span></a></li>
                    <li><a><span class="icon is-small"><svg class="svg-inline--fa fa-shopping-cart fa-w-18"
                                    aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z">
                                    </path>
                                </svg><!-- <i class="fas fa-shopping-cart"></i> --></span><span style="font-family: arial">Buyer</span></a></li>
                    <li><a><span class="icon is-small"><svg class="svg-inline--fa fa-user-shield fa-w-20"
                                    aria-hidden="true" data-prefix="fas" data-icon="user-shield" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M622.3 271.1l-115.2-45c-4.1-1.6-12.6-3.7-22.2 0l-115.2 45c-10.7 4.2-17.7 14-17.7 24.9 0 111.6 68.7 188.8 132.9 213.9 9.6 3.7 18 1.6 22.2 0C558.4 489.9 640 420.5 640 296c0-10.9-7-20.7-17.7-24.9zM496 462.4V273.3l95.5 37.3c-5.6 87.1-60.9 135.4-95.5 151.8zM224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm96 40c0-2.5.8-4.8 1.1-7.2-2.5-.1-4.9-.8-7.5-.8h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c6.8 0 13.3-1.5 19.2-4-54-42.9-99.2-116.7-99.2-212z">
                                    </path>
                                </svg><!-- <i class="fas fa-user-shield"></i> --></span><span style="font-family: arial">Carking Agents</span></a>
                    </li>
                </ul>
            </div>
            <div class="container">
                <div class="category-seller-steps">
                    <figure class="image"><img class="" id="categoryIllustration"
                            src="/img/landing/SellerIllustration.9f288ec2.png" alt=""></figure>
                    <div class="steps">
                        <ul>
                            <li class="is-active">
                                <h3>Step 1: Upload car details</h3>
                            </li>
                            <li>
                                <h3>Step 2: Add expected car value</h3>
                            </li>
                            <li>
                                <h3>Step 3: Relax while our agents do the rest</h3>
                            </li>
                            <li>
                                <h3>Step 4: Get paid!</h3>
                            </li>
                        </ul><a href="/login" class="navbar-item">Create a free account <svg
                                class="svg-inline--fa fa-chevron-right fa-w-10" aria-hidden="true" data-prefix="fas"
                                data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 320 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                                </path>
                            </svg><!-- <i class="fas fa-chevron-right"></i> --></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero">
            <div class="container has-text-centered">
                <h1 class="title">Why Carking</h1>
            </div>
            <div class="usps-container">
                <div class="usp-item"><img class="" id="uspIllustration" src="/img/landing/USP1.5a6783a6.png" alt="">
                    <h2>Maximized Earnings</h2>
                    <p class="">Kogi austin vice, brunch keffiyeh portland schlitz.</p>
                </div>
                <div class="usp-item"><img class="" id="uspIllustration" src="/img/landing/USP2.00fc8237.png" alt="">
                    <h2>All-in-one Hassle Free</h2>
                    <p class="">Kogi austin vice, brunch keffiyeh portland schlitz.</p>
                </div>
                <div class="usp-item"><img class="" id="uspIllustration" src="/img/landing/USP3.f72a0b57.png" alt="">
                    <h2>Easily Track Progress</h2>
                    <p class="">Kogi austin vice, brunch keffiyeh portland schlitz.</p>
                </div>
                <div class="usp-item"><img class="" id="uspIllustration" src="/img/landing/USP4.6e301952.png" alt="">
                    <h2>Secured Transactions</h2>
                    <p class="">Kogi austin vice, brunch keffiyeh portland schlitz.</p>
                </div>
            </div>
        </section>
        <section class="OrangeBanner container "><img class="" id="OrangeBannerCircle"
                src="/img/landing/OrangeBannerCircle.16b1646b.png" alt="">
            <div class="banner-content">
                <div>
                    <h1>Join the disruption. <br> Get notified.</h1>
                    <p>We know you're excited, so do we!<br>Leave us your email and we will ping you updates and
                        progress :)</p>
                </div>
                <div class="field">
                    <p class="control has-icons-left has-icons-right"><input class="input" type="email"
                            placeholder="Email" value=""><span class="icon is-small is-left"><svg
                                class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" data-prefix="fas"
                                data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                                </path>
                            </svg><!-- <i class="fas fa-envelope"></i> --></span><span
                            class="icon is-small is-right"><svg class="svg-inline--fa fa-check fa-w-16"
                                aria-hidden="true" data-prefix="fas" data-icon="check" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z">
                                </path>
                            </svg><!-- <i class="fas fa-check"></i> --></span></p>
                </div>
            </div>
        </section>
        <footer class="footer container"><img class="" id="carkingFooterLogo" src="/img/landing/carking-logo.37e7e131.png"
                alt="">
            <div class="faq-and-info-container">
                <div class="company-info">
                    <p>Disrupting the second-hand car industry with gig economy.</p>
                    <div class="company-address">
                        <p><strong>CHY Autoworld Sdn. Bhd.</strong><br>38, Jalan 9, Taman Bukit Cheras, 56000 Cheras,
                            Wilayah Persekutuan Kuala Lumpur</p>
                    </div>
                    <div class="social-icons"><svg width="16.626" height="16.356">
                            <path fill="#9696A8" fill-rule="evenodd"
                                d="M16.626 15.452a.912.912 0 01-.919.904h-4.232v-6.334h2.159l.321-2.467H11.47V5.978c0-.713.204-1.203 1.245-1.203h1.326V2.57a17.71 17.71 0 00-1.937-.098c-1.915 0-3.228 1.15-3.228 3.26v1.823H6.713v2.467h2.163v6.334H.92A.912.912 0 010 15.452V.904C0 .405.412 0 .919 0h14.783c.507 0 .92.405.92.904v14.548h.004z">
                            </path>
                        </svg><svg width="18.264" height="11.443">
                            <g fill="#9696A8" fill-rule="evenodd">
                                <path
                                    d="M5.803 4.592v2.263s2.227-.004 3.137-.004c-.494 1.47-1.254 2.267-3.137 2.267a3.375 3.375 0 01-3.39-3.399 3.372 3.372 0 013.39-3.398c1.005 0 1.657.347 2.254.833.475-.473.44-.54 1.652-1.666A5.816 5.816 0 005.808 0C2.598.004 0 2.566 0 5.724c0 3.158 2.598 5.72 5.803 5.72 4.789 0 5.961-4.112 5.572-6.852H5.803zM16.255 4.708V2.726H14.82v1.982H12.75V6.12h2.069v2.04h1.435V6.12h2.01V4.708h-2.01z">
                                </path>
                            </g>
                        </svg><svg width="16.599" height="16.334">
                            <path fill="#9696A8" fill-rule="evenodd"
                                d="M1.974 0h12.651C15.716 0 16.6.869 16.6 1.938v12.458c0 1.07-.883 1.938-1.974 1.938H1.974C.883 16.334 0 15.465 0 14.396V1.938C0 .868.883 0 1.974 0zm10.478 2.04c-.29 0-.52.232-.52.512v1.532c0 .286.235.513.52.513h1.558c.29 0 .52-.232.52-.513V2.552a.516.516 0 00-.52-.512h-1.558zM8.32 5.051c1.76 0 3.19 1.403 3.19 3.132 0 1.732-1.43 3.131-3.19 3.131-1.761 0-3.191-1.403-3.191-3.131 0-1.729 1.43-3.132 3.19-3.132zm6.206 9.75c.29 0 .52-.23.52-.511h-.009V6.633h-2.073c.335.392.398 1.095.398 1.55 0 2.735-2.263 4.957-5.047 4.957s-5.047-2.222-5.047-4.957c0-.455.09-1.167.362-1.55H1.557v7.657c0 .285.235.512.52.512h12.449z">
                            </path>
                        </svg><svg width="16.952" height="13.906">
                            <path fill="#9696A8" fill-rule="evenodd"
                                d="M16.476.258c-.674.401-1.416.695-2.208.851A3.462 3.462 0 0011.728 0c-1.92 0-3.476 1.572-3.476 3.51 0 .276.032.543.09.797a9.83 9.83 0 01-7.17-3.67 3.539 3.539 0 001.078 4.69 3.495 3.495 0 01-1.576-.436v.044c0 1.702 1.2 3.118 2.793 3.444a3.43 3.43 0 01-1.57.062 3.482 3.482 0 003.25 2.436A6.943 6.943 0 010 12.33a9.802 9.802 0 005.332 1.576c6.4 0 9.895-5.345 9.895-9.986 0-.152-.004-.308-.009-.455a7.026 7.026 0 001.734-1.817 6.867 6.867 0 01-1.996.552 3.554 3.554 0 001.52-1.942z">
                            </path>
                        </svg></div>
                </div>
                <div class="footer-cat faq-buyer">
                    <h4>Buyer</h4><a href="">How much to start?</a><br><a href="">How much do I get?</a><br><a
                        href="">Is it safe?</a><br><a href="">How fast is the service?</a>
                </div>
                <div class="footer-cat faq-seller">
                    <h4>Seller</h4><a href="">How much to start?</a><br><a href="">How much do I get?</a><br><a
                        href="">Is it safe?</a><br><a href="">How fast is the service?</a>
                </div>
                <div class="footer-cat faq-agents">
                    <h4>Carking Agents</h4><a href="">How much to start?</a><br><a href="">How much do I get?</a><br><a
                        href="">Is it safe?</a><br><a href="">How fast is the service?</a>
                </div>
                <div class="footer-cat faq-dealer">
                    <h4>Dealerships</h4><a href="">How much to start?</a><br><a href="">How much do I get?</a><br><a
                        href="">Is it safe?</a><br><a href="">How fast is the service?</a>
                </div>
            </div>
            <div class="about-and-copyright-container">
                <div class="about-links-container"><a href="">About Us</a><a href="">Company</a><a href="">Terms</a><a
                        href="">Privacy Policy</a></div>
                <p>Contains copyrighted materials, not ready for production.</p>
                <p>Copyright © (2020) Carking Some Rights Reserved</p>
            </div>
        </footer>
    </div>


    <loom-container id="lo-engage-ext-container">
        <div></div>
        <loom-shadow classname="resolved"></loom-shadow>
    </loom-container>

</body>

</html>