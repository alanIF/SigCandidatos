<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CandidatoController
 *
 * @author PICHAU
 */
class CandidatoController {
      public function listar(){
        require_once '../Model/CandidatoDAO.php';
        $candidatos = new CandidatoDAO();
        return $candidatos->listar();
    }
      public function excluirCandidato($id){
        require_once ('../Model/CandidatoDAO.php');
        $candidato = new CandidatoDAO();
        return $candidato->delete($id);        
        
    }
    public function atualizarCandidato($nome, $foto, $descricao, $data_nascimento,$partido, $rede_social, $id){
        require_once ('../Model/CandidatoDAO.php');
        $candidatos = new CandidatoDAO();
        $mensagem= $candidatos->editar($nome, $foto, $descricao, $data_nascimento,$partido, $rede_social, $id);
        return $mensagem;
    }
    public function getCandidato($id){
        require_once '../Model/CandidatoDAO.php';
        $candidato = new CandidatoDAO();
        return $candidato->getCandidato($id);
    }

    public function cadastrarCandidato($nome, $foto, $descricao, $data_nascimento,$partido, $rede_social){
        require_once '../Model/CandidatoDAO.php';
        $candidatos = new CandidatoDAO();
        return   $candidatos->cadastrar($nome, $foto, $descricao, $data_nascimento,$partido, $rede_social);    
    }
}
