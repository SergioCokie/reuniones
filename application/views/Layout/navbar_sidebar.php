<!--Main Navigation-->
<header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
        <ul class="custom-scrollbar">
            <!-- Logo -->
            <li class="logo-sn waves-effect">
                <div class="text-center">
                    <a href="<?=base_url() ?>dashboard" class="pl-0">I N I C I O
                        <!-- <img
							src="https://3.bp.blogspot.com/_JaBKyS-71-4/SxmfjuTRyXI/AAAAAAAAAJw/mRIA6guug2w/w1200-h630-p-k-no-nu/LOGO2.1.JPG"
							class="">< -->
                    </a>
                </div>
            </li>
            <!--/. Logo -->

            <!--Search Form-->
            <li>
                <form class="search-form" role="search">
                    <div class="form-group md-form mt-0 pt-1 waves-light">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li><a class="collapsible-header waves-effect arrow-r" title="Mantenimientos"><i
                                class="fa fa-pencil"></i>
                            Mantenimientos<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?= base_url()?>Mantenimiento/Tipo_persona" title="Gestion de roles"
                                        class="waves-effect">Tipo Persona</a>
                                </li>
                                <li><a href="<?= base_url()?>Mantenimiento/Persona"
                                        title="Gestion de usuarios o personas base" class="waves-effect">Persona</a>
                                </li>
                                <li><a href="<?= base_url()?>Mantenimiento/Distrito" class="waves-effect">Distrito</a>
                                </li>
                                <li><a href="<?= base_url()?>Mantenimiento/Zona" class="waves-effect">Zona</a>
                                </li>
                                <li><a href="<?= base_url()?>Mantenimiento/Sector" class="waves-effect">Sector</a>

                                </li>
                                <li><a href="#" class="waves-effect">Reuniones</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Simple link -->

                    <li><a href="<?= base_url()?>Procesos/Distritos" class="collapsible-header waves-effect"><i
                                class="fa fa-th-large"></i> Procesos</a></li>

                </ul>
            </li>
            <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <a href="<?= base_url()?>Dashboard/">
            <div class="breadcrumb-dn mr-auto">
                <p>Reuniones de iglesia elim</p>
            </div>
        </a>


        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

            <!-- Dropdown -->
            <li class="nav-item dropdown notifications-nav">
                <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="badge red">3</span> <i class="fa fa-bell"></i>
                    <span class="d-none d-md-inline-block">Notifications</span>
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-money mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 13 min</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-money mr-2" aria-hidden="true"></i>
                        <span>New order received</span>
                        <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 33 min</span>
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-line-chart mr-2" aria-hidden="true"></i>
                        <span>Your campaign is about to end</span>
                        <span class="float-right"><i class="fa fa-clock-o" aria-hidden="true"></i> 53 min</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect"><i class="fa fa-envelope"></i> <span
                        class="clearfix d-none d-sm-inline-block">Contact</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect" href="<?=base_url()?>Testbackup/bk_"><i class="fa fa-comments-o"></i>
                    <span class="clearfix d-none d-sm-inline-block">Support</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>&nbsp;&nbsp;<?php echo $this->session->userdata("per_username");?><span
                        class="clearfix d-none d-sm-inline-block"></span></a>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url()?>Seguridad/Password">Cambiar contraseña</a>
                    <a class="dropdown-item" href="<?= base_url()?>Login/LogOut">Cerrar sesión</a>
                </div>
            </li>

        </ul>
        <!--/Navbar links-->
    </nav>
    <!-- /.Navbar -->

</header>
<!--Main Navigation-->