<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="../../index.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="../widgets.php">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>Charts</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="morris.php"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                                <li><a href="flot.php"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                                <li  class="active"><a href="inline.php"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../UI/general.php"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li><a href="../UI/icons.php"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                <li><a href="../UI/buttons.php"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                <li><a href="../UI/sliders.php"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                <li><a href="../UI/timeline.php"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../forms/general.php"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                                <li><a href="../forms/advanced.php"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                                <li><a href="../forms/editors.php"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../tables/simple.php"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                                <li><a href="../tables/data.php"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../calendar.php">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="../mailbox.php">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../examples/invoice.php"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="../examples/login.php"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="../examples/register.php"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="../examples/lockscreen.php"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="../examples/404.php"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="../examples/500.php"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="../examples/blank.php"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Inline Charts
                        <small>multiple types of charts</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- row -->
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- jQuery Knob -->
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title">jQuery Knob</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc"/>
                                            <div class="knob-label">New Visitors</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954"/>
                                            <div class="knob-label">Bounce Rate</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="-80" data-min="-150" data-max="150" data-width="90" data-height="90" data-fgColor="#00a65a"/>
                                            <div class="knob-label">Server Load</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef"/>
                                            <div class="knob-label">Disk Space</div>
                                        </div><!-- ./col -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-xs-6 text-center">
                                            <input type="text" class="knob" value="90" data-width="90" data-height="90" data-fgColor="#932ab6"/>
                                            <div class="knob-label">Bandwidth</div>
                                        </div><!-- ./col -->
                                        <div class="col-xs-6 text-center">
                                            <input type="text" class="knob" value="50" data-width="90" data-height="90" data-fgColor="#39CCCC"/>
                                            <div class="knob-label">CPU</div>
                                        </div><!-- ./col -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title">jQuery Knob Different Sizes</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true"/>
                                            <div class="knob-label">data-width="90"</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="30" data-width="120" data-height="120" data-fgColor="#f56954"/>
                                            <div class="knob-label">data-width="120"</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="30" data-thickness="0.1" data-width="90" data-height="90" data-fgColor="#00a65a"/>
                                            <div class="knob-label">data-thickness="0.1"</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" value="30" data-width="120" data-height="120" data-fgColor="#00c0ef"/>
                                            <div class="knob-label">data-angleArc="250"</div>
                                        </div><!-- ./col -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title">jQuery Knob Tron Style</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="80" data-skin="tron"  data-thickness="0.2" data-width="90" data-height="90" data-fgColor="#3c8dbc" data-readonly="true"/>
                                            <div class="knob-label">data-width="90"</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#f56954"/>
                                            <div class="knob-label">data-width="120"</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="10" data-skin="tron" data-thickness="0.1" data-width="90" data-height="90" data-fgColor="#00a65a"/>
                                            <div class="knob-label">data-thickness="0.1"</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125" data-width="120" data-height="120" data-fgColor="#00c0ef"/>
                                            <div class="knob-label">data-angleArc="250"</div>
                                        </div><!-- ./col -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <!-- callout -->
                    <div class='callout callout-info'>
                        <h4>The following was created using data tags</h4>
                        <p>The following three inline (sparkline) chart have been initialized to read and interpret data tags</p>
                    </div>
                    <!-- /.callout -->
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title text-danger">Sparkline Pie</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body text-center">
                                    <div class="sparkline" data-type="pie" data-offset="90" data-width="100px" data-height="100px">
                                        6,4,8
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title text-blue">Sparkline line</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body text-center">
                                    <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#f39c12" data-highlight-Line-Color="#222" data-min-Spot-Color="#f56954" data-max-Spot-Color="#00a65a" data-spot-Color="#39CCCC" data-offset="90" data-width="100%" data-height="100px" data-line-Width='2' data-line-Color='#39CCCC' data-fill-Color='rgba(57, 204, 204, 0.08)'>
                                        6,4,7,8,4,3,2,2,5,6,7,4,1,5,7,9,9,8,7,6
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title text-warning">Sparkline Bar</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body text-center">
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-Width="14" data-bar-Spacing="7" data-bar-Color="#f39c12">
                                        6,4,8, 9, 10, 5, 13, 18, 21, 7, 9
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class='row'>
                        <div class='col-xs-12'>
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title">Sparkline examples</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div id="myBody" class="box-body">
                                    <div class='row'>
                                        <div class='col-sm-6'>
                                            <p>
                                                Mouse speed <span id="mousespeed">Loading..</span>
                                            </p>
                                            <p>
                                                Inline <span class="sparkline-1">10,8,9,3,5,8,5</span>
                                                line graphs
                                                <span class="sparkline-1">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                                            </p>

                                            <p>
                                                Bar charts <span class="sparkbar">10,8,9,3,5,8,5</span>
                                                negative values: <span class="sparkbar">-3,1,2,0,3,-1</span>
                                                stacked: <span class="sparkbar">0:2,2:4,4:2,4:1</span>
                                            </p>

                                            <p>
                                                Composite inline
                                                <span id="compositeline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                                            </p>
                                            <p>
                                                Inline with normal range
                                                <span id="normalline">8,4,0,0,0,0,1,4,4,10,10,10,10,0,0,0,4,6,5,9,10</span>
                                            </p>
                                            <p>
                                                Composite bar
                                                <span id="compositebar">4,6,7,7,4,3,2,1,4</span>
                                            </p>
                                            <p>
                                                Discrete
                                                <span class="discrete1">4,6,7,7,4,3,2,1,4,4,5,6,7,6,6,2,4,5</span><br />

                                                Discrete with threshold
                                                <span id="discrete2">4,6,7,7,4,3,2,1,4</span>
                                            </p>
                                            <p>
                                                Bullet charts<br />
                                                <span class="sparkbullet">10,12,12,9,7</span><br />
                                                <span class="sparkbullet">14,12,12,9,7</span><br />
                                                <span class="sparkbullet">10,12,14,9,7</span><br />
                                            </p>
                                        </div><!-- /.col -->
                                        <div class='col-sm-6'>
                                            <p>
                                                Customize size and colours
                                                <span id="linecustom">10,8,9,3,5,8,5,7</span>
                                            </p>
                                            <p>
                                                Tristate charts
                                                <span class="sparktristate">1,1,0,1,-1,-1,1,-1,0,0,1,1</span><br />
                                                (think games won, lost or drawn)
                                            </p>
                                            <p>
                                                Tristate chart using a colour map:
                                                <span class="sparktristatecols">1,2,0,2,-1,-2,1,-2,0,0,1,1</span>
                                            </p>
                                            <p>
                                                Box Plot: <span class="sparkboxplot">4,27,34,52,54,59,61,68,78,82,85,87,91,93,100</span><br />
                                                Pre-computed box plot <span class="sparkboxplotraw">Loading..</span>
                                            </p>
                                            <p>
                                                Pie charts
                                                <span class="sparkpie">1,1,2</span>
                                                <span class="sparkpie">1,5</span>
                                                <span class="sparkpie">20,50,80</span>
                                            </p>                                            
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- jQuery Knob -->
        <script src="../../js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="../../js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                /* jQueryKnob */

                $(".knob").knob({
                    /*change : function (value) {
                     //console.log("change : " + value);
                     },
                     release : function (value) {
                     console.log("release : " + value);
                     },
                     cancel : function () {
                     console.log("cancel : " + this.value);
                     },*/
                    draw: function() {

                        // "tron" case
                        if (this.$.data('skin') == 'tron') {

                            var a = this.angle(this.cv)  // Angle
                                    , sa = this.startAngle          // Previous start angle
                                    , sat = this.startAngle         // Start angle
                                    , ea                            // Previous end angle
                                    , eat = sat + a                 // End angle
                                    , r = true;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor
                                    && (sat = eat - 0.3)
                                    && (eat = eat + 0.3);

                            if (this.o.displayPrevious) {
                                ea = this.startAngle + this.angle(this.value);
                                this.o.cursor
                                        && (sa = ea - 0.3)
                                        && (ea = ea + 0.3);
                                this.g.beginPath();
                                this.g.strokeStyle = this.previousColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                    }
                });
                /* END JQUERY KNOB */

                //INITIALIZE SPARKLINE CHARTS
                $(".sparkline").each(function() {
                    var $this = $(this);
                    $this.sparkline('html', $this.data());
                });

                /* SPARKLINE DOCUMENTAION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
                drawDocSparklines();
                drawMouseSpeedDemo();

            });
            function drawDocSparklines() {

                // Bar + line composite charts
                $('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
                $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
                        {composite: true, fillColor: false, lineColor: 'red'});


                // Line charts taking their values from the tag
                $('.sparkline-1').sparkline();

                // Larger line charts for the docs
                $('.largeline').sparkline('html',
                        {type: 'line', height: '2.5em', width: '4em'});

                // Customized line chart
                $('#linecustom').sparkline('html',
                        {height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
                            minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3});

                // Bar charts using inline values
                $('.sparkbar').sparkline('html', {type: 'bar'});

                $('.barformat').sparkline([1, 3, 5, 3, 8], {
                    type: 'bar',
                    tooltipFormat: '{{value:levels}} - {{value}}',
                    tooltipValueLookups: {
                        levels: $.range_map({':2': 'Low', '3:6': 'Medium', '7:': 'High'})
                    }
                });

                // Tri-state charts using inline values
                $('.sparktristate').sparkline('html', {type: 'tristate'});
                $('.sparktristatecols').sparkline('html',
                        {type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});

                // Composite line charts, the second using values supplied via javascript
                $('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
                $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
                        {composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10});

                // Line charts with normal range marker
                $('#normalline').sparkline('html',
                        {fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
                $('#normalExample').sparkline('html',
                        {fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});

                // Discrete charts
                $('.discrete1').sparkline('html',
                        {type: 'discrete', lineColor: 'blue', xwidth: 18});
                $('#discrete2').sparkline('html',
                        {type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4});

                // Bullet charts
                $('.sparkbullet').sparkline('html', {type: 'bullet'});

                // Pie charts
                $('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em'});

                // Box plots
                $('.sparkboxplot').sparkline('html', {type: 'box'});
                $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
                        {type: 'box', raw: true, showOutliers: true, target: 6});

                // Box plot with specific field order
                $('.boxfieldorder').sparkline('html', {
                    type: 'box',
                    tooltipFormatFieldlist: ['med', 'lq', 'uq'],
                    tooltipFormatFieldlistKey: 'field'
                });

                // click event demo sparkline
                $('.clickdemo').sparkline();
                $('.clickdemo').bind('sparklineClick', function(ev) {
                    var sparkline = ev.sparklines[0],
                            region = sparkline.getCurrentRegionFields();
                    value = region.y;
                    alert("Clicked on x=" + region.x + " y=" + region.y);
                });

                // mouseover event demo sparkline
                $('.mouseoverdemo').sparkline();
                $('.mouseoverdemo').bind('sparklineRegionChange', function(ev) {
                    var sparkline = ev.sparklines[0],
                            region = sparkline.getCurrentRegionFields();
                    value = region.y;
                    $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
                }).bind('mouseleave', function() {
                    $('.mouseoverregion').text('');
                });
            }

            /**
             ** Draw the little mouse speed animated graph
             ** This just attaches a handler to the mousemove event to see
             ** (roughly) how far the mouse has moved
             ** and then updates the display a couple of times a second via
             ** setTimeout()
             **/
            function drawMouseSpeedDemo() {
                var mrefreshinterval = 500; // update display every 500ms
                var lastmousex = -1;
                var lastmousey = -1;
                var lastmousetime;
                var mousetravel = 0;
                var mpoints = [];
                var mpoints_max = 30;
                $('html').mousemove(function(e) {
                    var mousex = e.pageX;
                    var mousey = e.pageY;
                    if (lastmousex > -1) {
                        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
                    }
                    lastmousex = mousex;
                    lastmousey = mousey;
                });
                var mdraw = function() {
                    var md = new Date();
                    var timenow = md.getTime();
                    if (lastmousetime && lastmousetime != timenow) {
                        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
                        mpoints.push(pps);
                        if (mpoints.length > mpoints_max)
                            mpoints.splice(0, 1);
                        mousetravel = 0;
                        $('#mousespeed').sparkline(mpoints, {width: mpoints.length * 2, tooltipSuffix: ' pixels per second'});
                    }
                    lastmousetime = timenow;
                    setTimeout(mdraw, mrefreshinterval);
                }
                // We could use setInterval instead, but I prefer to do it this way
                setTimeout(mdraw, mrefreshinterval);
            }


        </script>

    </body>
</html>