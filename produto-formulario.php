<?php include("cabecalho.php")?>
        <h1>Formulario de Produto</h1>
        <form class="form-horizontal" action="adiciona-produto.php" method="post">
                <div class="form-group">
                        <label  class="col-sm-2 control-label">Nome</label>
                        <div class="col-sm-8">
                                <input class="form-control" placeholder="Nome" name="nome">
                        </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-2 control-label">Preço</label>
                        <div class="col-sm-8">
                                <input class="form-control" placeholder="Preco" name="preco">
                        </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-2 control-label">Descrição</label>
                        <div class="col-sm-8">
                                <textarea class="form-control" name="descricao"></textarea>
                        </div>
                </div>
                <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default" value="cadastrar">Sign in</button>
                        </div>
                </div>
        </form>
<?php include("rodape.php")?>