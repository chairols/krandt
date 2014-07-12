            <!-- Left Sidebar -->
            <!-- In the PHP version you can set the following options from the config file -->
            <!-- Add the class .sticky for a sticky sidebar -->
            <aside id="page-sidebar" class="nav-collapse collapse">
                <!--
                Wrapper for scrolling functionality
                Used only if the .sticky class added above. You can remove it and you will have a sticky sidebar
                without scrolling enabled when you set the sidebar to be sticky
                -->
                <div class="side-scrollable">
                    <!-- Mini Profile -->
                    <div class="mini-profile">
                        <div class="mini-profile-options">
                            <a href="javascript:void(0)" class="badge badge-info loading-on" data-toggle="tooltip" data-placement="right" title="Refresh">
                                <i class="icon-refresh"></i>
                            </a>
                            <a href="page_ready_shopping_cart.html" class="badge badge-warning" data-toggle="tooltip" data-placement="right" title="6 Products">
                                <i class="glyphicon-shopping_cart"></i>
                            </a>
                            <!-- Modal div is at the bottom of the page before including javascript code, we use .enable-tooltip class for the tooltip because data-toggle is used for modal -->
                            <a href="#modal-user-account" class="badge badge-success enable-tooltip" role="button" data-toggle="modal" data-placement="right" title="Settings">
                                <i class="glyphicon-cogwheel"></i>
                            </a>
                            <a href="page_login.html" class="badge badge-important" data-toggle="tooltip" data-placement="right" title="Log out">
                                <i class="icon-signout"></i>
                            </a>
                        </div>
                        <a href="page_ready_user_profile.html">
                            <img src="/assets/flatapp/img/template/avatar2.jpg" alt="Avatar" class="img-circle">
                        </a>
                    </div>
                    <!-- END Mini Profile -->

                    <!-- Sidebar Tabs -->
                    <div class="sidebar-tabs-con">
                        <ul class="sidebar-tabs" data-toggle="tabs">
                            <li class="active">
                                <a href="#side-tab-menu"><i class="glyphicon-list"></i></a>
                            </li>
                            <li>
                                <a href="#side-tab-extra"><i class="glyphicon-user"></i></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="side-tab-menu">
                                <!-- Primary Navigation -->
                                <nav id="primary-nav">
                                    <ul>
                                        <li>
                                            <a href="#" class="active">HOME</a>
                                        </li>
                                        <li>
                                            <a href="#">PRODUCTOS</a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-link">CONTROL DE ACCESOS</a>
                                            <ul>
                                                <li>
                                                    <a href="#">ACCESO PEATONAL</a>
                                                </li>
                                                <li>
                                                    <a href="#">ESTACIONAMIENTO</a>
                                                </li>
                                                <li>
                                                    <a href="#">ACCESO VEHICULAR</a>
                                                </li>
                                                <li>
                                                    <a href="#">BASE DE DATOS</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-link">TIEMPO Y ASISTENCIA</a>
                                            <ul>
                                                <li>
                                                    <a href="#">ADMIN. DESCENTRALIZADA</a>
                                                </li>
                                                <li>
                                                    <a href="#">USUARIOS ADMINISTRADORES</a>
                                                </li>
                                                <li>
                                                    <a href="#">RECEPCION DE FICHADAS</a>
                                                </li>
                                                <li>
                                                    <a href="#">TURNOS Y ROTACIONES</a>
                                                </li>
                                                <li>
                                                    <a href="#">PROCESAMIENTO DE FICHADAS</a>
                                                </li>
                                                <li>
                                                    <a href="#">HORAS EXTRAS</a>
                                                </li>
                                                <li>
                                                    <a href="#">CALCULO DE HORAS</a>
                                                </li>
                                                <li>
                                                    <a href="#">ADMINISTRACION DE NOVEDADES</a>
                                                </li>
                                                <li>
                                                    <a href="#">LIQUIDACION DE SUELDOS</a>
                                                </li>
                                                <li>
                                                    <a href="#">OTRAS CARACTERISTICAS</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-link">VISITAS</a>
                                            <ul>
                                                <li>
                                                    <a href="#">CONCEPTO</a>
                                                </li>
                                                <li>
                                                    <a href="#">CARACTERISTICAS</a>
                                                </li>
                                                <li>
                                                    <a href="#">REGISTRACION</a>
                                                </li>
                                                <li>
                                                    <a href="#">CATEGORIA DE VISITANTE</a>
                                                </li>
                                                <li>
                                                    <a href="#">PRE-AUTORIZACION</a>
                                                </li>
                                                <li>
                                                    <a href="#">INGRESO</a>
                                                </li>
                                                <li>
                                                    <a href="#">OBJETOS</a>
                                                </li>
                                                <li>
                                                    <a href="#">REPORTES</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-link">COMEDOR</a>
                                            <ul>
                                                <li>
                                                    <a href="#">USUARIOS</a>
                                                </li>
                                                <li>
                                                    <a href="#">MENUS</a>
                                                </li>
                                                <li>
                                                    <a href="#">CONVENIOS</a>
                                                </li>
                                                <li>
                                                    <a href="#">HABILITACION DE CONSUMO</a>
                                                </li>
                                                <li>
                                                    <a href="#">FICHADAS DE CONSUMO</a>
                                                </li>
                                                <li>
                                                    <a href="#">ALTA MANUAL DE CONSUMOS</a>
                                                </li>
                                                <li>
                                                    <a href="#">LIQUIDACION DE SUELDOS</a>
                                                </li>
                                                <li>
                                                    <a href="#">OTRAS CARACTERISTICAS</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">VIDEO IP</a>
                                        </li>
                                        
                                    </ul>
                                </nav>
                                <!-- END Primary Navigation -->
                            </div>
                            <div class="tab-pane tab-pane-side" id="side-tab-extra">
                                <h5><i class="icon-briefcase pull-right"></i>Balance</h5>
                                <div class="side-stat text-center text-info"><strong>$25.230,<small>00</small></strong></div>

                                <h5><i class="icon-dollar pull-right"></i>Earnings (today)</h5>
                                <div class="side-stat text-center text-info"><strong>$1.752,<small>00</small></strong></div>

                                <h5><i class="icon-shopping-cart pull-right"></i>Sales (today)</h5>
                                <div class="side-stat text-center text-info"><strong>368</strong></div>

                                <h5><i class="icon-shopping-cart pull-right"></i>Sales (this month)</h5>
                                <div class="side-stat text-center text-success"><strong>+38%</strong></div>

                                <h5><i class="icon-ticket pull-right"></i>Open Tickets</h5>
                                <div class="side-stat text-center text-warning"><strong>23</strong></div>

                                <h5><i class="icon-bug pull-right"></i>Bugs to fix</h5>
                                <div class="side-stat text-center text-error"><strong>1</strong> (important)</div>
                                <div class="side-stat text-center text-warning"><strong>3</strong> (normal)</div>
                            </div>
                        </div>
                    </div>
                    <!-- END Sidebar Tabs -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </aside>
            <!-- END Left Sidebar -->