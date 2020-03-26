<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConquistaController
 *
 * @author PICHAU
 */
class ConquistaController {
     public function listar(){
        require_once '../Model/ConquistaDAO.php';
        $conquistas = new ConquistaDAO();
        return $conquistas->listar();
    }
     public function listar_c($id){
        require_once '../Model/ConquistaDAO.php';
        $conquistas = new ConquistaDAO();
        return $conquistas->listar_c($id);
    }
      public function excluirConquista($id){
        require_once ('../Model/ConquistaDAO.php');
       $conquistas= new ConquistaDAO();
        return $conquistas->delete($id);        
        
    }
    public function atualizarConquista($candidato, $titulo, $descricao, $id){
        require_once ('../Model/ConquistaDAO.php');
        $conquistas = new ConquistaDAO();
        $mensagem= $conquistas->editar($candidato, $titulo, $descricao, $id);
        return $mensagem;
    }
    public function getConquista($id){
        require_once '../Model/ConquistaDAO.php';
        $conquista = new ConquistaDAO();
        return $conquista->getConquista($id);
    }

    public function cadastrarConquista($candidato, $titulo, $descricao){
        require_once '../Model/ConquistaDAO.php';
        $conquistas = new ConquistaDAO();
        return   $conquistas->cadastrar($candidato, $titulo, $descricao);    
    }
}
