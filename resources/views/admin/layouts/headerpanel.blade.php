<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>ADMIN PANEL</title>
    
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="adm/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="adm/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="adm/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="/adm/css/style.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                   <!-- ============================================================== -->
                   <!-- Right side toggle and nav items -->
                   <!-- ============================================================== -->
                   <ul class="navbar-nav ms-auto d-flex align-items-center">

                       <!-- ============================================================== -->
                       <!-- User profile and search -->
                       <!-- ============================================================== -->
                       <li>
                           <a class="profile-pic" href="#">
                              <span class="text-white font-medium"> {{ Auth::user()->name }}</span></a>
                       </li>
                       <!-- ============================================================== -->
                       <!-- User Logout Button -->
                       <!-- ============================================================== -->
                       <li>
                       <button class="logout_btn"  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Se déconnecter') }}
                                        </button>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                </li>
                   </ul>
                </div>

            <main class="py-4">
                @yield('dashboardcontent')
            </main>

</body>