<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultura Portuguesa - Volta ao Mundo Jr.</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --verde-portugal: #046a38;
            --vermelho-portugal: #c31118;
            --dourado: #ffd700;
        }

        .culture-hero {
            background: linear-gradient(rgba(4, 106, 56, 0.9)), 
                        url('https://images.unsplash.com/photo-1583485088034-697b5bc54ccd') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            color: white;
            margin-top: 80px;
            position: relative;
        }

        .culture-card {
            border: 2px solid var(--verde-portugal);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .culture-card:hover {
            transform: translateY(-5px);
        }

        .azulejo-pattern {
            background-image: url('https://upload.wikimedia.org/wikipedia/commons/7/7d/Azulejos_Se_this_is_a_question%3F.jpg');
            background-size: cover;
            min-height: 400px;
        }

        .fado-section {
            background: var(--vermelho-portugal);
            color: white;
            padding: 50px 0;
        }

        .literary-quote {
            font-family: 'Cinzel', serif;
            border-left: 4px solid var(--dourado);
            padding-left: 20px;
            margin: 30px 0;
        }
    </style>
</head>
<body>
    <?php include '../header.php'; ?>

    <div class="culture-hero">
        <div class="container text-center text-black">
            <h1 class="display-3 fw-bold mb-4">Cultura Portuguesa</h1>
            <p class="lead fs-4">Uma Jornada através de Séculos de Tradição e Inovação</p>
        </div>
    </div>

    <section class="container py-5">
        <div class="row g-5">
            <div class="col-md-6">
                <h2 class="section-title">Patrimônio Mundial</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="culture-card card">
                            <img src="/images/mosteiro.jpg" 
                                 class="card-img-top" 
                                 alt="Mosteiro dos Jerónimos">
                            <div class="card-body">
                                <h5>Mosteiro dos Jerónimos</h5>
                                <p>Joia do estilo Manuelino, Patrimônio da UNESCO desde 1983</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="culture-card card">
                            <img src="/images/coimbra.jpg" 
                                 class="card-img-top" 
                                 alt="Universidade de Coimbra">
                            <div class="card-body">
                                <h5>Universidade de Coimbra</h5>
                                <p>Centro histórico classificado pela UNESCO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <h2 class="section-title">Gastronomia</h2>
                <div class="culture-card card">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <img src="/images/porto.png" 
                                 class="img-fluid rounded-start" 
                                 alt="Bacalhau">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Arte Culinária</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2">🐟 Bacalhau: 1001 receitas</li>
                                    <li class="mb-2">🍷 Vinho do Porto: Tradição secular</li>
                                    <li class="mb-2">🍮 Pastéis de Belém: Doçaria conventual</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fado-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/e7SNcCr5hxc" 
                                title="Fado Português" 
                                frameborder="0" 
                                allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2 class="section-title text-white">Fado: Alma Musical</h2>
                    <p class="lead">Expressão máxima da cultura portuguesa, reconhecida pela UNESCO como Patrimônio Imaterial</p>
                    <div class="mt-4">
                        <h5>Grandes Nomes</h5>
                        <ul class="list-unstyled">
                            <li>🎤 Amália Rodrigues</li>
                            <li>🎸 Carlos do Carmo</li>
                            <li>🎻 Mariza</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <h2 class="section-title text-center text-black">Literatura Portuguesa</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="culture-card card h-100">
                    <img src="/images/fernandop.jpg" 
                         class="card-img-top" 
                         alt="Fernando Pessoa">
                    <div class="card-body">
                        <h5>Fernando Pessoa</h5>
                        <p>"O poeta é um fingidor. Tão completamente que chega a fingir que é dor..."</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="azulejo-pattern p-4 text-black">
                    <blockquote class="literary-quote">
                        <p class="fs-4">"Tudo vale a pena quando a alma não é pequena."</p>
                        <footer class="blockquote-footer text-white">Fernando Pessoa</footer>
                    </blockquote>
                    
                    <div class="row g-4 mt-4">
                        <div class="col-md-6">
                            <h5>Obras Fundamentais</h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">📖 Os Lusíadas (Luís de Camões)</li>
                                <li class="mb-3">📚 Mensagem (Fernando Pessoa)</li>
                                <li class="mb-3">📕 Aparição (Vergílio Ferreira)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5>Prêmios Nobel</h5>
                            <div class="culture-card card">
                                <div class="card-body">
                                    <h6>José Saramago</h6>
                                    <p>1998 - Literatura</p>
                                    <p class="small">Autor de "Ensaio sobre a Cegueira"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="section-title text-center">Arquitetura</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="culture-card card">
                        <img src="/images/manuelino.jpg" 
                             class="card-img-top" 
                             alt="Estilo Manuelino">
                        <div class="card-body">
                            <h5>Manuelino</h5>
                            <p>Século XVI - Decoração marítima e naturalista</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="culture-card card">
                        <img src="/images/siza.jpg" 
                             class="card-img-top" 
                             alt="Arquitetura Contemporânea">
                        <div class="card-body">
                            <h5>Contemporânea</h5>
                            <p>Obras de Siza Vieira e Souto de Moura</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="culture-card card">
                        <img src="/images/azulejo.jpg" 
                             class="card-img-top" 
                             alt="Azulejaria">
                        <div class="card-body">
                            <h5>Azulejaria</h5>
                            <p>Tradição decorativa desde o século XV</p>
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