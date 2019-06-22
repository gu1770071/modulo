<div class="container mt-3 <?= $show_form ? '' : 'collapse' ?>" id="novo_preco">
    <div class="card">
        <div class="card-header"><h4>Formação de Preço do Produto</h4></div>
        <div class="card-body">
            <form method="POST" class="text-center border border-light p-4" id="task-form">
                <div class="form-row mb-4">
                    <div class="col-md-4">
                        <input type="text" name="compra" value="<?= set_value('compra') ?>" class="form-control" placeholder="Preço de Compra do Produto (R$)">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="fixo" value="<?= set_value('fixo') ?>" class="form-control" placeholder="Custo Fixo do Produto (R$)">
                    </div>
                    <div class="col-md-4">
                        <input type="number" min="1" max="100" name="lucro" value="<?= set_value('lucro') ?>" class="form-control" placeholder="Margem de Lucro" maxlength="8">
                    </div>
                </div>
                <div class="text-center text-md-right">
                    <a class="btnupload-form btn btn-primary" onclick="document.getElementById('task-form').submit();">Calcular</a>
                </div>
            </form>
        </div>
    </div>
</div>