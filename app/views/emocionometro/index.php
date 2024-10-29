<html>

<head>
    <link rel="stylesheet" href="css/materialize/materialize.css" />
    <link rel="stylesheet" href="css/materialize/icons/icon.css" />
    <link rel="stylesheet" href="css/select2/select2.css" />
</head>

<style>
    .emoji:hover {
        transform: scale(1.1);
    }

    .disable {
        filter: brightness(0.5);
    }
</style>

<body>

    <?php $titulo_pagina = "Emocionômetro";
    include '../public/componentes/navbar.php'; ?>

    <div class="card-panel h-100">
        <div class="row mt-2">
            <div class="col s12 m12 l12">
                <blockquote>
                    <h6>O emocionômetro também conhecido como termômetro das emoções tem como intuito acompanhar o humor dos colaboradores.</h6>
                    <br>
                    <h6>E ai, conte para nós, como vocês está se sentindo hoje?</h6>
                </blockquote>
            </div>
        </div>


        <div class="row mt-3 d-flex justify-content-evenly align-items-center flex-wrapper">
            <a class="pointer emocao" data-valor="1" data-descricao="Irritado">
                <div class="card-content white-text">
                    <span class="card-title center-align">
                        <img class="emoji" src="images/emocionometro/irritado.png" alt="">
                    </span>
                    <p class="center-align">Irritado</p>
                    <p class="center-align"><strong><small>Me sinto irritado</small></strong></p>
                </div>
            </a>


            <a class="pointer emocao" data-valor="2" data-descricao="Triste">
                <div class="card-content white-text">
                    <span class="card-title center-align element">
                        <img class="emoji" src="images/emocionometro/triste.png" alt="">
                    </span>
                    <p class="center-align">Triste</p>
                    <p class="center-align"><strong><small>Me sinto triste</small></strong></p>
                </div>
            </a>

            <a class="pointer emocao" data-valor="3" data-descricao="Normal">
                <div class="card-content white-text">
                    <span class="card-title center-align element">
                        <img class="emoji" src="images/emocionometro/normal.png" alt="">
                    </span>
                    <p class="center-align">Normal</p>
                    <p class="center-align"><strong><small>Me sinto normal</small></strong></p>
                </div>
            </a>

            <a class="pointer emocao" data-valor="4" data-descricao="Tranquilo">
                <div class="card-content white-text">
                    <span class="card-title center-align element">
                        <img class="emoji" src="images/emocionometro/tranquilo.png" alt="">
                    </span>
                    <p class="center-align">Tranquilo</p>
                    <p class="center-align"><strong><small>Me sinto tranquilo</small></strong></p>
                </div>
            </a>

            <a class="pointer emocao" data-valor="5" data-descricao="Feliz">
                <div class="card-content white-text">
                    <span class="card-title center-align element">
                        <img class="emoji" src="images/emocionometro/feliz.png" alt="">
                    </span>
                    <p class="center-align">Feliz</p>
                    <p class="center-align"><strong><small>Me sinto feliz</small></strong></p>
                </div>
            </a>
        </div>

        <div class="row mt-3">
            <div class="col s12 m12 l12 input-field">
                <select name="setor" id="setor" class="select2 browser-default" required>
                    <option disabled selected>Escolha um Setor</option>
                    <?php foreach ($data[0]['setores'] as $setor) { ?>
                        <option value="<?php echo $setor['id'] ?>"><?php echo $setor['nome'] ?></option>
                    <?php } ?>
                </select>
                <label for="setor" class="active">Setor</label>
            </div>
        </div>

        <div class="fixed-action-btn direction-top">
            <a class="btn-floating btn-large yellow-soma pointer" id="enviar-emocao">
                <i class="large material-icons">send</i>
            </a>
        </div>
    </div>

    <script type="text/javascript" src="js/materialize/materialize.js"></script>
    <script type="text/javascript" src="../js/datatables/datatables.js"></script>
    <script type="text/javascript" src="../js/SweetAlert/sweetalert.js"></script>
    <script type="text/javascript" src="../js/select2/select2.js"></script>
    <script type="text/javascript" src="../js/helpers/helper.js"></script>
    <script type="text/javascript">
        $(function() {
            var emocao;
            var descricaoEmocao;
            const helperClass = new Helper();

            helperClass.CarregarSelect2($('#setor'));

            $('.emocao').click(function() {
                emocao = $(this).data('valor');
                descricaoEmocao = $(this).data('descricao');

                $('.emocao').addClass('disable');
                $(this).removeClass('disable');
            });

            $('#enviar-emocao').click(async function() {
                var setor = $('#setor').val();

                if (!emocao || !setor) {
                    helperClass.MostrarAlerta("error", "Preencha os dados corretamente.");
                    return;
                }

                try {
                    const settings = {
                        "url": "/emocionometros/AddorUpdate",
                        "method": "POST",
                        "data": {
                            "setor": setor,
                            "emocao": emocao,
                            "descricaoEmocao": descricaoEmocao
                        },
                    }

                    const response = await $.ajax(settings);

                    if (!response) {
                        throw new Error("Erro ao realizar requisição");
                    }

                    helperClass.MostrarAlerta("success", "Emoção enviada com sucesso", (() => {
                        location.reload();
                    }));

                } catch (error) {
                    helperClass.MostrarAlerta("error", error.message);
                }

            })
        })
    </script>

</body>

</html>