<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow px-15">
            <!-- Mini Mode -->
            <div class="content-header-section sidebar-mini-visible-b">
                <!-- Logo -->
                <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                </span>
                <!-- END Logo -->
            </div>
            <!-- END Mini Mode -->

            <!-- Normal Mode -->
            <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                <!-- Close Sidebar, Visible only on mobile screens -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Sidebar -->

                <!-- Logo -->
                <div class="content-header-item">
                    <a class="link-effect font-w700" href="{{ route('admin') }}">
                        <i class="si si-fire text-primary"></i>
                        <span class="font-size-xl text-dual-primary-dark">SMS</span><span class="font-size-xl text-primary">92</span>
                    </a>
                </div>
                <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
        </div>
        <!-- END Side Header -->

        <!-- Side User -->
        <div class="content-side content-side-full content-side-user px-10 align-parent">
            <!-- Visible only in mini mode -->
            <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32"src="{{ asset('assets/front-end/img/logo.jpg')}}" alt="">
            </div>
            <!-- END Visible only in mini mode -->

            <!-- Visible only in normal mode -->
            <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="{{ route('admin') }}">
                    <img class="img-avatar img-avatar32"src="{{ asset('assets/front-end/img/logo.jpg')}}" alt="">
                </a>
                <ul class="list-inline mt-10">
 
                    <li class="list-inline-item">
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                            <i class="si si-drop"></i>
                        </a>
                    </li>
                   
                </ul>
            </div>
            <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li>
                    <a class="active" href="{{ route('admin') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                </li>
               
                <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">Admin Feature</span></li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="{{ route('slider.home') }}"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Slider</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('slider.home') }}">List</a>
                        </li>
                        <li>
                            <a href="{{ route('slider.create') }}">Add new</a>
                        </li>
                  
                    </ul>
                </li>
               
                <li>
           
                {{-- <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Service</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('service.create') }}.html">Add New</a>
                        </li>
                        <li>
                            <a href="{{ route('service.home') }}">List</a>
                        </li>
                        
                    </ul>
                </li> --}}
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Photo Gallery</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('photo.create') }}.html">Add New</a>
                        </li>
                        <li>
                            <a href="{{ route('photo.home') }}">List</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Social Activites</span></a>
                    <ul>
                        <li>
                            <a href="{{ route('socialActivite.create') }}.html">Add New</a>
                        </li>
                        <li>
                            <a href="{{ route('socialActivite.home') }}">List</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-user"></i><span class="sidebar-mini-hide">Member</span></a>
                    <ul>
                       
                        <li>
                            <a href="{{ route('members.create') }}">Add Member</a>
                        </li>
                        <li>
                            <a href="{{ route('members.home',[0]) }}">Ec Committee</a>
                        </li>
                        <li>
                            <a href="{{ route('members.home',[1]) }}">Honor Board</a>
                        </li>
                        <li>
                            <a href="{{ route('members.home',[2]) }}">Member</a>
                        </li>
                      
                    </ul>
                </li>
                <li>
                    <a class="nav-submenu"  href="{{ route('message.list') }}"><i class="si si-moustache"></i><span class="sidebar-mini-hide">Messages</span></a>
                   
                </li>
                <li>
                    <a class="nav-submenu"  href="{{ route('setting.video') }}"><i class="si si-moustache"></i><span class="sidebar-mini-hide">Home Video</span></a>
                   
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible"></span><span class="sidebar-mini-hidden">Setting</span></li>
                {{-- <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Layout</span></a>
                    <ul>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">General</a>
                            <ul>
                                <li>
                                    <a href="be_layout_default.html">Default</a>
                                </li>
                                <li>
                                    <a href="be_layout_flipped.html">Flipped</a>
                                </li>
                                <li>
                                    <a href="be_layout_native_scrolling.html">Native Scrolling</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                            <ul>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Static</a>
                                    <ul>
                                        <li>
                                            <a href="be_layout_header_modern.html">Modern</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_header_classic.html">Classic</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_header_classic_inverse.html">Classic Inverse</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_header_glass.html">Glass</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_header_glass_inverse.html">Glass Inverse</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Fixed</a>
                                    <ul>
                                        <li>
                                            <a href="be_layout_header_fixed_modern.html">Modern</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_header_fixed_classic.html">Classic</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_header_fixed_classic_inverse.html">Classic Inverse</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_header_fixed_glass.html">Glass</a>
                                        </li>
                                        <li>
                                            <a href="be_layout_header_fixed_glass_inverse.html">Glass Inverse</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sidebar</a>
                            <ul>
                                <li>
                                    <a href="be_layout_sidebar_inverse.html">Inverse</a>
                                </li>
                                <li>
                                    <a href="be_layout_sidebar_hidden.html">Hidden</a>
                                </li>
                                <li>
                                    <a href="be_layout_sidebar_mini.html">Mini</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Side Overlay</a>
                            <ul>
                                <li>
                                    <a href="be_layout_side_overlay_visible.html">Visible</a>
                                </li>
                                <li>
                                    <a href="be_layout_side_overlay_hoverable.html">Hoverable</a>
                                </li>
                                <li>
                                    <a href="be_layout_side_overlay_no_page_overlay.html">No Page Overlay</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Main Content</a>
                            <ul>
                                <li>
                                    <a href="be_layout_content_boxed.html">Boxed</a>
                                </li>
                                <li>
                                    <a href="be_layout_content_narrow.html">Narrow</a>
                                </li>
                                <li>
                                    <a href="be_layout_content_full_width.html">Full Width</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Hero</a>
                            <ul>
                                <li>
                                    <a href="be_layout_hero_color.html">Color</a>
                                </li>
                                <li>
                                    <a href="be_layout_hero_bubbles.html">Bubbles</a>
                                </li>
                                <li>
                                    <a href="be_layout_hero_image.html">Image</a>
                                </li>
                                <li>
                                    <a href="be_layout_hero_video.html">Video</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="be_layout_api.html">API</a>
                        </li>
                    </ul>
                </li> --}}
                <li>
                    <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-trophy"></i><span class="sidebar-mini-hide">App setting</span></a>
                    <ul>
                       
                    
                        <li>
                            <a href="{{ route('setting.index') }}">Web setting</a>
                        </li>
                        <li>
                            <a href="{{ route('setting.about') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('setting.vision') }}">Notice</a>
                        </li>
                        <li>
                            <a href="{{ route('setting.social') }}">Social Link</a>
                        </li>
                    </ul>
                </li>
              
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- Sidebar Content -->
</nav>
<!-- END Sidebar -->