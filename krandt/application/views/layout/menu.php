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
                                            <a href="/admin/update/historia/"<?=($segmento=='historia')?" class='active'":""?>>HISTORIA</a>
                                        </li>
                                        <li>
                                            <a href="#" class="menu-link">PRODUCTOS</a>
                                            <ul>
                                                <li>
                                                    <a href="/admin/update/control-de-accesos/"<?=($segmento=='control-de-accesos')?" class='active'":""?>>CONTROL DE ACCESOS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/tiempo-y-asistencia/"<?=($segmento=='tiempo-y-asistencia')?" class='active'":""?>>TIEMPO Y ASISTENCIA</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/visitas/"<?=($segmento=='visitas')?" class='active'":""?>>VISITAS</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/comedor/"<?=($segmento=='comedor')?" class='active'":""?>>COMEDOR</a>
                                                </li>
                                                <li>
                                                    <a href="/admin/update/video-ip/"<?=($segmento=='video-ip')?" class='active'":""?>>VIDEO IP</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="/admin/usuarios/"<?=($segmento=='usuarios')?" class='active'":""?>>USUARIOS</a>
                                        </li>
                                        <li>
                                            <a href="/admin/archivos/"<?=($segmento=='archivos')?" class='active'":""?>>ARCHIVOS</a>
                                        </li>
                                        
                                    </ul>
                                </nav>
                                <!-- END Primary Navigation -->
                            </div>
                        </div>
                    </div>
                    <!-- END Sidebar Tabs -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </aside>
            <!-- END Left Sidebar -->