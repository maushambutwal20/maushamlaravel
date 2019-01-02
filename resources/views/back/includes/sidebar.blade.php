<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">

            </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-plus"
                    ></i> <span> Student information</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('registernew')}}"><i class="fa fa-circle-o"></i> Add New Students</a></li>
                    <li><a href="{{route('viewregister')}}"><i class="fa fa-circle-o"></i> Manage Students
                 </a></li>
                </ul>

            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-plus"></i> <span> Student Results</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('addnewresult')}}"><i class="fa fa-circle-o"></i> Add Result</a></li>
                    <li><a href="{{route('viewresult')}}"><i class="fa fa-circle-o"></i> Manage Results
                    </a></li>
                </ul>




            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-plus"></i> <span> Student By Grade</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('day')}}"><i class="fa fa-circle-o"></i> Class 11 Day shift</a></li>
                    <li class="active"><a href="{{route('morning')}}"><i class="fa fa-circle-o"></i> Class 11 Morning shift</a></li>
                    <li class="active"><a href="{{route('dayd')}}"><i class="fa fa-circle-o"></i> Class 12 Morning shift</a></li>
                    <li class="active"><a href="{{route('morningm')}}"><i class="fa fa-circle-o"></i> Class 12 Day shift</a></li>
                </ul>







                <a href="#">
                    <i class="fa fa-plus"></i> <span> Rank By </span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('topfrom11')}}"><i class="fa fa-circle-o"></i> Top-5 student from Grade 11</a></li>
                    <li><a href="{{route('poorfrom11')}}"> <i class="fa fa-circle-o"></i> poor from Grade 11</a></li>
                    <li><a href="{{route('topfrom12')}}"> <i class="fa fa-circle-o"></i> Top-5 student from Grade 12</a></li>
                    <li><a href="{{route('poorfrom12')}}"> <i class="fa fa-circle-o"></i> Poor from Grade 12</a></li>
                    <li><a href="{{route('totalstd')}}"><i class="fa fa-circle-o"></i> Total students
                     </a></li>

                    <li><a href="{{route('totalresult')}}"><i class="fa fa-circle-o"></i> Total published Results
                        </a></li>
                </ul>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>