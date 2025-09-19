<div class="header bg-danger">
    <div class="header-left">
        <a href="index-2.html" class="logo">
            <img src="{{asset('backend/assets/img/logo1.png')}}" width="50" height="100" alt=""> 
            <span>SM-electronic</span>
        </a>
    </div>
    <a id="toggle_btn" href="javascript:void(0);"><i class="fas fa-bars"></i></a>
    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars"></i></a>
    <ul class="nav user-menu float-right">
       
               
        <!-- User Menu -->
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" src="{{asset('backend/assets/img/user.jpg')}}" width="24" alt="Admin">
                    <span class="status online"></span>
                </span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="{{url('/admin/logout')}}">Logout</a>
            </div>
        </li>
    </ul>

    <!-- Mobile User Menu -->
    <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="login.html">Logout</a>
        </div>
    </div>
</div>
