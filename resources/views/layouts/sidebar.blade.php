<!-- Main Sidebar Container -->
  <div class="row ">
    @if(Auth::check())
      <div class="col-md-2  ">
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <span class="brand-text font-weight-light">Work Force Engine</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <?php
              $users=Auth::user();
            ?>
            <div class="image">
              @if(($users->image)==NULL)
                <img src="{{asset('uploads/default_img.jpg')}}" class="img-circle elevation-2" alt="User Image">                  
              @else
                  <img src="{{asset('uploads/'.$users->image)}}">
              @endif
                
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
            </div>
            <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        @if((Auth::user()->roll)==1)
                            <li class="nav-item menu-open ">
                                <a href="home" class="nav-link active ">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>  
                                <ul class="nav nav-treeview">              
                                    <li class="nav-item ">
                                        <a href="{{ route('worker.index') }}" class="nav-link  ">
                                        <i class="fa fa-clone nav-icon "></i>
                                        <p>Available Job</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('workprovider.index') }}" class="nav-link  ">
                                        <i class="fa fa-clone nav-icon"></i>
                                        <p>Request View</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('viewreplay') }}" class="nav-link">
                                        <i class="fa fa-clone nav-icon"></i>
                                        <p>Workers Review</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.create') }}" class="nav-link">
                                        <i class="fa fa-clone nav-icon"></i>
                                        <p>Workproviders Details</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.index') }}" class="nav-link">
                                        <i class="fa fa-clone nav-icon"></i>
                                        <p>Workers Details</p>
                                        </a>
                                    </li>
                                </ul>
                                
                            </li>
                        @elseif((Auth::user()->roll)==2)
                            <li class="nav-item menu-open ">
                                <li class="nav-item">
                                    <a href="{{ route('workprovider.index') }}" class="nav-link ">
                                    <i class="fa fa-clone nav-icon"></i>
                                    <p>Request View</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-table"></i>
                                      <p>
                                        Vaccancy
                                        <i class="fas fa-angle-left right"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="{{ route('workprovider.create') }}" class="nav-link">
                                            <i class="fa fa-clone nav-icon"></i>
                                            <p>Add</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('worker.index') }}" class="nav-link">
                                            <i class="fa fa-clone nav-icon"></i>
                                            <p>View</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </li>
                        @else
                            <li class="nav-item menu-open ">
                                <li class="nav-item">
                                    <a href="{{ route('worker.index') }}" class="nav-link">
                                    <i class="fa fa-clone nav-icon"></i>
                                    <p>Available Job</p>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a href="{{ route('viewreplay') }}" class="nav-link">
                                    <i class="fa fa-clone nav-icon"></i>
                                    <p>View Replay</p>
                                    </a>
                                </li>
                            </li>  
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>

    @endif         
  </div>