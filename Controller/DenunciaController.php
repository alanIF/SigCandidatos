<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DenunciaController
 *
 * @author PICHAU
 */
class DenunciaController {
    public function listar(){
        require_once '../Model/DenunciaDAO.php';
        $denuncias = new DenunciaDAO();
        return $denuncias->listar();
    }
     public function enviar($id){
        require_once '../Model/DenunciaDAO.php';
        $denuncias = new DenunciaDAO();
        return $denuncias->enviar($id);
    }
}
