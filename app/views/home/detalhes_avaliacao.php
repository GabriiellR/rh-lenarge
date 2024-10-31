<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/css/materialize/materialize.css" />
    <link type="text/css" rel="stylesheet" href="/css/materialize/icons/icon.css" />
    <link type="text/css" rel="stylesheet" href="/css/datatables/datatables.css" />
    <link type="text/css" rel="stylesheet" href="/css/select2/select2.css" />
    <title>RH Lenarge</title>
</head>

<body>
    <?php $titulo_pagina = "Detalhes da Avaliação";
    include '../public/componentes/navbar.php';
    include '../public/componentes/sidebar.php'; ?>


    <div class="row mb-0">
        <div class="navbar-fixed">
            <nav class="bread">
                <div class="nav-wrapper <?php echo $navbar_color ?>">
                    <div class="col s12">
                        <a href="/home" class="breadcrumb <?php echo $text_color ?>">Home</a>
                        <a href="#" class="breadcrumb <?php echo $text_color ?>">Avaliações Cadastradas</a>
                        <a href="#" class="breadcrumb <?php echo $text_color ?>">Detalhes Avaliação</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col s12 m12 l12">
            <h5>TITULO DA AVALIAÇÃO</h5>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col s12 m12 l12">
           
        </div>
    </div>

    <script type="text/javascript" src="/js/datatables/datatables.js"></script>
    <script type="text/javascript" src="/js/select2/select2.js"></script>
    <script type="text/javascript" src="/js/materialize/materialize.js"></script>
    <script type="text/javascript" src="/js/helpers/helper.js"></script>
    <script type="text/javascript">
        // $(function() {

        // })
    </script>

</body>

</html>