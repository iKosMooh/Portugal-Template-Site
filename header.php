<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portugal - Terra de Exploradores</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .navbar-brand{
            justify-content: space-between;
            gap: 20px;
        }
        .navbar-brand h1{
            margin: 0 20px;
        }
        .navbar-portugal {
            background: linear-gradient(45deg, #046a38 30%, #c31118 70%);
            border-bottom: 3px solid #ffd700;
            transition: all 0.3s ease;
        }

        .navbar-portugal.scrolled {
            background: rgba(4, 106, 56, 0.95);
            height: 70px;
        }

        .portugal-flag-effect {
            position: relative;
            overflow: hidden;
        }

        .portugal-flag-effect::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 3px;
            background: #ffd700;
            transition: width 0.3s ease;
        }

        .portugal-flag-effect:hover::after {
            width: 100%;
        }

        .navbar-brand {
            position: relative;
            padding-left: 70px;
        }

        .navbar-brand img {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 50px;
            transition: all 0.3s ease;
        }

        .dropdown-menu {
            background: #046a38;
            border: 1px solid #ffd700;
            margin-top: 0;
            display: block;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
        }

        .dropdown-item {
            color: #fff !important;
        }

        .dropdown-item:hover {
            background: #c31118;
        }

        .navbar-toggler {
            border-color: #046a38;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23046a38' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        @media (max-width: 991px) {
            .navbar-collapse {
                background: rgba(4, 106, 56, 0.95);
                padding: 20px;
            }
            .dropdown-menu {
                opacity: 1;
                visibility: visible;
                background: rgba(4, 106, 56, 0.8);
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-portugal navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="#">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Flag_of_Portugal_%28alternate%29.svg/188px-Flag_of_Portugal_%28alternate%29.svg.png" alt="Bandeira Portugal">
            <h1>Portugal</h1>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white portugal-flag-effect" href="/">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle portugal-flag-effect" href="#" id="historyDropdown" role="button" data-bs-toggle="dropdown">
                        História
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="historyDropdown">
                        <li><a class="dropdown-item" href="/pages/discover.php">Descobrimentos</a></li>
                        <li><a class="dropdown-item" href="/pages/monarchy.php">Monarquia</a></li>
                        <li><a class="dropdown-item" href="/pages/republic.php">República</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white portugal-flag-effect" href="/pages/culture.php">Cultura</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle portugal-flag-effect" href="/pages/regions.php" id="regioesDropdown" role="button" data-bs-toggle="dropdown">
                        Regiões
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="regioesDropdown">
                        <li><a class="dropdown-item" href="/pages/regions.php#norte">Norte</a></li>
                        <li><a class="dropdown-item" href="/pages/regions.php#centro">Centro</a></li>
                        <li><a class="dropdown-item" href="/pages/regions.php#lisboa">Lisboa</a></li>
                        <li><a class="dropdown-item" href="/pages/regions.php#alentejo">Alentejo</a></li>
                        <li><a class="dropdown-item" href="/pages/regions.php#algarve">Algarve</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white portugal-flag-effect" href="#footer">Contato</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('.navbar-portugal').addClass('scrolled');
            $('.navbar-brand img').css('height', '40px');
        } else {
            $('.navbar-portugal').removeClass('scrolled');
            $('.navbar-brand img').css('height', '50px');
        }
    });
});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html> 