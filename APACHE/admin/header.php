<?php
    if ( ! isset ( $_SESSION['submarino']['id'] ) ) exit;
?>
<!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                	
                <img src="images/logo.png" alt="Sub Sub Marino">

            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Cadastros</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php 
                            include "libs/docs.php";
                            $acesso = acesso($pdo, "categorias");

                            if ( $acesso == "S") {
                        ?>                      
                        <a class="collapse-item" href="cadastros/categorias"><i class="fas fa-tags"></i> Categorias</a>
                        <?php
                            }

                            $acesso = acesso($pdo, "produtos");
                            if ( $acesso == "S") {
                        ?>
                        <a class="collapse-item" href="cadastros/produtos"><i class="fas fa-gift"></i> Produtos</a>
                        <?php
                            }

                            $acesso = acesso($pdo, "cidades");
                            if ( $acesso == "S") {
                        ?>
                        <a class="collapse-item" href="cadastros/cidades"><i class="fas fa-map-marker"></i> Cidades</a>
                        <?php
                            }

                            $acesso = acesso($pdo, "clientes");
                            if ( $acesso == "S") {
                        ?>
                        <a class="collapse-item" href="cadastros/clientes"><i class="fas fa-user-plus"></i> Clientes</a>
                        <?php
                            }

                            $acesso = acesso($pdo, "tipos");
                            if ( $acesso == "S") {
                        ?>
                        <a class="collapse-item" href="cadastros/tipos"><i class="fas fa-user-tag"></i> Tipo de Usuários</a>
                        <?php
                            }

                            $acesso = acesso($pdo, "usuarios");
                            if ( $acesso == "S") {
                        ?>
                        <a class="collapse-item" href="cadastros/usuarios"><i class="fas fa-users"></i> Usuário</a>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                    <span>Processos</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="cadastros/vendas"><i class="fas fa-shopping-cart"></i> Vendas</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Relatórios</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="relatorios/clientes"><i class="fas fa-user-plus"></i> Clientes</a>
                        <a class="collapse-item" href="relatorios/vendas"><i class="fas fa-shopping-cart"></i> Vendas</a>
                        <a class="collapse-item" href="relatorios/logs"><i class="fas fa-search"></i> Logs</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="sair.php">
                    <i class="fas fa-fw fa-power-off"></i>
                    <span>Sair</span></a>
            </li>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        </li>

                        <!-- Nav Item - Alerts -->
                        

                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                	<?=$_SESSION['submarino']['nome']?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="<?="../arquivos/".$_SESSION['submarino']['foto']."p.jpg"?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Seus Dados
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Mudar Senha
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="sair.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">