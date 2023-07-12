<div class="nk-header is-light nk-header-fixed is-light">
    <div class="container-xl wide-xl">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1 me-3">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                        class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset('backend/images/logo.png') }}"
                        srcset="{{ asset('backend/images/logo2x.png 2x') }}" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('backend/images/logo-dark.png') }}"
                        srcset="{{ asset('backend/images/logo-dark2x.png 2x') }}" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-menu is-light">
                <div class="nk-header-menu-inner">
                    <!-- Menu -->
                    <ul class="nk-menu nk-menu-main">
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-text">Dashboards</span>
                            </a>

                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-text">Apps</span>
                            </a>

                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item">
                            <a href="html/components.html" class="nk-menu-link">
                                <span class="nk-menu-text">Components</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                    </ul>
                    <!-- Menu -->
                </div>
            </div><!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">

                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ Auth::user()->first_name }}</span>
                                        <span class="sub-text">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ route('admin.profile') }}"><em
                                                class="icon ni ni-user-alt"></em><span>View
                                                Profile</span></a></li>

                                    <li><a class="dark-switch" href="#"><em
                                                class="icon ni ni-moon"></em><span>Dark Mode</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign
                                                out</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
