<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="Desafio de php do torne-se um programador com cake.">
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Ecommerce desafio PHP:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['bootstrap.min', 'morris', 'main', 'hm-style', 'color_skins']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="theme-cyan index2">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-cyan">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Carregando por favor aguarde ...</p>
        </div>
    </div>

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div><!-- Search  -->
    <div class="search-bar">
        <div class="search-icon"> <i class="material-icons">search</i> </div>
        <input type="text" placeholder="Explore Nexa...">
        <div class="close-search"> <i class="material-icons">close</i> </div>
    </div>


    <!-- Top Bar -->
    <nav class="navbar">
        <div class="col-12">
            <div class="navbar-header"><a href="<?= $this->Url->build('/') ?>" class="h-bars"></a><a class="navbar-brand" href="index.html">Nexa</a></div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle xs-hide" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu slideDown">
                        <li class="header">NOTIFICATIONS</li>
                        <li class="body">
                            <ul class="menu list-unstyled">
                                <li><a href="javascript:void(0);">
                                    <div class="icon-circle l-coral"> <i class="material-icons">person_add</i> </div>
                                    <div class="menu-info">
                                        <h4>12 new members joined</h4>
                                        <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                    </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                    <div class="icon-circle l-turquoise"> <i class="material-icons">add_shopping_cart</i> </div>
                                    <div class="menu-info">
                                        <h4>4 sales made</h4>
                                        <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                    </div>
                                    </a></li>                            
                                <li><a href="javascript:void(0);">
                                    <div class="icon-circle l-seagreen"> <i class="material-icons">cached</i> </div>
                                    <div class="menu-info">
                                        <h4><b>John</b> updated status</h4>
                                        <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                    </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                    <div class="icon-circle l-blue"> <i class="material-icons">settings</i> </div>
                                    <div class="menu-info">
                                        <h4>Settings updated</h4>
                                        <p> <i class="material-icons">access_time</i> Yesterday </p>
                                    </div>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="footer"><a href="javascript:void(0);">View All Notifications</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <ul class="dropdown-menu slideLeft">
                        <li class="header">TASKS</li>
                        <li class="body">
                            <ul class="menu tasks list-unstyled">
                                <li><a href="javascript:void(0);">
                                    <h4> Footer display issue <small>72%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                    <h4> Make new buttons <small>56%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    </a></li>
                                <li><a href="javascript:void(0);">
                                    <h4> Create new dashboard <small>68%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    </a></li>                            
                                <li><a href="javascript:void(0);">
                                    <h4> Answer GitHub questions <small>87%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                    </a></li>
                            </ul>
                        </li>
                        <li class="footer"><a href="javascript:void(0);">View All Tasks</a></li>
                    </ul>
                </li>
                <li><a href="sign-in.html" class="mega-menu xs-hide" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
                <li class=""><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
            </ul>
        </div>
    </nav>


    <div class="menu-container">
        <div class="menu">
            <ul class="pullDown">
                <li><a href="javascript:void(0)">Dashboard</a>
                    <ul class="pullDown">
                        <li><a href="index.html">Main Dashboard</a></li>
                        <li><a href="dashboard-rtl.html">RTL Dashboard</a></li>
                        <li><a href="index2.html">Horizontal Menu</a></li>
                        <li><a href="blog-dashboard.html">Blog Dashboard</a></li>
                        <li><a href="ec-dashboard.html">Ecommerce Dashboard</a></li>
                        <li><a href="iot-dashboard.html">Iot Dashboard</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)">App</a>
                    <ul class="pullDown">                                   
                        <li><a href="javascript:void(0)">Inbox</a></li>
                        <li><a href="javascript:void(0)">Chat</a></li>
                        <li><a href="javascript:void(0)">Calendar</a></li>
                        <li><a href="javascript:void(0)">Contact list</a></li>
                        <li><a href="javascript:void(0)">Blogger</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)">UI Kit</a>
                    <ul class="pullDown">
                        <li><span><i class="zmdi zmdi-label"></i> List</span>
                            <ul>
                                <li><a href="ui_kit.html" >UI KIT</a></li>                    
                                <li><a href="alerts.html" >Alerts</a></li>                    
                                <li><a href="collapse.html" >Collapse</a></li>
                                <li><a href="colors.html" >Colors</a></li>
                            </ul>
                        </li>
                        <li><span><i class="zmdi zmdi-label"></i> List</span>
                            <ul>
                                <li><a href="dialogs.html" >Dialogs</a></li>
                                <li><a href="icons.html" >Icons</a></li>                    
                                <li><a href="list-group.html" >List Group</a></li>
                                <li><a href="media-object.html" >Media Object</a></li>
                            </ul>
                        </li>
                        <li><span><i class="zmdi zmdi-label"></i> List</span>
                            <ul>
                                <li><a href="modals.html" >Modals</a></li>
                                <li><a href="notifications.html" >Notifications</a></li>                    
                                <li><a href="progressbars.html" >Progress Bars</a></li>
                                <li><a href="range-sliders.html" >Range Sliders</a></li>
                            </ul>
                        </li>
                        <li><span><i class="zmdi zmdi-label"></i> List</span>
                            <ul>
                                <li><a href="sortable-nestable.html" >Sortable &amp; Nestable</a></li>
                                <li><a href="tabs.html" >Tabs</a></li>
                                <li><a href="waves.html" >Waves</a></li>
                            </ul>
                        </li>                    
                    </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="zmdi zmdi-assignment"></i> Forms</a>
                    <ul class="pullDown">
                        <li><a href="javascript:void(0)">Basic Elements</a></li>
                        <li><a href="javascript:void(0)">Advanced Elements</a></li>
                        <li><a href="javascript:void(0)">Form Examples</a></li>
                        <li><a href="javascript:void(0)">Form Validation</a></li>
                        <li><a href="javascript:void(0)">Form Wizard</a></li>
                        <li><a href="javascript:void(0)">Editors</a></li>
                        <li><a href="javascript:void(0)" >File Upload</a></li>                    
                    </ul>
                </li>
                <li><a href="javascript:void(0)">Tables</a>
                    <ul class="pullDown">
                        <li><a href="javascript:void(0)">Normal Tables</a></li>
                        <li><a href="javascript:void(0)">Jquery Datatables</a></li>
                        <li><a href="javascript:void(0)">Editable Tables</a></li>
                        <li><a href="javascript:void(0)">Foo Tables</a></li>
                        <li><a href="javascript:void(0)">Tables Color</a></li>                    
                    </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="zmdi zmdi-chart"></i> Charts</a>
                    <ul class="pullDown">
                        <li><a href="javascript:void(0)">Morris</a></li>
                        <li><a href="javascript:void(0)">Flot</a></li>
                        <li><a href="javascript:void(0)">ChartJS</a></li>
                        <li><a href="javascript:void(0)">Sparkline</a></li>
                        <li><a href="javascript:void(0)">Jquery Knob</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)"><i class="zmdi zmdi-shopping-cart"></i> Ecommerce</a>
                    <ul class="pullDown">
                        <li><a href="ec-dashboard.html" >Dashboard</a></li>
                        <li><a href="ec-product.html" >Product</a></li>
                        <li><a href="ec-product-List.html" >Product List</a></li>
                        <li><a href="ec-product-detail.html" >Product detail</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0)">Widgets</a>
                    <ul class="pullDown">                            
                        <li><a href="javascript:void(0)">App Widgets</a></li>
                        <li><a href="javascript:void(0)">Data Widgets</a></li>
                    </ul>
                </li>                       
                <li><a href="javascript:void(0)">Authentication</a>
                    <ul class="pullDown">
                        <li><a href="javascript:void(0)">Sign In</a></li>
                        <li><a href="javascript:void(0)">Sign Up</a></li>
                        <li><a href="javascript:void(0)">Forgot Password</a></li>
                        <li><a href="javascript:void(0)">Page 404</a></li>
                        <li><a href="javascript:void(0)">Page 500</a></li>
                        <li><a href="javascript:void(0)">Page Offline</a></li>
                        <li><a href="javascript:void(0)">Locked Screen</a></li>
                    </ul>
                </li>            
                <li><a href="javascript:void(0)">Extra </a>
                    <ul class="pullDown">
                        <li><a href="blank.html" >Blank Page</a></li>
                        <li><a href="image-gallery.html" >Image Gallery</a></li>
                        <li><a href="profile.html" >Profile</a></li>
                        <li><a href="timeline.html" >Timeline</a></li>
                        <li><a href="pricing.html" >Pricing</a></li>
                        <li><a href="invoices.html" >Invoices</a></li>
                        <li><a href="search-results.html" >Search Results</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <section class="content">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </section>

    <footer class="content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="body">
                            <p class="m-b-0">© 2017 Nexa Admin by <a href="http://thememakker.com/" target="black">ThemeMakker</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



<!-- Jquery Core Js --> 
    <?= $this->Html->script([
        'libscripts.bundle',
        'vendorscripts.bundle',
        'countTo.bundle',
        'sparkline.bundle',
        'infobox-1',
        'morrisscripts.bundle',
        'mainscripts.bundle',
        'index2',
    ]) ?>

    <script>
        /*global $ */
        $(document).ready(function() {
            "use strict";
            $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
        
            $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
        
            $(".menu > ul > li").hover(function(e) {
            if ($(window).width() > 943) {
                $(this).children("ul").stop(true, false).fadeToggle(150);
                e.preventDefault();
            }
            });

            $(".menu > ul > li").on('click',function() {
                if ($(window).width() <= 943) {
                    $(this).children("ul").fadeToggle(150);
                }
            });
            
            $(".h-bars").on('click',function(e) {
                $(".menu > ul").toggleClass('show-on-mobile');
                e.preventDefault();
            });
        });
    </script>  
</body>
</html>
