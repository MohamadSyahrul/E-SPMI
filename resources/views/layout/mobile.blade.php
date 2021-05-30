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
        <a href="javascript:;" class="menu {{ Request::is('managemen-akun/*') ? 'menu--active' : '' }}">
            <div class="menu__icon"> <i data-feather="tool"></i> </div>
            <div class="menu__title"> Managemen Akun <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
        </a>
        <ul class="{{ Request::is('managemen-akun/*') ? 'menu__sub-open' : '' }}">
            <li>
                <a href="{{route('akun-auditor.index')}}" class="menu {{ Request::is('akun-auditor/*') ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="user"></i> </div>
                    <div class="menu__title"> Auditor </div>
                </a>
            </li>
            <li>
                <a href="{{route('akun-wakil-ketua.index')}}" class="menu {{ Request::is('akun-wakil-ketua/*') ? 'menu--active' : '' }}">
                    <div class="menu__icon"> <i data-feather="user"></i> </div>
                    <div class="menu__title"> Wakil Ketua </div>
                </a>
            </li>
            <li>
                <a href="{{route('akun-staf.index')}}" class="menu {{ Request::is('akun-staf/*') ? 'menu--active' : '' }}">
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
        <ul class="{{ Request::is('upmi/*') ? 'menu__sub-open' : '' }}">
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
                <a href="{{route('jadwal-audit.index')}}" class="menu {{ Request::is('jadwal-audit/*') ? 'menu--active' : '' }}">
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
        <a href="{{route('standar-nasional.index')}}" class="menu {{ Request::is('standar-nasional','standar-nasional/*') ? 'menu--active' : '' }}">
            <div class="menu__icon"> <i data-feather="globe"></i> </div>
            <div class="menu__title"> Standar Nasional </div>
        </a>
    </li>
    <li>
        <a href="{{route('standar.index')}}" class="menu {{ Request::is('standar','standar/*') ? 'menu--active' : '' }}">
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

    {{-- wakil ketua --}}
    <li>
        <a href="{{route('jabatan.index')}}" class="menu {{ Request::is('jabatan','jabatan/*') ? 'menu--active' : '' }}">
            <div class="menu__icon"> <i data-feather="tag"></i> </div>
            <div class="menu__title"> Jabatan </div>
        </a>
    </li>

    <li>
        <a href="{{route('penanggung-jawab.index')}}" class="menu {{ Request::is('penanggung-jawab','penanggung-jawab/*') ? 'menu--active' : '' }}">
            <div class="menu__icon"> <i data-feather="bar-chart"></i> </div>
            <div class="menu__title"> Penanggung Jawab </div>
        </a>
    </li>
    <li>
        <a href="{{route('deskripsi-pekerjaan.index')}}" class="menu {{ Request::is('deskripsi-pekerjaan','deskripsi-pekerjaan/*') ? 'menu--active' : '' }}">
            <div class="menu__icon"> <i data-feather="file-text"></i> </div>
            <div class="menu__title"> Deskripsi Pekerjaan </div>
        </a>
    </li>
    <li>
        <a href="{{route('data-staf')}}" class="menu {{ Request::is('data-staf','data-staf/*') ? 'menu--active' : '' }}">
            <div class="menu__icon"> <i data-feather="user"></i> </div>
            <div class="menu__title"> Daftar Staf </div>
        </a>
    </li>
    <li>
        <a href="{{route('unit.index')}}" class="menu {{ Request::is('unit','unit/*') ? 'menu--active' : '' }}">
            <div class="menu__icon"> <i data-feather="briefcase"></i> </div>
            <div class="menu__title"> Unit </div>
        </a>
    </li>
    {{-- end wakil ketua --}}
    {{-- staf --}}
    <li>
        <a href="{{route('butir-sop.index')}}" class="menu {{ Request::is('butir-sop','butir-sop/*') ? 'menu--active' : '' }}">
            <div class="menu__icon"> <i data-feather="sliders"></i> </div>
            <div class="menu__title"> Butir Standar </div>
        </a>
    </li>
    <li>
        <a href="{{route('dokumen-pendukung.index')}}" class="menu {{ Request::is('dokumen-pendukung','dokumen-pendukung/*') ? 'menu--active' : '' }}">
            <div class="menu__icon"> <i data-feather="file-plus"></i> </div>
            <div class="menu__title"> Dokumen Pendukung </div>
        </a>
    </li>
    {{-- end staf --}}
</ul>