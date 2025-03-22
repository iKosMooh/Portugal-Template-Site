<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiões de Portugal - Volta ao Mundo Jr.</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/images/icon.png" type="image/png">
    <style>
        :root {
            --verde-portugal: #046a38;
            --vermelho-portugal: #c31118;
            --dourado: #ffd700;
        }

        .region-hero {
            background: linear-gradient(rgba(4, 106, 56, 0.8)), 
                        url('https://images.unsplash.com/photo-1579783902610-3fb0bcbbdc8f') center/cover;
            height: 60vh;
            display: flex;
            align-items: center;
            color: white;
            margin-top: 80px;
        }

        .region-card {
            border: 2px solid var(--verde-portugal);
            transition: transform 0.3s ease;
        }

        .region-card:hover {
            transform: translateY(-5px);
        }

        .section-title {
            font-family: 'Cinzel', serif;
            color: var(--verde-portugal);
            border-bottom: 3px solid var(--dourado);
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        .highlight-list {
            list-style: none;
            padding-left: 0;
        }

        .highlight-list li::before {
            content: "★";
            color: var(--vermelho-portugal);
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <?php include '../header.php'; ?>

    <div class="region-hero">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">Regiões de Portugal</h1>
            <p class="lead">Descubra a diversidade cultural e paisagística do território português</p>
        </div>
    </div>

    <section id="norte" class="py-5">
        <div class="container">
            <h2 class="section-title">Norte</h2>
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <div class="region-card card h-100">
                        <img src="/images/centro.jpg" 
                             class="card-img-top" 
                             alt="Região Norte">
                        <div class="card-body">
                            <h3 class="card-title">Características Principais</h3>
                            <ul class="highlight-list">
                                <li>Cidade principal: Porto</li>
                                <li>Patrimônio Mundial: Centro Histórico do Porto</li>
                                <li>Gastronomia: Francesinha, Vinho do Porto</li>
                                <li>Natureza: Parque Nacional Peneda-Gerês</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="lead">O Norte de Portugal é caracterizado por:</p>
                    <ul class="list-unstyled">
                        <li>🏰 Tradição vinícola no Douro Vinhateiro</li>
                        <li>⛪ Arquitetura barroca</li>
                        <li>🌊 Costa atlântica dramática</li>
                        <li>🏞️ Vales profundos do rio Douro</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="centro" class="bg-light py-5">
        <div class="container">
            <h2 class="section-title">Centro</h2>
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <p class="lead">A região Centro destaca-se por:</p>
                    <ul class="list-unstyled">
                        <li>🎓 Universidade de Coimbra (Patrimônio UNESCO)</li>
                        <li>🏰 Castelos Templários</li>
                        <li>🏖️ Praias da Figueira da Foz</li>
                        <li>🧀 Queijo da Serra da Estrela</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="region-card card h-100">
                        <img src="/images/batalha.webp" 
                             class="card-img-top" 
                             alt="Região Centro">
                        <div class="card-body">
                            <h3 class="card-title">Destaques</h3>
                            <ul class="highlight-list">
                                <li>Cidade histórica: Coimbra</li>
                                <li>Monumento: Mosteiro da Batalha</li>
                                <li>Natureza: Serra da Estrela</li>
                                <li>Artesanato: Olaria de Barcelos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lisboa" class="py-5">
        <div class="container">
            <h2 class="section-title">Lisboa</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="region-card card h-100">
                        <img src="/images/lisboa.jpg" 
                             class="card-img-top" 
                             alt="Lisboa">
                        <div class="card-body">
                            <h5>Capital Portuguesa</h5>
                            <p>Principais atrações:</p>
                            <ul class="list-unstyled">
                                <li>🚋 Elétrico 28</li>
                                <li>🏛️ Mosteiro dos Jerónimos</li>
                                <li>🌉 Ponte 25 de Abril</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h4>Características Únicas</h4>
                            <ul class="list-unstyled">
                                <li>🌆 Mistura de tradição e modernidade</li>
                                <li>🎵 Capital do Fado</li>
                                <li>🍴 Gastronomia: Pastéis de Belém</li>
                                <li>⚓ História marítima</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4>Área Metropolitana</h4>
                            <ul class="list-unstyled">
                                <li>🏙️ Sintra (Patrimônio UNESCO)</li>
                                <li>🏖️ Costa de Cascais</li>
                                <li>⛵ Estuário do Tejo</li>
                                <li>🏭 Arquitetura pombalina</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="alentejo" class="bg-light py-5">
        <div class="container">
            <h2 class="section-title">Alentejo</h2>
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <div class="region-card card h-100">
                        <img src="/images/alentejo.jpg" 
                             class="card-img-top" 
                             alt="Alentejo">
                        <div class="card-body">
                            <h3 class="card-title">Terra de Planícies</h3>
                            <ul class="highlight-list">
                                <li>🌾 Maior região portuguesa</li>
                                <li>🏺 Herança romana</li>
                                <li>🍷 Vinhos premiados</li>
                                <li>🧺 Artesanato em cortiça</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="lead">Características principais:</p>
                    <ul class="list-unstyled">
                        <li>🏰 Cidades medievais: Évora, Marvão</li>
                        <li>🌅 Paisagens de montado</li>
                        <li>🍲 Gastronomia: Açorda, Queijo Serpa</li>
                        <li>🏛️ Patrimônio: Templo Romano de Évora</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="algarve" class="py-5">
        <div class="container">
            <h2 class="section-title">Algarve</h2>
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <p class="lead">Destino turístico por excelência:</p>
                    <ul class="list-unstyled">
                        <li>🏖️ Praias paradisíacas</li>
                        <li>⛳ Campos de golfe</li>
                        <li>🦈 Vida marinha abundante</li>
                        <li>🏰 Castelo de Silves</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="region-card card h-100">
                        <img src="/images/algarve.jpg" 
                             class="card-img-top" 
                             alt="Algarve">
                        <div class="card-body">
                            <h3 class="card-title">Destaques</h3>
                            <ul class="highlight-list">
                                <li>🌞 300 dias de sol/ano</li>
                                <li>🏄 Capital: Faro</li>
                                <li>🛶 Grutas marinhas</li>
                                <li>🐟 Culinária de peixe fresco</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include '../footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>