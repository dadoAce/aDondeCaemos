<body id="body-pd" class="page-<?php if (isset($nombre_pagina)) {
                                echo $nombre_pagina;
                            } else {
                                echo "default";
                            } ?> bg-dark">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">A donde Caemos</span> </a>
                <div class="nav_list"> <a href="#" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                    <a href="/Admin/usuarios" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Usuarios</span> </a> 
                    <a href="/Admin/Ubicaciones" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Lugares</span> </a> 
                    <a href="/Admin/Eventos" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Eventos</span> </a>
                    <a href="/Admin/Servicios" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Archivos</span> </a> 
                    <a href="/Admin/Front" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Pagina</span> </a>
                </div>
            </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 fondo-contenedor">
                            
            <main class="bg-l-g-1">

                <?php 
                if (isset($contenido)) {
                    $this->vista($contenido,$datos);
                }
                ?>
            </main> 

    </div>
    <!--Container Main end-->

    <script src="<?php echo $this->base_url() ?>/assets/base_style/js/menu_lateral.js"></script>