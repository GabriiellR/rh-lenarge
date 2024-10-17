<html>

<head>
    <link rel="stylesheet" href="css/materialize/materialize.css" />
    <link rel="stylesheet" href="css/materialize/icons/icon.css" />
</head>

<body>

    <?php $titulo_pagina = "Avaliações";
          include '../public/componentes/navbar.php';
          include '../public/componentes/sidebar.php'
     ?>

    <div class="row mt-2">
        <div class="col s12 m12 l6">
            <a href="fila_atendimento.php">
                <div class="card hoverable">
                    <div class="card-content white-text">
                        <span class="card-title center-align">
                            <h3 class="count">0</h3>
                        </span>
                        <p class="center-align">Avaliações</p>
                        <p class="center-align"><strong><small>Avaliações a responder</small></strong></p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col s12 m12 l6">
            <a href="fila_atendimento.php">
                <div class="card hoverable">
                    <div class="card-content white-text">
                        <span class="card-title center-align element">
                            <h2> <i class="medium material-icons">assignment</i></h2>
                        </span>
                        <p class="center-align">Histórico</p>
                        <p class="center-align"><strong><small>Histórico de avaliações</small></strong></p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row mt-1">
        <div class="col s12 m12 l6">
            <a href="fila_atendimento.php">
                <div class="card hoverable">
                    <div class="card-content white-text">
                        <span class="card-title center-align element">
                            <h2> <i class="medium material-icons">settings</i></h2>
                        </span>
                        <p class="center-align mt-1">Configurações</p>
                        <p class="center-align"><strong><small>Configurações do sistema</small></strong></p>
                    </div>
                </div>
            </a>
        </div>
    </div>


    <script type="text/javascript" src="js/materialize/materialize.js"></script>

</body>

</html>