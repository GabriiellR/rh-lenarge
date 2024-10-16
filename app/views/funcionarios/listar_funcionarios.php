<html>

<head>
    <link rel="stylesheet" href="../css/materialize/materialize.css" />
    <link rel="stylesheet" href="../css/materialize/icons/icon.css" />
</head>

<body>
    <?php include '../public/componentes/navbar.php' ?>
    <?php include '../public/componentes/sidebar.php' ?>

  <div class="row mt-2">
    <div class="col s12 m12 l12">
        <table>
            <thead>
                <tr>
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

  <?php //echo json_encode($data) ?>

    <script type="text/javascript" src="../js/materialize/materialize.js"></script>

</body>

</html>