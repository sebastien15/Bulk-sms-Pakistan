<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="img/photo-1.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, Mahad</p>

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
            <li class="active">
                <a href="{{ route('index') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

             <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Customer</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @auth
                        <li><a href="{{ route('index') }}"><i class="fa fa-angle-double-right"></i> Customer Section</a></li>
                        <li><a href="{{ route('easy') }}"><i class="fa fa-angle-double-right"></i> Admin Section</a></li>
                        <li><a href="{{ route('mailbox') }}"><i class="fa fa-angle-double-right"></i> Message Section</a></li>
                        @else
                            <li><a href="{{ route('smsToAdmins') }}"><i class="fa fa-angle-double-right"></i> Talk to Us</a></li>   
                    @endauth
                </ul>
            </li>
                @auth
                    <li>
                        <a href="{{ Route('number.index') }}">
                            <i class="fa fa-angle-double-right"></i> <span>Number</span> <small class="badge pull-right bg-green">new</small>
                        </a>
                    </li>
                    <li>
                        <a href="{{ Route('city.index') }}">
                            <i class="fa fa-angle-double-right"></i> <span>City</span> <small class="badge pull-right bg-green">new</small>
                        </a>
                    </li>
                @else
                   
                    
                @endauth  

    </section>
    <!-- /.sidebar -->
</aside>