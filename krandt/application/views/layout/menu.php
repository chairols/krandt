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
                            <a href="/admin/logout/" class="badge badge-important" data-toggle="tooltip" data-placement="right" title="Log out">
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
                                            <a href="/admin/update/home/"<?=($segmento=='home')?" class='active'":""?>>HOME</a>
                                        </li>
                                        <li>
                                            <a href="/admin/update/productos/"<?=($segmento=='productos')?" class='active'":""?>>PRODUCTOS</a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-link">CONTROL DE ACCESOS</a>
                                            <ul>
                                                <li>
                                                    <a href="/admin/update/control-de-accesos/"<?=($segmento=='control-de-accesos')?" class='active'":""?>>CONTROL DE ACCESOS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/acceso-peatonal/"<?=($segmento=='acceso-peatonal')?" class='active'":""?>>ACCESO PEATONAL</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/estacionamiento/"<?=($segmento=='estacionamiento')?" class='active'":""?>>ESTACIONAMIENTO</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/acceso-vehicular/"<?=($segmento=='acceso-vehicular')?" class='active'":""?>>ACCESO VEHICULAR</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/base-de-datos/"<?=($segmento=='base-de-datos')?" class='active'":""?>>BASE DE DATOS</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-link">TIEMPO Y ASISTENCIA</a>
                                            <ul>
                                                <li>
                                                    <a href="/admin/update/tiempo-y-asistencia/"<?=($segmento=='tiempo-y-asistencia')?" class='active'":""?>>TIEMPO Y ASISTENCIA</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/admin-descentralizada/"<?=($segmento=='admin-descentralizada')?" class='active'":""?>>ADMIN. DESCENTRALIZADA</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/usuarios-administradores/"<?=($segmento=='usuarios-administradores')?" class='active'":""?>>USUARIOS ADMINISTRADORES</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/recepcion-de-fichadas/"<?=($segmento=='recepcion-de-fichadas')?" class='active'":""?>>RECEPCION DE FICHADAS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/turnos-y-rotaciones/"<?=($segmento=='turnos-y-rotaciones')?" class='active'":""?>>TURNOS Y ROTACIONES</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/procesamiento-de-fichadas/"<?=($segmento=='procesamiento-de-fichadas')?" class='active'":""?>>PROCESAMIENTO DE FICHADAS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/horas-extras/"<?=($segmento=='horas-extras')?" class='active'":""?>>HORAS EXTRAS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/calculo-de-horas/"<?=($segmento=='calculo-de-horas')?" class='active'":""?>>CALCULO DE HORAS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/administracion-de-novedades/"<?=($segmento=='administracion-de-novedades')?" class='active'":""?>>ADMINISTRACION DE NOVEDADES</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/liquidacion-de-sueldos/"<?=($segmento=='liquidacion-de-sueldos')?" class='active'":""?>>LIQUIDACION DE SUELDOS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/otras-caracteristicas/"<?=($segmento=='otras-caracteristicas')?" class='active'":""?>>OTRAS CARACTERISTICAS</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-link">VISITAS</a>
                                            <ul>
                                                <li>
                                                    <a href="/admin/update/visitas/"<?=($segmento=='visitas')?" class='active'":""?>>VISITAS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/concepto/"<?=($segmento=='concepto')?" class='active'":""?>>CONCEPTO</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/caracteristicas/"<?=($segmento=='caracteristicas')?" class='active'":""?>>CARACTERISTICAS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/registracion/"<?=($segmento=='registracion')?" class='active'":""?>>REGISTRACION</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/categoria-de-visitante/"<?=($segmento=='categoria-de-visitante')?" class='active'":""?>>CATEGORIA DE VISITANTE</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/pre-autorizacion/"<?=($segmento=='pre-autorizacion')?" class='active'":""?>>PRE-AUTORIZACION</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/ingreso/"<?=($segmento=='ingreso')?" class='active'":""?>>INGRESO</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/objetos/"<?=($segmento=='objetos')?" class='active'":""?>>OBJETOS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/reportes/"<?=($segmento=='reportes')?" class='active'":""?>>REPORTES</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-link">COMEDOR</a>
                                            <ul>
                                                <li>
                                                    <a href="/admin/update/comedor/"<?=($segmento=='comedor')?" class='active'":""?>>COMEDOR</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/usuarios/"<?=($segmento=='usuarios')?" class='active'":""?>>USUARIOS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/menus/"<?=($segmento=='menus')?" class='active'":""?>>MENUS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/convenios/"<?=($segmento=='convenios')?" class='active'":""?>>CONVENIOS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/habilitacion-de-consumo/"<?=($segmento=='habilitacion-de-consumo')?" class='active'":""?>>HABILITACION DE CONSUMO</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/fichadas-de-consumo/"<?=($segmento=='fichadas-de-consumo')?" class='active'":""?>>FICHADAS DE CONSUMO</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/alta-manual-de-consumos/"<?=($segmento=='alta-manual-de-consumos')?" class='active'":""?>>ALTA MANUAL DE CONSUMOS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/liquidacion-sueldos/"<?=($segmento=='liquidacion-sueldos')?" class='active'":""?>>LIQUIDACION DE SUELDOS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/otras--caracteristicas/"<?=($segmento=='otras--caracteristicas')?" class='active'":""?>>OTRAS CARACTERISTICAS</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/admin/update/video-ip/"<?=($segmento=='video-ip')?" class='active'":""?>>VIDEO IP</a>
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