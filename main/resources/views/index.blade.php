<!DOCTYPE html>
<!--[if IE 9]> <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  >
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @hasSection('title')
            @yield('title')
        @else
            Главная
        @endif
    </title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
    <link href="../../css/assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN: BASE PLUGINS  -->
    <link href="../../css/assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
    <!-- END: BASE PLUGINS -->


    <!-- BEGIN THEME STYLES -->
    <link href="../../css/assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="../../css/assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
    <link href="../../css/assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->

    <link rel="shortcut icon" href="favicon.ico"/>
</head><body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-fullscreen">

<!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
<!-- BEGIN: HEADER -->
<header class="c-layout-header c-layout-header-4 c-bordered c-layout-header-default-mobile c-header-transparent-dark" data-minimize-offset="80">
    <div class="c-navbar">
        <div class="container">
            <!-- BEGIN: BRAND -->
            <div class="c-navbar-wrapper clearfix">
                <div class="c-brand c-pull-left">
                    <a href="index.html" class="c-logo">
                        <img src="../../css/assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo">
                        <img src="../../css/assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-desktop-logo-inverse">
                        <img src="../../css/assets/base/img/layout/logos/logo-3.png" alt="JANGO" class="c-mobile-logo">
                    </a>
                    <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                        <span class="c-line"></span>
                    </button>
                    <button class="c-topbar-toggler" type="button">
                        <i class="fa fa-ellipsis-v"></i>
                    </button>
                    <button class="c-search-toggler" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                    <button class="c-cart-toggler" type="button">
                        <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span>
                    </button>
                </div>
                <!-- END: BRAND -->
                <!-- BEGIN: QUICK SEARCH -->
                <form class="c-quick-search" action="#">
                    <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                    <span class="c-theme-link">&times;</span>
                </form>
                <!-- END: QUICK SEARCH -->
                <!-- BEGIN: HOR NAV -->
                <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- BEGIN: MEGA MENU -->
                <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                    <ul class="nav navbar-nav c-theme-nav">
                        <li class="c-active">
                            <a href="javascript:;" class="c-link dropdown-toggle">Home<span class="c-arrow c-toggler"></span></a>


                            <div class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                <div class="row">
                                    <div class="col-md-3">
                                        <ul class="dropdown-menu c-menu-type-inline">
                                            <li>
                                                <h3>Home Samples</h3>
                                            </li>
                                            <li>
                                                <a href="../corporate_1/index.html">NEW Corporate Demo 1</a>
                                            </li>
                                            <li>
                                                <a href="index.html">Home Version 1</a>
                                            </li>
                                            <li>
                                                <a href="home-2.html">Home Version 2</a>
                                            </li>
                                            <li>
                                                <a href="home-3.html">Home Version 3</a>
                                            </li>
                                            <li>
                                                <a href="home-4.html">Home Version 4</a>
                                            </li>
                                            <li>
                                                <a href="home-5.html">Home Version 5</a>
                                            </li>
                                            <li>
                                                <a href="home-6.html">Home Version 6</a>
                                            </li>
                                            <li>
                                                <a href="home-7.html">Home Version 7</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="dropdown-menu c-menu-type-inline">
                                            <li>
                                                <h3>Home Samples</h3>
                                            </li>
                                            <li>
                                                <a href="home-8.html">Home Version 8</a>
                                            </li>
                                            <li>
                                                <a href="home-9.html">Home Version 9</a>
                                            </li>
                                            <li>
                                                <a href="home-10.html">Home Version 10</a>
                                            </li>
                                            <li>
                                                <a href="home-11.html">Home Version 11</a>
                                            </li>
                                            <li>
                                                <a href="home-12.html">Home Version 12</a>
                                            </li>
                                            <li class="c-active">
                                                <a href="home-13.html">Home Version 13</a>
                                            </li>
                                            <li>
                                                <a href="home-14.html">Home Version 14</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="dropdown-menu c-menu-type-inline">
                                            <li>
                                                <h3>Onepage Samples</h3>
                                            </li>
                                            <li>
                                                <a href="../agency_1/index.html" target="_blank">New Agency Onepage Demo</a>
                                            </li>
                                            <li>
                                                <a href="onepage-1.html" target="_blank">Onepage Version 1</a>
                                            </li>
                                            <li>
                                                <a href="onepage-2.html" target="_blank">Onepage Version 2</a>
                                            </li>
                                            <li>
                                                <a href="onepage-3.html" target="_blank">Onepage Version 3</a>
                                            </li>
                                            <li>
                                                <a href="onepage-4.html" target="_blank">Onepage Version 4</a>
                                            </li>
                                            <li>
                                                <a href="onepage-5.html" target="_blank">Onepage Version 5</a>
                                            </li>
                                            <li>
                                                <a href="onepage-6.html" target="_blank">Onepage Version 6</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <ul class="dropdown-menu c-menu-type-inline">
                                            <li>
                                                <h3>Onepage Samples</h3>
                                            </li>
                                            <li>
                                                <a href="onepage-7.html" target="_blank">Onepage Version 7</a>
                                            </li>
                                            <li>
                                                <a href="onepage-8.html" target="_blank">Onepage Version 8</a>
                                            </li>
                                            <li>
                                                <a href="onepage-9.html" target="_blank">Onepage Version 9</a>
                                            </li>
                                            <li>
                                                <a href="onepage-10.html" target="_blank">Onepage Version 10</a>
                                            </li>
                                            <li>
                                                <a href="onepage-11.html" target="_blank">Onepage Version 11</a>
                                            </li>
                                            <li>
                                                <a href="onepage-12.html" target="_blank">Onepage Version 12</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </li>
                        <li class="c-menu-type-classic">
                            <a href="javascript:;" class="c-link dropdown-toggle">Features<span class="c-arrow c-toggler"></span></a>


                            <ul class="dropdown-menu c-menu-type-classic c-pull-left">
                                <li class="dropdown-submenu">
                                    <a href="javascript:;">Headers<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="home-header-1.html">Home Header v1</a>
                                        </li>
                                        <li>
                                            <a href="home-header-1-ext.html">Home Header v1 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="home-header-2.html">Home Header v2</a>
                                        </li>
                                        <li>
                                            <a href="home-header-2-ext.html">Home Header v2 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="home-header-3.html">Home Header v3</a>
                                        </li>
                                        <li>
                                            <a href="home-header-4.html">Home Header v4</a>
                                        </li>
                                        <li>
                                            <a href="home-header-4-ext.html">Home Header v4 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="home-header-5.html">Home Header v5</a>
                                        </li>
                                        <li>
                                            <a href="home-header-5-ext.html">Home Header v5 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="home-header-6.html">Home Header v6</a>
                                        </li>
                                        <li>
                                            <a href="home-header-6-ext.html">Home Header v6 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="home-header-7.html">Home Header v7</a>
                                        </li>
                                        <li>
                                            <a href="home-header-8.html">Home Header v8</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-1.html">Inner Header v1</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-1-ext.html">Inner Header v1 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-2.html">Inner Header v2</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-2-ext.html">Inner Header v2 - Extended</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-3.html">Inner Header v3</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-4.html">Inner Header v4</a>
                                        </li>
                                        <li>
                                            <a href="inner-header-5.html">Inner Header v5</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Sidebar Menu<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="sidebar-menu-1.html">Sidebar Menu v1</a>
                                        </li>
                                        <li>
                                            <a href="sidebar-menu-2.html">Sidebar Menu v2</a>
                                        </li>
                                        <li>
                                            <a href="sidebar-menu-static.html">Expanded Static Sidebar Menu</a>
                                        </li>
                                        <li>
                                            <a href="sidebar-menu-right.html">Right Sidebar Menu</a>
                                        </li>
                                        <li>
                                            <a href="sidebar-menu-fluid.html">Sidebar Menu In Fluid Layout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:;">Footers<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="footer-1.html#footer">Footer 1</a>
                                        </li>
                                        <li>
                                            <a href="footer-2.html#footer">Footer 2</a>
                                        </li>
                                        <li>
                                            <a href="footer-3.html#footer">Footer 3</a>
                                        </li>
                                        <li>
                                            <a href="footer-4.html#footer">Footer 4</a>
                                        </li>
                                        <li>
                                            <a href="footer-5.html#footer">Footer 5</a>
                                        </li>
                                        <li>
                                            <a href="footer-6.html#footer">Footer 6</a>
                                        </li>
                                        <li>
                                            <a href="footer-7.html#footer">Footer 7</a>
                                        </li>
                                        <li>
                                            <a href="footer-8.html#footer">Footer 8</a>
                                        </li>
                                        <li>
                                            <a href="footer-9.html#footer">Footer 9</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Breadcrumbs<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="breadcrumbs-default.html">Breadcrumbs - Default</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-subtitle.html">Breadcrumbs - Sub Title</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-1.html">Breadcrumbs - Bg Image V1</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-2.html">Breadcrumbs - Bg Image V2</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-3.html">Breadcrumbs - Bg Image V3</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-4.html">Breadcrumbs - Bg Image V4</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-5.html">Breadcrumbs - Bg Image V5</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-6.html">Breadcrumbs - Bg Image V6</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-7.html">Breadcrumbs - Bg Image V7</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-8.html">Breadcrumbs - Bg Image V8</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-9.html">Breadcrumbs - Bg Image V9</a>
                                        </li>
                                        <li>
                                            <a href="breadcrumbs-bgimage-10.html">Breadcrumbs - Bg Image V10</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:;">Cookies Notification Bar<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="component-cookies-1.html">Full Width - Top</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-2.html">Full Width - Bottom</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-3.html">Boxed - Dark Square</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-4.html">Boxed - Theme Color Rounded</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-5.html">Boxed - Aligned Top Left</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-6.html">Boxed - Aligned Top Right</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-7.html">Boxed - Aligned Bottom Left</a>
                                        </li>
                                        <li>
                                            <a href="component-cookies-8.html">Boxed - Aligned Bottom Right</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="component-smooth-scroll.html">Smooth Scroll Links</a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="#">Mega Menu<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="megamenu-light.html">Mega Menu - Light</a>
                                        </li>
                                        <li>
                                            <a href="megamenu-dark.html">Mega Menu - Dark</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="page-extended-portfolio.html">Multi Level Menu<span class="c-arrow c-toggler"></span></a>
                                    <ul class="dropdown-menu c-pull-right">
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Example Sub Menu<span
                                                    class="c-arrow c-toggler"></span></a>
                                            <ul class="dropdown-menu c-pull-left">
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="#">Example Sub Menu<span
                                                            class="c-arrow c-toggler"></span></a>
                                                    <ul class="dropdown-menu c-pull-left">
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Example Link</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Example Link</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Example Link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Pages<span class="c-arrow c-toggler"></span></a>



                            <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Page Samples 1</h3>
                                        </li>
                                        <li>
                                            <a href="page-about-1.html">About Us 1</a>
                                        </li>
                                        <li>
                                            <a href="page-about-2.html">About Us 2</a>
                                        </li>
                                        <li>
                                            <a href="page-about-3.html">About Us 3</a>
                                        </li>
                                        <li>
                                            <a href="page-about-4.html">About Us 4</a>
                                        </li>
                                        <li>
                                            <a href="page-team.html">Meet The Team</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Page Samples 2</h3>
                                        </li>
                                        <li>
                                            <a href="page-contact-1.html">Contact Us 1</a>
                                        </li>
                                        <li>
                                            <a href="page-contact-2.html">Contact Us 2</a>
                                        </li>
                                        <li>
                                            <a href="page-contact-3.html">Contact Us 3</a>
                                        </li>
                                        <li>
                                            <a href="page-faq.html">FAQ</a>
                                        </li>
                                        <li>
                                            <a href="page-faq-2.html">FAQ 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Gallery Pages</h3>
                                        </li>
                                        <li>
                                            <a href="page-product-launch.html">Product Launch</a>
                                        </li>
                                        <li>
                                            <a href="page-lightbox-gallery.html">Lightbox Gallery</a>
                                        </li>
                                        <li>
                                            <a href="page-fullwidth-gallery.html">Full Width Gallery</a>
                                        </li>
                                        <li>
                                            <a href="page-masonry-gallery.html">Masonry Gallery</a>
                                        </li>
                                        <li>
                                            <a href="page-index-gallery.html">Gallery Index</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Portfolio Pages</h3>
                                        </li>
                                        <li>
                                            <a href="page-4col-portfolio.html">4 Columns Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="page-2col-portfolio.html">2 Columns Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="page-masonry-portfolio.html">Masonry Portfolio</a>
                                        </li>
                                        <li>
                                            <a href="page-extended-portfolio.html">Extended Portfolio</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Blog Pages</h3>
                                        </li>
                                        <li>
                                            <a href="page-blog-list.html">Blog List View</a>
                                        </li>
                                        <li>
                                            <a href="page-blog-grid.html">Blog Grid View</a>
                                        </li>
                                        <li>
                                            <a href="page-blog-post.html">Blog Single Post</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Shop<span class="c-arrow c-toggler"></span></a>



                            <ul class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Shop Pages 1</h3>
                                        </li>
                                        <li>
                                            <a href="shop-home-1.html" target="_blank">Shop Home 1</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-2.html">Shop Home 2</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-3.html">Shop Home 3</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-4.html">Shop Home 4</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-5.html">Shop Home 5</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-6.html">Shop Home 6</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-7.html">Shop Home 7</a>
                                        </li>
                                        <li>
                                            <a href="shop-home-8.html" target="_blank">Shop Home 8</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Shop Pages 2</h3>
                                        </li>
                                        <li>
                                            <a href="shop-product-list.html">Product List</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-grid.html">Product Grid</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-search.html">Product Search</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-details.html">Product Details 1</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-details-2.html">Product Details 2</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-details-3.html">Product Details 3</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-details-4.html">Product Details 4</a>
                                        </li>
                                        <li>
                                            <a href="shop-product-comparison.html">Product Comparison</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Shop Pages 3</h3>
                                        </li>
                                        <li>
                                            <a href="shop-product-wishlist.html">Wish List</a>
                                        </li>
                                        <li>
                                            <a href="shop-customer-account.html">Customer Login/Register</a>
                                        </li>
                                        <li>
                                            <a href="shop-customer-dashboard.html">Customer Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="shop-order-history.html">Order History</a>
                                        </li>
                                        <li>
                                            <a href="shop-order-history-2.html">Order History 2</a>
                                        </li>
                                        <li>
                                            <a href="shop-cart.html">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="shop-cart-empty.html">Shopping Cart(empty)</a>
                                        </li>
                                        <li>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="dropdown-menu c-menu-type-inline">
                                        <li>
                                            <h3>Shop Pages 4</h3>
                                        </li>
                                        <li>
                                            <a href="shop-checkout-complete.html">Checkout Complete</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-1.html">Shop Components 1</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-2.html">Shop Components 2</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-3.html">Shop Components 3</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-4.html">Shop Components 4</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-5.html">Shop Components 5</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-6.html">Shop Components 6</a>
                                        </li>
                                        <li>
                                            <a href="component-shop-7.html">Shop Components 7</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                        <li >
                            <a href="javascript:;" class="c-link dropdown-toggle">Components<span class="c-arrow c-toggler"></span></a>


                            <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                            <div class="dropdown-menu c-menu-type-mega c-visible-desktop c-pull-right c-menu-type-fullwidth" style="min-width: auto">
                                <ul class="nav nav-tabs c-theme-nav">
                                    <li class="active">
                                        <a href="#megamenu_jango_components"  data-toggle="tab">Jango Components</a>
                                    </li>
                                    <li>
                                        <a href="#megamenu_base_components"  data-toggle="tab">Base Components</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="megamenu_jango_components">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-tabbed-contents.html">Tabbed Contents</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-1.html">Parallax Blocks 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-2.html">Parallax Blocks 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-3.html">Parallax Blocks 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features.html">Feature Blocks</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features-2.html">Feature Blocks 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features-3.html">Feature Blocks 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-latest-works.html">Latest Works</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-latest-items.html">Latest Items</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-tiles.html">Tiles</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-services.html">Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-blog-elements.html">Blog Elements</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-counters.html">Counters</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-bars.html">Engage Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-isotope.html">Isotope Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-isotope-grid.html">Isotope Grid</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-pricing-tables-1.html">Pricing Tables 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-pricing-tables-2.html">Pricing Tables 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-testimonials.html">Testimonials</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-testimonials-2.html">Testimonials 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-clients.html">Clients</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-abouts.html">About Blocks</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-dividers.html">Dividers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-steps.html">Steps</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-app-showcase.html">App Showcase</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-team.html">Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-headings.html">Headings</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-accordions.html">Accordion Contents</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-progress-bars-2.html">Animated Progress Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-subscribe-form-1.html">Subscribe Form Bars</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="megamenu_base_components">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-lists.html">Lists</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-blockquotes.html">Blockquotes</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-navs.html">Navigations</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-fontawesome-icons.html">Fontawesome Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-simpleline-icons.html">Simple Line Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-glyphicons-icons.html">Glyphicons Icons</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-custom-icons.html">Custom Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-business-custom-icons.html">Custom Business Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-social-icons.html">Social Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-media-embeds.html">Media Embeds</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-labels-badges.html">Labels & Badges</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-colors.html">UI Colors</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-buttons.html">Buttons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-form-controls.html">Form Controls</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-tables.html">Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-modals.html">Modals</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-tabs.html">Tabs</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-paginations.html">Paginations</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-panels.html">Panels</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-progress-bars.html">Progress Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-alerts.html">Alerts</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BEGIN: DESKTOP VERSION OF THE TAB MEGA MENU -->
                            <!-- BEGIN: MOBILE VERSION OF THE TAB MEGA MENU -->
                            <ul class="dropdown-menu c-menu-type-mega c-visible-mobile">
                                <li class="dropdown-submenu">
                                    <a href="javascript:;">Jango Components<span class="c-arrow c-toggler"></span></a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-tabbed-contents.html">Tabbed Contents</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-1.html">Parallax Blocks 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-2.html">Parallax Blocks 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-parallax-3.html">Parallax Blocks 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features.html">Feature Blocks</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features-2.html">Feature Blocks 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-features-3.html">Feature Blocks 3</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-latest-works.html">Latest Works</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-latest-items.html">Latest Items</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-tiles.html">Tiles</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-services.html">Services</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-blog-elements.html">Blog Elements</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-counters.html">Counters</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-bars.html">Engage Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-isotope.html">Isotope Gallery</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-isotope-grid.html">Isotope Grid</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-pricing-tables-1.html">Pricing Tables 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-pricing-tables-2.html">Pricing Tables 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-testimonials.html">Testimonials</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-testimonials-2.html">Testimonials 2</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-clients.html">Clients</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-abouts.html">About Blocks</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-dividers.html">Dividers</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-steps.html">Steps</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-app-showcase.html">App Showcase</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-team.html">Team</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-headings.html">Headings</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-accordions.html">Accordion Contents</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-progress-bars-2.html">Animated Progress Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-subscribe-form-1.html">Subscribe Form Bars</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-submenu">
                                    <a href="javascript:;">Base Components<span class="c-arrow c-toggler"></span></a>
                                    <div class="dropdown-menu">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-lists.html">Lists</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-blockquotes.html">Blockquotes</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-navs.html">Navigations</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-fontawesome-icons.html">Fontawesome Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-simpleline-icons.html">Simple Line Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-glyphicons-icons.html">Glyphicons Icons</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-custom-icons.html">Custom Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-business-custom-icons.html">Custom Business Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-social-icons.html">Social Icons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-media-embeds.html">Media Embeds</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-labels-badges.html">Labels & Badges</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-colors.html">UI Colors</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-buttons.html">Buttons</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-form-controls.html">Form Controls</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-tables.html">Tables</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-modals.html">Modals</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="dropdown-menu c-menu-type-inline">
                                                    <li>
                                                        <a href="component-tabs.html">Tabs</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-paginations.html">Paginations</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-panels.html">Panels</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-progress-bars.html">Progress Bars</a>
                                                    </li>
                                                    <li>
                                                        <a href="component-alerts.html">Alerts</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- END: MOBILE VERSION OF THE TAB MEGA MENU -->

                        </li>


                        <li class="c-search-toggler-wrapper">
                            <a  href="#" class="c-btn-icon c-search-toggler"><i class="fa fa-search"></i></a>
                        </li>

                        @guest

                            <li>
                                <a href="#" data-toggle="modal" data-target="#login-form" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold"><i class="icon-user"></i>Войти</a>
                            </li>

                        @else

                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="c-btn">
                                    {{ csrf_field() }}
                                    <button type="submit" data-toggle="modal" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-dark c-btn-circle c-btn-uppercase c-btn-sbold"><i class="icon-user"></i>Выход</button>
                                </form>
                            </li>

                        @endguest

                    </ul>
                </nav>
                <!-- END: MEGA MENU --><!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                <!-- END: HOR NAV -->
            </div>
            <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
        </div>
    </div>
</header>
<!-- END: HEADER --><!-- END: LAYOUT/HEADERS/HEADER-1 -->

<!-- BEGIN: CONTENT/USER/FORGET-PASSWORD-FORM -->
<div class="modal fade c-content-login-form" id="forget-password-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Восстановление пароля</h3>
                <p>Чтобы восстановить свой пароль, пожалуйста, введите свой адрес электронной почты</p>
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Почта" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Отправить</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Вернуться к входу на сайт</a>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Нет учетной записи?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Регистрация!</a>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/FORGET-PASSWORD-FORM -->

<!-- BEGIN: CONTENT/USER/SIGNUP-FORM -->
<div class="modal fade c-content-login-form" id="signup-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Создать учетную запись</h3>
                <p>Пожалуйста, заполните приведенную ниже форму</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Имя" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Почта" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Пароль" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Регистрация</button>
                        <a href="javascript:;" class="c-btn-forgot" data-toggle="modal" data-target="#login-form" data-dismiss="modal">Вернуться к входу на сайт</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/SIGNUP-FORM -->

<!-- BEGIN: CONTENT/USER/LOGIN-FORM -->
<div class="modal fade c-content-login-form" id="login-form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content c-square">
            <div class="modal-header c-no-border">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="c-font-24 c-font-sbold">Добро пожаловать!</h3>
                <p>Желаем Вам легкого и беззаботного дня!</p>
                <form method="POST" action="{{ route('login') }}" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="login-email" class="hide">Почта</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Почта" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="hide">Пароль</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Пароль" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Запомнить меня') }}
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn c-theme-btn btn-md c-btn-uppercase c-btn-bold c-btn-square c-btn-login">Войти</button>
                        <a href="javascript:;" data-toggle="modal" data-target="#forget-password-form" data-dismiss="modal" class="c-btn-forgot">Забыли свой пароль?</a>
                    </div>
                    <div class="clearfix">
                        <div class="c-content-divider c-divider-sm c-icon-bg c-bg-grey c-margin-b-20">
                            <span>или зарегистрируйтесь с</span>
                        </div>
                        <ul class="c-content-list-adjusted">
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-twitter">
                                    <i class="fa fa-twitter"></i>
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-facebook">
                                    <i class="fa fa-facebook"></i>
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-block c-btn-square btn-social btn-google">
                                    <i class="fa fa-google"></i>
                                    Google
                                </a>
                            </li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="modal-footer c-no-border">
                <span class="c-text-account">Нет учетной записи?</span>
                <a href="javascript:;" data-toggle="modal" data-target="#signup-form" data-dismiss="modal" class="btn c-btn-dark-1 btn c-btn-uppercase c-btn-bold c-btn-slim c-btn-border-2x c-btn-square c-btn-signup">Регистрация!</a>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/USER/LOGIN-FORM -->

<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">
    <!-- BEGIN: PAGE CONTENT -->
    <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-13 -->
    <section class="c-layout-revo-slider c-layout-revo-slider-13" dir="ltr">
        <div class="tp-banner-container tp-fullscreen tp-fullscreen-mobile c-arrow-darken" data-bullets-pos="center">
            <div class="tp-banner rev_slider" data-version="5.0">
                <ul>
                    <!--BEGIN: SLIDE #1 -->
                    <li data-index="rs-16" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="img/logo1.jpg"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Лучшее оборудование" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="img/logo1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 c-font-dark c-font-bold"
                             id="slide-16-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']"
                             data-lineheight="['70','70','70','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1000"
                             data-splitin="chars"
                             data-splitout="none"
                             data-responsive_offset="on"

                             data-elementdelay="0.05"

                             style="z-index: 5; white-space: nowrap;">Лучшее оборудование
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 c-font-dark"
                             id="slide-16-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 6; white-space: nowrap;">Высокие технологии
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption NotGeneric-Icon   tp-resizeme rs-parallaxlevel-0"
                             id="slide-16-layer-8"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['-68','-68','-68','-68']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"
                             data-style_hover="cursor:default;"

                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="2000"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 7; white-space: nowrap;"><i class="pe-7s-refresh"></i>
                        </div>
                    </li>
                    <!--END -->
                    <!-- BEGIN: SLIDE #2 -->
                    <li data-index="rs-17" data-transition="fadetotopfadefrombottom" data-slotamount="default"  data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500"  data-thumb="img/logo2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Квалифицированные врачи" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="img/logo2.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-3 c-font-white c-font-bold"
                             id="slide-17-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']"
                             data-lineheight="['70','70','70','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:0px;"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1000"
                             data-splitin="chars"
                             data-splitout="none"
                             data-responsive_offset="on"

                             data-elementdelay="0.05"

                             style="z-index: 5; white-space: nowrap;">Врачи с многолетним опытом
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2 c-font-white"
                             id="slide-17-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];"
                             data-mask_out="x:inherit;y:inherit;"
                             data-start="1500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 6; white-space: nowrap;">Высокая квалификация врачей
                        </div>
                    </li>
                    <!-- END -->
                    <!-- SLIDE #4  -->
                    <li data-index="rs-19" data-transition="zoomout" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="img/logo3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Здоровые пациенты" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="img/logo3.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- BACKGROUND VIDEO LAYER -->
                        <div class="rs-background-video-layer"
                             data-forcerewind="on"
                             data-volume="mute"
                             data-videowidth="100%"
                             data-videoheight="100%"
                             data-videomp4="../../assets/base/media/video/video-1.mp4"
                             data-videopreload="preload"
                             data-videoloop="none"
                             data-forceCover="1"
                             data-aspectratio="16:9"
                             data-autoplay="true"
                             data-autoplayonlyfirsttime="false"
                             data-nextslideatend="true"
                        ></div>
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0"
                             id="slide-19-layer-10"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-width="full"
                             data-height="full"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="opacity:0;s:2000;e:Power3.easeInOut;"
                             data-transform_out="opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-start="2000"
                             data-basealign="slide"
                             data-responsive_offset="on"
                             data-responsive="off"

                             style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);">
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 c-font-white c-font-bold"
                             id="slide-19-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                             data-fontsize="['70','70','70','45']"
                             data-lineheight="['70','70','70','50']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1000"
                             data-splitin="chars"
                             data-splitout="none"
                             data-responsive_offset="on"

                             data-elementdelay="0.05"

                             style="z-index: 6; white-space: nowrap;">Довольные пациенты
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0 c-font-white"
                             id="slide-19-layer-4"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['middle','middle','middle','middle']" data-voffset="['52','52','52','51']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"
                             data-transform_idle="o:1;"

                             data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                             data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                             data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                             data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                             data-start="1500"
                             data-splitin="none"
                             data-splitout="none"
                             data-responsive_offset="on"


                             style="z-index: 7; white-space: nowrap;">Довольные - потому что здоровые
                        </div>
                    </li>
                    <!-- END -->
                </ul>
            </div>
        </div>
    </section><!-- END: LAYOUT/SLIDERS/REVO-SLIDER-13 -->

</div>
<!-- END: PAGE CONTAINER -->

<!-- begin content -->

@hasSection('content')
    @yield('content')
@else
    @include('layouts.home')
@endif

<!-- end content -->

<!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
<a name="footer"></a>
<footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">

    <div class="c-postfooter c-bg-dark-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 c-col">
                    <p class="c-copyright c-font-grey">2024 &copy; Medical Center
                        <span class="c-font-grey-3">All Rights Reserved.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- END: LAYOUT/FOOTERS/FOOTER-6 -->

<!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
<div class="c-layout-go2top">
    <i class="icon-arrow-up"></i>
</div><!-- END: LAYOUT/FOOTERS/GO2TOP -->

<!-- BEGIN: LAYOUT/BASE/BOTTOM -->
<!-- BEGIN: CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../css/assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="../../css/assets/plugins/jquery.min.js" type="text/javascript" ></script>
<script src="../../css/assets/plugins/jquery-migrate.min.js" type="text/javascript" ></script>
<script src="../../css/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="../../css/assets/plugins/jquery.easing.min.js" type="text/javascript" ></script>
<script src="../../css/assets/plugins/reveal-animate/wow.js" type="text/javascript" ></script>
<script src="../../css/assets/demos/default/js/scripts/reveal-animate/reveal-animate.js" type="text/javascript" ></script>

<!-- END: CORE PLUGINS -->

<!-- BEGIN: LAYOUT PLUGINS -->
<script src="../../css/assets/plugins/revo-slider/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/revo-slider/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/revo-slider/js/extensions/revolution.extension.video.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/smooth-scroll/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/typed/typed.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/slider-for-bootstrap/js/bootstrap-slider.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/js-cookie/js.cookie.js" type="text/javascript"></script>
<!-- END: LAYOUT PLUGINS -->

<!-- BEGIN: THEME SCRIPTS -->
<script src="../../css/assets/base/js/components.js" type="text/javascript"></script>
<script src="../../css/assets/base/js/components-shop.js" type="text/javascript"></script>
<script src="../../css/assets/base/js/app.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        App.init(); // init core
    });
</script>
<!-- END: THEME SCRIPTS -->

<!-- BEGIN: PAGE SCRIPTS -->
<script src="../../css/assets/plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js" type="text/javascript"></script>
<script src="../../css/assets/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js" type="text/javascript"></script>
<script src="../../css/assets/demos/default/js/scripts/revo-slider/slider-13.js" type="text/javascript"></script>
<!-- END: PAGE SCRIPTS -->
<!-- END: LAYOUT/BASE/BOTTOM -->
</body>
</html>
