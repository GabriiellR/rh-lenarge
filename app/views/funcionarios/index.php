<html>

<head>
    <link rel="stylesheet" href="css/materialize/materialize.css" />
    <link rel="stylesheet" href="css/materialize/icons/icon.css" />
</head>

<body>

    <?php $titulo_pagina = "Gestão de Funcionários";
          include '../public/componentes/navbar.php';
          include '../public/componentes/sidebar.php' ?>

    <div class="row mt-2">
        <div class="col s12 m6 l3">
            <a href="funcionarios/listar_funcionarios">
                <div class="card hoverable">
                    <div class="card-content white-text">
                        <span class="card-title center-align">
                            <h2> <i class="medium material-icons">people</i></h2>
                        </span>
                        <p class="center-align">Funcionários</p>
                        <p class="center-align"><strong><small>Gestão de Funcionários</small></strong></p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col s12 m6 l3">
            <a href="segmentos">
                <div class="card hoverable">
                    <div class="card-content white-text">
                        <span class="card-title center-align element">
                            <h2> <i class="medium material-icons">local_shipping</i></h2>
                        </span>
                        <p class="center-align">Segmentos</p>
                        <p class="center-align"><strong><small>Segmentos Cadastrados</small></strong></p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col s12 m6 l3">
            <a href="departamentos">
                <div class="card hoverable">
                    <div class="card-content white-text">
                        <span class="card-title center-align element">
                            <h2> <i class="medium material-icons">more_horiz</i></h2>
                        </span>
                        <p class="center-align">Departamentos</p>
                        <p class="center-align"><strong><small>Departamentos Cadastrados</small></strong></p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col s12 m6 l3">
            <a href="setores">
                <div class="card hoverable">
                    <div class="card-content white-text">
                        <span class="card-title center-align element">
                            <h2> <i class="medium material-icons">work</i></h2>
                        </span>
                        <p class="center-align">Setores</p>
                        <p class="center-align"><strong><small>Setores Cadastrados</small></strong></p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6 l3">
            <a href="subsetores">
                <div class="card hoverable">
                    <div class="card-content white-text">
                        <span class="card-title center-align element">
                            <h2> <i class="medium material-icons">settings_ethernet</i></h2>
                        </span>
                        <p class="center-align">Subsetores</p>
                        <p class="center-align"><strong><small>Subsetores Cadastrados</small></strong></p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col s12 m6 l3">
            <a href="funcoes">
                <div class="card hoverable">
                    <div class="card-content white-text">
                        <span class="card-title center-align element">
                            <h2> <i class="medium material-icons">account_box</i></h2>
                        </span>
                        <p class="center-align">Funções</p>
                        <p class="center-align"><strong><small>Funções Cadastradas</small></strong></p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col s12 m6 l3">
            <a href="fila_atendimento.php">
                <div class="card hoverable">
                    <div class="card-content white-text">
                        <span class="card-title center-align element">
                            <h2> <i class="medium material-icons">import_export</i></h2>
                        </span>
                        <p class="center-align">Importação</p>
                        <p class="center-align"><strong><small>Importe dados para o sistema</small></strong></p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <script type="text/javascript" src="js/materialize/materialize.js"></script>

</body>

</html>