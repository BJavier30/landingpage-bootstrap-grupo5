<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASHKA BOX - Training Club</title>
    <link rel="icon" href="mashkaboximg.jpg" type="image/jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid px-4">

            <a class="navbar-brand d-flex flex-column lh-1" href="#inicio">
                <span class="fw-bold text-warning" style="font-family:'Bebas Neue',sans-serif; font-size:1.4rem; letter-spacing:2px;">MASHKA BOX</span>
                <span class="text-white-50" style="font-size:10px; letter-spacing:3px;">Training Club</span>
            </a>

            <button class="navbar-toggler border-0" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#mainNav"
                    aria-controls="mainNav"
                    aria-expanded="false"
                    aria-label="Abrir menú">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto gap-1">
                    <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#video">Video</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeria">Galería</a></li>
                    <li class="nav-item"><a class="nav-link" href="#entrenamiento">Clases</a></li>
                    <li class="nav-item"><a class="nav-link" href="#productos">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#planes">Planes</a></li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-warning btn-sm text-dark fw-bold px-3 ms-2" href="#contacto">Inscríbete</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>

<section id="inicio" class="bg-black min-vh-100 d-flex align-items-center pt-5 overflow-hidden">
    <div class="container py-5">
        <div class="row align-items-center g-5">

            <!-- Texto -->
            <div class="col-12 col-lg-6 text-center text-lg-start order-2 order-lg-1">

                <div class="d-flex align-items-center gap-2 justify-content-center justify-content-lg-start mb-4">
                    <div class="bg-warning rounded-pill" style="width:40px; height:3px;"></div>
                    <span class="text-warning text-uppercase fw-bold" style="letter-spacing:5px; font-size:0.75rem;">Ciudad Latacunga</span>
                    <div class="bg-warning rounded-pill" style="width:40px; height:3px;"></div>
                </div>

                <h1 class="fw-black text-white lh-1 mb-0" style="font-size: clamp(4rem, 10vw, 7rem); font-family:'Bebas Neue',sans-serif; letter-spacing:4px;">
                    MASHKA
                </h1>
                <h1 class="fw-black lh-1 mb-4" style="font-size: clamp(4rem, 10vw, 7rem); font-family:'Bebas Neue',sans-serif; letter-spacing:4px; -webkit-text-stroke: 2px #FFD700; color: transparent;">
                    BOX
                </h1>

                <p class="text-white mb-1" style="font-size:1.15rem;">
                    No necesitas experiencia.
                </p>
                <p class="fw-bold mb-4" style="font-size:1.15rem; color:#FFD700;">
                    Solo ganas de empezar.
                </p>

                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center justify-content-lg-start mb-5">
                    <a href="#contacto" class="btn btn-warning btn-lg fw-bold text-dark rounded-pill px-5 shadow">
                        Inscríbete Gratis!
                    </a>
                    <a href="#video" class="btn btn-outline-light btn-lg rounded-pill px-4">
                         Descúbrenos.
                    </a>
                </div>

                <div class="row g-3 text-center">
                    <div class="col-4">
                        <div class="border border-warning border-opacity-25 rounded-3 py-3 px-2">
                            <p class="text-warning fw-black mb-0" style="font-size:1.8rem;">5+</p>
                            <p class="text-white-50 mb-0" style="font-size:0.7rem; letter-spacing:2px;">AÑOS</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="border border-warning border-opacity-25 rounded-3 py-3 px-2">
                            <p class="text-warning fw-black mb-0" style="font-size:1.8rem;">200+</p>
                            <p class="text-white-50 mb-0" style="font-size:0.7rem; letter-spacing:2px;">ATLETAS</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Imagen -->
            <div class="col-12 col-lg-6 text-center order-1 order-lg-2 position-relative">

                <div class="position-relative d-inline-block">
                    <div class="rounded-circle bg-warning position-absolute opacity-10"
                         style="width:420px; height:420px; top:50%; left:50%; transform:translate(-50%,-50%); max-width:90vw; max-height:90vw;">
                    </div>
                    <div class="rounded-circle bg-warning position-absolute opacity-25"
                         style="width:320px; height:320px; top:50%; left:50%; transform:translate(-50%,-50%); max-width:70vw; max-height:70vw;">
                    </div>

                    <img src="images/mashkaboximg.jpg" alt="Mashka Box"
                         class="img-fluid rounded-circle border border-warning border-3 shadow-lg position-relative"
                         style="max-width:500px; z-index:2;">
                    </span>
                </div>

            </div>
        </div>
    </div>
</section>

<section id="nosotros">
    <div class="section-inner">
        <h2 class="section-title">Sobre Nosotros</h2>
        <p>Somos un centro de entrenamiento enfocado en mejorar tu rendimiento físico, salud y disciplina mediante entrenamientos funcionales.</p>
        <div class="cards-row">
            <div class="card">
                <span class="card-icon">🎯</span>
                <h3>Misión</h3>
                <p>Mejorar la calidad de vida de cada persona a través del entrenamiento.</p>
            </div>
            <div class="card">
                <span class="card-icon">🏆</span>
                <h3>Visión</h3>
                <p>Ser líderes en entrenamiento funcional en la región.</p>
            </div>
        </div>
    </div>
</section>

<section id="video">
    <div class="section-inner centered">
        <h2 class="section-title">Conoce nuestro entrenamiento</h2>
        <div class="video-box">
            <blockquote class="instagram-media"
                data-instgrm-permalink="https://www.instagram.com/reel/DV_ohLWjizm/"
                data-instgrm-version="14">
            </blockquote>
        </div>
        <script async src="//www.instagram.com/embed.js"></script>
    </div>
</section>

<section id="galeria">
    <div class="section-inner">
        <h2 class="section-title">Galería</h2>
        <h3 class="sub-title">Instalaciones</h3>
        <div class="gallery-grid">
            <img src="12.jpg" alt="Instalación 1">
            <img src="2.jpg" alt="Instalación 2">
            <img src="3.jpg" alt="Instalación 3">
            <img src="5.jpg" alt="Instalación 4">
        </div>
    </div>
</section>

<section id="entrenamiento">
    <div class="section-inner">
        <h2 class="section-title">Clases</h2>
        <div class="gallery-grid six">
            <img src="4.jpg" alt="Clase">
            <img src="6.jpg" alt="Clase">
            <img src="7.jpg" alt="Clase">
            <img src="8.jpg" alt="Clase">
            <img src="9.jpg" alt="Clase">
        </div>
    </div>
</section>

<section id="productos">
    <div class="section-inner">
        <h2 class="section-title">Productos</h2>
        <div class="cards-row">
            <div class="producto-card">
                <h3>🥊 Guantes</h3>
                <p class="precio">$15</p>
                <a href="https://wa.me/593000000000" class="btn-wa">Consultar WhatsApp</a>
            </div>
            <div class="producto-card">
                <h3>💪 Proteína</h3>
                <p class="precio">$40</p>
                <a href="https://wa.me/593000000000" class="btn-wa">Consultar WhatsApp</a>
            </div>
        </div>
    </div>
</section>

<section id="planes">
    <div class="section-inner">
        <h2 class="section-title">Planes</h2>
        <div class="cards-row">
            <div class="plan-card">
                <h3>Plan Grupal</h3>
                <p class="plan-precio">$30<span>/mes</span></p>
                <a href="#contacto" class="btn-primary small">Inscribirme</a>
            </div>
            <div class="plan-card destacado">
                <span class="badge">Popular</span>
                <h3>Plan Mensual</h3>
                <p class="plan-precio">$35<span>/mes</span></p>
                <a href="#contacto" class="btn-dark small">Inscribirme</a>
            </div>
        </div>
    </div>
</section>

<section id="horarios">
    <div class="section-inner centered">
        <h2 class="section-title">Horarios</h2>
        <div class="tabla-box">
            <table>
                <thead>
                    <tr class="tabla-header">
                        <th>Turno</th>
                        <th>Hora 1</th>
                        <th>Hora 2</th>
                        <th>Hora 3</th>
                        <th>Hora 4</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>🌅 Mañana</th>
                        <td>5:00</td>
                        <td>6:00</td>
                        <td>7:00</td>
                        <td>8:00</td>
                    </tr>
                    <tr>
                        <th>🌆 Tarde/Noche</th>
                        <td>16:00</td>
                        <td>17:00</td>
                        <td>18:00</td>
                        <td>19:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php
                // Conexión a la base de datos
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "mashkabox";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }
?>
<section id="contacto">
    <div class="section-inner centered">
        <h2 class="section-title">Contáctanos</h2>
        <div class="form-box">
            <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $conn = new mysqli("localhost", "root", "", "mashkabox");

                    $nombre   = $_POST['nombre']   ?? '';
                    $correo   = $_POST['correo']   ?? '';
                    $telefono = $_POST['telefono'] ?? '';
                    $mensaje  = $_POST['mensaje']  ?? '';

                    $sql = "INSERT INTO clientes (cli_name, cli_email, cli_phone, cli_message)
                            VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<p id='msg-ok' style='color:green'>✅ Mensaje enviado correctamente</p>
                        <script>
                            setTimeout(() => {
                                document.getElementById('msg-ok').style.display = 'none';
                            }, 3000);
                            window.location.hash = '#contacto';
                        </script>";
                    } else {
                        echo "<p style='color:red'>❌ Error: " . $conn->error . "</p>";
                    }

                    $conn->close();
                }
                ?>

            <form class="form-centro" method="POST" action="">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="email" name="correo" placeholder="Correo" required>
                <input type="text" name="telefono" placeholder="Teléfono" required>
                <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                <button class="btn-primary full" type="submit">Enviar mensaje</button>
            </form>
        </div>
    </div>
</section>

<section id="ubicacion">
    <div class="section-inner">
        <h2 class="section-title">Ubicación</h2>
        <div class="mapa-box">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d498.6593947852148!2d-78.6110841!3d-0.9454329!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d461636565889b%3A0x390a2c8fd01dcfa2!2sMashka%20Box%20Training%20Club!5e0!3m2!1ses!2sec!4v1776268327012!5m2!1ses!2sec"
                allowfullscreen loading="lazy">
            </iframe>
        </div>
        <p class="ubicacion-txt">📍 Latacunga, Ecuador</p>
    </div>
</section>

<section id="redes">
    <div class="section-inner centered">
        <h2 class="section-title amarillo">Síguenos</h2>
        <div class="redes-row">
            <a href="#" class="redes-link">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
                <span>Facebook @mashkabox</span>
            </a>
            <a href="#" class="redes-link">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
                <span>Instagram @mashkabox</span>
            </a>
            <a href="#" class="redes-link">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp">
                <span>WhatsApp</span>
            </a>
        </div>
    </div>
</section>

<footer>
    <p>© 2026 MASHKA BOX Training Club — Latacunga, Ecuador</p>
</footer>
<script>
    const toggle = document.getElementById('menuToggle');
    const nav = document.getElementById('mainNav');

    toggle.addEventListener('click', () => {
        nav.classList.toggle('open');
        toggle.classList.toggle('active');
    });

    // Cierra el menú al hacer clic en un enlace
    nav.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            nav.classList.remove('open');
            toggle.classList.remove('active');
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>