 <!--APP-SIDEBAR-->
 <div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <div class="app-sidebar">
        <div class="side-header">
            <a class="header-brand1" href="{{route('Home')}}">
                <img src="{{url('../assets/images/brand/logo-white.png')}}" class="header-brand-img desktop-logo" alt="logo">
                <img src="{{url('../assets/images/brand/logo-white.png')}}" class="header-brand-img toggle-logo"
                    alt="logo">
                <img src="{{url('../assets/images/brand/logo-dark.png')}}" class="header-brand-img light-logo" alt="logo">
                <img src="{{url('../assets/images/brand/logo-dark.png')}}" class="header-brand-img light-logo1"
                    alt="logo">
            </a>
            <!-- LOGO -->
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                </svg></div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('dashboard')}}"><i
                            class="side-menu__icon fe fe-home"></i><span
                            class="side-menu__label">Dashboard</span></a>
                </li>

                @can('kartu.khatam')
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('kkd.index')}}"><i
                        class="side-menu__icon ti-files"></i><span
                        class="side-menu__label">Kartu Khatam Digital</span></a>
                    </li>
                @endcan

                @can('PresensiMhs')
                    <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('presensi.index')}}"><i
                        class="side-menu__icon fe fe-camera"></i><span
                        class="side-menu__label">Presensi</span></a>
                    </li>
                @endcan

                @can('sertifikatMhs')
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('sertifikat.index')}}"><i
                                class="side-menu__icon fe fe-file"></i><span
                                class="side-menu__label">Sertifikat </span></a>
                    </li>
                @endcan
                @can('presensiGen')
                    <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admin.qrcode.index')}}"><i
                        class="side-menu__icon fe fe-camera"></i><span
                        class="side-menu__label">QR Code</span></a>
                    </li>
                @endcan
                
                @can('sertifikat.admin')
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{route('admin.pengajuanSertifikat.index')}}"><i
                            class="side-menu__icon fe fe-file"></i><span
                            class="side-menu__label">Pengajuan Sertifikat </span></a>
                </li>
                @endcan
               
                @can('data.master')
                <li class="sub-category">
                    <h3>Administrator</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-database"></i><span
                            class="side-menu__label">Data Master</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">apps</a></li>
                                            <li><a href="{{route('admin.users.index')}}" class="slide-item">User</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                @endcan

                @can('manage.access')
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-lock"></i><span
                            class="side-menu__label">User Access</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">apps</a></li>
                                            <li><a href="{{route('admin.roles.index') }}" class="slide-item"> Roles</a></li>
                                            <li><a href="{{route('admin.permissions.index') }}" class="slide-item"> Permissions</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                @endcan
                {{-- @can('setting')
                <li class="sub-category">
                    <h3>More Tools</h3>
                </li>
                    
                <li class="slide">
                    <a class="side-menu__item has-link" data-bs-toggle="slide" href="#"><i
                            class="side-menu__icon fe fe-settings"></i><span
                            class="side-menu__label">Setting</span><i
                            class="angle fe fe-chevron-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu-label1"><a href="javascript:void(0)">apps</a></li>
                                            <li><a href="cards.html" class="slide-item"> Company Profile</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
           
                @endcan --}}
            </ul>

            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                </svg></div>
        </div>
    </div>
</div>
<!--/APP-SIDEBAR-->