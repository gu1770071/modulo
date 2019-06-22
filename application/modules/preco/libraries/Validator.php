<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Validator extends CI_Object{

    public function form_tarefa(){
        $this->form_validation->set_rules('prazo', 'prazo', 'trim|required|exact_length[10]');
        $this->form_validation->set_rules('titulo', 'titulo', 'trim|required|min_length[3]|max_length[128]');
        $this->form_validation->set_rules('descricao', 'descricao', 'trim|required|min_length[3]|max_length[128]');
        return $this->form_validation->run();
    }

    public function form_preco(){
        $this->form_validation->set_rules('compra', 'compra', 'trim|required');
        $this->form_validation->set_rules('fixo', 'fixo', 'trim|required');
        $this->form_validation->set_rules('lucro', 'lucro', 'trim|required');
        return $this->form_validation->run();
    }

}