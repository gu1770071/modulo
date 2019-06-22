<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/util/Dao.php';

class Produto extends Dao{

    function __construct(){
        parent::__construct('produto');
    }
    
    /**
     * Lista estática de produtos. Usado apenas para simular a geração
     * de conteúdo no módulo responsável pelo registro dos produtos.
     * Este conteúdo, naturalmente, deveria vir do bd.
     */
    public function lista(){
        return array(
            array('id' => 1, 'Leite', 'O leite é um alimento rico em proteínas e em cálcio, sendo muito importante para prevenir problemas como osteoporose e para manter uma alimentação saudável', '5'),
            array('id' => 2, 'Bala de Goma', 'A bala de goma ou goma, ou ainda, jujuba, é um doce gelatinoso, comum em festas infantis', '15'),
            array('id' => 3, 'Amendoim', 'O Amendoim é uma planta que é uma leguminosa, possui um alto teor calórico e traz diversos benefícios para uma vida saudável', '2'),
            array('id' => 4, 'Bolacha', 'Bolacha é um bolo chato e seco de farinha, de diversas formas e tamanhos', '1'),
        );
    }
        
    /**
     * Determina o nome de um preço.
     * @param int produto_id
     * @return string nome do produto
     */
    public function nome($produto_id){
        $v = array('', 'Leite', 'Bala de Goma', 'Amendoim', 'Bolacha');
        return $v[$produto_id];
    }
}