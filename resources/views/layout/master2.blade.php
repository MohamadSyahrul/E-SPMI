<!DOCTYPE html>
<html lang="en">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('admin/dist/images/image2vector.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login E-SPMI</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{asset('admin/dist/css/app.css')}}" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone Tailwind HTML Admin Template" class="w-10" src="{{asset('admin/dist/images/image2vector.svg')}}">
                        <span class="text-white text-lg ml-3"> E-<span class="font-medium">SPMI</span> </span>
                    </a>
                    <div class="my-auto">
                        <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="{{asset('admin/dist/images/undraw_Hiring_re_yk5n.svg')}}">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            Selamat Datang Di Sistem Penjaminan Mutu Internal 
                            <br>
                            Politeknik Negeri Banyuwangi
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white">Tingakatkan Akreditasi dengan E-SPMI</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->
                <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    @yield('content')
                </div>
                <!-- END: Login Form -->
            </div>
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{asset('admin/dist/js/app.js')}}"></script>
        <!-- END: JS Assets-->
    </body>
</html>