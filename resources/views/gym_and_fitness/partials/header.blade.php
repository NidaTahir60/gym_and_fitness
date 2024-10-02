<header>
    <!-- start navigation -->
    <nav
        class="navbar navbar-expand-lg header-transparent bg-transparent border-bottom border-color-transparent-dark-very-light disable-fixed">
        <div class="container-fluid">
            <div class="col-auto">
                <a class="navbar-brand" href="#home">
                    <img src="{{ asset('assets/images/demo-gym-and-fitness-logo-black.png') }}"
                        data-at2x="{{ asset('assets/images/demo-gym-and-fitness-logo-black@2x.png') }}" 
                        alt="" class="default-logo">

                    <img src="{{ asset('assets/images/demo-gym-and-fitness-logo-black.png') }}"
                        data-at2x="{{ asset('assets/images/demo-gym-and-fitness-logo-black@2x.png') }}" 
                        alt="" class="alt-logo">

                    <img src="{{ asset('assets/images/demo-gym-and-fitness-logo-black.png') }}"
                        data-at2x="{{ asset('assets/images/demo-gym-and-fitness-logo-black@2x.png') }}" 
                        alt="" class="mobile-logo">

                </a>
            </div>
            <div class="col-auto me-0 sm-me-auto border-start border-color-transparent-dark-very-light ms-35px xs-ms-0">
                <div class="header-icon">
                    <div class="header-push-button hamburger-push-button icon xs-pe-50px">
                        <div class="push-button">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <b
                                class="push-button-text alt-font text-uppercase text-dark-gray position-absolute top-10px right-minus-50px">Menu</b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-auto ms-auto align-items-center d-none d-sm-flex">
                <div class="header-button">
                    <a href="#contact"
                        class="btn btn-very-small btn-base-color btn-round-edge btn-box-shadow">Join us now</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
    <!-- start hamburger menu -->
    <div class="push-menu hamburger-nav header-dark hamburger-menu-half push-menu-left bg-dark-gray md-w-60 sm-w-100"
        style="background-image: url(images/demo-gym-and-fitness-menu-bg.jpg)">
        <span class="close-menu text-dark-gray bg-white"><i class="fa-solid fa-xmark"></i></span>
        <div class="d-flex flex-column justify-content-center h-100 ps-19 pe-19 pt-13 pb-13 xl-p-12 sm-p-20px">
            <div>
                <a class="hamburger-logo" href="demo-gym-and-fitness.html">
                    <img src="{{ asset('assets/images/demo-gym-and-fitness-logo-white.png') }}"
                        data-at2x="{{ asset('assets/images/demo-gym-and-fitness-logo-white@2x.png') }}" 
                        alt="">

                </a>
            </div>
            <div class="hamburger-menu menu-list-wrapper w-80 lg-w-100 lg-no-margin sm-mt-auto sm-mb-auto"
                data-scroll-options='{ "theme": "light" }'>
                <ul class="menu-item-list fw-500 ls-1px">
                    <li class="menu-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="menu-item"><a href="#services" class="nav-link">Services</a></li>
                    <li class="menu-item"><a href="#gallery" class="nav-link">Gallery</a>
                    </li>
                    <li class="menu-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
            <div class="w-90 d-none d-lg-inline-block">
                <div class="row row-cols-1 row-cols-xl-2 menu-address">
                    <div class="col">
                        <span class="text-white fs-16 ls-05px">Crafto gym - London</span>
                        <div class="h-1px w-90 lg-w-100 bg-white-transparent-extra-light mt-10px mb-10px"></div>
                        <p class="fs-15 lh-26 w-90 xl-w-100">28 New regent view road, Orchard, Cambridge.</p>
                    </div>
                    <div class="col">
                        <span class="text-white fs-16 ls-05px">Connect with us</span>
                        <div class="h-1px w-90 lg-w-100 bg-white-transparent-extra-light mt-10px mb-10px"></div>
                        <p class="fs-15 lh-28 w-90 xl-w-100 lg-mb-0"><a href="mailto:info@yourdomain.com"
                                class="d-block text-white-hover">info@yourdomain.com</a><a href="tel:12345678910"
                                class="text-white-hover">+1 234 567 8910</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hamburger menu -->
</header>
