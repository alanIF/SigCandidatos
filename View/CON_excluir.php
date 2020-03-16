<?php
           
      

    if (isset( $_GET['id'])) {
        require_once '../Controller/ConquistaController.php';

         $id=(int)$_GET['id'];
        $objControl = new ConquistaController();
       $mensagem=  $objControl->excluirConquista($id);
         echo "<script language='javascript' type='text/javascript'>"
            . "alert('".$mensagem."');";

                echo "</script>";
                echo "<script language='javascript' type='text/javascript'>
window.location.href = 'CON_index.php';
</script>";
           

    }else{
        
        header("Location:CON_index.php");
        
    }

?>