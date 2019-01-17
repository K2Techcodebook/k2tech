    <div id="navbar" class="navbar navbar-default          ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
                    <span class="sr-only">Toggle sidebar</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>
                </button>

                <div class="navbar-header pull-left">
                    <a href="index.html" class="navbar-brand">
                        <small>
                            <i class="fa fa-leaf"></i>
                           @yield('title') - {{config('app.name')}}
                        </small>
                    </a>
                </div>

                <div class="navbar-buttons navbar-header pull-right" role="navigation">
                    <ul class="nav ace-nav">


                        <li class="light-blue dropdown-modal">
                            <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                                <img class="nav-user-photo" src="bussiness/assets/images/avatars/user.jpg" alt=" {{Auth::guard('affiliate')->user()->name}} Photo" />
                                <span class="user-info">
                                    <small>Welcome,</small>
                                {{Auth::guard('affiliate')->user()->name}}
                                </span>

                                <i class="ace-icon fa fa-caret-down"></i>
                            </a>

                            <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-cog"></i>
                                        Settings
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('profile')}}">
                                        <i class="ace-icon fa fa-user"></i>
                                        Profile
                                    </a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="{{ route('logout') }}">
                                        <i class="ace-icon fa fa-power-off"></i>
                                        Logout
                                    </a>
                                     <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.navbar-container -->
        </div>


        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar                  responsive                    ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>

             

                <ul class="nav nav-list">
                    <li class="active">
                        <a href="{{ url('/affiliates') }}">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>


                           
                    <li class="">
                        <a href="{{route('Affilate-box')}}">
                            <i class="menu-icon fa fa-tachometer"></i>

                            <span class="menu-text">
                                Affilate Box
  <!--  <span class="badge badge-primary">5</span> -->
                              <!--   <span class="badge badge-transparent tooltip-error" title="2 Important Events">
                                    <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                                </span> -->
                            </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="{{route('-profile')}}">
                            <i class="menu-icon fa fa-user"></i>

                            <span class="menu-text">
                               Profile
  <!--  <span class="badge badge-primary">5</span> -->
                              <!--   <span class="badge badge-transparent tooltip-error" title="2 Important Events">
                                    <i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
                                </span> -->
                            </span>
                        </a>

                        <b class="arrow"></b>
                    </li>



                 
                </ul><!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="{{ url('/affiliates') }}">Home</a>
                            </li>
                            <li class="active">Dashboard</li>
                        </ul><!-- /.breadcrumb -->

                 <!--        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div> -->
                        <!-- /.nav-search -->
                    </div>
                    
                    <div class="page-content">
                      <!--   <div class="ace-settings-container" id="ace-settings-container"> -->