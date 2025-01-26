        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar container-fluid">
                <div class="d-flex align-items-center gap-1">

                    <!-- Topbar Brand Logo -->
                    <!-- <div class="logo-topbar"> -->
                    <!-- Logo light -->
                    <!-- <a href="index.html" class="logo-light">
                            <span class="logo-lg">
                                <img src="assets/images/logo.png" alt="logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo">
                            </span>
                        </a> -->

                    <!-- Logo Dark -->
                    <!-- <a href="index.html" class="logo-dark">
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="dark logo">
                            </span>
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="small logo">
                            </span>
                        </a>
                    </div> -->

                    <!-- Sidebar Menu Toggle Button -->
                    <!-- <button class="button-toggle-menu">
                        <i class="ri-menu-line"></i>
                    </button> -->

                    <!-- Horizontal Menu Toggle Button -->
                    <!-- <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button> -->

                    <!-- Topbar Search Form -->
                    <div class="app-search d-none d-lg-block mt-1 ms-2">
                        <img src="{{ asset('Assets/images/logo-ars.png') }}" height="21" alt="University Logo" class="mb-1">
                        <strong>ARS UNIVERSITY</strong>
                        <!-- <form>
                            <div class="input-group">
                                <input type="search" class="form-control" placeholder="cari...">
                                <span class="ri-search-line search-icon text-muted"></span>
                            </div>
                        </form> -->
                    </div>
                </div>

                <ul class="topbar-menu d-flex align-items-center gap-3">

                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle arrow-none nav-user" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <span class="account-user-avatar">
                                <img src="{{asset('assets')}}/images/users/avatar-2.jpg" alt="user-image" width="32" class="rounded-circle">
                            </span>
                            <span class="d-lg-block d-none">
                                <h5 class="my-0 fw-normal">{{ Auth::guard('admin')->user()->nama }} <i
                                        class="ri-arrow-down-s-line d-none d-sm-inline-block align-middle"></i></h5>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">

                            <!-- item-->
                            <a href="{{ url('/profile') }}" class="dropdown-item">
                                <i class="ri-account-circle-line fs-18 align-middle me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ri-logout-box-line fs-18 align-middle me-1"></i>
                                <span>Logout</span>
                            </a>

                            <!-- Form Logout -->
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->