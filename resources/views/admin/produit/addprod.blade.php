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
                            <img src="adm\plugins\images\logo.png" alt="homepage" />
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
            <!-- Formulaire d'ajout un Produits  -->
            <!-- ============================================================== -->
                    <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <h4 style="font-weight: 700;" class="page-title">Ajouter un produit</h4>
                            </div><br>
                                <form action="{{ url('inserer-produit')}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Designation*</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="designation" type="text" placeholder="nom du produit" class="form-control p-0 border-0"> 
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Categorie*</label>
                                        <select class="form-select" name="categorie_id" aria-label="Default select example">
                                            <Option value="">select..</Option>
                                            @foreach($categories as $categorie)
                                            <Option value="{{ $categorie->id }}">{{ $categorie->name }}</Option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Description*</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea name="description" rows="5" placeholder="..." class="form-control p-0 border-0"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                        <label class="col-md-12 p-0">Prix*</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="prix_uni" min="0" step="0.01"> Mad</input>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="col-md-12 p-0">Image*</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="image" class="form-control"></input>
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <label class="col-md-12 p-0">Image 2</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="image2" class="form-control"></input>
                                        </div>
                                    </div><br>
                                    <div class="col-md-12">
                                        <label class="col-md-12 p-0">Image 3</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="image3" class="form-control"></input>
                                        </div>
                                    </div><br>

                                    <div class="col-md-6 mb-3">
                                        <label class="col-md-12 p-0">Quantitée*</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="number" name="qte" min="0"></input>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Ajouter</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    
            <!-- ============================================================== -->
            <!-- FIN Formulaire d'ajout un Produit  -->
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
