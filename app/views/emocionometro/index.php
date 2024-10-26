<html>

<head>
    <link rel="stylesheet" href="css/materialize/materialize.css" />
    <link rel="stylesheet" href="css/materialize/icons/icon.css" />
</head>

<style>
    .emoji:hover {
        transform: scale(1.1);
    }
</style>

<body>

    <?php $titulo_pagina = "Emocionômetro";
    include '../public/componentes/navbar.php'; ?>

    <div class="row mt-2">
        <div class="col s12 m12 l12">
            <span>O emocionômetro também conhecido como termômetro das emoções tem como intuito acompanhar o humor dos colaboradores.</span>
            <br>
            <span>E ai, conte para nós, como vocês está se sentindo hoje?</span>
        </div>
    </div>

    <div class="row mt-2 d-flex justify-content-evenly">
        <a href="funcionarios/listar_funcionarios">
            <div class="card-content white-text">
                <span class="card-title center-align">
                    <img class="emoji" src="images/emocionometro/irritado.png" alt="">
                </span>
                <p class="center-align">Irritado</p>
                <p class="center-align"><strong><small>Me sinto irritado</small></strong></p>
            </div>
        </a>


        <a href="segmentos">
            <div class="card-content white-text">
                <span class="card-title center-align element">
                    <img class="emoji" src="images/emocionometro/triste.png" alt="">
                </span>
                <p class="center-align">Triste</p>
                <p class="center-align"><strong><small>Me sinto triste</small></strong></p>
            </div>
        </a>

        <a href="setores">
            <div class="card-content white-text">
                <span class="card-title center-align element">
                    <img class="emoji" src="images/emocionometro/normal.png" alt="">
                </span>
                <p class="center-align">Normal</p>
                <p class="center-align"><strong><small>Me sinto normal</small></strong></p>
            </div>
        </a>

        <a href="subsetores">
            <div class="card-content white-text">
                <span class="card-title center-align element">
                    <img class="emoji" src="images/emocionometro/tranquilo.png" alt="">
                </span>
                <p class="center-align">Tranquilo</p>
                <p class="center-align"><strong><small>Me sinto tranquilo</small></strong></p>
            </div>
        </a>

        <a href="subsetores">
            <div class="card-content white-text">
                <span class="card-title center-align element">
                    <img class="emoji" src="images/emocionometro/feliz.png" alt="">
                </span>
                <p class="center-align">Feliz</p>
                <p class="center-align"><strong><small>Me sinto feliz</small></strong></p>
            </div>
        </a>
    </div>

    <script type="text/javascript" src="js/materialize/materialize.js"></script>

</body>

</html>