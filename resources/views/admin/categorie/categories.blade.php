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
                        <h4 class="page-title">Categories</h4>
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
                        <h4 class="page-title">Liste des categories</h4>
                    </div>
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div id="categorie">
                            <table class="table table-bordered table-striped" width="100%" cellspacing="0" border="1">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name </th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>option</th>
                                        </tr>
                                    </thead><br>
                                    <tbody>
                                    @foreach($categories as $categorie)
                                        <tr>
                                            <td>{{ $categorie->id }}</td>   
                                            <td>{{ $categorie->name }}</td>
                                            <td>{{ $categorie->description }}</td>
                                            <td>
                                               <img src="{{ asset('img/uploads/'.$categorie->image)}}" alt="Image ici"> 
                                            </td>
                                            <td><a href="{{ url('edit-categorie/'.$categorie->id) }}" style=" color : #f4a442;"> modifier </a><a href="{{ url('delete-categorie/'.$categorie->id) }}" style=" color : red;"> supprimer </a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>
                </div>


            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->


            <!-- ============================================================== -->
            <!-- Formulaire d'ajout une catégorier  -->
            <!-- ============================================================== -->
                    <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <h4 id="add-categorie" style="font-weight: 700;" class="page-title">Ajouter une Catégorie</h4>
                            </div><br>
                                <form action="{{ url('insert-categorie')}}" method="POST" enctype="multipart/form-data" class="form-horizontal form-material">
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Categorie*</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="name" type="text" placeholder="ex categorie ..." class="form-control p-0 border-0"> 
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Description*</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <textarea name="description" rows="5" placeholder="..." class="form-control p-0 border-0"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="col-md-12 p-0">Image*</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="image" class="form-control"></input>
                                        </div>
                                    </div><br>
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
            <!-- FIN Formulaire d'ajout une catégorier  -->
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
