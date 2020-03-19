<?php
           
      

    if (isset( $_GET['id'])) {
        require_once '../Controller/DenunciaController.php';

         $id=(int)$_GET['id'];
        $objControl = new DenunciaController();
       $mensagem=  $objControl->enviar($id);
         echo "<script language='javascript' type='text/javascript'>"
            . "alert('".$mensagem."');";

                echo "</script>";
                echo "<script language='javascript' type='text/javascript'>
window.location.href = 'DEN_index.php';
</script>";
           

    }else{
        
        header("Location:DEN_index.php");
        
    }

?>