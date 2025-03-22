<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descobrimentos Portugueses - Volta ao Mundo Jr.</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lora:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/images/icon.png" type="image/png">

    <style>
        .card-img-top {
            width: 100%;
            object-fit: cover;
            max-height: 400px;

        }

        :root {
            --verde-portugal: #046a38;
            --vermelho-portugal: #c31118;
            --dourado: #ffd700;
        }

        body {
            font-family: 'Lora', serif;
            background: #f8f9fa;
        }

        .hero-discover {
            background: linear-gradient(rgba(4, 106, 56, 0.9),
                    url('https://images.unsplash.com/photo-1583485088034-697b5bc54ccd') center/cover;
                    height: 70vh;
                    display: flex;
                    align-items: center;
                    color: white;
                    margin-top: 80px;
                    position: relative;
            }

            .timeline-section {
                position: relative;
                padding: 50px 0;
            }

            .timeline-line {
                position: absolute;
                left: 50%;
                width: 4px;
                height: 100%;
                background: var(--dourado);
                transform: translateX(-50%);
            }

            .timeline-item {
                width: 45%;
                margin: 20px 0;
                position: relative;
                padding: 25px;
                background: white;
                border-radius: 8px;
                box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            }

            .timeline-item:nth-child(odd) {
                left: 5%;
            }

            .timeline-item:nth-child(even) {
                left: 50%;
            }

            .explorer-card {
                border: 2px solid var(--verde-portugal);
                transition: transform 0.3s ease;
            }

            .explorer-card:hover {
                transform: translateY(-5px);
            }

            .nav-card {
                background: var(--verde-portugal);
                color: white;
                padding: 20px;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .nav-card:hover {
                background: var(--vermelho-portugal);
            }

            .section-title {
                font-family: 'Cinzel', serif;
                color: var(--verde-portugal);
                border-bottom: 3px solid var(--dourado);
                padding-bottom: 15px;
                margin: 40px 0;
            }

            .hero-discover {
                height: 60vh;
                display: flex;
                align-items: center;
                color: white;
                margin-top: 80px;
            }
    </style>
</head>

<body>
    <?php include '../header.php'; ?>

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="hero-discover">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">A Era dos Descobrimentos</h1>
            <p class="lead fs-4">Portugal: Pioneiro na Conquista dos Mares</p>
        </div>
    </div>

    <section class="container py-5">
        <div class="row g-5">
            <div class="col-md-6">
                <h2 class="section-title">Contexto Histórico</h2>
                <p class="lead">No século XV, Portugal iniciou uma das maiores epopeias marítimas da história,
                    impulsionado por:</p>
                <ul class="list-unstyled">
                    <li class="mb-3">🏰 Centralização do poder real</li>
                    <li class="mb-3">🧭 Avanços na navegação</li>
                    <li class="mb-3">🌍 Busca de novas rotas comerciais</li>
                    <li class="mb-3">⛪ Missão evangelizadora</li>
                </ul>
                <div class="img-hover-zoom mt-4">
                    <img src="/images/antigo.webp" alt="Mapa antigo" class="img-fluid rounded">
                </div>
            </div>

            <div class="col-md-6">
                <h2 class="section-title">Principais Navegadores</h2>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="explorer-card card h-100">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/images/Henry_the_Navigator1.jpg" class="img-fluid rounded-start"
                                        alt="Infante D. Henrique">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Infante D. Henrique (1394-1460)</h5>
                                        <p class="card-text">"O Navegador", patrono das explorações. Estabeleceu a
                                            Escola de Sagres e impulsionou as primeiras viagens ao longo da costa
                                            africana.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="explorer-card card h-100">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/images/v2.jpg" class="img-fluid rounded-start" alt="Vasco da Gama">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Vasco da Gama (1469-1524)</h5>
                                        <p class="card-text">Primeiro europeu a chegar à Índia por mar (1498),
                                            estabelecendo a rota do Cabo.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="timeline-section">
        <div class="timeline-line"></div>
        <div class="container">
            <h2 class="section-title text-center">Linha do Tempo dos Descobrimentos</h2>

            <div class="timeline-item">
                <h3>1415 - Conquista de Ceuta</h3>
                <p>Primeira expansão ultramarina, marco inicial dos descobrimentos</p>
            </div>

            <div class="timeline-item">
                <h3>1434 - Passagem do Cabo Bojador</h3>
                <p>Gil Eanes supera o temido cabo africano</p>
            </div>

            <div class="timeline-item">
                <h3>1488 - Cabo da Boa Esperança</h3>
                <p>Bartolomeu Dias contorna o extremo sul da África</p>
            </div>

            <div class="timeline-item">
                <h3>1498 - Chegada à Índia</h3>
                <p>Vasco da Gama completa a rota marítima para o Oriente</p>
            </div>

            <div class="timeline-item">
                <h3>1500 - Descobrimento do Brasil</h3>
                <p>Pedro Álvares Cabral chega às costas brasileiras</p>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="section-title text-center">Tecnologias Náuticas</h2>
            <div class="row g-4">
                <div class="col-md-4 d-flex">
                    <div class="card explorer-card w-100">
                        <div class="image-wrapper" style="height: 250px; overflow: hidden;">
                            <img src="/images/Caravela_Vera_Cruz_no_rio_Tejo.jpg"
                                class="card-img-top h-100 w-100 object-fit-cover" alt="Caravela">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Caravela</h5>
                            <p class="card-text flex-grow-1">Embarcação revolucionária com velas latinas e casco
                                estreito</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="card explorer-card w-100">
                        <div class="image-wrapper" style="height: 250px; overflow: hidden;">
                            <img src="/images/Astrolabe_(PSF).png"
                                class="card-img-top h-100 w-100 object-fit-contain p-3 bg-white" alt="Astrolábio">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Astrolábio Náutico</h5>
                            <p class="card-text flex-grow-1">Instrumento para medição da latitude</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="card explorer-card w-100">
                        <div class="image-wrapper" style="height: 250px; overflow: hidden;">
                            <img src="/images/cart.webp" class="card-img-top h-100 w-100 object-fit-cover" alt="Mapas">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Cartografia</h5>
                            <p class="card-text flex-grow-1">Desenvolvimento de mapas e portulanos precisos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Impacto Histórico</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="img-hover-zoom">
                        <img src="/images/comerc.webp" class="img-fluid rounded" alt="Comércio">
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled lead">
                        <li class="mb-4">🌐 Primeira globalização</li>
                        <li class="mb-4">💰 Estabelecimento de rotas comerciais</li>
                        <li class="mb-4">🗺️ Expansão do conhecimento geográfico</li>
                        <li class="mb-4">⚔️ Formação do império ultramarino</li>
                        <li>🌍 Intercâmbio cultural e biológico</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include '../footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>