<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CandidatoDAO
 *
 * @author PICHAU
 */
class CandidatoDAO {
      function listar(){
        require_once 'connect.php';
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from candidato");
        $i = 0;
        $candidatos= array();
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                   $candidatos[$i]['id'] = $row['id'];
                   $candidatos[$i]['nome'] = $row['nome'];
                   $candidatos[$i]['descricao'] = $row['descricao'];
                   $candidatos[$i]['partido'] = $row['partido'];
                   $candidatos[$i]['data_nascimento'] = $row['data_nascimento'];
                   $candidatos[$i]['rede_social'] = $row['rede_social'];
                   $candidatos[$i]['foto'] = $row['foto'];
                 
                    $i++;
                }
        }
       $conn->close();
       return $candidatos;
    }
    function getCandidato($id){
        require_once 'connect.php';
        $conn = F_conect();
        $result = mysqli_query($conn, "Select * from candidato where id='".$id."'");
        $i = 0;
        $candidatos= array();
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                   $candidatos[$i]['id'] = $row['id'];
                   $candidatos[$i]['nome'] = $row['nome'];
                   $candidatos[$i]['descricao'] = $row['descricao'];
                   $candidatos[$i]['partido'] = $row['partido'];
                   $candidatos[$i]['data_nascimento'] = $row['data_nascimento'];
                   $candidatos[$i]['rede_social'] = $row['rede_social'];
                   $candidatos[$i]['foto'] = $row['foto'];
                  
                    $i++;
                }
        }
       $conn->close();
       return $candidatos;
    }
    function cadastrar($nome, $foto, $descricao, $data_nascimento,$partido, $rede_social){
        require_once 'connect.php';

        $conn = F_conect();
        $sql = "INSERT INTO candidato(nome, foto, descricao, data_nascimento, partido, rede_social)
                VALUES('" . $nome . "','" . $foto ."' , '".$descricao."', '".$data_nascimento."' , '".$partido."' , '".$rede_social."' )";
        if ($conn->query($sql) == TRUE) {
            return "Candidato cadastrado com sucesso";
            

        } else {
            return  "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    function editar($nome, $foto, $descricao, $data_nascimento,$partido, $rede_social, $id){
        require_once 'connect.php';
        $conn = F_conect();
        $sql = "update candidato set nome='".$nome."' , foto='".$foto."' , descricao='".$descricao."', data_nascimento='".$data_nascimento."', partido='".$partido."', rede_social='".$rede_social."'      where id='".$id."'";
        if ($conn->query($sql) == TRUE) {
                        return "Candidato atualizado com sucesso";

                
                            } else {
                                return "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    function delete($id) {
        require_once 'connect.php';

        $conn = F_conect();
        $sql = "DELETE FROM candidato WHERE id=" . $id ;

        if ($conn->query($sql)) {
            return "Candidato excluído com sucesso";
            
        }else{
            return "Error: " . $sql . "<br>" . $conn->error;
           
        }

        $conn->close();
      
}
}
