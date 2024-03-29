<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo_mini.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <title>Complere</title>
</head>

<body onload=menuDisplay()>
    <header id="header">
        <nav>
            <a href="index.php">
                <figure>
                    <img src="img/logo_mini.png" alt="Complere Logo">
                </figure>
            </a>
            <ul class="menu">
                <li><a href="#us">Nosotros</a></li>
                <li class="dropdown">
                    <a href="#" class="dropbtn">Compliance <i class="fa-solid fa-chevron-down"></i></a>
                    <div class="dropdown-content">
                        <a href="corporative.php">Compliance Corporativo</a>
                        <a href="training.php">Capacitación en Compliance</a>
                    </div>
                </li>
                <li><a href="complaints.php">Canal de denuncias</a></li>
                <li><a href="services.php">Servicios legales</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
            <i class="fa-solid fa-bars menu__button"></i>
        </nav>
    </header>
    <main>
        <section id="hero">
            <img class="fadeIn wow" src="img/hero.jpg" alt="Abogado en traje">
            <div class="container fadeInUp wow">
                <figure>
                    <img loading="lazy" src="img/Logotipo Principal-02.png" alt="Logotipo">
                </figure>
                <h2>Nuestra estructura compacta y esquema de servicios, nos permite ofrecer atención personalizada y
                    exclusiva.</h2>
                <a href="" class="button button_gold">Asesoramiento</a>
            </div>
        </section>
        <section id="us">
            <p class="quotes fadeIn wow">“</p>
            <h3 class="fadeIn wow">Somos una firma con más de 20 años de experiencia.</h3>
            <div class="container">
                <figure class="fadeInLeft wow">
                    <img loading="lazy" src="img/us.jpg" alt="Equipo de trabajo en una reunión">
                </figure>
                <div class="description fadeInRight wow">
                    <h2>Nosotros</h2>
                    <p>Ofrecemos servicios jurídicos integrales en Compliance y derecho corporativo a particulares,
                        pymes y entidades públicas, mediante la construcción de soluciones y criterios legales
                        respaldados en una constante actualización, conocimiento y madurez, privilegiando la
                        implementación de estrategias preventivas.</p>
                    <a href="about.php" class="button button_gold">Leer más</a>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container slideInLeft wow">
                <h2>Servicios</h2>
                <p>Nuestra estructura compacta y esquema de servicios, nos permite ofrecer atención personalizada y
                    exclusiva.</p>
            </div>
            <div class="services slideInRight wow">
                <div class="service">
                    <img loading="lazy" src="img/corporativo.jpg" alt="Abogado dando la mano a cliente">
                    <div class="fg"></div>
                    <p>01</p>
                    <h4>Compliance corporativo</h4>
                </div>
                <div class="service">
                    <img loading="lazy" src="img/legals.jpg" alt="Equipo de abogados">
                    <div class="fg"></div>
                    <p>02</p>
                    <h4>Servicios legales</h4>
                </div>
                <div class="service">
                    <img loading="lazy" src="img/compliance.jpg" alt="Abogado dando">
                    <div class="fg"></div>
                    <p>03</p>
                    <h4>capacitaciones en compliance</h4>
                </div>
                <div class="service">
                    <img loading="lazy" src="img/corporativo.jpg" alt="">
                    <div class="fg"></div>
                    <p>04</p>
                    <h4>Compliance corporativo</h4>
                </div>
            </div>
        </section>
        <section id="ceo">
            <div class="container  fadeInLeft wow">
                <h3>Director General</h3>
                <h2>Eliseo Gordillo Alvarez</h2>
                <p class="quotes mini">“</p>
                <p>Más de 20 años de experiencia en servicios de asesoramiento, consultoría y representación en áreas jurídicas claves para la prevención de riesgos y el cumplimiento normativo de las organizaciones.</p>
                <div><a href="" class="button button_gold">Ver más</a></div>
            </div>
        </section>
        <section id="contact">
            <div class="wca">
                <h3>Somos miembros asociados a la</h3>
                <figure>
                    <img src="img/wca_logo_asociado.png" alt="Logo World Compliance Association">
                </figure>
            </div>

            <h2 class="fadeInUp wow">Contáctanos</h2>
            <form class="fadeInUp wow" action="">
                <input id="name" name="name" type="text" placeholder="Nombre">
                <input id="lastname" name="lastname" type="text" placeholder="Apellidos">
                <input id="email" name="email" type="email" placeholder="Correo">
                <input id="phone" name="phone" type="tel" placeholder="Teléfono">
                <div class="message">
                    <label for="message">Mensaje</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <a href="" class="button button_gold">Enviar</a>
            </form>
        </section>
        <section id="location">
            <div class="container slideInLeft wow">
                <h2>Ubicación</h2>
                <div class="address">
                    <i class="fa-solid fa-location-dot"></i>
                    <p>Periferico Carlos Pellicer Camara 204, Tabasco 2000 Villahermosa, Tabasco, 86035, MX.</p>
                </div>
                <a href="" class="button button_blue">
                    Cómo llegar <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            <iframe class="slideInRight wow"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Periferico%20Carlos%20Pellicer%20Camara%20204,%20Tabasco%202000%20Villa%20hermosa,%20Tabasco,%2086035,%20MX.+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </section>
    </main>

    <div include-html="footer.html"></div>
    <script src="js/include-html.js"></script>
    <script src="js/index.js"></script>
</body>

</html>