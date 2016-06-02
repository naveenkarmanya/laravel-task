



<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href='{{Url::Route('welcome')}}'><i class="fa fa-circle-o"></i> Dashboard View</a>

                    </li>
                    <li class="active"><a href='{{URl::Route('test')}}'><i class="fa fa-circle-o"></i> Browser Details</a>

                    </li>

                    <li class="active"><a href='{{URL::Route('TimeZone')}}'><i class="fa fa-circle-o"></i> Time Zone</a>

                    </li>



                </ul>
            </li>
        </ul>
        <ul class="sidebar-menu">

            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>File Uploads</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href='{{URL::Route('uploadfile')}}'><i class="fa fa-circle-o"></i>File Upload</a>

                    </li>
                    <li class="active"><a href='{{URL::Route('datatable')}}'><i class="fa fa-circle-o"></i>Data Tables</a>

                    </li>



                </ul>
            </li>
        </ul>





        <ul class="sidebar-menu">
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>User Profile</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href='{{URL::Route('Profile')}}'><i class="fa fa-circle-o"></i> Update Profile</a>

                    </li>
                    <li class="active"><a href='{{URL::Route('ChangePassword')}}'><i class="fa fa-circle-o"></i> Update Password</a>

                    </li>
                    <li class="active"><a href='{{URL::Route('Logout')}}'><i class="fa fa-circle-o"></i> LOGOUT</a>

                    </li>



                </ul>
            </li>

        </ul>





    </section>
    <!-- /.sidebar -->
</aside>
