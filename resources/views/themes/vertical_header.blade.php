<header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="#" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-dark-sm.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-dark-sm.png') }}" alt="" height="22">
                    </span>
                </a>

                <a href="#" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('backend/assets/images/logo-light-sm.png') }}" alt="" height="22">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn topnav-hamburger">
                <span class="hamburger-icon open">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <div class="d-none d-sm-block ms-3 align-self-center">
                <h4 class="page-title">Var Title | {{ env('APP_NAME')}}</h4>
            </div>

        </div>

        <div class="d-flex">
            <div class="dropdown">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-eva="search-outline"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-0">
                    <form class="p-2">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control bg-light border-0" placeholder="Search...">
                                <i class="search-icon" data-eva="search-outline" data-eva-height="26" data-eva-width="26"></i>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="dropdown d-inline-block language-switch">
                <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="header-lang-img" src="{{ asset('backend/assets/images/flags/us.jpg') }}" alt="Header Language" height="16">
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="eng">
                        <img src="{{ asset('backend/assets/images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp">
                        <img src="{{ asset('backend/assets/images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr">
                        <img src="{{ asset('backend/assets/images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it">
                        <img src="{{ asset('backend/assets/images/flags/italy.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru">
                        <img src="{{ asset('backend/assets/images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block">
                <button type="button" class="btn header-item noti-icon" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-eva="grid-outline"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> Web Apps </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small fw-semibold text-decoration-underline"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="px-lg-2 pb-2">
                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ asset('backend/assets/images/brands/github.png') }}" alt="Github">
                                    <span>GitHub</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ asset('backend/assets/images/brands/bitbucket.png') }}" alt="bitbucket">
                                    <span>Bitbucket</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ asset('backend/assets/images/brands/dribbble.png') }}" alt="dribbble">
                                    <span>Dribbble</span>
                                </a>
                            </div>
                        </div>

                        <div class="row g-0">
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ asset('backend/assets/images/brands/dropbox.png') }}" alt="dropbox">
                                    <span>Dropbox</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ asset('backend/assets/images/brands/mail_chimp.png') }}" alt="mail_chimp">
                                    <span>Mail Chimp</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="dropdown-icon-item" href="#!">
                                    <img src="{{ asset('backend/assets/images/brands/slack.png') }}" alt="slack">
                                    <span>Slack</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-sm" data-eva="bell-outline"></i>
                    <span class="noti-dot bg-danger rounded-pill">4</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown-v">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> Notifications </h5>
                            </div>
                            <div class="col-auto">
                                <a href="#!" class="small fw-semibold text-decoration-underline"> Mark all as
                                    read</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="{{ asset('backend/assets/images/users/avatar-3.jpg') }}" class="rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">James Lemire</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">It will seem like simplified English.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour
                                                ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="bx bx-cart"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your order is placed</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 avatar-sm me-3">
                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                        <i class="bx bx-badge-check"></i>
                                    </span>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">If several languages coalesce the grammar</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>3 min ago</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#!" class="text-reset notification-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <img src="{{ asset('backend/assets/images/users/avatar-6.jpg') }}" class="rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="font-size-13 text-muted">
                                        <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 hour
                                                ago</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle" id="right-bar-toggle-v">
                    <i class="icon-sm" data-eva="settings-outline"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('backend/assets/images/users/avatar-1.jpg') }}" alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 border-bottom">
                        <h6 class="mb-0">Jennifer Bennett</h6>
                        <p class="mb-0 font-size-11 text-muted">jennifer.bennett@email.com</p>
                    </div>
                    <a class="dropdown-item" href="contacts-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                    <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$6951.02</b></span></a>
                    <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span><span class="badge bg-success-subtle text-success ms-auto">New</span></a>
                    <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                    <a class="dropdown-item" href="auth-logout.html"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Logout</span></a>
                </div>

                <button class="btn btn-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                
            </div>
        </div>
    </div>
</header>