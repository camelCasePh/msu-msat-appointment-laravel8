<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MSU-MSAT APPOINTMENT</title>
    <link rel="icon" type="image/png" href="dist/img/msatlogo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">



    {{-- <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> --}}

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css?v=3.2.0') }}">
    <script src="https://kit.fontawesome.com/612e1c7b76.js" crossorigin="anonymous"></script>

    <script nonce="75fed223-4b53-49eb-b0b3-5ee3409dd016">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {};
                a.zarazData.executed = [];
                a.zaraz = {
                    deferred: [],
                    listeners: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.zaraz.init = () => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
                    a.zarazData.x = Math.random();
                    a.zarazData.w = a.screen.width;
                    a.zarazData.h = a.screen.height;
                    a.zarazData.j = a.innerHeight;
                    a.zarazData.e = a.innerWidth;
                    a.zarazData.l = a.location.href;
                    a.zarazData.r = e.referrer;
                    a.zarazData.k = a.screen.colorDepth;
                    a.zarazData.n = e.characterSet;
                    a.zarazData.o = (new Date).getTimezoneOffset();
                    a.zarazData.q = [];
                    for (; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith(
                        "_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin";
                    z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
                    t.parentNode.insertBefore(z, t)
                };
                ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, 0, "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">


        <nav class="main-header navbar navbar-expand navbar-white navbar-light">


            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link pt-3" data-widget="pushmenu" href="#" role="button"
                        style="color:white; font-size:25px;  "><i class="fas fa-bars"></i></a>
                </li>


                <div class="pl-3 pr-2">
                    <img src="../../dist/img/msatlogo.jpg" width="50px" class="brand-image img-circle ">

                </div>
                <div class="d-flex align-items-start flex-column">
                    <strong style="font-size: 20px">Msu-Msat Online Appointment</strong>
                    <div class="ts-12">Maigo, Lanao del Norte</div>
            </ul>
        </nav>

        <div>

            <aside class="main-sidebar sidebar-dark-primary elevation-4">

                <a href="#" class="brand-link">
                    <img src="../../dist/img/profile-pic.jpg" class="brand-image img-circle ">
                    <span class="brand-text" style="color:white; font-size:1rem;" <a href="#" class="d-block"
                        style="color: white;">{{ Auth::user()->fName }}
                        {{ Auth::user()->lName }}</a></span>
                </a>
                <div class="sidebar">




                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">

                            @if (Auth::user()->isAdmin == 0)
                                <li class="nav-item">
                                    <a href="{{ route('profile') }}" class="nav-link">
                                        <i class="nav-icon fa-regular fa-user"></i>
                                        <p style="color: white;">
                                            Profile
                                        </p>
                                    </a>
                                </li>
                            @endif
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">

                                    <i class="nav-icon fa-solid fa-clipboard-list"></i>
                                    <p style="color: white; ">

                                        Document Request
                                        <span class="right badge badge-danger">245 </span>
                                    </p>
                                </a>
                            </li>


                            @if (Auth::user()->isAdmin == 1)
                                <li class="nav-item">
                                    <a href="{{ route('pastrecords') }}" class="nav-link">
                                        <i class="nav-icon fa-regular fa-calendar-check"></i>
                                        <p style="color: white;">
                                            Records
                                            <span class="right badge badge-success">35</span>
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admincalendar') }}" class="nav-link">
                                        <i class="nav-icon fa-solid fa-calendar-days"></i>
                                        <p style="color: white;">
                                            Calendar
                                            {{-- <span class="right badge badge-danger">0 Pending</span> --}}
                                        </p>
                                    </a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fa-solid fa-gear"></i>
                                    <p style="color: white;">
                                        Setting
                                        {{-- <span class="right badge badge-danger">0 Pending</span> --}}
                                    </p>
                                </a>
                            </li>



                            {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> --}}


                            <li class="nav-item">

                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">


                                    <i class="nav-icon fa-solid fa-right-from-bracket"></i>

                                    <p>
                                        Logout
                                    </p>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </nav>

                </div>

            </aside>

            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-1">
                            {{-- <div class="col-sm-6">
                                <h1>Page Name</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active">Appointment</li>
                                </ol>
                            </div> --}}
                        </div>
                    </div>
                </section>
                @yield('css')
                <section class="content">
                    @yield('content')



                </section>

            </div>

            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version 1.0</b>

                </div>
                <strong>Copyright &copy; 2022-2023 <a href="#">DevOps5</a>.</strong> All rights
                reserved.
            </footer>

            <aside class="control-sidebar control-sidebar-dark">

            </aside>

        </div>

        {{-- <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> --}}

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

        <script src="../../plugins/jquery/jquery.min.js"></script>

        <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>

        <script src="../../dist/js/demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>

        @stack('scripts')
</body>

</html>


<style>
    .navbar-white {

        background-image: linear-gradient(to right, #ff512f, #dd2476);
        color: white;
    }

    /* [class*=sidebar-dark-] { */

    /* #43cea2 → #185a9d */
    /* background-image: linear-gradient(to right, #ff512f, #dd2476);

    color: white;
    }

    [class*=sidebar-dark] .brand-link {
        border-bottom: 1px solid #dd2476;
    }

    [class*=sidebar-dark] .user-panel {
        border-bottom: 1px solid #dd2476;
    }

    [class*=sidebar-dark-] .sidebar a {
        color: white;
    } */
</style>
