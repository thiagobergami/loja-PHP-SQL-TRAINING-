<?php include("cabecalho.php");
include("conecta.php");
include("banco-categoria.php");
include("banco-produto.php");

$id= $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked = 'checked'" : "";
?>
    <h1>Alterando Produto</h1>
    <form class="form-horizontal" action="altera-produto.php" method="post">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <div class="form-group">
            <label  class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="Nome" name="nome" value="<?=$produto['nome']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Preço</label>
            <div class="col-sm-8">
                <input class="form-control" placeholder="Preco" name="preco" value="<?=$produto['preco']?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Descrição</label>
            <div class="col-sm-8">
                <textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label" name="categorias">Categoria</label>
            <div class="col-sm-8">
                <select name="categoria_id" class="form-control">
                    <?php foreach ($categorias as $categoria) :
                        $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
                        $selecao = $essaEhACategoria ? "selected='selected'" : "";
                        ?>
                        <option value="<?=$categoria['id']?>" <?=$selecao?>>
                            <?=$categoria['nome']?><br/>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div>
                <input type="checkbox" name="usado" value="true" <?=$usado?>>Usado
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success" value="cadastrar">Alterar</button>
            </div>
        </div>
    </form>
<?php include("rodape.php")?>