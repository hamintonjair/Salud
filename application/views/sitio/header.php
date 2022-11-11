<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="<?php echo base_url(); ?>/assets/template/sitio/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
        </div>

        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="<?php echo base_url(); ?>">PRINCIPAL</a></li>
                <li><a href="#">CENTROS DE SALUD - EPS</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="<?php echo base_url(); ?>Registrar_Eps">Registar Eps</a></li>
                        <li><a href="<?php echo base_url(); ?>Listar_Eps">Ver Eps</a></li>


                    </ul>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">

        <div class="container" style="background-color: #0BBBF3;">
            <div class="row">
                <div>
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?php echo base_url(); ?>/assets/template/sitio/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-sm-12 " style="text-align: left ;">

                    <nav class="header__menu">
                        <ul>
                            <li><a href="<?php echo base_url(); ?>">PRINCIPAL</a></li>
                            <li><a href="#">CENTROS DE SALUD - EPS</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="<?php echo base_url(); ?>Registrar_Eps">Registar Eps</a></li>
                                    <li><a href="<?php echo base_url(); ?>Listar_Eps">Ver Eps</a></li>


                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>