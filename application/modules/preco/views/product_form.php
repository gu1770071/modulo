<div class="container mt-3 <?= $show_form ? '' : 'collapse' ?>" id="novo_produto">
    <div class="card">
        <div class="card-header"><h4>Dados do Produto</h4></div>
        <div class="card-body">
            <form method="POST" class="text-center border border-light p-4">
                <div class="form-row mb-4">
                    <div class="col-md-6">
                        <input type="text" name="nome" value="<?= set_value('nome') ?>" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="compra" value="<?= set_value('compra') ?>" class="form-control" placeholder="Preço de Compra">
                    </div>
                </div>
                <div class="form-row mb-4">
                    <div class="col-md-6">
                        <input type="text" name="fixo" value="<?= set_value('fixo') ?>" class="form-control mb-4" placeholder="Custo Fixo">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="concorrente" value="<?= set_value('concorrente') ?>" class="form-control" placeholder="Concorrente" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                    </div>
                </div>
                <div class="text-center text-md-right">
                    <a class="btnupload-form btn btn-primary">Enviar</a>
                </div>
            </form>
        </div>
    </div>
</div>