<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH.'libraries/component/buttons/EditDeleteButtonGroup.php';
include_once APPPATH.'libraries/component/Table.php';

class PrecoModel extends CI_Model{

    /**
     * Gera a tabela que contém a lista de produtos
     */
    public function fake_list(){
        $this->load->library('Produto');
        $data = $this->produto->lista();
        $header = array('#', 'Nome', 'Descrição', 'Estoque');
        $table = new Table($data, $header);
        $table->action('preco/criar');
        $table->zebra_table();
        $table->use_border();
        $table->use_hover();
        return $table->getHTML();
    }

    /**
     * Gera a lista das tarefas de uma turma cadastradas no bd
     * @param int turma_id: o identificador da turma 
     * @return string: código html da tabela
     */
    public function lista_precos($produto_id){
        $header = array('#', 'Nome', 'Lucro', 'Preço');
        $this->load->library('PrecoProduto', null, 'preco');
        $this->preco->cols(array('id', 'compra', 'fixo', 'lucro', 'preco'));
        $data = $this->preco->get(array('id' => $produto_id));
        if(! sizeof($data)) return '';
        
        $table = new Table($data, $header);
        $table->zebra_table();
        $table->use_border();
        $table->use_hover();
        
        $edbg = new EditDeleteButtonGroup('preco');
        $table->use_action_button($edbg);
        return $table->getHTML();
    }

    /**
     * Registra um preco no bd
     * @param $_POST['produto', 'compra', 'fixo', 'lucro', 'preco']
     * @return boolean true caso ocorra erro de validação
     */
    public function novo_preco($produto_id){
        if(! sizeof($_POST)) return;
        $this->load->library('Validator', null, 'valida');

        if($this->valida->form_preco()){
            $this->load->library('PrecoProduto', null, 'preco');
            $data = $this->input->post();
            $data['produto_id'] = $produto_id;
            $this->preco->insert($data);
        }
        else return true;
    }

    /**
     * Atualiza os dados de um preço
     * @param int preco_id: o identificador do preço
     * @param int id: o identificador do preço | redireciona para página principal
     */
    public function edita_preco($preco_id){
        $this->load->library('PrecoProduto', null, 'preco');
        $this->load->library('Validator', null, 'valida');
        $task = $this->preco->get(array('id' => $preco_id));

        if(sizeof($_POST) && $this->valida->form_preco()){
            $data = $this->input->post();
            $data['id'] = $preco_id;
            $id = $this->preco->insert_or_update($data);
            if($id) redirect('preco/criar/'.$task[0]['produto_id']);
        }
        else {
            foreach ($task[0] as $key => $value)
                $_POST[$key] = $value;
            return $_POST['produto_id'];
        }
    }

    /**
     * Elimina um preço do bd.
     * @param int preco_id: o identificador do preco
     * @param array: os dados do preco | redireciona para página principal
     */
    public function deleta_preco($preco_id) {
        $this->load->library('PrecoProduto', null, 'preco');
        $task = $this->preco->get(array('id' => $preco_id));
        
        if(sizeof($_POST)) {
            if($this->preco->delete(array('id' => $preco_id)))
                redirect('preco/criar/'.$task[0]['produto_id']);
        }
        else return $task[0];
    }

    /**
     * Determina o nome de um produto.
     * @param int produto_id
     * @return string nome do produto
     */
    public function nome_produto($produto_id){
        $this->load->library('produto');
        return $this->produto->nome($produto_id);
    }
}