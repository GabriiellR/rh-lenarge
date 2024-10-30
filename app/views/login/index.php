<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RH - Lenarge</title>
    <link rel="stylesheet" href="css/materialize/materialize.css" />
    <link rel="stylesheet" href="css/materialize/icons/icon.css" />
</head>

<style>
    body {
        margin: 0;
    }

    .body-login {
        background-image: url('images/bg-login.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }

    .bg-color {
        background: rgba(0, 0, 0, .6);
        border-radius: 30px;
    }

    .login-center {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: white;
    }


    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    input:-webkit-autofill:active {
        -webkit-box-shadow: 0 0 0 30px rgba(0, 0, 0, 0.7) inset !important;
    }

    input:-webkit-autofill {
        -webkit-text-fill-color: white !important;
    }

    .container-login {
        display: flex;
        flex-direction: column;
        width: 30%;
        height: 55%;
        justify-content: center;
        align-items: center;
        gap: 1em;
    }


    @media only screen and (max-width: 992px) {
        .container-login {
            width: 60%;
        }
    }

    @media only screen and (max-width: 601px) {
        .container-login {
            width: 80%;
        }
    }
</style>

<div class="body-login">
    <form action="login/autenticar" method="POST">
        <div class="login-center">
            <div class="container-login bg-color" data-aos="fade-right">

                <div class="titulo">
                    <h5>Avaliação de Eficácia</h5>
                </div>

                <div class="campos-login w-100 pl-2">

                    <div class="input-field ">
                        <label for="usuario">Usuário</label>
                        <input type="text" class="white-text center-align validade" id="usuario" name="usuario" placeholder="Usuario" required/>
                    </div>

                    <div class="input-field mt-2">
                        <i class="material-icons sufix white-text" id="icone-ver-senha">remove_red_eye</i>
                        <input type="password" class="white-text center-align validade d-flex" id="senha" name="senha" placeholder="Senha" required>
                        <label for="senha">Senha</label>
                    </div>

                </div>

                <div class="red-text">
                    <?php
                    if (isset($_SESSION['erro_autenticacao'])) {
                        echo $_SESSION['erro_autenticacao'];
                        unset($_SESSION['erro_autenticacao']);
                    }
                    ?>
                </div>

                <div class="row mt-1">
                    <div class="col s12 m12 l12 center-align">
                        <button class=" btn-floating btn-medium waves-effect waves-light yellow-soma" type="submit" name="submit">
                            <i class="material-icons">arrow_forward</i></a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>



<body>
    <script type="text/javascript" src="js/materialize/materialize.js"></script>
    <script type="text/javascript">
        const iconeSenha = document.getElementById('icone-ver-senha');
        const senhaInput = document.getElementById('senha');

        iconeSenha.addEventListener('click', () => {
            // Verifica o tipo atual do input
            const isPassword = senhaInput.type === 'password';

            // Altera o tipo do input e o ícone
            senhaInput.type = isPassword ? 'text' : 'password';
            iconeSenha.innerHTML = isPassword ? 'visibility_off' : 'visibility';
        });
    </script>
</body>

</html>