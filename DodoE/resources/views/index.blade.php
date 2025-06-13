<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DodoEventos</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item .card {
            max-width: 400px;
            margin: 0 auto;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .titulo, .subtitulo {
            color: #fff !important;
            text-shadow: 1px 1px 4px #000;
        }
    </style>
</head>
<body class="fondo">
    <h1 class="titulo text-center mt-4">Bienvenido a DodoEventos</h1>
    <div class="container mt-5">
        <h2 class="subtitulo text-center mb-4">Nuestros Eventos</h2>
        <div id="eventosCarrusel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Tarjeta 1 -->
                <div class="carousel-item active">
                    <div class="card text-center">
                        <img src="https://media.lmneuquen.com/p/a827ac219562bfc82bcf656c414b5779/adjuntos/195/imagenes/007/617/0007617264/egresadosjpg.jpg" class="card-img-top" alt="Evento 1">
                        <div class="card-body">
                            <h5 class="card-title">Festival de Verano</h5>
                            <p class="card-text">Un evento lleno de música, comida y diversión para toda la familia.</p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="carousel-item">
                    <div class="card text-center">
                        <img src="https://media.pagina7.cl/2025/02/gala-festival-de-vina-2025.jpg" class="card-img-top" alt="Evento 2">
                        <div class="card-body">
                            <h5 class="card-title">Noche de Gala</h5>
                            <p class="card-text">Una velada elegante con música en vivo y cena de lujo.</p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="carousel-item">
                    <div class="card text-center">
                        <img src="https://veigler.com/wp-content/uploads/2023/02/bodas-2023.jpg" class="card-img-top" alt="Evento 3">
                        <div class="card-body">
                            <h5 class="card-title">Noche de Boda</h5>
                            <p class="card-text">Una boda elegante con música en vivo y cena de lujo junto a tus seres queridos en un evento muy importante.</p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="carousel-item">
                    <div class="card text-center">
                        <img src="https://www.acuakid.com/wp-content/uploads/2017/01/tips-para-preparar-una-fiesta-de-cumpleanos-infantil-sin-estres-1.jpg" class="card-img-top" alt="Evento 4">
                        <div class="card-body">
                            <h5 class="card-title">Fiesta de cumpleaños</h5>
                            <p class="card-text">Celebra en un lugar bonito el cumpleaños de tus sueños.</p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 5 -->
                <div class="carousel-item">
                    <div class="card text-center">
                        <img src="https://articulos.venuesplace.com/FIESTAGRADUPORTADILLA.webp" class="card-img-top" alt="Evento 5">
                        <div class="card-body">
                            <h5 class="card-title">Graduaciones</h5>
                            <p class="card-text">Celebra tu graduación a lo grande.</p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 6 -->
                <div class="carousel-item">
                    <div class="card text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwoCC1ynVlRXYa4B8yNZHYw2k8XcUdZvF-BA&s" class="card-img-top" alt="Evento 6">
                        <div class="card-body">
                            <h5 class="card-title">Baby shower</h5>
                            <p class="card-text">Realiza tus retiros espirituales de una forma que conectes con el Señor.</p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 7 -->
                <div class="carousel-item">
                    <div class="card text-center">
                        <img src="https://www.lavariopinta.com/wp-content/uploads/2020/02/Baby-Shower-1024x750.jpg" class="card-img-top" alt="Evento 7">
                        <div class="card-body">
                            <h5 class="card-title">Baby shower</h5>
                            <p class="card-text">Celebra el baby shower de tu bebé de una forma que nunca lo olvides.</p>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 8 -->
                <div class="carousel-item">
                    <div class="card text-center">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPJnFXsCbzgmFPAIB_Y07U6QFbKIITZqIKlQ&s" class="card-img-top" alt="Evento 8">
                        <div class="card-body">
                            <h5 class="card-title">Capacitaciones</h5>
                            <p class="card-text">Realiza tus capacitaciones en nuestro salón de eventos.</p>
                        </div>
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#eventosCarrusel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#eventosCarrusel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('indexEventos') }}" class="btn btn-primary btn-lg link">Ver todos los eventos</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
