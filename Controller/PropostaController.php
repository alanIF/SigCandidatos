<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PropostaController
 *
 * @author PICHAU
 */
class PropostaController {
     public function listar(){
        require_once '../Model/PropostaDAO.php';
        $propostas = new PropostaDAO();
        return $propostas->listar();
    }
      public function excluirProposta($id){
        require_once ('../Model/PropostaDAO.php');
        $propostas = new PropostaDAO();
        return $propostas->delete($id);        
        
    }
    public function atualizarProposta($candidato, $titulo, $descricao, $id){
        require_once ('../Model/PropostaDAO.php');
        $propostas = new PropostaDAO();
        $mensagem= $propostas->editar($candidato, $titulo, $descricao, $id);
        return $mensagem;
    }
    public function getProposta($id){
        require_once '../Model/PropostaDAO.php';
        $proposta = new PropostaDAO();
        return $proposta->getProposta($id);
    }

    public function cadastrarProposta($candidato, $titulo, $descricao){
        require_once '../Model/PropostaDAO.php';
        $propostas = new PropostaDAO();
        return   $propostas->cadastrar($candidato, $titulo, $descricao);    
    }
}
