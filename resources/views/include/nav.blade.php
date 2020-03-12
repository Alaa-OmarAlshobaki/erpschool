  <!-- navbar-->
  <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>@lang('dashboard.dashboard.dashboard') </span> <span>   </span><strong class="text-primary">@lang('dashboard.dashboard.ERPSchool')</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="{{asset('dashboard/img/avatar-1.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="{{asset('dashboard/img/avatar-2.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="{{asset('dashboard/img/avatar-3.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
                

                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="dashboard/img/flags/16/GB.png" alt="languge"><span class="d-none d-sm-inline-block"></span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    @if(app()->isLocale('en'))
                    <li><a rel="nofollow" href="{{route('lang','ar')}}" class="dropdown-item"> <img src="{{asset('dashboard/img/flags/16/DE.png')}}" alt="Arabic" class="mr-2"><span>@lang('dashboard.dashboard.Arabic')</span></a></li>
                  @else
                  <li><a rel="nofollow" href="{{route('lang','en')}}" class="dropdown-item"> <img src="{{asset('dashboard/img/flags/16/FR.png')}}" alt="English" class="mr-2"><span>@lang('dashboard.dashboard.English')</span></a></li>
                   @endif     
                  </ul>
                </li>
                <!-- Log out-->
                @if(Auth::guard('admin')->check())
                {{Auth::guard('admin')->user()->firstName}}
              <form method="post" action="{{route('logout.admin')}}">
                @csrf
                <li class="nav-item"><a href="" class="nav-link logout"> <span class="d-none d-sm-inline-block">
                <button type="submit" >
               Logout
                </button>
              </span><i class="fa fa-sign-out"></i></a></li>
              </form>
              @elseif(Auth::guard('employee')->check())
              {{Auth::guard('employee')->user()->firstName}}
            <form method="post"action="{{route('logout.employee')}}">
              @csrf
              <li class="nav-item"><a href="" class="nav-link logout"> <span class="d-none d-sm-inline-block">
                  <button type="submit" >
                 Logout
                  </button>
                </span><i class="fa fa-sign-out"></i></a></li>
                </form>
                @elseif(Auth::guard('student')->check())
                {{Auth::guard('student')->user()->firstName}}
              <form method="post"action="{{route('logout.student')}}">
                @csrf
                <li class="nav-item"><a href="" class="nav-link logout"> <span class="d-none d-sm-inline-block">
                    <button type="submit" >
                   Logout
                    </button>
                  </span><i class="fa fa-sign-out"></i></a></li>
                  </form>
                  @elseif(Auth::guard('employee')->check())
                  {{Auth::guard('employee')->user()->firstName}}
                <form method="post"action="{{route('logout.employee')}}">
                  @csrf
                  <li class="nav-item"><a href="" class="nav-link logout"> <span class="d-none d-sm-inline-block">
                      <button type="submit" >
                     Logout
                      </button>
                    </span><i class="fa fa-sign-out"></i></a></li>
                    </form>
                    @elseif(Auth::guard('student')->check())
                    {{Auth::guard('student')->user()->firstName}}
                  <form method="post"action="{{route('logout.student')}}">
                    @csrf
                    <li class="nav-item"><a href="" class="nav-link logout"> <span class="d-none d-sm-inline-block">
                        <button type="submit" >
                       Logout
                        </button>
                      </span><i class="fa fa-sign-out"></i></a></li>
                      </form>
                      @elseif(Auth::guard('guardian')->check())
                      {{Auth::guard('guardian')->user()->firstName}}
                    <form method="post"action="{{route('logout.guardian')}}">
                      @csrf
                      <li class="nav-item"><a href="" class="nav-link logout"> <span class="d-none d-sm-inline-block">
                          <button type="submit" >
                         Logout
                          </button>
                        </span><i class="fa fa-sign-out"></i></a></li>
                        </form>
                                  
                  

              @endif
              </ul>
            </div>
          </div>
        </nav>
      </header>