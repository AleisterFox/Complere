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
    <div include-html="header.html"></div>
    <main>
        <section id="contact" style="margin-top: 0; padding-top: 15rem;">
            <h2 class="fadeInUp wow" id="contact-page">Contáctanos</h2>
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
                    <p>Periferico Carlos Pellicer Camara 204, Tabasco 2000 Villa hermosa, Tabasco, 86035, MX.</p>
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