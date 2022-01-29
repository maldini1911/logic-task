  <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
        <img src="{{asset('/')}}/admin/assets/images/logo.png" alt="logo icon" class="rounded-circle" width="17%">
       <h5 class="logo-text">Logic Task</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header text-center">Dashboard</li>

      <li><a href="{{ route('admin.dashboard') }}"><i class="fas fa-house-user"></i> Home Page</a></li>
      <!-- Start Admins -->
      <li>
        <a href="{{route('admins.index')}}" class="waves-effect">
          <i class="fas fa-users-cog"></i> <span>Admins</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('admins.index')}}"><i class="zmdi zmdi-star-outline"></i> Show</a></li>
          <li><a href="{{route('admins.create')}}"><i class="zmdi zmdi-star-outline"></i> Add </a></li>
        </ul>
      </li>
      <!-- End Admins -->

      <!-- Start Students Route -->
      <li>
        <a href="{{route('students.index')}}" class="waves-effect">
          <i class="fas fa-users"></i> <span>Students</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('students.index')}}"><i class="zmdi zmdi-star-outline"></i> Show</a></li>
          <li><a href="{{route('students.create')}}"><i class="zmdi zmdi-star-outline"></i> Add</a></li>
        </ul>
      </li>
      <!-- End Students Route -->

      <!-- Start Students Grade -->
      <li><a href="{{ route('all.students.grade') }}"><i class="fas fa-marker"></i> Students Grates</a></li>
     <!-- end Students Grade -->

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->