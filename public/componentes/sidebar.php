<ul id="slide-out" class="sidenav cinza-custom">

    <li>
        <div class="user-view d-flex flex-column align-items-center justify-content-center center vermelho-custom">
            <a href="#user" class="dropdown-trigger" data-target='dropdown1'><img class="circle" src="https://intranet.somalogistica.com.br/sistemas_gestao_usuario/img/usr/1018/avatar/profile.jpg"></a>

            <ul id='dropdown1' class='dropdown-content'>
                <li><a href="/login/logoff">Sair</a></li>
            </ul>

            <a href="#name"><span class="white-text name">John Doe</span></a>
            <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div>
    </li>


    <li><a href="/home"><i class="material-icons">description</i>Avaliações</a></li>
    <li><a href="/funcionarios"><i class="material-icons">people</i>Funcionários</a></li>
</ul>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {

        M.Sidenav.init(document.querySelectorAll('.sidenav'));
        M.Dropdown.init(document.querySelectorAll('.dropdown-trigger'));

    });
</script>