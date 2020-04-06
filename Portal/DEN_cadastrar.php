<?php
    include './head.php';
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          </div>

          <!-- Content Row -->
          <div class="row">
                 <!-- Content Column -->
            <div class="col-lg-12 mb-6">
              
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">Denúncia > Enviar</h6>
                </div>
                <div class="card-body">
                     <form class="user" action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                    <input type="text" name="nome_reclamante" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nome do Reclamante (Pode ser Vazio ou Anonimo)">
                          </div>
                          <div class="form-group">
                    <input type="text" name="nome_reclamado" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nome do Reclamado" required>
                          </div>    
                    <div class="form-group">
                               <textarea class="ckeditor" name="descricao" placeholder="" required=""> Motivo </textarea>
                    </div>
                       <?php 
                             $numero =5;
                             $numero2 =5;
                             $resultado= $numero+$numero2;
                             $resultado_texto="".$resultado;    
                       ?>
                         
                                          <div class="form-group row">
                                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                                    <input type="text" name="equacao" class="form-control form-control-user" id="exampleInputEmail" placeholder="" value="<?php echo $numero."  +  ".$numero2." = ";?>" disabled="">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <input type="number" name="resultado" class="form-control form-control-user" id="exampleInputEmail" placeholder="">
                                                                </div>
                                          </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block" name="botao">Enviar</button>
                  <a href="index.php" class="btn btn-warning btn-user btn-block">Voltar</a>
                
              </form>
                 <?php
                    
                    if (isset($_POST["botao"])) {
                        require_once '../Controller/DenunciaController.php';
                        if(strcmp($resultado_texto,$_POST['resultado'])==0){
                        $objControl = new DenunciaController();
                        $mensagem = $objControl->cadastrarDenuncia($_POST["nome_reclamante"],$_POST["nome_reclamado"], $_POST["descricao"]);
                                echo "<script language='javascript' type='text/javascript'>"
                                  . "alert('".$mensagem."');";
                                echo "</script>";
                            
                        }else{
                            echo "<script language='javascript' type='text/javascript'>"
                                  . "alert('Erro! A equação está incorreta!');";
                                echo "</script>";
                            
                        }
                    }
                    ?>   
                </div>
              </div>

            

            </div>
           

          

         

          </div>

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <?php
   include './foot.php';
?>
