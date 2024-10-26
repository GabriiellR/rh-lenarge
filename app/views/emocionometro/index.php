<html>

<head>
    <link rel="stylesheet" href="css/materialize/materialize.css" />
    <link rel="stylesheet" href="css/materialize/icons/icon.css" />
</head>

<body>

    <?php $titulo_pagina = "Emocionometro";
    include '../public/componentes/navbar.php'; ?>

    <div class="row mt-2 d-flex justify-content-evenly">
        <a href="funcionarios/listar_funcionarios">
            <div class="card hoverable">
                <div class="card-content white-text">
                    <span class="card-title center-align">
                        <img src="images/emocionometro/irritado.png" alt="">
                    </span>
                    <p class="center-align">Irritado</p>
                    <p class="center-align"><strong><small>Me sinto irritado</small></strong></p>
                </div>
            </div>
        </a>


        <a href="segmentos">
            <div class="card hoverable">
                <div class="card-content white-text">
                    <span class="card-title center-align element">
                        <img src="images/emocionometro/triste.png" alt="">
                    </span>
                    <p class="center-align">Triste</p>
                    <p class="center-align"><strong><small>Me sinto triste</small></strong></p>
                </div>
            </div>
        </a>

        <a href="setores">
            <div class="card hoverable">
                <div class="card-content white-text">
                    <span class="card-title center-align element">
                        <img src="images/emocionometro/normal.png" alt="">
                    </span>
                    <p class="center-align">Normal</p>
                    <p class="center-align"><strong><small>Me sinto normal</small></strong></p>
                </div>
            </div>
        </a>

        <a href="subsetores">
            <div class="card hoverable">
                <div class="card-content white-text">
                    <span class="card-title center-align element">
                        <img src="images/emocionometro/tranquilo.png" alt="">
                    </span>
                    <p class="center-align">Tranquilo</p>
                    <p class="center-align"><strong><small>Me sinto tranquilo</small></strong></p>
                </div>
            </div>
        </a>

    </div>

    <script type="text/javascript" src="js/materialize/materialize.js"></script>

</body>

</html>