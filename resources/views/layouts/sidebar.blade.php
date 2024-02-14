<div class="navbar-custom">
    <div class="container-fluid">
        <div id="navigation">
            <ul class="navigation-menu">
                <li class="has-submenu">
                    <a href="{{ URL::to('/home') }}"><i class="icon-accelerator"></i> Dashboard</a>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="icon-pencil-ruler"></i> Blog <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="{{ route('blogCategories.index') }}">Blog Categories</a></li>
                                <li><a href="{{ route('blog.index') }}">Blog</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="{{ route('application.index') }}"><i class="icon-list"></i> Applicants</a>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="icon-pencil-ruler"></i> Users <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="{{ route('users.index') }}">Users Management</a></li>
                                <li><a href="{{ route('roles.index') }}">Role Management</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="has-submenu">
                    <a href="#"><i class="icon-pencil-ruler"></i> Customization <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="{{ route('lcd.index') }}">Logo and Contact Details</a></li>
                            </ul>
                            <ul>
                                <li><a href="{{ route('slider.index') }}">Slider Image</a></li>
                            </ul>
                            
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>