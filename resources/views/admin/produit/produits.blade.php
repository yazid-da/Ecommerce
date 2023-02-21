@extends('admin.layouts.headerpanel')

@section('dashboardcontent')

<!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{url('/')}}">
                        <!-- Logo icon -->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('adm\plugins\images\logo.png')}}" alt="homepage" />
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    @include('admin.layouts.headerpanel')
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('admin.layouts.asidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Produits</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
                <!-- Tableau des categories  -->
                <div class="page-breadcrumb bg-white">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Liste des produits</h4>
                    </div>
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="table-responsive" id="produit">
                            <table class="table table-bordered table-striped" width="100%" cellspacing="0" border="1">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Désignation</th>
                                            <th>Categorie</th>
                                            <th>Description</th>
                                            <th>Prix unitaire</th>
                                            <th>Image</th>
                                            <th>Image 2</th>
                                            <th>Image 3</th>
                                            <th>Quantitée</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead><br>
                                    <tbody>
                                    @foreach($produits as $produit)
                                        <tr>
                                            <td>{{ $produit->id }}</td>   
                                            <td>{{ $produit->designation }}</td>
                                            <td>{{ $produit->categorie_id }}</td>
                                            <td>{{ $produit->description }}</td>
                                            <td>{{ $produit->prix_uni }}</td>
                                            <td>
                                               <img src="{{ asset('img/uploads/'.$produit->image)}}" alt="Image ici"> 
                                            </td>
                                            <td>
                                                <img src="{{ asset('img/uploads/'.$produit->image2)}}" alt="Image ici"> 
                                            </td>
                                            <td>
                                                <img src="{{ asset('img/uploads/'.$produit->image3)}}" alt="Image ici"> 
                                            </td>
                                            <td>{{ $produit->qte }}</td>
                                            <td><a href="{{ url('edit-produit/'.$produit->id) }}" style=" color : #f4a442;"> modifier </a><a href="{{ url('delete-produit/'.$produit->id) }}" style=" color : red;"> supprimer </a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                        <a href="{{ url('/dashboard/ajout-produit')}}"><button class="addbutton" >Ajouter Produit</button></a>
                </div>


            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->


            


            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> Copyright © Tous les droits sont réservés | AGRO-ALIMEN SHOP</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="adm/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="adm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="adm/jsapp-style-switcher.js"></script>
    <script src="adm/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="adm/jswaves.js"></script>
    <!--Menu sidebar -->
    <script src="adm/jssidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="adm/jscustom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="adm/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="adm/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="adm/jspages/dashboards/dashboard1.js"></script>

@endsection
