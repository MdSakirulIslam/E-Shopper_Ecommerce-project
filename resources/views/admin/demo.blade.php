<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>:: AdminCC - Bootstrap 4 Dashboard ::</title>

    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/css/main.css">
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/css/all-themes.css" />



    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="{{asset('/')}}admin-assets/assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">




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
        <div class="image"> <img src="assets/images/random-avatar1.jpg" width="48" height="48" alt="User" /> </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown">John Doe</div>
            <div class="email">john.doe@example.com</div>
            <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="profile.html"><i class="material-icons">person</i>Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                    <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                    <li class="divider"></li>
                    <li><a href="sign-in.html"><i class="material-icons">input</i>Sign Out</a></li>
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
                <ul class="ml-menu">
                    <li class="active"><a href="index.html">Dashboard 1</a> </li>
                    <li><a href="index2.html">Dashboard 2</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-email"></i><span>Mail Box</span> </a>
                <ul class="ml-menu">
                    <li><a href="mail-inbox.html">Inbox</a></li>
                    <li><a href="mail-compose.html">Compose Mail</a></li>
                    <li><a href="mail-single.html">Single Mail</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                <ul class="ml-menu">
                    <li> <a href="basic.html">Basic</a></li>
                    <li> <a href="more-widgets.html">More Widgets</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                <ul class="ml-menu">
                    <li> <a href="typography.html">Typography</a> </li>
                    <li> <a href="helper-classes.html">Helper Classes</a></li>
                    <li> <a href="alerts.html">Alerts</a> </li>
                    <li> <a href="animations.html">Animations</a> </li>
                    <li> <a href="badges.html">Badges</a> </li>
                    <li> <a href="breadcrumbs.html">Breadcrumbs</a> </li>
                    <li> <a href="buttons.html">Buttons</a> </li>
                    <li> <a href="collapse.html">Collapse</a> </li>
                    <li> <a href="colors.html">Colors</a> </li>
                    <li> <a href="dialogs.html">Dialogs</a> </li>
                    <li> <a href="icons.html">Icons</a> </li>
                    <li> <a href="labels.html">Labels</a> </li>
                    <li> <a href="list-group.html">List Group</a> </li>
                    <li> <a href="media-object.html">Media Object</a> </li>
                    <li> <a href="modals.html">Modals</a> </li>
                    <li> <a href="notifications.html">Notifications</a> </li>
                    <li> <a href="pagination.html">Pagination</a> </li>
                    <li> <a href="preloaders.html">Preloaders</a> </li>
                    <li> <a href="progressbars.html">Progress Bars</a> </li>
                    <li> <a href="range-sliders.html">Range Sliders</a> </li>
                    <li> <a href="sortable-nestable.html">Sortable & Nestable</a> </li>
                    <li> <a href="tabs.html">Tabs</a> </li>
                    <li> <a href="waves.html">Waves</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span> </a>
                <ul class="ml-menu">
                    <li><a href="basic-form-elements.html">Basic Form Elements</a> </li>
                    <li><a href="advanced-form-elements.html">Advanced Form Elements</a> </li>
                    <li><a href="form-examples.html">Form Examples</a> </li>
                    <li><a href="form-validation.html">Form Validation</a> </li>
                    <li><a href="form-wizard.html">Form Wizard</a> </li>
                    <li><a href="form-editors.html">Editors</a> </li>
                    <li><a href="form-upload.html">File Upload</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span> </a>
                <ul class="ml-menu">
                    <li> <a href="normal-tables.html">Normal Tables</a> </li>
                    <li> <a href="jquery-datatable.html">Jquery Datatables</a> </li>
                    <li> <a href="editable-table.html">Editable Tables</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-image"></i><span>Medias</span> </a>
                <ul class="ml-menu">
                    <li> <a href="image-gallery.html">Image Gallery</a> </li>
                    <li> <a href="carousel.html">Carousel</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span> </a>
                <ul class="ml-menu">
                    <li> <a href="morris.html">Morris</a> </li>
                    <li> <a href="flot.html">Flot</a> </li>
                    <li> <a href="chartjs.html">ChartJS</a> </li>
                    <li> <a href="sparkline.html">Sparkline</a> </li>
                    <li> <a href="jquery-knob.html">Jquery Knob</a> </li>
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blogger</span> </a>
                <ul class="ml-menu">
                    <li> <a href="blog-list.html">Blog List</a></li>
                    <li> <a href="blog-grid.html">Blog Grid</a></li>
                    <li> <a href="blog-details.html">Blog Single</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                <ul class="ml-menu">
                    <li><a href="sign-in.html">Sign In</a> </li>
                    <li><a href="sign-up.html">Sign Up</a> </li>
                    <li><a href="forgot-password.html">Forgot Password</a> </li>
                    <li><a href="404.html">Page 404</a> </li>
                    <li><a href="500.html">Page 500</a> </li>
                    <li><a href="page-offline.html">Page Offline</a> </li>
                    <li><a href="locked.html">Locked Screen</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Extra Pages</span> </a>
                <ul class="ml-menu">
                    <li><a href="blank.html">Blank Page</a> </li>
                    <li><a href="events.html">Calendar</a></li>
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="chat.html">Chat</a></li>
                    <li><a href="invoices.html">Invoices</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span> </a>
                <ul class="ml-menu">
                    <li> <a href="google.html">Google Map</a> </li>
                    <li> <a href="yandex.html">YandexMap</a> </li>
                    <li> <a href="jvectormap.html">jVectorMap</a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-trending-down"></i><span>Multi Level Menu</span> </a>
                <ul class="ml-menu">
                    <li> <a href="javascript:void(0);"> <span>Menu Item</span> </a> </li>
                    <li> <a href="javascript:void(0);"> <span>Menu Item - 2</span> </a> </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"> <span>Level - 2</span> </a>
                        <ul class="ml-menu">
                            <li> <a href="javascript:void(0);"> <span>Menu Item</span> </a> </li>
                            <li> <a href="javascript:void(0);" class="menu-toggle"> <span>Level - 3</span> </a>
                                <ul class="ml-menu">
                                    <li> <a href="javascript:void(0);"> <span>Level - 4</span> </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li> <a href="changelogs.html"><i class="zmdi zmdi-time-restore"></i><span>Changelogs</span> </a> </li>
            <li class="header">LABELS</li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-red"></i><span>Important</span> </a> </li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-amber"></i><span>Warning</span> </a> </li>
            <li> <a href="javascript:void(0);"><i class="zmdi zmdi-chart-donut col-blue"></i><span>Information</span> </a> </li>
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
                        <div class="media"> <a class="float-left"> <img class="media-object " src="assets/images/random-avatar4.jpg" alt=""> </a>
                            <div class="media-body"> <span class="name">Claire Sassu</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                        </div>
                    </li>
                    <li class="online">
                        <div class="media"> <a class="float-left"> <img class="media-object " src="assets/images/random-avatar5.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Maggie jackson</span> <span class="message">Can you share the...</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                    <li class="online">
                        <div class="media"> <a class="float-left"> <img class="media-object " src="assets/images/random-avatar3.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="message">Ready for the meeti...</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <h6>Contacts</h6>
                <ul class="list-unstyled">
                    <li class="offline">
                        <div class="media"> <a class="float-left" > <img class="media-object " src="assets/images/random-avatar4.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                    <li class="online">
                        <div class="media"> <a class="float-left" > <img class="media-object " src="assets/images/random-avatar5.jpg" alt=""> </a>
                            <div class="media-body">
                                <div class="media-body"> <span class="name">Joel King</span> <span class="badge badge-outline status"></span> </div>
                            </div>
                        </div>
                    </li>
                    <li class="offline">
                        <div class="media"> <a class="float-left " > <img class="media-object " src="assets/images/random-avatar6.jpg" alt=""> </a>
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
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-cyan">
                                <i class="zmdi zmdi-shopping-basket zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Sales</span>
                                <span class="value">1,305</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 13%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-amber">
                                <i class="zmdi zmdi-account-o zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Visitors </span>
                                <span class="value">2,105</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 18%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-blue">
                                <i class="zmdi zmdi-label zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Pageviews</span>
                                <span class="value">4,054</span>
                            </div>
                        </div>
                        <p class="media-footer text-danger"><i class="zmdi zmdi-trending-down"></i> 12%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-green">
                                <i class="zmdi zmdi-money zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Revenue</span>
                                <span class="value">$63.23M</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 21%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Visitors Statistics</h2>
                    </div>
                    <div class="body visitors-map">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div id="world-map-markers" class="jvector-map"></div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">America</div>
                                        <div class="description">visitor from america</div>
                                    </div>
                                    <div class="status float-right"> <span>40</span>% </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40%</span> </div>
                                    </div>
                                </div>
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">Canada</div>
                                        <div class="description">visitor from Canada</div>
                                    </div>
                                    <div class="status float-right"> <span>38</span>% </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100" style="width: 31%"> <span class="sr-only">38%</span> </div>
                                    </div>
                                </div>
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">Asia</div>
                                        <div class="description">visitor from asia</div>
                                    </div>
                                    <div class="status float-right"> <span>12</span>% </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-red" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 22%"> <span class="sr-only">12%</span> </div>
                                    </div>
                                </div>
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">Germany</div>
                                        <div class="description">visitor from Germany</div>
                                    </div>
                                    <div class="status float-right"> <span>7</span>% </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 19%"> <span class="sr-only">7%</span> </div>
                                    </div>
                                </div>
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">France</div>
                                        <div class="description">visitor from France</div>
                                    </div>
                                    <div class="status float-right"> <span>6</span>% </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-lime" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 15%"> <span class="sr-only">6%</span> </div>
                                    </div>
                                </div>
                                <div class="progress-list">
                                    <div class="details">
                                        <div class="title">Other</div>
                                        <div class="description">visitor from other</div>
                                    </div>
                                    <div class="status float-right"> <span>6</span>% </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100" style="width: 6%"> <span class="sr-only">6%</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12">
                <div class="card" >
                    <div class="header">
                        <h2>Sales Report</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                         data-offset="90" data-width="100%" data-height="80px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                         data-fill-Color="rgba(63, 81, 181, 0.3)"> 6,1,3,3,6,3,2,2,8,2 </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>Annual Revenue</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="sparkline" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                         data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(120, 184, 62)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                         data-offset="90" data-width="100%" data-height="80px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                         data-fill-Color="rgba(120, 184, 62, 0.3)">2,4,3,5,6,5,4,3,2,4,5,4,2</div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card cpu-usage">
                    <div class="header">
                        <h2>CPU USAGE (%)</h2>
                    </div>
                    <div class="body">
                        <div class="switch panel-switch-btn"> <span class="m-r-10 font-12">REAL TIME</span>
                            <label>OFF
                                <input type="checkbox" id="realtime" checked>
                                <span class="lever switch-col-cyan"></span>ON</label>
                        </div>
                        <div id="real_time_chart" class="dashboard-flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0">50.5 Gb</h3>
                        <p class="text-muted">Traffic this month</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>4% higher than last month</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0">26.8%</h3>
                        <p class="text-muted">Server Load</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
                        </div>
                        <small>4% higher than last month</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0">$ 14,500</h3>
                        <p class="text-muted">Total Sale</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>15% higher than last month</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card top-report">
                    <div class="body">
                        <h3 class="m-t-0">1,600</h3>
                        <p class="text-muted">Total Feedbacks</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <small>10% higher than last month</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-8">
                <div class="card" >
                    <div class="header">
                        <h2>Latest orders</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped table-borderless m-b-5">
                            <thead>
                            <tr>
                                <th style="width:40%;">Product</th>
                                <th class="number">Price</th>
                                <th style="width:20%;">Date</th>
                                <th style="width:20%;">State</th>
                                <th style="width:5%;" class="actions"></th>
                            </tr>
                            </thead>
                            <tbody class="no-border-x">
                            <tr>
                                <td>Sony Xperia M4</td>
                                <td class="number">$149</td>
                                <td>Aug 23, 2016</td>
                                <td class="text-success">Completed</td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>Apple iPhone 6</td>
                                <td class="number">$535</td>
                                <td>Aug 20, 2016</td>
                                <td class="text-success">Completed</td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>Samsung Galaxy S7</td>
                                <td class="number">$583</td>
                                <td>Aug 18, 2016</td>
                                <td class="text-warning">Pending</td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>HTC One M9</td>
                                <td class="number">$350</td>
                                <td>Aug 15, 2016</td>
                                <td class="text-warning">Pending</td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>Sony Xperia Z5</td>
                                <td class="number">$495</td>
                                <td>Aug 13, 2016</td>
                                <td class="text-danger">Cancelled</td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>Samsung Galaxy S9</td>
                                <td class="number">$583</td>
                                <td>Aug 18, 2016</td>
                                <td class="text-warning">Pending</td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            <tr>
                                <td>HTC One M13</td>
                                <td class="number">$350</td>
                                <td>Aug 15, 2016</td>
                                <td class="text-warning">Pending</td>
                                <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="card" data-aos-duration="400" data-aos-delay="200" data-aos="fade-up">
                    <div class="header">
                        <h2>INBOX</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="inbox-widget list-unstyled clearfix">
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="100" data-aos="fade-down"> <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-img"> <img src="assets/images/random-avatar3.jpg" alt=""> </div>
                                        <div class="inbox-item-info">
                                            <p class="author">John Doe</p>
                                            <p class="inbox-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                            <p class="inbox-date">13:34 PM</p>
                                        </div>
                                    </div>
                                </a> </li>
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="200" data-aos="fade-down"> <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-img"> <img src="assets/images/random-avatar2.jpg" alt=""> </div>
                                        <div class="inbox-item-info">
                                            <p class="author">John Doe</p>
                                            <p class="inbox-message">Lorem Ipsum is simply dummy text oftting industry. Lorem Ipsum has been the industry's</p>
                                            <p class="inbox-date">13:34 PM</p>
                                        </div>
                                    </div>
                                </a> </li>
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="300" data-aos="fade-down"> <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-img"> <img src="assets/images/random-avatar4.jpg" alt=""> </div>
                                        <div class="inbox-item-info">
                                            <p class="author">John Doe</p>
                                            <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                            <p class="inbox-date">13:34 PM</p>
                                        </div>
                                    </div>
                                </a> </li>
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="400" data-aos="fade-down"> <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-img"> <img src="assets/images/random-avatar3.jpg" alt=""> </div>
                                        <div class="inbox-item-info">
                                            <p class="author">John Doe</p>
                                            <p class="inbox-message">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                            <p class="inbox-date">13:34 PM</p>
                                        </div>
                                    </div>
                                </a> </li>
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="500" data-aos="fade-down"> <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-img"> <img src="assets/images/random-avatar4.jpg" alt=""> </div>
                                        <div class="inbox-item-info">
                                            <p class="author">John Doe</p>
                                            <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                            <p class="inbox-date">13:34 PM</p>
                                        </div>
                                    </div>
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>BROWSER USAGE</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="sparkline" data-type="bar" data-width="97%" data-height="62px" data-bar-Width="3" data-bar-Spacing="4" data-bar-Color="rgb(120, 184, 62)"> 4,2,8,6,7,6,8,3,5,8,5,6,7,6,4,7,6 </div>
                        <p class="m-b-0 p-t-10 text-center">Users 6,200</p>
                        <div id="donut_chart" class="dashboard-donut-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="header">
                        <h2>CHAT</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="chat-widget">
                            <ul class="chat-scroll-list">
                                <li class="left float-left"> <img src="assets/images/random-avatar4.jpg" alt="">
                                    <div class="chat-info"> <a class="name" href="#">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> Lorem ipsum dolor sit amet, adipiscing elit </span> </div>
                                </li>
                                <li class="right"> <img src="assets/images/random-avatar2.jpg" alt="">
                                    <div class="chat-info"> <a class="name" href="#">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </span> </div>
                                </li>
                                <li class="left float-left"> <img src="assets/images/random-avatar5.jpg" alt="">
                                    <div class="chat-info"> <a class="name" href="#">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </span> </div>
                                </li>
                                <li class="right"> <img src="assets/images/random-avatar1.jpg" alt="">
                                    <div class="chat-info"> <a class="name" href="#">Jone Doe</a> <span class="datetime">6:12</span> <span class="message"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </span> </div>
                                </li>
                            </ul>
                        </div>
                        <div class="input-group">
                            <div class="form-line">
                                <input type="text" class="form-control" placeholder="Enter Text">
                            </div>
                            <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card activities">
                    <div class="header">
                        <h2>Activities</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="streamline b-l b-accent">
                            <div class="sl-item">
                                <div class="sl-content">
                                    <div class="text-muted">Just now</div>
                                    <p>Finished task <a href="javascript:void(0);" class="text-info">#features 4</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="text-muted">11:30</div>
                                    <p><a href="javascript:void(0);">@Jessi</a> retwit your post</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p>Call to customer <a href="javascript:void(0);" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">3 days ago</div>
                                    <p><a href="javascript:void(0);" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p>Call to customer <a href="javascript:void(0);" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p>Call to customer <a href="javascript:void(0);" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="body">
                        <p class="copy m-b-0">© Copyright <time class="year">2017</time> <a href="http://thememakker.com/" target="_blank">Thememakker</a> - All Rights Reserved</p>
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


<script src="{{asset('/')}}admin-assets/assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="{{asset('/')}}admin-assets/assets/js/pages/tables/jquery-datatable.js"></script>




</body>
</html>
