<footer class="bg-dark text-white py-4 mt-5">
    <div class="container">
        <div class="row">
            <!-- Columna 1: Logo -->
            <div class="col-12 col-md-3 text-center text-md-start mb-4 mb-md-0">
                <img src="{{ asset('images/logowhite.png') }}" alt="Puerta de Paz" class="img-fluid" style="max-width: 180px;">
            </div>

            <!-- Columna 2: Secciones informativas -->
            <div class="col-6 col-md-3 text-center text-md-start mb-4 mb-md-0">
                <h5>Secciones</h5>
                <ul class="list-unstyled">
                    <li><a href="/sobre-nosotros" class="text-white text-decoration-none">Sobre nosotros</a></li>
                    <li><a href="/historia" class="text-white text-decoration-none">Historia</a></li>
                    <li><a href="/vision-mision" class="text-white text-decoration-none">Visión y misión</a></li>
                    <li><a href="/horarios" class="text-white text-decoration-none">Horarios</a></li>
                </ul>
            </div>

            <!-- Columna 3: Encuéntranos en + Redes Sociales -->
            <div class="col-6 col-md-3 text-center text-md-start mb-4 mb-md-0">
                <h5>Encuéntranos en:</h5>
                <p class="mb-2">123 Calle Principal,<br>Soyapango, El Salvador</p>
                <div class="social-icons">
                    <a href="https://facebook.com/tu-pagina" target="_blank" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://instagram.com/tu-cuenta" target="_blank" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="https://youtube.com/@tu-canal" target="_blank" class="text-white me-3"><i class="fab fa-youtube"></i></a>
                    <a href="https://wa.me/50373894523" target="_blank" class="text-white"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <!-- Columna 4: Contacto -->
            <div class="col-12 col-md-3 text-center text-md-start">
                <h5>Contacto:</h5>
                <p class="mb-0">info@puertadepaz.com<br>multimedia@puertadepaz.com<br>+503 7389 4523</p>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <hr class="bg-secondary">
                <p class="mb-0 small">© 2026 Puerta de Paz. Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>

<style>
    .social-icons a {
        font-size: 1.3rem;
        transition: opacity 0.3s ease;
        display: inline-block;
    }
    .social-icons a:hover {
        opacity: 0.7;
    }
    footer a:hover {
        text-decoration: underline !important;
    }
    
    /* Ajustes para móvil */
    @media (max-width: 768px) {
        .social-icons a {
            font-size: 1.5rem;
            margin: 0 10px;
        }
        footer h5 {
            margin-top: 10px;
        }
    }
</style>