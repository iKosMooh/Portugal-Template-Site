<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portugal - Volta ao Mundo Jr.</title>
    <link rel="icon" href="/images/icon.png" type="image/png">
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --verde-portugal: #046a38;
            --vermelho-portugal: #c31118;
            --dourado: #ffd700;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background: #f8f9fa;
        }

        .hero-section {
            background: linear-gradient(rgba(4, 106, 56, 0.8), rgba(4, 106, 56, 0.8)),
                        url('https://images.unsplash.com/photo-1585208798174-6cedd86e019a') center/cover;
            height: 80vh;
            display: flex;
            align-items: center;
            color: white;
            margin-top: 80px;
        }

        .section-title {
            font-family: 'Merriweather', serif;
            color: var(--verde-portugal);
            border-bottom: 3px solid var(--dourado);
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        .card-portugal {
            border: 2px solid var(--verde-portugal);
            transition: transform 0.3s ease;
        }

        .card-portugal:hover {
            transform: translateY(-5px);
        }

        .fact-box {
            background: white;
            border-radius: 10px;
            padding: 20px;
            margin: 15px 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .destaque-number {
            font-size: 2.5rem;
            color: var(--vermelho-portugal);
            font-weight: 700;
        }

        .timeline {
            position: relative;
            padding: 40px 0;
        }

        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            width: 2px;
            height: 100%;
            background: var(--dourado);
        }

        footer {
            background: var(--verde-portugal);
            color: white;
            padding: 40px 0;
            margin-top: 60px;
        }

        .img-hover-zoom {
            overflow: hidden;
            border-radius: 8px;
        }

        .img-hover-zoom img {
            transition: transform 0.3s ease;
        }

        .img-hover-zoom:hover img {
            transform: scale(1.05);
        }
        .card-img-top{
            width: 100%;
            height: 100%;
            max-height: 275px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 mb-4">Bem-vindo a Portugal</h1>
            <p class="lead mb-4">Um país de história milenar, cultura vibrante e paisagens deslumbrantes</p>
            <a href="#explorar" class="btn btn-lg btn-light px-5 py-3">Explorar</a>
        </div>
    </div>

    <section class="py-5" id="explorar">
        <div class="container">
            <h2 class="section-title text-center">Portugal em Números</h2>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="fact-box text-center">
                        <div class="destaque-number">10.3M</div>
                        <h3>Habitantes</h3>
                        <p>População acolhedora e multicultural</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="fact-box text-center">
                        <div class="destaque-number">+800</div>
                        <h3>Anos de História</h3>
                        <p>Desde a fundação em 1143</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="fact-box text-center">
                        <div class="destaque-number">7</div>
                        <h3>Patrimônios Mundiais</h3>
                        <p>Reconhecidos pela UNESCO</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Geografia e Clima</h2>
            
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="img-hover-zoom">
                        <img src="/images/map.jpg" alt="Mapa de Portugal" class="img-fluid rounded">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <h3 class="mb-4">Localização Privilegiada</h3>
                    <p class="lead">Portugal continental situa-se no sudoeste da Europa, na costa atlântica da Península Ibérica.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3">🗺️ Área: 92,212 km²</li>
                        <li class="mb-3">🌡️ Clima Mediterrânico</li>
                        <li class="mb-3">🌊 1,794 km de costa</li>
                        <li>⛰️ Ponto mais alto: Serra da Estrela (1,993 m)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Cultura Portuguesa</h2>
            
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card card-portugal h-100">
                        <div class="img-hover-zoom">
                            <img src="/images/Jose_malhoa_fado.jpg" class="card-img-top" alt="Fado">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Fado</h5>
                            <p class="card-text">Expressão musical urbana de profundo significado emocional, reconhecida como Patrimônio Cultural Imaterial da Humanidade.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card card-portugal h-100">
                        <div class="img-hover-zoom">
                            <img src="/images/gastro.jpg" class="card-img-top" alt="Gastronomia">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Gastronomia</h5>
                            <p class="card-text">Sabores únicos com destaque para o bacalhau, pastéis de nata e vinhos premiados internacionalmente.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="card card-portugal h-100">
                        <div class="img-hover-zoom">
                            <img src="/images/arquitet.jpg" class="card-img-top" alt="Arquitetura">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Arquitetura</h5>
                            <p class="card-text">Do Manuelino ao Contemporâneo, uma viagem pela história através de seus monumentos e edifícios.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>