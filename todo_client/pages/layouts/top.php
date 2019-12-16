<!DOCTYPE html>
<html lang="pt-br">
    
<!-- Desenvolvido por Alissin Santos -->
<head>
        <meta charset="utf-8" />
        <title>Início</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />

        <!-- CDN VUEJS -->
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
        
        <!-- Vue scripts -->
        <script src="https://unpkg.com/vue-select@latest"></script>

        <!-- AXIOS CDN -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <!-- SELECT CSS -->
        <link href="../assets/libs/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div id="GlobalVue">
            <!-- Begin page -->
            <div id="wrapper">


                <div id="preloader">
                    <div id="status">
                        <div class="spinner">Loading...</div>
                    </div>
                </div>

                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topnav-menu float-right mb-0">

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="../false">
                                <img src="../assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                                <span class="pro-user-name ml-1">
                                    {{ userStorage.nome }} <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Bem vindo(a)</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>Visualziar conta</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-pencil"></i>
                                    <span>Alterar dados</span>
                                </a>

                                <div class="dropdown-divider"></div>

                                <!-- item-->
                                <a @click="sair" href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Sair</span>
                                </a>

                            </div>
                        </li>


                    </ul>

                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.html" class="logo text-center">
                            <span class="logo-lg">
                                <!-- <img src="../assets/images/logo-light.png" alt="" height="18"> -->
                                <span class="logo-lg-text-light">TODO</span>
                            </span>
                            <span class="logo-sm">
                                <span class="logo-lg-text-light">TD</span>
                                <!-- <img src="../assets/images/logo-sm.png" alt="" height="24"> -->
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                        <li>
                            <button class="button-menu-mobile waves-effect waves-light">
                                <i class="fe-menu"></i>
                            </button>
                        </li>

                        <li class="dropdown d-none d-lg-block">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                Adicionar
                                <i class="mdi mdi-chevron-down"></i> 
                            </a>
                            <div class="dropdown-menu">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item" data-toggle="modal" data-target="#add-categoria">
                                    <i class="mdi mdi-folder mr-1"></i>
                                    <span>Categoria</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item" data-toggle="modal" data-target="#add-todo">
                                    <i class="mdi mdi-bookmark-check mr-1"></i>
                                    <span>Todo</span>
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end Topbar -->