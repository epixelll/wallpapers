<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="INSPIRO" />
    <meta name="description" content="Themeforest Template Polo">
    <!-- Document title -->
    <title>POLO | The Multi-Purpose HTML5 Template</title>
    <!-- Stylesheets & Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,800,700,600|Montserrat:400,500,600,700|Raleway:100,300,600,700,800" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('/template/css/plugins.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/template/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('/template/css/responsive.css')}}" rel="stylesheet"> </head>

<body>


    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="header-transparent header-fullwidth header-plain">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="index.html" class="logo" data-dark-logo="{{URL::asset('/template/images/logo-dark.png')}}">
                            <img src="{{URL::asset('/template/images/logo.png')}}" alt="Polo Logo">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="search-results-page.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--end: Top Search Form-->

                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <!--top search-->
                                <a id="top-search-trigger" href="#" class="toggle-item">
                                    <i class="fa fa-search"></i>
                                    <i class="fa fa-close"></i>
                                </a>
                                <!--end: top search-->
                            </li>
                            <li class="hidden-xs">
                                <!--shopping cart-->
                                <div id="shopping-cart">
                                    <a href="shop-cart.html">
                                        <span class="shopping-cart-items">8</span>

                                        <i class="fa fa-shopping-cart"></i></a>
                                </div>
                                <!--end: shopping cart-->
                            </li>
                            <li>
                                <div class="topbar-dropdown">
                                    <a class="title"><i class="fa fa-globe"></i></a>
                                    <div class="dropdown-list">
                                        <a class="list-entry" href="#">French</a>
                                        <a class="list-entry" href="#">Spanish</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                    <div id="mainMenu" class="light">
                        <div class="container">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Главная</a></li>
                                    <li class="dropdown"> <a href="#">Каталог</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-heart"></i>Headers</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header.html">Light</a></li>
                                                    <li><a href="header-dark.html">Dark</a></li>
                                                    <li><a href="header-transparent.html">Transparent</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Semi Transparent</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-light-transparent.html">Light</a></li>
                                                            <li><a href="header-dark-transparent.html">Dark</a></li>
                                                            <li><a href="header-colored-transparent.html">Colored</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-colored.html">Colored</a></li>
                                                    <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Modern</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-modern.html">Light</a></li>
                                                            <li><a href="header-modern-dark.html">Dark</a></li>
                                                            <li><a href="header-modern-transparent.html">Transparent</a></li>
                                                            <li><a href="header-modern-colored.html">Colored</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-mini.html">Mini</a></li>
                                                    <li><a href="header-static.html">Static</a></li>
                                                    <li><a href="header-no-sticky.html">No Sticky</a></li>
                                                    <li><a href="header-sticky-responsive.html">Sticky Responsive</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Logo Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-logo.html">Left</a></li>
                                                            <li><a href="header-logo-right.html">Right</a></li>
                                                            <li><a href="header-logo-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-menu-left.html">Left</a></li>
                                                            <li><a href="header-menu-right.html">Right</a></li>
                                                            <li><a href="header-menu-center.html">Center</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Topbar</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="header-topbar.html">Light</a></li>
                                                            <li><a href="header-topbar-dark.html">Dark</a></li>
                                                            <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                                            <li><a href="header-topbar-colored.html">Colored</a></li>
                                                            <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="header-under.html">Under Slider</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-navicon"></i>Main Menu<span class="label label-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu.html">Default</a></li>
                                                    <li><a href="menu-split.html">Split Menu</a></li>
                                                    <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                                    <li><a href="menu-slide.html">Slide Menu</a></li>
                                                    <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                                    <li><a href="menu-creative.html">Creative Menu</a></li>
                                                    <li><a href="menu-lines.html">Lines Menu</a></li>
                                                    <li class="dropdown-submenu"><a href="#">Outline</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-outline.html">Default</a></li>
                                                            <li><a href="menu-outline-dark.html">Dark</a></li>
                                                            <li><a href="menu-outline-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-rounded.html">Default</a></li>
                                                            <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                            <li><a href="menu-rounded-light.html">Light</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu"><a href="#">Positions</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="menu-left.html">Left Aligned</a></li>
                                                            <li><a href="menu-center.html">Center Aligned</a></li>
                                                            <li><a href="menu-right.html">Right Aligned</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="menu-dots.html">Dots Menu</a></li>
                                                    <li><a href="menu-one-page.html">One Page Menu</a></li>
                                                    <li><a href="menu-hover-background.html">Hover Background</a></li>
                                                    <li><a href="menu-button.html">Button Version</a></li>
                                                    <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                                    <li><a href="menu-onclick.html">OnClick Open</a></li>
                                                    <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-sliders"></i>Sliders</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
                                                    <li><a href="slider-owl-slider.html">OWL Slider</a></li>
                                                    <li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
                                                    <li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
                                                    <li><a href="slider-static-media-text-rotator.html" class="current">Fullscreen Text Rotator</a></li>
                                                    <li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-star"></i>Page title</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-title-classic.html">Classic version</a></li>
                                                    <li><a href="page-title.html">Image background</a> </li>
                                                    <li><a href="page-title-video.html">Video background</a> </li>
                                                    <li><a href="page-title-pattern.html">Pattern background</a> </li>
                                                    <li><a href="page-title-background-color.html">Colored background</a> </li>
                                                    <li><a href="page-title-default-header.html">Default header</a></li>
                                                    <li><a href="page-title-animated.html">Animated</a></li>
                                                    <li><a href="page-title-center.html">Center Aligned</a></li>
                                                    <li><a href="page-title-right.html">Right Aligned</a></li>
                                                    <li><a href="page-title.html">Left Aligned</a></li>


                                                    <!--<li><a href="page-title-small.html">Small version</a> </li>-->
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-align-left"></i>Page Menu<span class="label label-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-menu.html">Rounded</a> </li>
                                                    <li><a href="page-menu-outline.html">Outline</a> </li>
                                                    <li><a href="page-menu-lines.html">Lines</a> </li>
                                                    <li><a href="page-menu-classic.html">Classic</a> </li>
                                                    <li><a href="page-menu-line-bottom.html">Line Bottom</a> </li>
                                                    <li><a href="page-menu-light.html">Light</a> </li>
                                                    <li><a href="page-menu-dark.html">Dark</a> </li>
                                                    <li><a href="page-menu-creative.html">Creative</a> </li>
                                                    <li><a href="page-menu-colored-background.html">Colored Background</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-columns"></i>Side Panel</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="side-panel.html">Push</a> </li>
                                                    <li><a href="side-panel-reval.html">Reval</a></li>
                                                    <li><a href="side-panel-slide-in.html">Slide In</a></li>
                                                    <li><a href="side-panel-static.html">Static</a></li>
                                                    <li><a href="side-panel-dark.html">Dark version</a></li>
                                                    <li><a href="side-panel-right.html">Push Right</a> </li>
                                                    <li><a href="side-panel-reval-right.html">Reval Right</a></li>
                                                    <li><a href="side-panel-slide-in-right.html">Slide In Right</a></li>
                                                    <li><a href="side-panel-static-right.html">Static Right</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="widgets.html"><i class="fa fa-th"></i>Widgets </a></li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-th-list"></i>Sidebars</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="sidebar.html">Left aligned</a> </li>
                                                    <li><a href="sidebar-right.html">Right aligned</a> </li>
                                                    <li><a href="sidebar-both.html">Both Sidebars</a> </li>
                                                    <li><a href="sidebar-modern.html">Modern</a> </li>
                                                    <li><a href="sidebar-modern-right.html">Modern Right</a> </li>
                                                    <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a> </li>

                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="fa fa-window-minimize"></i>Footers</a></li>
                                            <li><a href="page-loaders.html"><i class="fa fa-spinner"></i>Page Loaders<span class="label label-danger">NEW</span></a></li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-expand"></i>Modal Auto Open<span class="label label-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="modal-auto-open.html">Sample Text</a></li>
                                                    <li><a href="modal-auto-open-newsletter.html">Newsletter</a></li>
                                                    <li><a href="modal-auto-open-shop.html">Shop Sale</a></li>
                                                    <li><a href="modal-auto-open-login.html">Login Form</a></li>
                                                    <li><a href="modal-auto-open-audio.html">Audio</a></li>
                                                    <li><a href="modal-auto-open-video.html">HTML5 Video</a></li>
                                                    <li><a href="modal-auto-open-youtube.html">YouTube</a></li>
                                                    <li><a href="modal-auto-open-vimeo.html">Vimeo</a></li>
                                                    <li><a href="modal-auto-open-iframe.html">Iframe</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-bullhorn"></i>Cookie Notify<span class="label label-danger">NEW</span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cookie-notify.html">Top position</a> </li>
                                                    <li><a href="cookie-notify-bottom.html">Bottom position</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#"><i class="fa fa-tags"></i>Menu Labels</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Label (new)<span class="label label-default">NEW</span></a> </li>
                                                    <li><a href="#">Label (hot)<span class="label label-danger">HOT</span></a> </li>
                                                    <li><a href="#">Label (popular)<span class="label label-success">POPULAR</span></a> </li>
                                                    <li><a href="#">Label (sale)<span class="label label-warning">SALE</span></a> </li>
                                                    <li><a href="#">Label (info)<span class="label label-info">INFO</span></a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Фотообои</a>
                                        <ul class="dropdown-menu" style="background-image: url('{{URL::asset('/images/images/shortcode-megamenu-bg.png')}}');">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-according.html"> <i class="fa fa-list-ul"></i>Accordions</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-alerts.html"> <i class="fa fa-exclamation-circle"></i>Alerts</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-animations.html"> <i class="fa fa-magic"></i>Animations</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-audio-video.html"> <i class="fa fa-play-circle"></i> Audio & Video</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-blockquotes.html"> <i class="fa fa-quote-right"></i>Blockquotes</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-breadcrumbs.html"> <i class="fa fa-angle-double-right"></i>Breadcrumbs</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-buttons.html"> <i class="fa fa-external-link"></i>Buttons<span class="label label-default">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-client-logo.html"> <i class="fa fa-diamond"></i>Clients logos</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-calltoaction.html"> <i class="fa fa-plus-square"></i>Call to action</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-carousel.html"> <i class="fa fa-exchange"></i>Carousel Sliders</a>
                                                            </li>

                                                            <li>
                                                                <a href="shortcode-code.html"> <i class="fa fa-code"></i>Code</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-countdown-timer.html"> <i class="fa fa-clock-o"></i>Countdown Timers</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-counters.html"> <i class="fa fa-sort-numeric-desc"></i>Counter Numbers</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-dropcat-highlight.html"> <i class="fa fa-bold"></i>Dropcat & Highlight</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-team-members.html"> <i class="fa fa-users"></i>Team members</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-forms.html"> <i class="fa fa-align-justify"></i>Forms</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-grid.html"> <i class="fa fa-th"></i>Grid System</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-icon-boxes.html"> <i class="fa fa-bullseye"></i>Icon Boxes</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-icon-lists.html"> <i class="fa fa-flag"></i>Icon Lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-images.html"> <i class="fa fa-photo"></i>Images</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-labels-badgets.html"> <i class="fa fa-check-square"></i>Labels and Badges</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-lightbox.html"> <i class="fa fa-arrows-alt"></i>Lightbox</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-lists.html"> <i class="fa fa-th-list"></i>Lists & Bullet lists</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-maps.html"> <i class="fa fa-compass"></i>Maps</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-modal.html"> <i class="fa fa-search-plus"></i>Modal</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-modal-strip-top.html"> <i class="fa fa-flash"></i>Modal Strip<span class="label label-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-navs.html"> <i class="fa fa-bars"></i>Navbar & Navs</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-paginations.html"> <i class="fa fa-arrow-circle-right"></i>Pagination & Pager</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-panels.html"> <i class="fa fa-list-alt"></i>Panels</a>
                                                            </li>
                                                            <li> <a href="shortcode-pie-chart.html"><i class="fa fa-pie-chart"></i>Pie charts</a> </li>
                                                            <li> <a href="shortcode-popover-tooltip.html"><i class="fa fa-lightbulb-o"></i>Popover & tooltips</a> </li>
                                                            <li> <a href="shortcode-pricing-table.html"><i class="fa fa-dollar"></i>Pricing tables</a> </li>
                                                            <li>
                                                                <a href="shortcode-progress-bar.html"> <i class="fa fa-align-left"></i>Progress bars</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-parallax.html"> <i class="fa fa-gift"></i>Parallax</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-responsive-utilities.html"> <i class="fa fa-laptop"></i>Responsive utilities</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-sections.html"> <i class="fa fa-bookmark"></i>Sections</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-separators.html"> <i class="fa fa-minus"></i>Separators</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-smooth-scrolling.html"> <i class="fa fa-anchor"></i>Smooth Scrolling</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-social-icons.html"> <i class="fa fa-facebook-official"></i>Social Icons</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-textbox.html"> <i class="fa fa-star"></i>Text Boxes<span class="label label-danger">NEW</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-tables.html"> <i class="fa fa-table"></i>Tables</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-tabs.html"> <i class="fa fa-indent"></i>Tabs</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <ul>
                                                            <li>
                                                                <a href="shortcode-testimonial.html"> <i class="fa fa-question-circle"></i>Testimonials<span class="label label-danger">NEW</span></a>
                                                            </li>

                                                            <li>
                                                                <a href="shortcode-toggles.html"> <i class="fa fa-toggle-on"></i>Toggles</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-typography.html"> <i class="fa fa-font"></i>Typography</a>
                                                            </li>
                                                            <li>
                                                                <a href="shortcode-text-rotator.html"> <i class="fa fa-random"></i>Text Rotator<span class="label label-default">NEW</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"> <a href="#">Фрески</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-basic.html">Basic</a> </li>
                                                    <li><a href="page-about-extended.html">Extended</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">About me</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-about-me-creative.html">Creative<span class="label label-default">NEW</span></a></li>

                                                    <li><a href="page-about-me-basic.html">Basic</a></li>

                                                    <li><a href="page-about-me-extended.html">Extended</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Contact us</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-contact-classic.html">Classic</a> </li>
                                                    <li><a href="page-contact-fullwidth-map.html">Fullwidth Map</a> </li>
                                                    <li><a href="page-contact-fullscreen-map.html">Fullscreen Map</a> </li>
                                                    <li><a href="page-contact-map-bottom.html">Map bottom</a> </li>
                                                    <li><a href="page-contact-sidebar-left.html">Sidebar Left</a> </li>
                                                    <li><a href="page-contact-sidebar-right.html">Sidebar Right</a> </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Gallery</span>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="page-gallery-2.html">Two Columns</a> </li>
                                                    <li> <a href="page-gallery-3.html">Three Columns</a> </li>
                                                    <li> <a href="page-gallery-4.html">Four Columns</a> </li>
                                                    <li> <a href="page-gallery-5.html">Five Columns</a> </li>
                                                    <li> <a href="page-gallery-6.html">Six Columns</a> </li>
                                                    <li> <a href="page-gallery-sidebar.html">Sidebar version</a> </li>
                                                    <li> <a href="page-gallery-wide.html">Wide version</a> </li>
                                                    <li> <a href="page-gallery-load-more.html">Load more</a> </li>
                                                    <li> <a href="page-gallery-infinite-scroll.html">Infinity Scroll</a> </li>
                                                    <!--<li> <a href="page-gallery-gallery-albums.html">Gallery Albums</a> </li>-->
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">User pages</span>
                                                <ul class="dropdown-menu">
                                                    <li><a href="page-user-login.html">Login</a> </li>
                                                    <li><a href="page-user-login-classic.html">Login - Classic</a> </li>
                                                    <li><a href="page-user-register.html">Register</a> </li>
                                                    <li><a href="page-user-register-classic.html">Register - Classic</a> </li>
                                                    <li><a href="page-user-password-recovery.html">Recovery Password</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="page-services.html">Services</a> </li>
                                            <li> <a href="page-our-team.html">Our team</a> </li>
                                            <li> <a href="page-our-clients.html">Our clients</a> </li>
                                            <li> <a href="page-maintenance.html">Maintenance</a> </li>
                                            <li> <a href="page-404.html">404 Page</a> </li>
                                            <li> <a href="page-404-parallax.html">404 Page - Parallax</a> </li>
                                            <li> <a href="page-500.html">500 Page</a> </li>
                                            <li> <a href="page-fullwidth.html">Fullwidth page</a> </li>
                                            <li> <a href="page-fullwidth-wide.html">Fullwidth page - Wide</a> </li>
                                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">Page with Sidebar</span>
                                                <ul class="dropdown-menu">
                                                    <li> <a href="page-sidebar.html">Sidebar Left</a> </li>
                                                    <li> <a href="page-sidebar-right.html">Sidebar Right</a> </li>
                                                    <li> <a href="page-sidebar-both.html">Sidebar Both</a> </li>
                                                </ul>
                                            </li>
                                            <li> <a href="page-site-map.html">Site Map</a> </li>
                                            <li> <a href="page-faq.html">FAQ</a> </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">Картины</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids</li>
                                                            <li> <a href="portfolio-2.html">Two Columns</a> </li>
                                                            <li> <a href="portfolio-3.html">Three Columns</a> </li>
                                                            <li> <a href="portfolio-4.html">Four Columns</a> </li>
                                                            <li> <a href="portfolio-5.html">Five Columns</a> </li>
                                                            <li> <a href="portfolio-6.html">Six Columns</a> </li>
                                                            <li> <a href="portfolio-sidebar.html">Sidebar version</a> </li>
                                                            <li> <a href="portfolio-wide-3.html">Wide version</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li> <a href="portfolio-masonry-2.html">Two Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-3.html">Three Columns<span class="label label-danger">HOT</span></a> </li>
                                                            <li> <a href="portfolio-masonry-4.html">Four Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-5.html">Five Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-6.html">Six Columns</a> </li>
                                                            <li> <a href="portfolio-masonry-sidebar.html">Sidebar version</a> </li>
                                                            <li> <a href="portfolio-masonry-wide-3.html">Wide version</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Styles</li>
                                                            <li> <a href="portfolio-filter-styles.html">Filter Styles</a> </li>
                                                            <li> <a href="portfolio-load-more.html">Load more</a> </li>
                                                            <li> <a href="portfolio-load-more-sidebar.html">Load more - Sidebar</a> </li>
                                                            <li> <a href="portfolio-infinite-scroll.html">Infinity Scroll</a> </li>
                                                            <li> <a href="portfolio-ajax.html">Portfolio Ajax</a> </li>
                                                            <li> <a href="portfolio-gallery-modal.html">Gallery Modal</a> </li>
                                                            <li> <a href="portfolio-video-modal.html">Video Modal</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="portfolio-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="portfolio-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="portfolio-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="portfolio-slider-3.html">Slider Default</a> </li>
                                                            <li> <a href="portfolio-no-page-title.html">No Page Title</a> </li>
                                                            <li> <a href="portfolio-no-page-title-sidebar.html">No Page Title - Sidebar</a> </li>
                                                            <li> <a href="portfolio-hover-styles.html">Hover Styles</a> </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Project</li>
                                                            <li> <a href="portfolio-page-grid-gallery.html">Grid Gallery</a> </li>
                                                            <li> <a href="portfolio-page-particles.html">Particles Wide Project</a> </li>
                                                            <li> <a href="portfolio-page-floating-sidebar.html">Floating Sidebar</a> </li>
                                                            <li> <a href="portfolio-page-slider.html">Slider version</a> </li>
                                                            <li> <a href="portfolio-page-background-image.html">Fullscreen image</a> </li>
                                                            <li> <a href="portfolio-page-background-video.html">Fullscreen Video</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-12 m-t-40 m-b-10">
                                                        <div class="visible-lg visible-md">
                                                            <div class="col-md-9 m-t-10 no-padding">
                                                                <div class="text-center center">
                                                                    <div class="heading-creative"><strong>20+</strong> Amazing Hover Styles</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <a href="portfolio-hover-styles.html" class="btn m-l-20 btn-light btn-shadow btn-light-hover btn-light-hover">View All Hover Styles</a>
                                                            </div>
                                                        </div>

                                                        <ul class="hidden-lg hidden-md">
                                                            <li> <a href="portfolio-hover-styles.html">20+ Amazing Hover Styles</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li> <li class="dropdown mega-menu-item"> <a href="#">Натяжные потолки</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Masonry</li>
                                                            <li> <a href="blog-masonry-2.html">Two Columns</a> </li>
                                                            <li> <a href="blog-masonry-3.html">Three Columns<span class="label label-danger">HOT</span></a> </li>
                                                            <li> <a href="blog-masonry-4.html">Four Columns</a> </li>
                                                            <li> <a href="blog-masonry-sidebar.html">Sidebar version</a> </li>
                                                            <li> <a href="blog-masonry-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-masonry-wide.html">Wide version</a> </li>
                                                            <li> <a href="blog-masonry-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-masonry-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-masonry-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Grids Layout</li>
                                                            <li> <a href="blog-1.html">One Column</a> </li>
                                                            <li> <a href="blog-2.html">Two Columns</a> </li>
                                                            <li> <a href="blog-3.html">Three Columns</a> </li>
                                                            <li> <a href="blog-4.html">Four Columns</a> </li>
                                                            <li> <a href="blog-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-wide.html">Wide version</a> </li>
                                                            <li> <a href="blog-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Left Image</li>
                                                            <li> <a href="blog-left-image-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="blog-left-image-no-sidebar.html">No Sidebar</a> </li>
                                                            <li> <a href="blog-left-image-no-page-title.html">No page title</a> </li>
                                                            <li> <a href="blog-left-image-load-more.html">Load More</a> </li>
                                                            <li> <a href="blog-left-image-infinite-scroll.html">Infinite Scroll</a> </li>
                                                            <li> <a href="blog-left-image-author-info.html">Author Info</a> </li>
                                                            <li> <a href="blog-left-image-filter.html">Filter Categories</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="blog-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="blog-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="blog-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="blog-fullwidth.html">Fullwidth</a> </li>
                                                            <li class="mega-menu-title">Post Item Styles</li>
                                                            <li><a href="blog-style-shadow.html">Shadow</a></li>
                                                            <li><a href="blog-style-textual.html">Textual</a></li>
                                                            <li><a href="blog-style-grey-bg.html">Grey Background</a></li>
                                                            <li><a href="blog-style-author-info.html">Author Info</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Post</li>
                                                            <li> <a href="blog-single.html">Default</a> </li>
                                                            <li> <a href="blog-single-slider.html">Slider</a> </li>
                                                            <li> <a href="blog-single-video.html">Video</a> </li>
                                                            <li> <a href="blog-single-audio.html">Audio</a> </li>
                                                            <li> <a href="blog-single-creative.html">Creative</a> </li>
                                                            <li class="mega-menu-title">Comments<span class="label label-danger">NEW</span></li>
                                                            <li> <a href="blog-comments.html#comments">Default Comments</a> </li>
                                                            <li> <a href="blog-comments-disqus.html#comments">Disqus Comments</a> </li>
                                                            <li> <a href="blog-comments-facebook.html#comments">Facebook Comments</a> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown mega-menu-item"> <a href="#">О нас</a>
                                        <ul class="dropdown-menu">
                                            <li class="mega-menu-content">
                                                <div class="row">
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Columns</li>
                                                            <li> <a href="shop-columns-2.html">Two Columns</a> </li>
                                                            <li> <a href="shop-columns-3.html">Three Columns</a> </li>
                                                            <li> <a href="shop-columns-4.html">Four Columns</a> </li>
                                                            <li> <a href="shop-columns-5.html">Five Columns</a> </li>
                                                            <li> <a href="shop-columns-6.html">Six Columns</a> </li>
                                                            <li> <a href="shop-sidebar-sticky.html">Sidebar Sticky</a> </li>
                                                            <li> <a href="shop-wide.html">Wide version</a> </li>
                                                            <li> <a href="shop-no-page-title.html">No page title</a> </li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Layouts</li>
                                                            <li> <a href="shop-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="shop-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="shop-sidebar-both.html">Both Sidebars</a> </li>
                                                            <li> <a href="shop-fullwidth.html">Fullwidth (Wide)</a> </li>
                                                            <li class="mega-menu-title">Loading Styles</li>

                                                            <li> <a href="shop-load-more.html">Load more</a>
                                                                <a href="shop-load-more-sidebar.html">Load Sidebar</a> </li>

                                                            <li> <a href="shop-infinite-scroll.html">Infinity Scroll</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Order process</li>
                                                            <li> <a class="animsition-link" href="shop-cart.html">Shoping Cart</a> </li>
                                                            <li> <a class="animsition-link" href="shop-cart-empty.html">Shoping Cart - Empty</a> </li>
                                                            <li> <a class="animsition-link" href="shop-checkout.html">Checkout</a> </li>
                                                            <li> <a class="animsition-link" href="shop-checkout-completed.html">Checkout Completed</a> </li>
                                                            <li> <a href="shop-wishlist.html">Wishlist</a> </li>
                                                            <li> <a href="shop-wishlist-empty.html">Wishlist Empty</a> </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-2-5">
                                                        <ul>
                                                            <li class="mega-menu-title">Single Product</li>
                                                            <li> <a href="shop-single-product.html">Fullwidth</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-left.html">Left Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-right.html">Right Sidebar</a> </li>
                                                            <li> <a href="shop-single-product-sidebar-both.html">Both Sidebars</a> </li>
                                                        </ul>
                                                    </div>
<div class="col-md-2-5 p-l-0">

                                        <h4 class="text-green">BIG SALE <small>Up to</small></h4>

                                        <h2 class="text-large text-green lh80 m-b-30">70%</h2>
                                        <p class="m-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis ipsum dolor sit amet lacinia faucibus.</p>

                                        <a class="btn btn-shadow btn-rounded btn-block">SHOP NOW!</a><small class="t300"><p class="text-center m-0"><em>* Limited time Offer</em></p></small>
                          
</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->



        <!-- REVOLUTION SLIDER -->
        <div id="slider">

            <div id="rev_slider_21_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="Polo Design Studio" style="background-color:transparent;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.1 fullscreen mode -->
                <div id="rev_slider_21_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1">
                    <ul>
                        <!-- SLIDE  -->
                        <li data-index="rs-98" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="{{URL::asset('/template/homepages/design-studio/images/slider/ambient.jpg')}}" alt="" width="1680" height="1050" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="2" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->

                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-2" data-x="['center','center','center','center']" data-hoffset="['0','0','-4','-2']" data-y="['top','top','top','top']" data-voffset="['637','637','700','586']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1520;e:Power4.easeInOut;" data-transform_out="opacity:0;s:230;s:230;" data-start="500" data-responsive_offset="on" style="z-index: 5;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/table.png')}}" alt="" width="1300" height="297" data-ww="['1300px','1300px','1300px','1300px']" data-hh="['297px','297px','297px','297px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-11" data-x="['center','center','center','center']" data-hoffset="['338','338','313','396']" data-y="['top','top','top','top']" data-voffset="['621','621','691','572']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:top;s:2000;e:Power2.easeOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3870" data-responsive_offset="on" style="z-index: 6;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/headphone_3.png')}}" alt="" width="150" height="70" data-ww="['139px','139px','139px','139px']" data-hh="['65px','65px','65px','65px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-4" data-x="['center','center','center','center']" data-hoffset="['0','0','0','6']" data-y="['top','top','top','top']" data-voffset="['350','350','402','302']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:top;s:2100;e:Power2.easeOut;" data-transform_out="opacity:0;s:1.875;s:1.875;" data-start="1471.875" data-responsive_offset="on" style="z-index: 7;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/apple_monitor_1.png')}}" alt="" width="502" height="384" data-ww="['411px','411px','411px','411px']" data-hh="['315px','315px','315px','315px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-6" data-x="['center','center','center','center']" data-hoffset="['-5','-5','-16','-16']" data-y="['top','top','top','top']" data-voffset="['671','671','726','726']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:top;s:2000;e:Power2.easeOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="2990" data-responsive_offset="on" style="z-index: 8;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/keyboard_apple_1-220x23.png')}}" alt="" width="220" height="23" data-ww="['220px','220px','220px','220px']" data-hh="['23px','23px','23px','23px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 5 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-14" data-x="['left','left','left','left']" data-hoffset="['432','324','202','57']" data-y="['top','top','top','top']" data-voffset="['366','365','416','319']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" data-transform_out="opacity:0;s:300;s:300;" data-mask_in="x:0px;y:0px;" data-start="3870" data-responsive_offset="on" style="z-index: 9;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/13.jpg')}}" alt="" width="1663" height="892" data-ww="['378px','378px','378px','378px']" data-hh="['214px','214px','214px','214px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-7" data-x="['center','center','center','center']" data-hoffset="['-397','-397','-273','-201']" data-y="['top','top','top','top']" data-voffset="['603','603','675','552']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:top;s:2000;e:Power2.easeOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3200" data-responsive_offset="on" style="z-index: 10;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/camera_canon_d40_1.png')}}" alt="" width="129" height="105" data-ww="['113px','113px','113px','113px']" data-hh="['92px','92px','92px','92px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-9" data-x="['center','center','center','center']" data-hoffset="['-264','-264','-187','-123']" data-y="['top','top','top','top']" data-voffset="['625','625','680','586']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:top;s:2000;e:Power2.easeOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3600" data-responsive_offset="on" style="z-index: 11;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/mug_1.png')}}" alt="" width="87" height="75" data-ww="['71px','71px','71px','71px']" data-hh="['62px','62px','62px','62px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 8 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-10" data-x="['center','center','center','center']" data-hoffset="['199','199','174','118']" data-y="['top','top','top','top']" data-voffset="['656','656','715','606']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:top;s:2000;e:Power2.easeOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3330" data-responsive_offset="on" style="z-index: 12;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/mouse_apple_1.png')}}" alt="" width="76" height="44" data-ww="['63px','63px','63px','63px']" data-hh="['37px','37px','37px','37px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 9 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-98-layer-12" data-x="['center','center','center','center']" data-hoffset="['379','379','303','172']" data-y="['top','top','top','top']" data-voffset="['-21','-21','-17','-2']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:top;s:2000;e:Power2.easeOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="2430" data-responsive_offset="on" style="z-index: 13;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/pendant_1-220x504.png')}}" alt="" width="220" height="504" data-ww="['133px','133px','133px','133px']" data-hh="['434px','434px','434px','434px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 10 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-13" data-x="['center','center','center','center']" data-hoffset="['-524','-431','-323','-480']" data-y="['top','top','top','top']" data-voffset="['121','128','195','115']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:2000;e:Power2.easeOut;" data-transform_out="opacity:0;s:290;s:290;" data-start="670" data-responsive_offset="on" style="z-index: 14;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/frame_black_design_pattern_4-220x230.png')}}" alt="" width="220" height="230" data-ww="['220px','220px','176','220px']" data-hh="['230px','230px','184','230px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 11 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-98-layer-15" data-x="['center','center','center','center']" data-hoffset="['-572','-572','-416','-416']" data-y="['top','top','top','top']" data-voffset="['621','621','654','654']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:140;s:140;" data-start="3420" data-responsive_offset="on" style="z-index: 15;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/chair_2-220x187.png')}}" alt="" width="460" height="392" data-ww="['400px','400px','400px','400px']" data-hh="['341px','341px','341px','341px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 12 -->
                            <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-98-layer-19" data-x="['right','right','right','right']" data-hoffset="['-339','-339','-334','-334']" data-y="['top','top','top','top']" data-voffset="['201','201','502','502']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:290;s:290;" data-start="3870" data-responsive_offset="on" style="z-index: 16;"><img src="{{URL::asset('/template/homepages/design-studio/images/slider/plant1.png')}}" alt="" width="700" height="844" data-ww="['700px','700px','700px','700px']" data-hh="['844px','844px','844px','844px']" data-no-retina>
                            </div>

                            <!-- LAYER NR. 13 -->
                            <div class="tp-caption medium_light_black   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-20" data-x="['center','center','center','center']" data-hoffset="['9','9','10','0']" data-y="['top','top','top','top']" data-voffset="['83','83','42','82']" data-fontsize="['80','80','66','50']" data-lineheight="['78','78','78','50']" data-width="['637','637','637','465']" data-height="['186','186','186','190']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="3870" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" style="z-index: 17; min-width: 637px; max-width: 637px; max-width: 186px; max-width: 186px; white-space: normal; font-size: 80px; line-height: 78px; font-weight: 100; color: rgba(0, 0, 0, 1.00);text-align:center;padding:0px 0px 0px 0px;border-color:rgba(255, 214, 88, 1.00);">Мастерская Фотообоев
                            </div>

                            <!-- LAYER NR. 14 -->
                            <div class="tp-caption medium_light_black   tp-resizeme rs-parallaxlevel-1" id="slide-98-layer-21" data-x="['center','center','center','center']" data-hoffset="['16','16','23','0']" data-y="['top','top','top','top']" data-voffset="['249','249','221','221']" data-fontsize="['26','26','20','20']" data-lineheight="['26','26','20','20']" data-width="['637','637','465','465']" data-height="['none','none','125','125']" data-whitespace="normal" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="3870" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 18; min-width: 637px; max-width: 637px; white-space: normal; font-size: 26px; line-height: 26px; font-weight: 100; color: rgba(0, 0, 0, 1.00);text-align:center;padding:0px 0px 0px 0px;border-color:rgba(255, 214, 88, 1.00);">Фотообои, фрески, картины – эффектные и доступные варианты оформления практически любых помещений
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>
            </div>
            <!-- END REVOLUTION SLIDER -->


        </div>
        <!-- END REVOLUTION SLIDER -->

        <!-- ABOUT -->
        <section class="p-t-150 background-image" style="({{URL::asset('/template/homepage-design-studio/images/parallax/1.jpg')}});">
            <div class="container">

                <div class="row">
                    <div class="col-md-7" data-animation="fadeIn">
                        <h2 class="text-medium">ДОБРО ПОЖАЛОВАТЬ В МИР ФОТООБОЕВ</h2>
                        <p>Фотообои, фрески, картины – эффектные и доступные варианты оформления практически любых помещений. Область их использования достаточно широка – от декорирования кафе, магазинов, офисов до оформления гостиных, кухонь и детских комнат. Благодаря такому оригинальному варианту оформления можно создать в помещении особую атмосферу, расширить границы пространства, создать уют и разделить комнату на зоны.
                            <br>
                            <br>Мастерская фресок и фотообоев предлагает услуги качественной печати фотообоев, фресок, картин, а также печати на натяжных потолках и настенной плитке по доступной стоимости. Компания располагается в Сургуте, но готова осуществлять свою деятельность по всей территории РФ.
                        <a href="#" class="btn btn-outline btn-dark"><span>Узнать больше о нас</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end: -->

        <!-- PROCESS BOXES -->
        <section class="box-fancy section-fullwidth text-light">
            <div class="row">
                <div style="background-color: #3D4045" class="col-md-4">
                    <h1 class="text-large text-uppercase">01.</h1>
                    <h3>ВЫБРАТЬ</h3>
                    <span>У нас Вы можете заказать безшовные фотообои на стену или любую другую плоскую поверхность, выбрав рисунок из представленных на сайте. А в случае, если подходящего изображения не окажется - мы скачаем для Вас сюжет из огромного каталога shutterstock.com стоимость изображения 500 руб. Выберите свой фотообой сами, и мы подготовим вам все остальное.
                </div>

                <div style="background-color: #505358" class="col-md-4">
                    <h1 class="text-large text-uppercase">02.</h1>
                    <h3>ЗАКАЗАТЬ</h3>
                    <span> ри заказе мы изготовим обои по Вашим размерам в течение 1-2 дней с момента заказа. Большинство фотографий, представленных на сайте, может быть использовано для производства обоев размером до 2,0х2,7 метров, если Вам требуется больший размер, уточняйте возможность изготовления таких обоев для каждого конкретного изображения у наших менеджеров.
                </div>

                <div style="background-color: #3D4045" class="col-md-4">
                    <h1 class="text-large text-uppercase">03.</h1>
                    <h3>ПРИКЛЕИТЬ</h3>
                    <span>Инструкция по поклейке бесшовных фотообоев. Перед поклейкой обои должны полностью выпрямиться. Разложите обои на ровной поверхности и дайте им отлежаться 24 часа. Не допускайте сквозняков.Поверхность:Приготовьте поверхность стены для оклейки, без использования акриловых шпатлевок.  Для этого удалите старые обои, загрязнения и облупившуюся краску. </span>
                </div>
            </div>
        </section>
        <!-- end: PROCESS BOXES -->

        <!-- PORTFOLIO -->
        <section class="p-b-0">
            <div class="container">
                <div class="text-center">
                    <h3 class="text-medium m-b-5">ТОП ПРОДАЖ</h3>
                    <p>Грамотно подобранные фотообои Хиты продаж способны преобразовывать пространство: обыгрывать стилистические направления и органично вписываться в любой интерьер.
                    </p>
                </div>
            </div>
            <hr class="space">
            <div class="portfolio">

                <!-- Portfolio Filter -->
                <nav class="grid-filter gf-outline" data-layout="#portfolio">
                    <ul>
                        <li class="active"><a href="#" data-category="*">Show All</a></li>
                        <li><a href="#" data-category=".pf-icons">Icons</a></li>
                        <li><a href="#" data-category=".pf-illustrations">Illustrations</a></li>
                        <li><a href="#" data-category=".pf-uielements">UI Elements</a></li>
                        <li><a href="#" data-category=".pf-media">Media</a></li>
                        <li><a href="#" data-category=".pf-graphics">Graphics</a></li>
                    </ul>
                    <div class="grid-active-title">Show All</div>
                </nav>
                <!-- end: Portfolio Filter -->

                <!-- Portfolio -->
                <div id="portfolio" class="grid-layout portfolio-4-columns" data-margin="0">

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark pf-illustrations pf-media pf-icons pf-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{URL::asset('/template/homepages/design-studio/images/portfolio/1.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Fullscreen</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->
                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark pf-illustrations pf-media pf-icons pf-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{URL::asset('/template/homepages/design-studio/images/portfolio/2.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Business</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark pf-illustrations pf-media pf-icons pf-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{URL::asset('/template/homepages/design-studio/images/portfolio/3.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Caffe</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark pf-illustrations pf-media pf-icons pf-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{URL::asset('/template/homepages/design-studio/images/portfolio/4.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Shop</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark pf-illustrations pf-media pf-icons pf-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{URL::asset('/template/homepages/design-studio/images/portfolio/5.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Mobile Application</h3>
                                    <span>App / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark pf-illustrations pf-media pf-icons pf-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{URL::asset('/template/homepages/design-studio/images/portfolio/6.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Light</h3>
                                    <span>Illustrations / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark pf-illustrations pf-media pf-icons pf-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{URL::asset('/template/homepages/design-studio/images/portfolio/7.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>John Smith</h3>
                                    <span>Web / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                    <!-- portfolio item -->
                    <div class="portfolio-item overlay-dark pf-illustrations pf-media pf-icons pf-Media">
                        <div class="portfolio-item-wrap">
                            <div class="portfolio-image">
                                <a href="#"><img src="{{URL::asset('/template/homepages/design-studio/images/portfolio/8.jpg')}}" alt=""></a>
                            </div>
                            <div class="portfolio-description">
                                <a href="portfolio-page-grid-gallery.html">
                                    <h3>Portfolio</h3>
                                    <span>Portfolio / Graphics</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end: portfolio item -->

                </div>
                <!-- end: Portfolio -->
            </div>
        </section>
        <!-- end: PORTFOLIO -->

        <!-- BLOG -->
        <section class="p-t-150 p-b-150" data-parallax-image="({{URL::asset('/template/homepages/minimal/images/parallax/1.jpg')}})">

            <div class="container">
                <div data-animation-delay="100" data-animation="fadeInUp">
                    <div class="heading heading heading-center">
                        <h1 class="text-medium">Our Blog!</h1>
                        <span class="lead">Create amam ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </div>
                </div>
                <div id="blog">
                    <div class="container">
                        <!-- Blog post--><div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

                <!-- Post item-->
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{URL::asset('/template/images/blog/12.jpg')}}">
                            </a>
                            <span class="post-meta-category"><a href="">Lifestyle</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                            <h2><a href="#">Lighthouse, standard post with a single image
</a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                            <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                <!-- end: Post item-->

                <!-- Post item-->
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{URL::asset('/template/images/blog/17.jpg')}}">
                            </a>
                            <span class="post-meta-category"><a href="">Science</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                            <h2><a href="#">Lighthouse, standard post with a single image
</a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                            <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                <!-- end: Post item-->


                <!-- Post item-->
                <div class="post-item border">
                    <div class="post-item-wrap">
                        <div class="post-image">
                            <a href="#">
                                <img alt="" src="{{URL::asset('/template/images/blog/18.jpg')}}">
                            </a>
                            <span class="post-meta-category"><a href="">Science</a></span>
                        </div>
                        <div class="post-item-description">
                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                            <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>

                            <h2><a href="#">Lighthouse, standard post with a single image
</a></h2>
                            <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet.</p>

                            <a href="#" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
                <!-- end: Post item-->
            </div>
                        <!-- end: Blog post-->
                    </div>
                </div>

            </div>
        </section>
        <!-- BLOG -->


        <!-- REVIEWS -->
        <section>
            <div class="container">
                <div class="text-center">
                    <h3 class="text-medium m-b-5">WHAT PEOPLE SAY ABOUT US</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus</p>
                </div>
                <hr class="space">
                <div class="carousel equalize testimonial testimonial-box" data-margin="20" data-arrows="false" data-items="3" data-equalize-item=".testimonial-item">

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="{{URL::asset('/template/images/team/9.jpg')}}" alt="">
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                        <span>Alan Monre</span>
                        <span>CEO, Square Software</span>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="{{URL::asset('/template/images/team/9.jpg')}}" alt="">
                        <p>Polo is by far the most amazing template out there! I literally could not be happier that I chose to buy this template!</p>
                        <span>Alan Monre</span>
                        <span>CEO, Square Software</span>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="{{URL::asset('/template/images/team/9.jpg')}}" alt="">
                        <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
                        <span>Alan Monre</span>
                        <span>CEO, Square Software</span>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="{{URL::asset('/template/images/team/10.jpg')}}" alt="">
                        <p>Art is the only serious thing in the world. And the artist is the only person who is never serious.</p>
                        <span>Resa Smith</span>
                        <span>Developer @Apple</span>
                    </div>
                    <!-- end: Testimonials item-->

                    <!-- Testimonials item -->
                    <div class="testimonial-item">
                        <img src="{{URL::asset('/template/images/team/11.jpg')}}" alt="">
                        <p>The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
                        <span>Ariol Perry</span>
                        <span>Creative Designer</span>
                    </div>
                    <!-- end: Testimonials item-->

                </div>
            </div>
        </section>
        <!-- end: REVIEWS -->

        <!-- GET IN TOUCH -->
        <section class="background-grey">
            <div class="container">

                <div class="text-center m-b-100">
                    <h1 class="text-medium">Get in touch?</h1>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>
                <div class="row">
                    <div class="col-md-8 center">
                        <form class="widget-contact-form" action="include/contact-form.php" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="name">Name</label>
                                    <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Enter your Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="email">Email</label>
                                    <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Enter your Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="subject">Phone</label>
                                    <input type="text" name="widget-contact-form-phone" class="form-control" placeholder="Enter your phone number">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="subject">Company</label>
                                    <input type="text" name="widget-contact-form-company" class="form-control" placeholder="Enter your Company name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea type="text" name="widget-contact-form-message" rows="9" class="form-control required" placeholder="Enter your Message"></textarea>
                            </div>
                            <div class="row">
                                <div class="form-group text-center">
                                    <button class="btn btn-default center" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
        <!-- end: GET IN TOUCH -->

        <!-- Footer -->
        <footer id="footer" class="footer-light">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Footer widget area 1 -->
                            <div class="widget clearfix widget-contact-us" style="background-image: url({{URL::asset('/template/images/world-map-dark.png')}}); background-position: 50% 20px; background-repeat: no-repeat">
                                <h4>About POLO</h4>
                                <ul class="list-icon">
                                    <li><i class="fa fa-map-marker"></i> 795 Folsom Ave, Suite 600
                                        <br>San Francisco, CA 94107</li>
                                    <li><i class="fa fa-phone"></i> (123) 456-7890 </li>
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:first.last@example.com">first.last@example.com</a>
                                    </li>
                                    <li>
                                        <br><i class="fa fa-clock-o"></i>Monday - Friday: <strong>08:00 - 22:00</strong>
                                        <br>Saturday, Sunday: <strong>Closed</strong>
                                    </li>
                                </ul>
                                <!-- Social icons -->
                                <div class="social-icons social-icons-border float-left m-t-20">
                                    <ul>
                                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <!-- end: Social icons -->
                            </div>
                            <!-- end: Footer widget area 1 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>Quick LInks</h4>
                                <ul class="list-icon list-icon-arrow">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Shortcodes</a></li>
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 3 -->
                            <div class="widget">
                                <h4>Latest From Our Blog</h4>
                                <div class="post-thumbnail-list">
                                    <div class="post-thumbnail-entry">

                                        <div class="post-thumbnail-content">
                                            <a href="#">Suspendisse consectetur fringilla luctus</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">

                                        <div class="post-thumbnail-content">
                                            <a href="#">Consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 24h ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                        </div>
                                    </div>
                                    <div class="post-thumbnail-entry">

                                        <div class="post-thumbnail-content">
                                            <a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> 11h ago</span>
                                            <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Footer widget area 3 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 4 -->
                            <div class="widget widget-tweeter" data-username="ardianmusliu" data-limit="2">
                                <h4>Recent Tweets</h4>
                            </div>
                            <!-- end: Footer widget area 4 -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2017 POLO - Responsive Multi-Purpose HTML5 Template. All Rights Reserved.<a href="http://www.inspiro-media.com" target="_blank">INSPIRO</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end: Footer -->

    </div>
    <!-- end: Wrapper -->

    <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>

    <!--Plugins-->
    <script src="{{URL::asset('/template/js/jquery.js')}}"></script>
    <script src="{{URL::asset('/template/js/plugins.js')}}"></script>

    <!--Template functions-->
    <script src="{{URL::asset('/template/js/functions.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/template/js/plugins/revolution/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/template/js/plugins/revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('/template/js/plugins/revolution/css/navigation.css')}}">

    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('/template/js/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

    <script type="text/javascript">
        var tpj = jQuery;

        var revapi21;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_21_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_21_1");
            } else {
                revapi21 = tpj("#rev_slider_21_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "{{URL::asset('/template/js/plugins/revolution/js/')}}",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        onHoverStop: "off",
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [868, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 700,
                        levels: [2, 6, 10, 20, 25, 30, 35, 40, 45, 50, 47, 48, 49, 50, 51, 55],
                        type: "mouse",
                        disable_onmobile: "on"
                    },
                    shadow: 0,
                    spinner: "spinner0",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/

    </script>

</body>

</html>
