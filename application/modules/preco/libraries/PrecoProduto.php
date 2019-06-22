<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrecoProduto extends Dao {

    function __construct(){
        parent::__construct('preco_produto');
    }

    public function insert($data, $table = null) {
        // mais uma camada de segurança... além da validação
        $cols = array('compra', 'fixo', 'lucro', 'preco', 'produto_id');
        $this->expected_cols($cols);

        return parent::insert($data);
    }
}