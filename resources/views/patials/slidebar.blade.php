<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item  ">
                <a href="{{ route('backend.about.index') }}" class="nav-link nav-toggle">
                    <i class="icon-user"></i>
                    <span class="title">Giới thiệu</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#">
                    <i class="icon-layers"></i>
                    <span class="title">Danh mục</span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('backend.category.index') }}" class="nav-link ">
                            <span class="title">Quản lý danh mục</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('backend.post.index') }}" class="nav-link ">
                            <span class="title">Bài viết</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item">
                <a href="">
                    <i class="icon-layers"></i>
                    <span class="title">Tin tức</span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="{{ route('backend.news.index') }}" class="nav-link ">
                            <span class="title">Quản lý Tin tức</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('backend.promotion.index') }}" class="nav-link ">
                            <span class="title">Quản lý tin khuyến mãi</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('backend.star.index') }}" class="nav-link ">
                            <span class="title">Quản lý tin sao trải nghiệm</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.gallery.index') }}">
                    <i class="icon-layers"></i>
                    <span class="title">Thư viện</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.banner.index') }}">
                    <i class="icon-layers"></i>
                    <span class="title">Banner</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.contact.index') }}">
                    <i class="icon-layers"></i>
                    <span class="title">Liên hệ</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.config.index') }}">
                    <i class="icon-layers"></i>
                    <span class="title">Quản lý thông tin</span>
                </a>
            </li>
        </ul><!-- END SIDEBAR MENU -->
    </div>