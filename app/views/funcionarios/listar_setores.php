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
    <?php $titulo_pagina = "Setores";
    include '../public/componentes/navbar.php';
    include '../public/componentes/sidebar.php' ?>

    <div class="row mb-0">
        <div class="navbar-fixed">
            <nav class="bread">
                <div class="nav-wrapper <?php echo $navbar_color ?>">
                    <div class="col s12">
                        <a href="/funcionarios" class="breadcrumb <?php echo $text_color ?>">Funcionários</a>
                        <a href="#" class="breadcrumb <?php echo $text_color ?>">Lista de Setores</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col s12 m12 l12">
            <table id="table-setores">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- MODAL NOVO DEPARTAMENTO -->
    <div class="modal" id="novo-setor">
        <div class="modal-content">

            <div class="row">
                <div class="col s12 m12 l12">
                    <h5>Informações Setor</h5>
                </div>
            </div>

            <input type="hidden" name="id" data-field="id" data-type="input" />

            <div class="row">
                <div class="col s12 m12 l12 input-field">
                    <input type="text" name="nome" id="nome" data-field="nome" data-type="input" />
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

            const settings = {
                data: <?php echo json_encode($data); ?>,
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'nome'
                    },
                ],
                functionDetalhes: ((rowData) => {
                    ConfigurarModalDpartamento(rowData);
                }),
                functionNovoRegistro: (() => {
                    ConfigurarModalDpartamento();
                })
            }

            var helperClass = new Helper();
            var elemento = '#table-setores';
            helperClass.CarregarDatatables(elemento, settings);

            function ConfigurarModalDpartamento(rowData) {
                $('.modal').modal();
                $('.modal input').val('');
                $('#novo-setor').modal('open');

                if (rowData) {
                    helperClass.PreencherDados(rowData);
                }
            }
        })
    </script>

</body>

</html>