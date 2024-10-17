<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/materialize/materialize.css" />
    <link type="text/css" rel="stylesheet" href="../css/materialize/icons/icon.css" />
    <link type="text/css" rel="stylesheet" href="../css/datatables/datatables.css" />
    <link type="text/css" rel="stylesheet" href="../css/select2/select2.css" />
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
                        <a href="#" class="breadcrumb <?php echo $text_color ?>">Lista de Segmentos</a>
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
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- MODAL NOVO SEGMENTO -->
    <div class="modal lg modal-fixed-footer" id="novo-segmento">
        <div class="modal-content">

            <div class="row">
                <div class="col s12 m12 l12">
                    <h5>Informações Segmento</h5>
                </div>
            </div>

        </div>
        <div class="modal-footer"><button class="btn">Salvar</button></div>
    </div>

    <script type="text/javascript" src="../js/datatables/datatables.js"></script>
    <script type="text/javascript" src="../js/select2/select2.js"></script>
    <script type="text/javascript" src="../js/materialize/materialize.js"></script>
    <script type="text/javascript" src="../js/helpers/helper.js"></script>
    <script type="text/javascript">
        $(function() {

            // const settings = {
            //     data: <?php echo json_encode($data['usuarios']); ?>,
            //     columns: [{
            //             data: 'id'
            //         },
            //         {
            //             data: 'nome'
            //         },
            //     ],
            //     functionDetalhes: ((rowData) => {
            //         ConfigurarModalFuncionario(rowData);
            //     }),
            //     functionNovoRegistro: (() => {
            //         ConfigurarModalFuncionario();
            //     })
            // }

            // var helperClass = new Helper();
            // var elemento = '#table-funcionarios';
            // helperClass.CarregarDatatables(elemento, settings);

            // function ConfigurarModalFuncionario(rowData) {
            //     $('.modal').modal();
            //     $('.modal input').val('');
            //     $('#novo-funcionario').modal('open');

            //     if (rowData) {
            //         helperClass.PreencherDados(rowData);
            //     }
            // }
        })
    </script>

</body>

</html>