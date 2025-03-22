<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>República Portuguesa - Volta ao Mundo Jr.</title>
    <link rel="icon" href="/images/icon.png" type="image/png">
    
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

        .republic-hero {
            background: linear-gradient(rgba(4, 106, 56, 0.9)), 
                        url('https://images.unsplash.com/photo-1583485088034-697b5bc54ccd') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            color: white;
            margin-top: 80px;
            position: relative;
        }

        .republic-card {
            border: 2px solid var(--vermelho-portugal);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .republic-card:hover {
            transform: translateY(-5px);
        }

        .president-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            height: 100%;
        }

        .constitution-section {
            background: var(--verde-portugal);
            color: white;
            padding: 50px 0;
        }
    </style>
</head>
<body>
    <?php include '../header.php'; ?>

    <div class="republic-hero text-black">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">A República Portuguesa</h1>
            <p class="lead fs-4">Democracia e Liberdade desde 1974</p>
        </div>
    </div>

    <section class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-6">
                <h2 class="section-title">Da Monarquia à República</h2>
                <p class="lead">A 5 de Outubro de 1910, a revolução republicana estabeleceu:</p>
                <ul class="list-unstyled lead">
                    <li class="mb-3">🎉 Fim da monarquia constitucional</li>
                    <li class="mb-3">📜 Primeira constituição republicana</li>
                    <li class="mb-3">⚖️ Separação entre Igreja e Estado</li>
                    <li class="mb-3">🗳️ Primeiras eleições democráticas</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="img-hover-zoom">
                    <img src="/images/Estremoz13.jpg" 
                         class="img-fluid rounded" 
                         alt="Revolução de 5 de Outubro">
                </div>
            </div>
        </div>
    </section>

    <section class="constitution-section text-black">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="republic-card card">
                        <div class="card-body text-center">
                            <h3 class="card-title">Constituição de 1911</h3>
                            <p class="card-text">Primeira constituição republicana estabelecendo direitos fundamentais</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="republic-card card">
                        <div class="card-body text-center">
                            <h3 class="card-title">Estado Novo</h3>
                            <p class="card-text">Período autoritário (1933-1974) sob liderança de Salazar</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="republic-card card">
                        <div class="card-body text-center">
                            <h3 class="card-title">25 de Abril</h3>
                            <p class="card-text">Revolução dos Cravos que restaurou a democracia em 1974</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="section-title text-center">Presidentes da República</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="president-card">
                        <img src="/images/teofilo.png" 
                             class="img-fluid rounded-circle mb-3" 
                             alt="Teófilo Braga">
                        <h5 class="text-center">Teófilo Braga</h5>
                        <p class="text-muted text-center">1910-1911</p>
                        <p class="small text-center">Primeiro Presidente do Governo Provisório</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="president-card">
                        <img src="/images/spinola.jpg" 
                             class="img-fluid rounded-circle mb-3" 
                             alt="António de Spínola">
                        <h5 class="text-center">António de Spínola</h5>
                        <p class="text-muted text-center">1974</p>
                        <p class="small text-center">Primeiro Presidente após o 25 de Abril</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="president-card">
                        <img src="/images/soares.jpg" 
                             class="img-fluid rounded-circle mb-3" 
                             alt="Mário Soares">
                        <h5 class="text-center">Mário Soares</h5>
                        <p class="text-muted text-center">1986-1996</p>
                        <p class="small text-center">Primeiro Presidente civil eleito após 1974</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="president-card">
                        <img src="/images/marcelo.jpg" 
                             class="img-fluid rounded-circle mb-3" 
                             alt="Marcelo Rebelo de Sousa">
                        <h5 class="text-center">Marcelo Rebelo de Sousa</h5>
                        <p class="text-muted text-center">2016-presente</p>
                        <p class="small text-center">Atual Presidente da República</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Símbolos Nacionais</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="republic-card card">
                        <div class="card-body text-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_Portugal.svg" 
                                 class="img-fluid mb-3" 
                                 style="height: 100px;" 
                                 alt="Bandeira Nacional">
                            <h5>Bandeira Nacional</h5>
                            <p>Adotada em 1911, simbolizando a república</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="republic-card card">
                        <div class="card-body text-center">
                            <img src="/images/hino.jpg" 
                                 class="img-fluid mb-3" 
                                 style="height: 100px;" 
                                 alt="Hino Nacional">
                            <h5>A Portuguesa</h5>
                            <p>Hino nacional adotado em 1911</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="republic-card card">
                        <div class="card-body text-center">
                            <img src="/images/rep.jpg   " 
                                 class="img-fluid mb-3" 
                                 style="height: 100px;" 
                                 alt="Brasão de Armas">
                            <h5>Brasão da República</h5>
                            <p>Atual símbolo heráldico nacional</p>
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