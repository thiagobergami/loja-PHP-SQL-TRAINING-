<?php include("cabecalho.php");?>
<?php if(isset($_GET["login"]) && $_GET["login"]==true) {?>
    <p class="alert-success">Logado com sucesso!</p>
<?php }?>
<?php if(isset($_GET["login"]) && $_GET["login"]==false){?>
    <p class="alert-danger">Usuário ou senha invalido</p>
<?php }?>
        <div class="centro">
            <h1>Bem vindo!</h1>
        </div>
<?php if(isset($_COOKIE["usuario_logado"])){?>
    <p class="text-success">Você está logado como <?=$_COOKIE["usuario_logado"]?>.</p>
<?php }else { ?>
        <div>
            <h2>login</h2>
                <form action="login.php" method="post">
                    <table class="table">
                        <tr>
                            <td>Email</td>
                            <td><input class="form-control" type="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Senha</td>
                            <td><input class="form-control" type="password" name="senha"></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-primary" value="">Login</button></td>
                        </tr>
                    </table>
                </form>
        </div>
<?php }?>
<?php include("rodape.php");?>
