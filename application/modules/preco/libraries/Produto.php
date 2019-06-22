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
            array('id' => 1, 'Leite', 'R$10,00', 'R$5,00', '20'),
            array('id' => 2, 'Bala', 'R$1,00', 'R$0,50', '30'),
            array('id' => 3, 'Amendoim', 'R$5,00', 'R$2,00','10'),
            array('id' => 4, 'Bolacha', 'R$2,00', 'R$1,00', '50'),
        );
    }
        
    /**
     * Determina o nome de uma turma.
     * @param int turma_id
     * @return string nome da turma
     */
    public function nome($produto_id){
        $v = array('', 'Leite', 'Bala', 'Amendoim', 'Bolacha');
        return $v[$produto_id];
    }
}