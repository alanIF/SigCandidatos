<?php
           
      

    if (isset( $_GET['id'])) {
        require_once '../Controller/CandidatoController.php';

         $id=(int)$_GET['id'];
        $objControl = new CandidatoController();
       $mensagem=  $objControl->excluirCandidato($id);
         echo "<script language='javascript' type='text/javascript'>"
            . "alert('".$mensagem."');";

                echo "</script>";
                echo "<script language='javascript' type='text/javascript'>
window.location.href = 'Candidato_index.php';
</script>";
           

    }else{
        
        header("Location:CAD_index.php");
        
    }

?>