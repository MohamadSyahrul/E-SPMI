<div class="mobile-menu-bar">
    <a href="" class="flex mr-auto">
        <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="{{asset('admin/dist/images/image2vector.svg')}}">
    </a>
    <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
</div>
<ul class="border-t border-theme-24 py-5 hidden">
    <li>
        <a href="{{url('/')}}" class="menu {{ Request::is('/') ? 'menu--active' : '' }}">
            <div class="menu__icon"> <i data-feather="home"></i> </div>
            <div class="menu__title"> Dashboard </div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="tool"></i> </div>
            <div class="menu__title"> Managemen Akun <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="{{route('akun-auditor.index')}}" class="menu {{ Request::is('akun-auditor') ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="user"></i> </div>
                    <div class="menu__title"> Auditor </div>
                </a>
            </li>
            <li>
                <a href="simple-menu-dashboard.html" class="menu">
                    <div class="menu__icon"> <i data-feather="user"></i> </div>
                    <div class="menu__title"> Wakil Ketua </div>
                </a>
            </li>
            <li>
                <a href="top-menu-dashboard.html" class="menu">
                    <div class="menu__icon"> <i data-feather="user"></i> </div>
                    <div class="menu__title"> Staf </div>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="user-check"></i> </div>
            <div class="menu__title"> UPMI <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="side-menu-crud-data-list.html" class="menu">
                    <div class="menu__icon"> <i data-feather="clipboard"></i> </div>
                    <div class="menu__title"> Tambah Deskripsi </div>
                </a>
            </li>
            <li>
                <a href="side-menu-crud-form.html" class="menu">
                    <div class="menu__icon"> <i data-feather="align-justify"></i> </div>
                    <div class="menu__title"> Deskripsi </div>
                </a>
            </li>
            <li>
                <a href="side-menu-crud-form.html" class="menu">
                    <div class="menu__icon"> <i data-feather="calendar"></i> </div>
                    <div class="menu__title"> Jadwal Audit </div>
                </a>
            </li>
            <li>
                <a href="side-menu-crud-form.html" class="menu">
                    <div class="menu__icon"> <i data-feather="printer"></i> </div>
                    <div class="menu__title"> Cetak Instrumen Audit </div>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="side-menu-inbox.html" class="menu">
            <div class="menu__icon"> <i data-feather="globe"></i> </div>
            <div class="menu__title"> Standar Nasional </div>
        </a>
    </li>
    <li>
        <a href="side-menu-inbox.html" class="menu">
            <div class="menu__icon"> <i data-feather="tag"></i> </div>
            <div class="menu__title"> Standar </div>
        </a>
    </li>
    <li>
        <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="layers"></i> </div>
            <div class="menu__title"> Hasil Audit <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
        </a>
        <ul class="">
            <li>
                <a href="side-menu-users-layout-1.html" class="menu">
                    <div class="menu__icon"> <i data-feather="list"></i> </div>
                    <div class="menu__title"> Hasil rata-rata </div>
                </a>
            </li>
            <li>
                <a href="side-menu-users-layout-2.html" class="menu">
                    <div class="menu__icon"> <i data-feather="file-text"></i> </div>
                    <div class="menu__title"> Hasil Audit </div>
                </a>
            </li>
        </ul>
    </li>
</ul>