<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="Images/LogoNegroMT.png" type="image/x-icon">


    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--==================== SWIPER CSS ====================-->
    <link rel="stylesheet" href="https://dev.dakidarts.com/wixa/assets/css/swiper-bundle.min.css">


    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="https://dev.dakidarts.com/wixa/assets/css/styles.css">
    <link rel="stylesheet" href="Styles.css">

    <title>morrictech.io</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav_logo">MorrisTech</a>
            <div class="nav_menu" id="nav-menu">
                <ul class="nav_list grid">

                    <!-- 
                    - Historia/principal         100%
                    - Productos                  100%
                    - Empresas                   100%
                    - Proyectos                  100%
                    - Equipo                     100%
                    - Formulario contacto        90%
                    - Testimonios                100%
                    -->


                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Principal" class="nav_link active-link">
                            <i class="uil uil-estate nav_icon"></i> Principal
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Conocenos" class="nav_link">
                            <i class="uil uil-user nav_icon"></i> Conocenos
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Productos" class="nav_link">
                            <i class="uil uil-suitcase-alt nav_icon"></i> Productos
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Proyectos" class="nav_link">
                            <i class="uil uil-scenery nav_icon"></i> Proyectos
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Testimonios" class="nav_link">
                            <i class="uil uil-location-arrow nav_icon"></i> Testimonios
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaPrincipal.php #Contactanos" class="nav_link">
                            <i class="uil uil-location-arrow nav_icon"></i> Contactanos
                        </a>
                    </li>
                    <li class="nav_item">
                        <a href="paginaAdministracion.php" class="nav_link">
                            <i class="uil uil-location-arrow nav_icon"></i> Administración
                        </a>
                    </li>
                </ul>
                <i class="uil uil-multiply nav_close" id="nav-close"></i>
            </div>
            <div class="nav_btns">
                <i class="uil uil-moon change-theme" id="theme-button"></i>
                <div class="nav_toggle" id="nav-toggle">
                    <i class="uil uil-apps"></i>
                </div>
            </div>
        </nav>

    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== PRINCIPAL ====================-->
        <section class="home section" id="Principal">
            <div class="home_container container grid">
                <div class="home_content grid">
                    <div class="home_social">
                        <a href="https://github.com/morrisfdz" target="_blank" class="home_social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>

                    <div class="home_img">
                        <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">


                            <image class="home_blob-img" x=12 y=18 href="Images/LogoBlancoMT.png" />

                        </svg>
                    </div>
                    <div class="home_data">
                        <h1 class="home_title">Hola, somos MorrisTech</h1>
                        <h3 class="home_subtitle">Empresa de desarrollo de software</h3>
                        <p class="home_description">Empresa de desarrollo web creada en el Segundo cuadtrimestre del
                            2023 para el curso de programación 5
                            con el fin de diseñar sitios web y aplicaciones que cubran las necesidades de nuestros
                            clientes</p>
                        <a href="#Contactanos" class="button button--flex">
                            Contactanos <i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                </div>
                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button--flex">
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">
                            Deplazarse hacia abajo
                        </span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </a>
                </div>
            </div>

        </section>


        <!--==================== PRODUCTOS ====================-->
        <section class="services section " id="Productos">
            <h3 class="section_title">Productos</h3>
            <span class="section_subtitle">Que ofrecemos</span>

            <div class="services_container container grid">

                <!--==================== PRODUCTO 1 ====================-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-object-group services_icon"></i>
                        <h3 class="services_title">Software <br>Taller Técnico</h3>
                    </div>

                    <span class="button button--flex button--small button--link services_button">
                        Ver características
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>
                    <div class="services_modal">

                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Software <br>Taller Técnico</h4>

                            <h3>Versión gratuita</h3>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de servicios técnicos (Máximo 50 incidencias)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de inventario de repuestos (Máximo 50 productos)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de Proveedores (Máximo 15 Proveedores)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Dashboard estadísticos: Ventas/Costos/Compras/Clientes</p>
                                </li>
                            </ul>

                            <h3><Br>Versión Pago Mensual</h3>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Soporte remoto 24/7</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de servicios técnicos (Incidencias ilimitadas)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de inventario de repuestos (Productos ilimitados)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de Proveedores (Proveedores ilimitados)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Dashboard estadísticos: Ventas/Costos/Compras/Clientes/Estado de servicios/Montos
                                        por cobrar y pagar.</p>
                                </li>
                            </ul>

                            <a href="#Contactanos" class="button button--flex">
                                Contactanos <i class="uil uil-message button_icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!--==================== PRODUCTO 2 ====================-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-object-group services_icon"></i>
                        <h3 class="services_title">Software <br>Finanzas Personales</h3>
                    </div>

                    <span class="button button--flex button--small button--link services_button">
                        Ver características
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>
                    <div class="services_modal">

                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Software <br>Finanzas Personales</h4>

                            <h3>Versión gratuita</h3>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de cuentas (Máximo 2 cuentas)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de billeteras (Máximo 5 billeteras)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de presupuestos (Máximo 5 presupuestos)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de objetivos (Máximo 5 Objetivos)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de Deudas (Máximo 5 Deudas)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Dashboard estadísticos: Ingresos/Egresos/Presupuestos/Objetivos/
                                        Deudas/Recurrentes</p>
                                </li>
                            </ul>

                            <h3><Br>Versión Pago Mensual</h3>

                            <ul class="services_modal-services grid">


                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Versión multiplataforma (Web/Android/IOS)</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Conecta tus billeteras con servicios bancarios</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Realiza pago de los servicios públicos</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de cuentas (Cuentas ilimitadas)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de billeteras (Billeteras ilimitadas)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de presupuestos (Presupuestos ilimitados)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de objetivos (Objetivos ilimitados)</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Control de Deudas (Deudas ilimitadas)</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle service_modal-icon"></i>
                                    <p>Dashboard estadísticos:
                                        Ingresos/Egresos/Presupuestos/Objetivos/
                                        Deudas/Recurrentes</p>
                                </li>
                            </ul>

                            <a href="#Contactanos" class="button button--flex">
                                Contactanos <i class="uil uil-message button_icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <!--==================== Empresas ====================-->
        <section class="portfolio section " id="Proyectos">
            <h2 class="section_title">Empresas</h2>
            <span class="section_subtitle">Empresas con las que hemos trabajado</span>

            <div class="portfolio_container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== EMPRESA 1 ====================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="Images/agronegocios-logo.jpg" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Agronegocios</h3>
                            <p class="portfolio_description">
                                Agronegocios Costa Rica es una organización agrocomercial enfocada al desarrollo de
                                proyectos productivos del agro,
                                con su posterior industrialización y valor agregado, para ser comercializados en los
                                mercados de bienestar nutricional (Salud y Belleza)
                                y ambiental, tanto nacionales como internacionales.
                            </p>
                            <a href="https://www.esencialcostarica.com/empresas-licenciatarias/agricola/agronegocios-costa-rica/"
                                target="_blank" class="button button--flex button--small portfolio_button">
                                Ver sitio
                                <i class="uil uil-eye button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <!--==================== EMPRESA 2 ====================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="Images/demasa_detalle.jpg" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">DEMASA</h3>
                            <p class="portfolio_description">
                                Constiuida en 1972, la empresa comercializa en Costa Rica la tortilla empacada bajo la
                                marca TortiRicas.
                            </p>
                            <a href="https://www.gruma.com/es/nuestras-marcas/empresas/demasa.aspx" target="_blank"
                                class="button button--flex button--small portfolio_button">
                                Ver sitio
                                <i class="uil uil-eye button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <!--==================== EMPRESA 3 ====================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="Images/descarga.png" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Camara de comercio de Costa Rica</h3>
                            <p class="portfolio_description">
                                La Cámara de Comercio vela por los intereses de sus asociados,
                                procurando por prepararlos mejor y brindarles las condiciones ideales para que su
                                negocio pueda prosperar sanamente.
                                También la Cámara ha intervenido en forma sistemática y continua para lograr una
                                actividad neta global razonable para
                                el sector comercial.

                            </p>
                            <a href="https://camara-comercio.com/" target="_blank"
                                class="button button--flex button--small portfolio_button">
                                Ver sitio
                                <i class="uil uil-eye button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <!--==================== EMPRESA 4 ====================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="Images/Fruver-logotipo-001.jpg" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">FRUVER</h3>
                            <p class="portfolio_description">
                                En FRUVER nos dedicamos a la producción y comercialización de piña fresca,
                                deshidratada e industrial, para la exportación y consumo nacional,
                                con altos estándares de calidad y conservación ambiental.
                            </p>
                            <a href="http://www.fruvercox.com/" target="_blank"
                                class="button button--flex button--small portfolio_button">
                                Ver sitio
                                <i class="uil uil-eye button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <!--==================== EMPRESA 5 ====================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="Images/Logo-Deli-Tico.png" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Deli-Tico</h3>
                            <p class="portfolio_description">
                                Distribución de alimentos y productos naturales de cuidado personal, limpieza y
                                desinfección, biodegradables.
                            </p>
                            <a href="https://www.facebook.com/deliticocr" target="_blank"
                                class="button button--flex button--small portfolio_button">
                                Ver sitio
                                <i class="uil uil-eye button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <!--==================== EMPRESA 6 ====================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="Images/logo-eslogan.jpg" style="height:100px;" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">TIO PELON</h3>
                            <p class="portfolio_description">
                                TIO PELON es una marca 100% costarricense que se ha enfocado en producir alimentos de
                                consumo
                                cotidiano acompañando todos los días en la mesa de nuestros hogares,
                                alimentando y nutriendo a todas las familias costarricenses.
                            </p>
                            <a href="https://www.tiopelon.cr/" target="_blank"
                                class="button button--flex button--small portfolio_button">
                                Ver sitio
                                <i class="uil uil-eye button_icon"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev ">
                    <i class="uil uil-angle-left swiper-portfolio-icon"></i>
                </div>

            </div>
        </section>


        <!--==================== PROYECTOS ====================-->
        <section class="portfolio section " id="Proyectos">
            <h2 class="section_title">Proyectos</h2>
            <span class="section_subtitle">Nuestro trabajo más reciente</span>

            <div class="portfolio_container container swiper-container">
                <div class="swiper-wrapper">
                    <!--==================== PORTFOLIO 1 ====================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="https://dev.dakidarts.com/wixa/assets/img/portfolio1.jpg" alt=""
                            class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Finanzas personales</h3>
                            <p class="portfolio_description">
                                Administra tus finanzas personales desde cualquier lugar con nuestro sitio web y
                                plataforma móvil.
                            </p>
                            <a href="#" class="button button--flex button--small portfolio_button">
                                View
                                <i class="uil uil-eye button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <!--==================== PORTFOLIO 2 ====================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="https://dev.dakidarts.com/wixa/assets/img/portfolio2.jpg" alt=""
                            class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Spoti5</h3>
                            <p class="portfolio_description">
                                Escucha música desde cualquier lugar con nuestro sitio web y plataforma móvil.
                            </p>
                            <a href="#" class="button button--flex button--small portfolio_button">
                                View
                                <i class="uil uil-eye button_icon"></i>
                            </a>
                        </div>
                    </div>

                    <!--==================== PORTFOLIO 3 ====================-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="https://dev.dakidarts.com/wixa/assets/img/portfolio3.jpg" alt=""
                            class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Administrador de Tareas</h3>
                            <p class="portfolio_description">
                                Administra tus tareas desde cualquier lugar con nuestro sitio web y plataforma móvil.
                            </p>
                            <a href="#" class="button button--flex button--small portfolio_button">
                                View
                                <i class="uil uil-eye button_icon"></i>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev ">
                    <i class="uil uil-angle-left swiper-portfolio-icon"></i>
                </div>

            </div>
        </section>

        <!--==================== Conocenos ====================-->
        <section class="about section" id="Conocenos">
            <h2 class="section_title">Conocenos</h2>
            <span class="section_subtitle">Nuestro equipo</span>


            <section>


                <div class="container">
                    <h4 class="section_title">Mauricio Fernández</h4>
                    <div class="row">

                        <div class="about_container container grid">
                            <img src="Images/FotoPersonal.jpg" alt="" class="about_img">

                            <div class="about_data">
                                <p class="about_description">CEO Y Desarrollador web, con amplio conocimiento y años de
                                    experiencia
                                    trabajando con equipos de trabajo en proyectos tecnológicos.</p>
                                <div class="about_info">
                                    <div>
                                        <span class="about_info-title">+4</span>
                                        <span class="about_info-name">Años de <br> experiencia</span>
                                    </div>
                                    <div>
                                        <span class="about_info-title">+41</span>
                                        <span class="about_info-name">Proyectos <br> completados</span>
                                    </div>
                                    <div>
                                        <span class="about_info-title">+4</span>
                                        <span class="about_info-name">Empresas <br> laboradas</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section class="skills section" id="skills">
                            <div class="about_info">
                                <div>
                                    <!--==================== HABILIDAD 1 ====================-->
                                    <div class="skills_content skills_close">
                                        <div class="skills_header">
                                            <i class="uil uil-brackets-curly skills_icon"></i>
                                            <div>
                                                <h1 class="skills_title">Desarrollo Front End</h1>
                                                <span class="skills_subtitle">
                                                    Más de 4 años de experiencia.
                                                </span>
                                            </div>
                                            <i class="uil uil-angle-down skills_arrow"></i>
                                        </div>
                                        <div class="skills_list grid">
                                            <div class="skills_data">
                                                <div class="skills_titles">
                                                    <h3 class="skills_name">HTML</h3>
                                                    <span class="skills_number">95%</span>
                                                </div>
                                                <div class="skills_bar">
                                                    <span class="skills_percentage skills_html"></span>
                                                </div>
                                            </div>
                                            <div class="skills_data">
                                                <div class="skills_titles">
                                                    <h3 class="skills_name">CSS</h3>
                                                    <span class="skills_number">90%</span>
                                                </div>
                                                <div class="skills_bar">
                                                    <span class="skills_percentage skills_css"></span>
                                                </div>
                                            </div>
                                            <div class="skills_data">
                                                <div class="skills_titles">
                                                    <h3 class="skills_name">JavaScript</h3>
                                                    <span class="skills_number">85%</span>
                                                </div>
                                                <div class="skills_bar">
                                                    <span class="skills_percentage skills_js"></span>
                                                </div>
                                            </div>
                                            <div class="skills_data">
                                                <div class="skills_titles">
                                                    <h3 class="skills_name">React</h3>
                                                    <span class="skills_number">90%</span>
                                                </div>
                                                <div class="skills_bar">
                                                    <span class="skills_percentage skills_react"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!--==================== HABILIDAD 2 ====================-->
                                    <div class="skills_content skills_close">
                                        <div class="skills_header">
                                            <i class="uil uil-server-connection skills_icon"></i>
                                            <div>
                                                <h1 class="skills_title">Desarrollo Backend End</h1>
                                                <span class="skills_subtitle">
                                                    Más de 2 años de experiencia.
                                                </span>
                                            </div>
                                            <i class="uil uil-angle-down skills_arrow"></i>
                                        </div>
                                        <div class="skills_list grid">
                                            <div class="skills_data">
                                                <div class="skills_titles">
                                                    <h3 class="skills_name">PHP</h3>
                                                    <span class="skills_number">85%</span>
                                                </div>
                                                <div class="skills_bar">
                                                    <span class="skills_percentage skills_php"></span>
                                                </div>
                                            </div>
                                            <div class="skills_data">
                                                <div class="skills_titles">
                                                    <h3 class="skills_name">Java</h3>
                                                    <span class="skills_number">70%</span>
                                                </div>
                                                <div class="skills_bar">
                                                    <span class="skills_percentage skills_node"></span>
                                                </div>
                                            </div>
                                            <div class="skills_data">
                                                <div class="skills_titles">
                                                    <h3 class="skills_name">Python</h3>
                                                    <span class="skills_number">80%</span>
                                                </div>
                                                <div class="skills_bar">
                                                    <span class="skills_percentage skills_python"></span>
                                                </div>
                                            </div>
                                            <div class="skills_data">
                                                <div class="skills_titles">
                                                    <h3 class="skills_name">.NET</h3>
                                                    <span class="skills_number">80%</span>
                                                </div>
                                                <div class="skills_bar">
                                                    <span class="skills_percentage skills_firebase"></span>
                                                </div>
                                            </div>
                                            <div class="skills_data">
                                                <div class="skills_titles">
                                                    <h3 class="skills_name">VisualBasic</h3>
                                                    <span class="skills_number">70%</span>
                                                </div>
                                                <div class="skills_bar">
                                                    <span class="skills_percentage skills_firebase"></span>
                                                </div>
                                            </div>
                                            <div class="skills_data">
                                                <div class="skills_titles">
                                                    <h3 class="skills_name">C#</h3>
                                                    <span class="skills_number">60%</span>
                                                </div>
                                                <div class="skills_bar">
                                                    <span class="skills_percentage skills_firebase"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </section>



                    </div>
                </div>
            </section>

        </section>




        <!--==================== LOGROS ====================-->
        <section class=" qualification section">
            <h2 class="section_title ">Logros</h2>
            <span class="section_subtitle ">Mis logros académicos, laborales y certificaciones</span>

            <div class="qualification_container container ">
                <div class="qualification_tabs ">
                    <div class="qualification_button button--flex qualification_active" data-target='#education'>
                        <i class="uil uil-graduation-cap qualification_icon "></i>
                        Educación
                    </div>
                    <div class="qualification_button button--flex" data-target='#work'>
                        <i class="uil uil-suitcase qualification_icon "></i>
                        Trabajos
                    </div>
                    <div class="qualification_button button--flex" data-target='#certifies'>
                        <i class="uil uil-suitcase qualification_icon "></i>
                        Certificados
                    </div>
                </div>
                <div class="qualification_sections ">
                    <!--==================== LOGROS CONTENIDO ACADÉMICO ====================-->
                    <div class="qualification_content qualification_active" data-content id='education'>
                        <!--==================== LOGRO 1 ====================-->
                        <div class="qualification_data ">

                            <div>
                                <h3 class="qualification_title ">Diseño Gráfico</h3>
                                <span class="qualification_subtitle ">UCR - Universidad de Costa Rica</span>
                                <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2016 - 2018</div>
                            </div>
                            <div>
                                <span class="qualification_rounder "></span>
                                <span class="qualification_line "></span>
                            </div>
                        </div>
                        <!--==================== LOGRO 2 ====================-->
                        <div class="qualification_data ">
                            <div></div>
                            <div>
                                <span class="qualification_rounder "></span>
                                <span class="qualification_line "></span>
                            </div>
                            <div>
                                <h3 class="qualification_title ">Técnico en Inglés para Servicios</h3>
                                <span class="qualification_subtitle ">INA - Instituto Nacional de Aprendizaje</span>
                                <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2018 - 2019</div>
                            </div>
                        </div>
                        <!--==================== LOGRO 3 ====================-->
                        <div class="qualification_data ">
                            <div>
                                <h3 class="qualification_title ">Informática (Ofimática)</h3>
                                <span class="qualification_subtitle ">INA - Instituto Nacional de Aprendizaje</span>
                                <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2019 - 2019</div>
                            </div>
                            <div>
                                <span class="qualification_rounder "></span>
                                <span class="qualification_line "></span>
                            </div>
                        </div>
                        <!--==================== LOGRO 4 ====================-->
                        <div class="qualification_data ">
                            <div></div>
                            <div>
                                <span class="qualification_rounder "></span>
                                <span class="qualification_line "></span>
                            </div>
                            <div>
                                <h3 class="qualification_title ">Mantenimiento y Reparación de Equipos de Cómputo</h3>
                                <span class="qualification_subtitle ">INA - Instituto Nacional de Aprendizaje</span>
                                <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2019 - 2020</div>
                            </div>

                        </div>
                        <!--==================== LOGRO 5 ====================-->
                        <div class="qualification_data ">
                            <div>
                                <h3 class="qualification_title ">Dirección y Administración de Empresas</h3>
                                <span class="qualification_subtitle ">CUC - Colegio Universitario de Cartago</span>
                                <div class="qualification_calendar "><i class="uil uil-schedule "></i>2018 - 2021</div>
                            </div>
                            <div>
                                <span class="qualification_rounder "></span>
                                <span class="qualification_line "></span>
                            </div>
                        </div>
                        <!--==================== LOGRO 6 ====================-->
                        <div class="qualification_data ">
                            <div></div>
                            <div>
                                <span class="qualification_rounder "></span>
                            </div>
                            <div>
                                <h3 class="qualification_title ">Tecnologías de Información</h3>
                                <span class="qualification_subtitle ">CUC - Colegio Universitario de Cartago</span>
                                <div class="qualification_calendar "><i class="uil uil-schedule "></i>2021 - Actualmente
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!--==================== LOGROS CONTENIDO LABORAL ====================-->
                <div class="qualification_content" data-content id='work'>
                    <!--==================== LOGRO 1 ====================-->
                    <div class="qualification_data ">

                        <div>
                            <h3 class="qualification_title ">Tutorías Universitarias</h3>
                            <h6 class="qualification_title ">- Fundamentos de Programación</h6>
                            <h6 class="qualification_title ">- Computación para administrar</h6>
                            <span class="qualification_subtitle ">CUC - Colegio Universitario de Cartago</span>
                            <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2016 - 2018</div>
                        </div>
                        <div>
                            <span class="qualification_rounder "></span>
                            <span class="qualification_line "></span>
                        </div>
                    </div>
                    <!--==================== LOGRO 2 ====================-->
                    <div class="qualification_data ">
                        <div></div>
                        <div>
                            <span class="qualification_rounder "></span>
                            <span class="qualification_line "></span>
                        </div>
                        <div>
                            <h3 class="qualification_title ">Técnico en Equipos de Cómputo</h3>
                            <span class="qualification_subtitle ">Componentes el Orbe</span>
                            <div class="qualification_calendar "><i class="uil uil-schedule "></i> Feb 2022 - Abril 2022
                            </div>
                        </div>
                    </div>
                    <!--==================== LOGRO 3 ====================-->
                    <div class="qualification_data ">
                        <div>
                            <h3 class="qualification_title ">Técnico en Equipos de Cómputo</h3>
                            <span class="qualification_subtitle ">Software Security / Centro Educativo Bilingue
                                Sonny</span>
                            <div class="qualification_calendar "><i class="uil uil-schedule "></i> Sept 2022 - Dic 2022
                            </div>
                        </div>
                        <div>
                            <span class="qualification_rounder "></span>
                            <span class="qualification_line "></span>
                        </div>
                    </div>
                    <!--==================== LOGRO 4 ====================-->
                    <div class="qualification_data ">
                        <div></div>
                        <div>
                            <span class="qualification_rounder "></span>
                        </div>
                        <div>
                            <h3 class="qualification_title ">Técnico en Sistemas Informáticos</h3>
                            <span class="qualification_subtitle ">IMESA Sistemas</span>
                            <div class="qualification_calendar "><i class="uil uil-schedule "></i> Dic 2022 -
                                Actualmente</div>
                        </div>

                    </div>

                </div>

                <!--==================== LOGROS CONTENIDO CERTIFICACIONES ====================-->
                <div class="qualification_content qualification_active" data-content id='certifies'>
                    <!--==================== LOGRO 1 ====================-->
                    <div class="qualification_data ">

                        <div>
                            <h3 class="qualification_title ">Despertar Emprendedores</h3>
                            <span class="qualification_subtitle ">CUC - Colegio Universitario de Cartago</span>
                            <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2021</div>
                        </div>
                        <div>
                            <span class="qualification_rounder "></span>
                            <span class="qualification_line "></span>
                        </div>
                    </div>
                    <!--==================== LOGRO 2 ====================-->
                    <div class="qualification_data ">
                        <div></div>
                        <div>
                            <span class="qualification_rounder "></span>
                            <span class="qualification_line "></span>
                        </div>
                        <div>
                            <h3 class="qualification_title ">Get Connected</h3>
                            <span class="qualification_subtitle ">Cisco Networking Academy</span>
                            <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2020</div>
                        </div>
                    </div>
                    <!--==================== LOGRO 3 ====================-->
                    <div class="qualification_data ">
                        <div>
                            <h3 class="qualification_title ">LNG Unhatched Linux</h3>
                            <span class="qualification_subtitle ">Cisco Networking Academy</span>
                            <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2021</div>
                        </div>
                        <div>
                            <span class="qualification_rounder "></span>
                            <span class="qualification_line "></span>
                        </div>
                    </div>
                    <!--==================== LOGRO 4 ====================-->
                    <div class="qualification_data ">
                        <div></div>
                        <div>
                            <span class="qualification_rounder "></span>
                            <span class="qualification_line "></span>
                        </div>
                        <div>
                            <h3 class="qualification_title ">Introducing to Cibersecurity</h3>
                            <span class="qualification_subtitle ">Cisco Networking Academy</span>
                            <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2022</div>
                        </div>
                    </div>
                    <!--==================== LOGRO 5 ====================-->
                    <div class="qualification_data ">
                        <div>
                            <h3 class="qualification_title ">Networking Basics</h3>
                            <span class="qualification_subtitle ">Cisco Networking Academy</span>
                            <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2022</div>
                        </div>
                        <div>
                            <span class="qualification_rounder "></span>
                            <span class="qualification_line "></span>
                        </div>
                    </div>
                    <!--==================== LOGRO 6 ====================-->
                    <div class="qualification_data ">
                        <div></div>
                        <div>
                            <span class="qualification_rounder "></span>
                        </div>
                        <div>
                            <h3 class="qualification_title ">Python Essentials 1</h3>
                            <span class="qualification_subtitle ">Cisco Networking Academy</span>
                            <div class="qualification_calendar "><i class="uil uil-schedule "></i> 2023</div>
                        </div>
                    </div>

                </div>

            </div>

        </section>





        <!--==================== Contactarnos ====================-->
        <section class="project section">
            <div class="project_bg">
                <div class="project_container container grid">
                    <div class="project">
                        <h2 class="project_title">
                            ¿Tienes un proyecto en mente?
                        </h2>
                        <p class="project_description">
                            Contactanos ahora mismo y obtendras un 25% en el costo de tu primer proyecto.
                        </p>
                        <a href="#Contactanos" class="button button--flex button--white">
                            Contactanos <i class="uil uil-location-arrow project_icon button_icon"></i>
                        </a>
                    </div>
                    <img src="Images/Contactanos.svg.png" alt="" class="project_img">
                </div>
            </div>

        </section>

        <!--==================== Testimonios ====================-->
        <section class="testimonial section " id="Testimonios">
            <h2 class="section_title">Testimonios</h2>
            <span class="section_subtitle">¿Quieres dejar tu comentario?</span>

            <div class="contact_container container grid">

                <!--Formulario de testimonios-->
                <form action="../controller/index.php" method="POST" class="contact_form grid">
                    <div class="contact_inputs grid">
                        <div class="contact_content">
                            <label for="nombreTestimonio" class="contact_label">Nombre</label>
                            <input type="text" name="nombreTestimonio" class="contact_input" required>
                        </div>
                        <div class="contact_content">
                            <label for="puesto" class="contact_label">Puesto</label>
                            <input type="text" name="puesto" class="contact_input" required>
                        </div>
                        <div class="contact_content">
                            <label for="calificacion" class="contact_label">Calificacion</label>
                            <input type="number" min="1" max="5" name="calificacion" class="contact_input" required>
                        </div>
                    </div>
                    <div class="contact_content">
                        <label for="comentario" class="contact_label">Comentario</label>
                        <textarea name="comentario" cols="0" rows="3" class="contact_input" required></textarea>
                    </div>
                    <div>
                        <input type="submit" class="button button--flex" value="Agregar testimonio">
                    </div>
                </form>
            </div>
            <br>


            <div class="testimonial_container container swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    require '../config.php';
                    require_once '../model/formularioTestimonios.php';

                    $formularioTestimonios = new formularioTestimonios($conn);
                    $testimonios = $formularioTestimonios->obtenerTestimonios();

                    foreach ($testimonios as $testimonio) {
                        echo '<div class="testimonial_content swiper-slide">';
                        echo '<div class="testimonial_data">';
                        echo '<div class="testimonial_header">';
                        echo '<img src="https://dev.dakidarts.com/wixa/assets/img/testimonial1.jpg" alt=""';
                        echo 'class="testimonial_img">';
                        echo '<div>';
                        echo '<h3 class="testimonial_name">' . $testimonio['nombreTestimonio'] . '</h3>';
                        echo '<span class="testimonial_client">' . $testimonio['puesto'] . '</span>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div>';
                        echo '<i class="uil uil-star testimonial_icon-star "></i>';
                        echo '<i class="uil uil-star testimonial_icon-star"></i>';
                        echo '<i class="uil uil-star testimonial_icon-star"></i>';
                        echo '<i class="uil uil-star testimonial_icon-star"></i>';
                        echo '<i class="uil uil-star testimonial_icon-star"></i>';
                        echo '</div>';

                        echo '</div>';
                        echo '<span class="testimonial_description">' . $testimonio['comentario'] . '</span>';
                        echo '<br>';
                        echo '<a class="testimonial_description"> Calificación: ' . $testimonio['calificacion'] . '</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="swiper-pagination swiper-pagination-testimonial"></div>
            </div>

        </section>

        <!--==================== CONTACTANOS ====================-->
        <section class="contact section " id="Contactanos">
            <h2 class="section_title">Contactanos</h2>
            <span class="section_subtitle">Envianos tu idea</span>

            <div class="contact_container container grid">
                <div>
                    <div class="contact_info">
                        <i class="uil uil-phone contact_icon"></i>
                        <div>
                            <h3 class="contact_title">Llamanos</h3>
                            <span class="contact_subtitle">(+506) 7111-6249</span>
                        </div>
                    </div>
                    <div class="contact_info">
                        <i class="uil uil-envelope contact_icon"></i>
                        <div>
                            <h3 class="contact_title">Correo</h3>
                            <span class="contact_subtitle">mauricio.fernandez.ramirez@cuc.cr</span>
                        </div>
                    </div>
                    <div class="contact_info">
                        <i class="uil uil-map-marker contact_icon"></i>
                        <div>
                            <h3 class="contact_title">Ubicación</h3>
                            <span class="contact_subtitle">San Francisco Dos Ríos, San José, Costa Rica</span>
                        </div>
                    </div>
                </div>
                <!--Formuario Proyectos-->
                <form action="../controller/index.php" method="POST" class="contact_form grid">
                    <div class="contact_inputs grid">
                        <div class="contact_content">
                            <label for="nombre" class="contact_label">Nombre</label>
                            <input type="text" name="nombre" class="contact_input" required>
                        </div>
                        <div class="contact_content">
                            <label for="correo" class="contact_label">Correo</label>
                            <input type="email" name="correo" class="contact_input" required>
                        </div>

                    </div>
                    <div class="contact_content">
                        <label for="categoriaProyecto" class="contact_label">Proyecto</label>
                        <input type="text" name="categoriaProyecto" class="contact_input" required>
                    </div>
                    <div class="contact_content">
                        <label for="descripcion" class="contact_label">Descripción del proyecto</label>
                        <textarea name="descripcion" cols="0" rows="7" class="contact_input" required></textarea>
                    </div>
                    <div>

                        <input type="submit" class="button button--flex" value="Enviar Solicitud">
                    </div>
                </form>





            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer ">
        <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">MorricTech</h1>
                    <span class="footer_subtitle">Empresa de desarrollo web</span>
                </div>
                <ul class="footer_links">
                    <li>
                        <a href="#Productos" class="footer_link">Productos</a>
                    </li>
                    <li>
                        <a href="#Proyectos" class="footer_link">Proyectos</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer_link"></a>
                    </li>
                </ul>
                <div class="footer_socials">
                    <a href="https://www.facebook.com/profile.php?id=100009462886476" target="_blank"
                        class="footer_social">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer_social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://github.com/morrisfdz" target="_blank" class="footer_social">
                        <i class="uil uil-github-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer_copy">&#169; CUC - II - 2023 <a class="footerd">Desarrollado
                    por MorrisTech</a></p>
        </div>

    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="uil uil-arrow-up scrollup_icon"></i>
    </a>



    <script src="https://dev.dakidarts.com/wixa/assets/js/swiper-bundle.min.js"></script>
    <script src="https://dev.dakidarts.com/wixa/assets/js/main.js"></script>





</body>

</html>