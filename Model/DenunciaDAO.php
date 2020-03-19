<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DenunciaDAO
 *
 * @author PICHAU
 */
class DenunciaDAO {
    //put your code here
     function qtd(){
        require_once 'connect.php';
        $conn = F_conect();
        $result = mysqli_query($conn, "Select count(id) qtd from denuncia");
        $i = 0;
        if (mysqli_num_rows($result)) {
            while ($row = $result->fetch_assoc()) {
                   $qtd = $row['qtd'];
                 
                    $i++;
                }
        }
       $conn->close();
       return $qtd;
    }
}
