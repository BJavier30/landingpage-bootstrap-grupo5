<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASHKA BOX - Training Club</title>
    <link rel="icon" href="mashkaboximg.jpg" type="image/jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000000;
            color: #ffffff;
        }
        .form-control {
            background-color: #000000 !important;
            color: #ffffff !important;
            border-color: #ffc107 !important;
        }
        .form-control::placeholder {
            color: #aaaaaa !important;
        }
        .form-control:focus {
            background-color: #000000 !important;
            color: #ffffff !important;
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.3) !important;
        }
        section {
            background-color: #000000;
        }
        footer {
            background-color: #000000 !important;
        }
        footer img {
            width: 28px !important;
            height: 28px !important;
        }
    </style>
</head>

<body>

<header>
    <div class="header-inner">
        <div class="logo">
            <span class="logo-main">MASHKA BOX</span>
            <span class="logo-sub">Training Club</span>
        </div>
        <button class="menu-toggle" id="menuToggle" aria-label="Abrir menú">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <nav id="mainNav">
            <a href="#inicio">Inicio</a>
            <a href="#nosotros">Nosotros</a>
            <a href="#video">Video</a>
            <a href="#galeria">Galería</a>
            <a href="#entrenamiento">Clases</a>
            <a href="#productos">Productos</a>
            <a href="#planes">Planes</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </div>
</header>

<section id="inicio">
    <div class="hero-content">
        <div class="hero-img">
            <img src="mashkaboximg.jpg" alt="Mashka Box">
        </div>
        <div class="hero-text">
            <h1>MASHKA BOX</h1>
            <p class="hero-sub">Training Club</p>
            <p class="hero-tagline">No necesitas experiencia.<br>Solo ganas de empezar.</p>
            <a href="#contacto" class="btn-primary">Inscríbete Gratis</a>
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

<section id="horarios" class="py-5">
    <div class="container text-center">
        <h2 class="section-title text-warning mb-4">Horarios</h2>
        <div class="table-responsive d-flex justify-content-center">
            <table class="table table-dark table-hover table-bordered text-center align-middle" style="max-width: 650px;">
                <thead>
                    <tr class="table-warning text-dark">
                        <th>Turno</th>
                        <th>Lunes</th>
                        <th>Miércoles</th>
                        <th>Viernes</th>
                        <th>Sábado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="table-warning text-dark">🌅 Mañana</th>
                        <td>6:00 AM</td>
                        <td>7:00 AM</td>
                        <td>8:00 AM</td>
                        <td>9:00 AM</td>
                    </tr>
                    <tr>
                        <th class="table-warning text-dark">🌆 Tarde</th>
                        <td>4:00 PM</td>
                        <td>5:00 PM</td>
                        <td>6:00 PM</td>
                        <td>7:00 PM</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="contacto" class="py-5">
    <div class="container">
        <div class="row gap-4 justify-content-center">

            <!-- FORMULARIO IZQUIERDA -->
            <div class="col-md-5">
                <h2 class="section-title text-warning text-center mb-4">Contáctanos</h2>
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
                        echo "<div class='alert alert-success'>✅ Mensaje enviado correctamente</div>";
                    } else {
                        echo "<div class='alert alert-danger'>❌ Error: " . $conn->error . "</div>";
                    }
                    $conn->close();
                }
                ?>
                <form class="p-4 bg-dark rounded border border-warning" method="POST" action="">
                    <div class="mb-3">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="correo" class="form-control" placeholder="Correo" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="mensaje" class="form-control" rows="5" placeholder="Mensaje" required></textarea>
                    </div>
                    <button class="btn btn-warning w-100 fw-bold" type="submit">Enviar mensaje</button>
                </form>
            </div>

            <!-- MAPA DERECHA -->
            <div class="col-md-5">
                <h2 class="section-title text-warning text-center mb-4">Ubicación</h2>
                <div class="ratio ratio-16x9" style="border: 4px solid #ffc107; border-radius: 12px; overflow: hidden;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d498.6593947852148!2d-78.6110841!3d-0.9454329!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d461636565889b%3A0x390a2c8fd01dcfa2!2sMashka%20Box%20Training%20Club!5e0!3m2!1ses!2sec!4v1776268327012!5m2!1ses!2sec"
                        allowfullscreen loading="lazy">
                    </iframe>
                </div>
                <p class="text-secondary mb-0">© 2026 MASHKA BOX Training Club — 📍 Latacunga - Ecuador</p>
                <p class="text-secondary mb-0">📞 +593 99 999 9999 &nbsp;|&nbsp; ✉️ info@mashkabox.com</p>
            </div>

        </div>
    </div>
</section>

<footer class="py-4 border-top border-warning text-center">
    <div class="container">
        <div class="d-flex flex-wrap justify-content-center gap-4 mb-3">
            <a href="#" class="text-warning text-decoration-none d-flex align-items-center gap-2">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" width="28" height="28">
                <span>Facebook @mashkabox</span>
            </a>
            <a href="#" class="text-warning text-decoration-none d-flex align-items-center gap-2">
                <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram" width="28" height="28">
                <span>Instagram @mashkabox</span>
            </a>
            <a href="#" class="text-warning text-decoration-none d-flex align-items-center gap-2">
                <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp" width="28" height="28">
                <span>WhatsApp</span>
            </a>
        </div>
        <p class="text-secondary mb-0">© 2026 MASHKA BOX Training Club — Latacunga, Ecuador</p>
    </div>
</footer>

<script>
    const toggle = document.getElementById('menuToggle');
    const nav = document.getElementById('mainNav');
    toggle.addEventListener('click', () => {
        nav.classList.toggle('open');
        toggle.classList.toggle('active');
    });
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