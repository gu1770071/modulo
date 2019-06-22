<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Preco extends MY_Controller{

    public function __construct(){
        $this->load->model('PrecoModel', 'model');
    }

    /**
     * Página que exibe a lista de produtos.
     * O módulo "preco" é dependente do módulo "produtos". Por este motivo, simulamos
     * o comportamento do módulo "produtos" usando conteúdo estático que serve apenas
     * para que o uso do módulo "preco" seja o mais realista possível.
     */
    public function index(){
        $data['titulo'] = 'Lista de Produtos';
        $data['rotulo_botao'] = 'Novo Produto';
        $data['form_subject'] = 'novo_produto';
        $data['show_form'] = false;
        $data['topo_pagina'] = $this->load->view('topo_pagina', $data, true);
        $data['formulario'] = $this->load->view('product_form', $data, true);
        $data['lista'] = $this->model->fake_list();

        $html = $this->load->view('main', $data, true);
        $this->show($html);
    }

    /**
     * Página para criação de tarefas
     * @param int turma_id: o id da turma para a qual será direcionada a tarefa
     */
    public function criar($produto_id){

        $this->validate_id($produto_id);
        $produto = $this->model->nome_produto($produto_id);
        $data['show_form'] = $this->model->novo_preco($produto_id);

        $data['home'] = true;
        $data['titulo'] = "Preço do Produto - $produto";
        $data['rotulo_botao'] = 'Novo Preço';
        $data['form_subject'] = 'novo_preco';
        $data['topo_pagina'] = $this->load->view('topo_pagina', $data, true);
        $data['formulario'] = $this->load->view('form_preco', $data, true);
        $data['lista'] = $this->model->lista_precos($produto_id);

        $html = $this->load->view('main', $data, true);
        $this->show($html);
    }

    /**
     * Página para edição das tarefas
     * @param int tarefa_id: o id da tarefa editada
     */
    public function editar($tarefa_id){
        $this->validate_id($tarefa_id);
        $turma_id = $this->model->edita_tarefa($tarefa_id);
        $turma = $this->model->nome_turma($turma_id);
        $data['show_form'] = true;

        $data['titulo'] = "Editar Tarefa da Turma - $turma";
        $data['rotulo_botao'] = 'Nova Tarefa';
        $data['form_subject'] = 'nova_tarefa';
        $data['topo_pagina'] = $this->load->view('topo_pagina', $data, true);
        $data['formulario'] = $this->load->view('tarefa/form_tarefa', $data, true);

        $html = $this->load->view('main', $data, true);
        $this->show($html);
    }

    public function deletar($tarefa_id){
        $this->validate_id($tarefa_id);
        $data = $this->model->deleta_tarefa($tarefa_id);
        $turma = $this->model->nome_turma($data['turma_id']);

        $data['home'] = true;
        $data['titulo'] = "Remover Tarefa da Turma - $turma";
        $data['turma'] = $this->model->nome_turma($data['turma_id']);
        $data['topo_pagina'] = $this->load->view('topo_pagina', $data, true);
        $html = $this->load->view('confirm_delete', $data, true);
        $this->show($html);
    }

}