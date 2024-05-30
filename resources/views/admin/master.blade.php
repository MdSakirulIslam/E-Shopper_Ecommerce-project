<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: Eshop -@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>


    <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/css/main.css">
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/css/all-themes.css" />

</head>

<body class="theme-red">
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #Float icon -->
<ul id="f-menu" class="mfb-component--br mfb-zoomin" data-mfb-toggle="hover">
    <li class="mfb-component__wrap"> <a href="#" class="mfb-component__button--main"> <i class="mfb-component__main-icon--resting zmdi zmdi-plus"></i> <i class="mfb-component__main-icon--active zmdi zmdi-close"></i> </a>
        <ul class="mfb-component__list">
            <li> <a href="mail-inbox.html" data-mfb-label="Inbox" class="mfb-component__button--child bg-blue"> <i class="zmdi zmdi-email mfb-component__child-icon"></i> </a> </li>
            <li> <a href="chat.html" data-mfb-label="Chat App" class="mfb-component__button--child bg-orange"> <i class="zmdi zmdi-comments mfb-component__child-icon"></i> </a> </li>
            <li> <a href="blog.html" data-mfb-label="Blogger" class="mfb-component__button--child bg-purple"> <i class="zmdi zmdi-blogger mfb-component__child-icon"></i> </a> </li>
        </ul>
    </li>
</ul>
<!-- Search  -->
<div class="search-bar">
    <div class="search-icon"> <i class="zmdi zmdi-search"></i> </div>
    <input type="text" placeholder="Search...">
    <div class="close-search"> <i class="zmdi zmdi-close"></i> </div>
</div>
<!-- Top Bar -->
<nav class="navbar">
    <div class="col-12">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">AdminCC</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="zmdi zmdi-search"></i></a></li>
            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-notifications"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">NOTIFICATIONS</li>
                    <li class="body">
                        <ul class="menu list-unstyled">
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-orange"> <i class="material-icons">person_add</i> </div>
                                    <div class="menu-info">
                                        <h4>12 new members joined</h4>
                                        <p> <i class="material-icons">access_time</i> 14 mins ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-cyan"> <i class="material-icons">add_shopping_cart</i> </div>
                                    <div class="menu-info">
                                        <h4>4 sales made</h4>
                                        <p> <i class="material-icons">access_time</i> 22 mins ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-blue"> <i class="material-icons">delete_forever</i> </div>
                                    <div class="menu-info">
                                        <h4><b>Nancy Doe</b> deleted account</h4>
                                        <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-green"> <i class="material-icons">mode_edit</i> </div>
                                    <div class="menu-info">
                                        <h4><b>Nancy</b> changed name</h4>
                                        <p> <i class="material-icons">access_time</i> 2 hours ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-pink"> <i class="material-icons">comment</i> </div>
                                    <div class="menu-info">
                                        <h4><b>John</b> commented your post</h4>
                                        <p> <i class="material-icons">access_time</i> 4 hours ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-lime"> <i class="material-icons">cached</i> </div>
                                    <div class="menu-info">
                                        <h4><b>John</b> updated status</h4>
                                        <p> <i class="material-icons">access_time</i> 3 hours ago </p>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <div class="icon-circle bg-purple"> <i class="material-icons">settings</i> </div>
                                    <div class="menu-info">
                                        <h4>Settings updated</h4>
                                        <p> <i class="material-icons">access_time</i> Yesterday </p>
                                    </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Notifications</a> </li>
                </ul>
            </li>
            <li class="dropdown hidden-sm-down"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" ><i class="zmdi zmdi-flag"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu slideDown">
                    <li class="header">TASKS</li>
                    <li class="body">
                        <ul class="menu tasks list-unstyled">
                            <li> <a href="javascript:void(0);">
                                    <h4> Footer display issue <small>72%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <h4> Make new buttons <small>56%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <h4> Create new dashboard <small>68%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <h4> Solve transition issue <small>77%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                </a> </li>
                            <li> <a href="javascript:void(0);">
                                    <h4> Answer GitHub questions <small>87%</small> </h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                </a> </li>
                        </ul>
                    </li>
                    <li class="footer"> <a href="javascript:void(0);">View All Tasks</a> </li>
                </ul>
            </li>
            <li><a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
            <li><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        </ul>
    </div>
</nav>
<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image"> <img src="{{asset('/')}}admin-assets/assets/images/random-avatar1.jpg" width="48" height="48" alt="User" /> </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown">{{Auth::user()->name}}</div>
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="profile.html"><i class="material-icons">person</i>Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li class="divider"></li>
                    <li><a href="" onclick="event.preventDefault();document.getElementById('logoutFrom').submit();"><i class="material-icons">input</i>Sign Out</a></li>
                    <form action="{{route('logout')}}" method="post" id="logoutFrom">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-email"></i><span>Category Module</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('category.create')}}">Add Category</a></li>
                    <li><a href="{{route('category.index')}}">Manage Category</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Sub Category Module</span> </a>
                <ul class="ml-menu">
                    <li> <a href="{{route('sub-category.create')}}">Add Sub Category</a></li>
                    <li> <a href="{{route('sub-category.index')}}">Manage Sub Category</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>Brand Module</span> </a>
                <ul class="ml-menu">
                    <li> <a href="{{route('brand.create')}}">Add Brand</a> </li>
                    <li> <a href="{{route('brand.index')}}">Manage Brand</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Unit Module</span> </a>
                <ul class="ml-menu">
                    <li><a href="{{route('unit.create')}}">Add Unit</a> </li>
                    <li><a href="{{route('unit.index')}}">Manage Unit</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Product Module</span> </a>
                <ul class="ml-menu">
                    <li> <a href="{{route('product.create')}}">Add Product</a> </li>
                    <li> <a href="{{route('product.index')}}">Manage Product</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-image"></i><span>Order Module</span> </a>
                <ul class="ml-menu">
                    <li> <a href="image-gallery.html">Manage Order</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Customer Module</span> </a>
                <ul class="ml-menu">
                    <li> <a href="flot.html">Manage Customer</a> </li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>User Module</span> </a>
                <ul class="ml-menu">
                    <li> <a href="blog-list.html">Add User</a></li>
                    <li> <a href="blog-grid.html">Manage User</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Courier Module</span> </a>
                <ul class="ml-menu">
                    <li><a href="sign-in.html">Sign In</a> </li>
                    <li><a href="sign-up.html">Sign Up</a> </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>

<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#skins">Skins</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat">Chat</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#settings">Setting</a></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="skins">
            <div class="right_menu">
                <ul class="choose-skin">
                    <h6>Flat Color</h6>
                    <li data-theme="red"  class="active">
                        <div class="red"></div>
                        <span>Red</span> </li>
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span> </li>
                    <li data-theme="deep-purple">
                        <div class="deep-purple"></div>
                        <span>Deep Purple</span> </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span> </li>
                    <li data-theme="cyan">
                        <div class="cyan"></div>
                        <span>Cyan</span> </li>
                    <li data-theme="blue-grey">
                        <div class="blue-grey"></div>
                        <span>Blue Grey</span> </li>
                    <li data-theme="black">
                        <div class="black"></div>
                        <span>Black</span> </li>
                    <h6>Gradient Theme</h6>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span> </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span> </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span> </li>
                </ul>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="chat">
            <div class="right_menu">
                <div class="search">
                    <div class="input-group">
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Search..." required>
                        </div>
                    </div>
                </div>
                <h6>Recent</h6>
                <ul class="list-unstyled">
                    <li class="online">
                        <div class="media"> <a class="float-left"> <img class="media-object " src="{{asset('/')}}admin-assets/assets/images/random-avatar4.jpg" alt=""> </a>
                            <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                        </div>
                    </li>
                    <li class="online">
                        <div class="media"> <a class="float-left"> <img class="media-object " src="{{asset('/')}}admin-assets/assets/images/random-avatar5.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                    <li class="online">
                        <div class="media"> <a class="float-left"> <img class="media-object " src="{{asset('/')}}admin-assets/assets/images/random-avatar3.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti...</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <h6>Contacts</h6>
                <ul class="list-unstyled">
                    <li class="offline">
                        <div class="media"> <a class="float-left" > <img class="media-object " src="{{asset('/')}}admin-assets/assets/images/random-avatar4.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                    <li class="online">
                        <div class="media"> <a class="float-left" > <img class="media-object " src="{{asset('/')}}admin-assets/assets/images/random-avatar5.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                    <li class="offline">
                        <div class="media"> <a class="float-left " > <img class="media-object " src="{{asset('/')}}admin-assets/assets/images/random-avatar6.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="settings">
            <div class="right_menu">
                <p class="text-left">GENERAL SETTINGS</p>
                <ul class="setting-list">
                    <li> <span>Report Panel Usage</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                    <li> <span>Email Redirect</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p class="text-left">SYSTEM SETTINGS</p>
                <ul class="setting-list">
                    <li> <span>Notifications</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                    <li> <span>Auto Updates</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
                <p class="text-left">ACCOUNT SETTINGS</p>
                <ul class="setting-list">
                    <li> <span>Offline</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox">
                                <span class="lever"></span></label>
                        </div>
                    </li>
                    <li> <span>Location Permission</span>
                        <div class="switch">
                            <label>
                                <input type="checkbox" checked>
                                <span class="lever"></span></label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>

<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
   @yield('body')
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="body">
                        <p class="copy m-b-0">© Copyright <time class="year">2024</time> <a href="http://thememakers.com/" target="_blank">Thememakkers</a> - All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Jquery Core Js -->
<script src="{{asset('/')}}admin-assets/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('/')}}admin-assets/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('/')}}admin-assets/assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('/')}}admin-assets/assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('/')}}admin-assets/assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="{{asset('/')}}admin-assets/assets/bundles/flotscripts.bundle.js"></script><!-- Flot Charts Plugin Js -->

<script src="{{asset('/')}}admin-assets/assets/bundles/mainscripts.bundle.js"></script>
<script src="{{asset('/')}}admin-assets/assets/js/pages/index.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="{{asset('/')}}admin-assets/assets/bundles/datatablescripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('/')}}admin-assets/assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}admin-assets/assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/')}}admin-assets/assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="{{asset('/')}}admin-assets/assets/plugins/jquery-datatable/buttons/buttons.flash.min.js"></script>
<script src="{{asset('/')}}admin-assets/assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="{{asset('/')}}admin-assets/assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>


<script src="{{asset('/')}}admin-assets/assets/plugins/ckeditor/ckeditor.js"></script> <!-- Ckeditor -->
<script src="{{asset('/')}}admin-assets/assets/js/pages/forms/editors.js"></script>
</body>
</html>
