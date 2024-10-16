

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/materialize/materialize.css" />
    <link rel="stylesheet" href="../css/materialize/icons/icon.css" />
    <link rel="stylesheet" href="../css/datatables/datatables.css" />
    <title>RH Lenarge</title>
</head>

<body>
    <?php include '../public/componentes/navbar.php' ?>
    <?php include '../public/componentes/sidebar.php' ?>


    <div class="row mb-0">
        <div class="navbar-fixed">
            <nav class="bread">
                <div class="nav-wrapper <?php echo $navbar_color ?>">
                    <div class="col s12">
                        <a href="/funcionarios" class="breadcrumb <?php echo $text_color ?>">Funcionários</a>
                        <a href="#" class="breadcrumb <?php echo $text_color ?>">Lista de Funcionários</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col s12 m12 l12">
            <table id="table-funcionarios">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Data Admissão</th>
                        <th>Departamento</th>
                        <th>Função</th>
                        <th>Segmento</th>
                        <th>Setor</th>
                        <th>Gestor</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script type="text/javascript" src="../js/materialize/materialize.js"></script>
    <script type="text/javascript" src="../js/jquery/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="../js/datatables/datatables.js"></script>
    <script type="text/javascript" src="../js/helpers/helper.js"></script>
    <script type="text/javascript">
        const settings = {
            data: <?php echo json_encode($data); ?>,
            columns: [{
                    data: 'id'
                },
                {
                    data: 'nome'
                },
                {
                    data: 'data_admissao'
                },
                {
                    data: 'departamento'
                },
                {
                    data: 'funcao'
                },
                {
                    data: 'segmento'
                },
                {
                    data: 'setor'
                },
                {
                    data: 'gestor'
                }
            ],
            urlDetalhes: '../viagem/view_viagem.php'
        }

        var helperClass = new Helper();
        var elemento = $('#table-funcionarios');
        helperClass.CarregarDatatables(elemento, settings);

        
    </script>

</body>

</html>