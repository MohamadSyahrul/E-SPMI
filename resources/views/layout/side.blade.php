<a href="" class="intro-x flex items-center pl-5 pt-4">
    <img alt="Midone Tailwind HTML Admin Template" class="w-10" src="{{asset('admin/dist/images/logo-poliwangi.png')}}">
    <span class="hidden xl:block text-white text-lg ml-3"> E-<span class="font-medium">SPMI</span> </span>
</a>
<div class="side-nav__devider my-6"></div>
<ul>
    <li>
        <a href="{{url('/')}}" class="side-menu {{ Request::is('/') ? 'side-menu--active' : '' }}">
            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
            <div class="side-menu__title"> Dashboard </div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="tool"></i> </div>
            <div class="side-menu__title"> Managemen Akun <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
        </a>
        <ul class="side-menu__sub-open">
            <li>
                <a href="{{route ('akun-auditor.index')}}" class="side-menu {{ Request::is('akun-auditor') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                    <div class="side-menu__title"> Auditor </div>
                </a>
            </li>
            <li>
                <a href="simple-menu-dashboard.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                    <div class="side-menu__title"> Wakil Ketua </div>
                </a>
            </li>
            <li>
                <a href="top-menu-dashboard.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                    <div class="side-menu__title"> Staf </div>
                </a>
            </li>
        </ul>
    </li>
    
    <li>
        <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="user-check"></i> </div>
            <div class="side-menu__title"> UPMI <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="side-menu-crud-data-list.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="clipboard"></i> </div>
                    <div class="side-menu__title"> Tambah Deskripsi </div>
                </a>
            </li>
            <li>
                <a href="side-menu-crud-form.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="align-justify"></i> </div>
                    <div class="side-menu__title"> Deskripsi </div>
                </a>
            </li>
            <li>
                <a href="side-menu-crud-form.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="calendar"></i> </div>
                    <div class="side-menu__title"> Jadwal Audit </div>
                </a>
            </li>
            <li>
                <a href="side-menu-crud-form.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="printer"></i> </div>
                    <div class="side-menu__title"> Cetak Instrumen Audit </div>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="login-login.html" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="globe"></i> </div>
            <div class="side-menu__title"> Standar Nasional </div>
        </a>
    </li>
    <li>
        <a href="login-login.html" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="tag"></i> </div>
            <div class="side-menu__title"> Standar </div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="side-menu">
            <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
            <div class="side-menu__title"> Hasil Audit <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="side-menu-users-layout-1.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="list"></i> </div>
                    <div class="side-menu__title"> Hasil rata-rata </div>
                </a>
            </li>
            <li>
                <a href="side-menu-users-layout-2.html" class="side-menu">
                    <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="side-menu__title"> Hasil Audit </div>
                </a>
            </li>
        </ul>
    </li>
</ul>