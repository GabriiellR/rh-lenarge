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

    <!-- MODAL NOVO FUNCIONARIO -->
    <div class="modal modal-fixed-footer" id="novo-funcionario">
        <div class="modal-content">

            <div class="row">
                <div class="col s12 m12 l12">
                    <h5>Novo Funcionário</h5>
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l6 input-field">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" data-field="nome" data-type="input" placeholder="Digite um nome" required />
                </div>
                <div class="col s12 m12 l6 input-field">
                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" data-field="login" data-type="input" placeholder="Defina o login" required />
                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l6 input-field">
                    <select name="departamento" id="departamento" class="select2 browser-default">
                        <option disabled selected>Escolha um Departamento</option>
                        <?php foreach ($data['departamentos'] as $departamento) { ?>
                            <option value="<?php echo $departamento['id'] ?>"><?php echo $departamento['nome'] ?></option>
                    </select>
                    <label for="departamento" class="active">Departamento</label>

                <?php } ?>
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
                data: <?php echo json_encode($data['usuarios']); ?>,
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
                functionDetalhes: ((rowData) => {
                    ConfigurarModalFuncionario(rowData);
                }),
                functionNovoRegistro: (() => {
                    ConfigurarModalFuncionario();
                })
            }

            var helperClass = new Helper();
            var elemento = '#table-funcionarios';
            helperClass.CarregarDatatables(elemento, settings);

            function ConfigurarModalFuncionario(rowData) {
                $('.modal').modal();
                $('.modal input').val('');
                $('#novo-funcionario').modal('open');

                if (rowData) {
                    helperClass.PreencherDados(rowData);
                }


                const selectDepartamentos = $('#departamento');
                const modalNovoFuncionario = $('#novo-funcionario');

                const select = helperClass.CarregarSelect2(selectDepartamentos, modalNovoFuncionario);
                console.log(select);
            }
        })
    </script>

</body>

</html>