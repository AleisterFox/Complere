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
    <script src="js/include-html.js"></script>
    <main>
        <section id="complaints">
            <img class="fadeIn wow" src="img/complaints.jpg" alt="Dos abogadas revisando documentos">
            <h1 class="fadeInLeft wow">Canal de denuncias</h1>
            <p class="fadeInLeft wow">Nuestro Canal de Denuncias es un instrumento de comunicación para elevar a la alta dirección de manera anónima, confidencial y segura, cualquier irregularidad, permitirá que sus empleados, clientes y proveedores puedan informar fraudes y situaciones anómalas que ocurran dentro del ámbito de su empresa o bien expresar ideas para mejorar los procesos internos de la organización.</p>

            <div class="socials fadeIn wow">
                <div class="ig">
                    <img src="icons/ig2.png" alt="icono de instagram">
                    <p>@complerecomplianceconsulting</p>
                </div>
                <div class="fb">
                    <img src="icons/fb2.png" alt="icono de facebook">
                    <p>Complere Compliance Consulting</p>
                </div>
                <div class="ln">
                    <img src="icons/ln2.png" alt="icono de linkedin">
                    <p>Complere Compliance Consulting</p>
                </div>
            </div>
        </section>
        
        <section id="contact" style="margin-top: 0; padding-top: 15rem;">
            <h2 class="fadeInUp wow">Haz tu denuncia</h2>
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
    </main>

    <div include-html="footer.html"></div>
    <script src="js/include-html.js"></script>
    <script src="js/index.js"></script>
</body>

</html>