<div class="container mt-3 <?= $show_form ? '' : 'collapse' ?>" id="novo_produto">
    <div class="card">
        <div class="card-header"><h4>Dados do Produto</h4></div>
        <div class="card-body">
            <form method="POST" class="text-center border border-light p-4">
                <div class="form-row mb-4">
                    <div class="col-md-4">
                        <input type="text" name="nome" value="<?= set_value('nome') ?>" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="descricao" value="<?= set_value('descricao') ?>" class="form-control" placeholder="Descrição do Produto">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="estoque" value="<?= set_value('estoque') ?>" class="form-control mb-4" placeholder="Quantidade em Estoque">
                    </div>
                </div>
                <div class="text-center text-md-right">
                    <a class="btnupload-form btn btn-primary">Enviar</a>
                </div>
            </form>
        </div>
    </div>
</div>