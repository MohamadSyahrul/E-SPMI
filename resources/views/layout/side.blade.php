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
        <a href="javascript:;" class="side-menu {{ Request::is('managemen-akun/*') ? 'side-menu--active' : '' }}">
            <div class="side-menu__icon"> <i data-feather="tool"></i> </div>
            <div class="side-menu__title"> Managemen Akun <i data-feather="chevron-down" class="side-menu__sub-icon"></i> </div>
        </a>
        <ul class="{{ Request::is('managemen-akun/*') ? 'side-menu__sub-open' : '' }}">
            <li>
                <a href="{{route ('akun-auditor.index')}}" class="side-menu {{ Request::is('akun-auditor') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                    <div class="side-menu__title"> Auditor </div>
                </a>
            </li>
            <li>
                <a href="{{route ('akun-wakil-ketua.index')}}" class="side-menu {{ Request::is('akun-wakil-ketua') ? 'side-menu--active' : '' }}">
                    <div class="side-menu__icon"> <i data-feather="user"></i> </div>
                    <div class="side-menu__title"> Wakil Ketua </div>
                </a>
            </li>
            <li>
                <a href="{{route ('akun-staf.index')}}" class="side-menu  {{ Request::is('akun-staf') ? 'side-menu--active' : '' }}">
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
        <ul class="{{ Request::is('upmi/*') ? 'side-menu__sub-open' : '' }}">
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
                <a href="{{route ('jadwal-audit.index')}}" class="side-menu {{ Request::is('jadwal-audit') ? 'side-menu--active' : '' }}">
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
        <a href="{{route('standar-nasional.index')}}" class="side-menu {{ Request::is('standar-nasional', 'standar-nasional/*') ? 'side-menu--active' : null }}">
            <div class="side-menu__icon"> <i data-feather="globe"></i> </div>
            <div class="side-menu__title"> Standar Nasional </div>
        </a>
    </li>
    <li>
        <a href="{{route('standar.index')}}" class="side-menu {{ Request::is('standar', 'standar/*') ? 'side-menu--active' : null }}">
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

    {{-- wakil ketua --}}
    <li>
        <a href="{{ route('jabatan.index')}}" class="side-menu {{ Request::is('jabatan', 'jabatan/*') ? 'side-menu--active' : null }}">
            <div class="side-menu__icon"> <i data-feather="bar-chart"></i> </div>
            <div class="side-menu__title"> Jabatan </div>
        </a>
    </li>
    <li>
        <a href="{{ route('penanggung-jawab.index')}}" class="side-menu {{ Request::is('penanggung-jawab', 'penanggung-jawab/*') ? 'side-menu--active' : null }}">
            <div class="side-menu__icon"> <i data-feather="target"></i> </div>
            <div class="side-menu__title"> Penanggung Jawab </div>
        </a>
    </li>
    <li>
        <a href="{{ route('deskripsi-pekerjaan.index')}}" class="side-menu {{ Request::is('deskripsi-pekerjaan', 'deskripsi-pekerjaan/*') ? 'side-menu--active' : null }}">
            <div class="side-menu__icon"> <i data-feather="file-text"></i> </div>
            <div class="side-menu__title"> Deskripsi Pekerjaan </div>
        </a>
    </li>
    <li>
        <a href="{{ route('data-staf')}}" class="side-menu  {{ Request::is('data-staf', 'data-staf/*') ? 'side-menu--active' : null }}">
            <div class="side-menu__icon"> <i data-feather="user"></i> </div>
            <div class="side-menu__title"> Daftar Staf </div>
        </a>
    </li>
    <li>
        <a href="{{ route('unit.index')}}" class="side-menu {{ Request::is('unit', 'unit/*') ? 'side-menu--active' : null }}">
            <div class="side-menu__icon"> <i data-feather="briefcase"></i> </div>
            <div class="side-menu__title"> Unit kerja </div>
        </a>
    </li>
    {{-- end wakil ketua --}}
    
</ul>