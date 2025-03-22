<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monarquia Portuguesa - Volta ao Mundo Jr.</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Lora:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="/images/icon.png" type="image/png">

    <style>
        :root {
            --verde-portugal: #046a38;
            --vermelho-portugal: #c31118;
            --dourado: #ffd700;
        }

        .royal-hero {
            background: linear-gradient(rgba(4, 106, 56, 0.9)),
                url('https://images.unsplash.com/photo-1579783902610-3fb0bcbbdc8f') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            color: white;
            margin-top: 80px;
            position: relative;
        }

        .crown-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
            fill: var(--dourado);
        }

        .dynasty-card {
            border: 2px solid var(--verde-portugal);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .dynasty-card:hover {
            transform: translateY(-5px);
        }

        .royal-timeline {
            position: relative;
            padding: 50px 0;
        }

        .royal-timeline::before {
            content: '';
            position: absolute;
            left: 20px;
            width: 4px;
            height: 95%;
            background: var(--dourado);
            top: 50%;
            transform: translateY(-50%);
        }

        .timeline-item {
            position: relative;
            margin-left: 60px;
            margin-bottom: 40px;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -33px;
            top: 24px;
            width: 20px;
            height: 20px;
            background: var(--dourado);
            border: 4px solid var(--verde-portugal);
            border-radius: 50%;
        }

        @media (min-width: 768px) {
            .royal-timeline::before {
                left: 50%;
                transform: translateX(-50%) translateY(-50%);
            }

            .timeline-item {
                width: 45%;
                margin-left: 0;
            }

            .timeline-item:nth-child(odd) {
                margin-right: auto;
                transform: translateX(calc(50% - 20px));
            }

            .timeline-item:nth-child(even) {
                margin-left: auto;
                transform: translateX(calc(-50% + 20px));
            }

            .timeline-item::before {
                left: auto;
                right: -36px;
            }

            .timeline-item:nth-child(even)::before {
                left: -36px;
                right: auto;
            }
        }

        .monarchy-hero {
            background: linear-gradient(rgba(4, 106, 56, 0.9)),
                url('https://images.unsplash.com/photo-1583485088034-697b5bc54ccd') center/cover;
            height: 70vh;
            display: flex;
            align-items: center;
            color: white;
            margin-top: 80px;
            position: relative;
        }
    </style>
</head>

<body>
    <?php include '../header.php'; ?>
    <div class="monarchy-hero text-black">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-4">Fundação do Reino</h1>
            <p class="lead fs-4">A monarquia portuguesa teve início em 1143 com o Tratado de Zamora, que reconheceu:</p>
        </div>
    </div>

    <section class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-md-6">
                <div class="img-hover-zoom">
                    <img src="/images/afonsoS.jpg" class="img-fluid rounded" alt="Castelo de Guimarães">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="section-title">Fundação do Reino</h2>
                <p class="lead">A monarquia portuguesa teve início em 1143 com o Tratado de Zamora, que reconheceu:</p>
                <ul class="list-unstyled lead">
                    <li class="mb-3">👑 D. Afonso Henriques como primeiro Rei</li>
                    <li class="mb-3">⚔️ Independência do Reino de Leão</li>
                    <li class="mb-3">📜 Estabelecimento das fronteiras nacionais</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="section-title text-center">Dinastias Reais</h2>
            <div class="row g-4">
                <!-- Borgonha -->
                <div class="col-md-4 d-flex">
                    <div class="card dynasty-card">
                        <div class="image-wrapper" style="height: 250px;">
                            <img src="/images/AfonsoI-P.jpg" class="card-img-top h-100 object-fit-cover"
                                alt="Dinastia de Borgonha">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Borgonha (1143-1383)</h5>
                            <p class="card-text flex-grow-1">Fundação do Reino e consolidação territorial</p>
                            <small class="text-muted">4 reis | 240 anos</small>
                        </div>
                    </div>
                </div>

                <!-- Avis -->
                <div class="col-md-4 d-flex">
                    <div class="card dynasty-card">
                        <div class="image-wrapper" style="height: 250px;">
                            <img src="/images/avis.jpg" class="card-img-top h-100 object-fit-cover"
                                alt="Dinastia de Avis">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Avis (1385-1580)</h5>
                            <p class="card-text flex-grow-1">Era dos Descobrimentos e expansão marítima</p>
                            <small class="text-muted">13 reis | 195 anos</small>
                        </div>
                    </div>
                </div>

                <!-- Bragança -->
                <div class="col-md-4 d-flex">
                    <div class="card dynasty-card">
                        <div class="image-wrapper" style="height: 250px;">
                            <img src="/images/braganca.png" class="card-img-top h-100 object-fit-cover"
                                alt="Dinastia de Bragança">
                        </div>
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Bragança (1640-1910)</h5>
                            <p class="card-text flex-grow-1">Restauração da Independência e monarquia constitucional</p>
                            <small class="text-muted">8 reis | 270 anos</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="royal-timeline py-5">
        <div class="container">
            <h2 class="section-title text-center mb-5">Marcos Históricos</h2>

            <div class="timeline-item">
                <h3>1143 - Tratado de Zamora</h3>
                <p class="mb-0">Reconhecimento formal da independência por Afonso VII de Leão</p>
            </div>

            <div class="timeline-item">
                <h3>1385 - Revolução de Avis</h3>
                <p class="mb-0">D. João I sobe ao trono após a crise de sucessão</p>
            </div>

            <div class="timeline-item">
                <h3>1580 - União Ibérica</h3>
                <p class="mb-0">Domínio espanhol após a crise sucessória</p>
            </div>

            <div class="timeline-item">
                <h3>1640 - Restauração</h3>
                <p class="mb-0">D. João IV recupera a independência portuguesa</p>
            </div>

            <div class="timeline-item">
                <h3>1910 - Proclamação da República</h3>
                <p class="mb-0">Fim da monarquia com D. Manuel II</p>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-title text-center">Símbolos Reais</h2>
            <div class="row g-4">
                <div class="col-md-3 text-center">
                    <div class="bg-white p-4 rounded shadow">
                        <img src="/images/coroa_real_widelg.jpg" class="img-fluid mb-3" style="height: 100px;"
                            alt="Coroa Real">
                        <h5>Coroa Real</h5>
                        <p>Símbolo máximo da realeza</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="bg-white p-4 rounded shadow">
                        <img src="/images/Coat_of_arms_of_Portugal.svg.png" class="img-fluid mb-3"
                            style="height: 100px;" alt="Brasão Real">
                        <h5>Brasão Real</h5>
                        <p>Armas do Reino de Portugal</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="bg-white p-4 rounded shadow">
                        <img src="/images/640px-Ordem_cristo.jpg" class="img-fluid mb-3" style="height: 100px;"
                            alt="Ordem de Cristo">
                        <h5>Ordem de Cristo</h5>
                        <p>Ordem militar real</p>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="bg-white p-4 rounded shadow">
                        <img src="/images/bandeira_real.jpg" class="img-fluid mb-3" style="height: 100px;"
                            alt="Bandeira Real">
                        <h5>Bandeira Real</h5>
                        <p>Pavilhão monárquico até 1910</p>
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