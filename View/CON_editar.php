<?php
    include './head.php';
     if (isset($_GET['id'])){
        require_once '../Controller/ConquistaController.php';
        $objControl = new ConquistaController();
        $id = (int)$_GET['id'];   
        $conquista= $objControl->getConquista($id);
        if ( $conquista==null){
                              echo "<script language= 'JavaScript'>
                                        location.href='./PRO_index.php'
                                </script>";
        }
        
    }
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
                  <h6 class="m-0 font-weight-bold text-info">Conquistas > Atualizar</h6>
                </div>
                <div class="card-body">
                     <form class="user" action="" method="post" enctype="multipart/form-data">
                                                 <div class="form-group">
                                                      <select class="form-control" name="candidato" required="">
                                                        <?php 
                                                            require_once '../Controller/CandidatoController.php';
                                                            $objControl2 = new CandidatoController();
                                                            $dados= $objControl2->listar();
                                                            $tamanho = count($dados);
                                                        if ($tamanho > 0) {
                                                            for ($i = 0; $i < $tamanho; $i++) {
                                                                echo "<option value='". $dados[$i]['id'] ."'>" . $dados[$i]['nome'] ." </option> ";
                                                            }
                                                        }
                                                        ?>
                                                                
                                                        </select>
                                                 </div>
                        <div class="form-group">
                    <input type="text" name="titulo" class="form-control form-control-user" id="exampleInputEmail" placeholder="Titulo" value="<?php echo $conquista[0]["titulo"];?>" required="">
                    </div>
                       
                           <div class="form-group">
                               <textarea class="ckeditor" name="descricao" placeholder="" required> <?php echo $conquista[0]["descricao"];?></textarea>
                    </div>
                           
          
                  <button type="submit" class="btn btn-primary btn-user btn-block" name="botao">Atualizar</button>
                  <a href="CON_index.php" class="btn btn-warning btn-user btn-block">Voltar</a>
                
              </form>
                 <?php
                    
                    if (isset($_POST["botao"])) {
                        require_once '../Controller/ConquistaController.php';
                        $objControl = new ConquistaController();
                        $mensagem = $objControl->atualizarConquista($_POST["candidato"], $_POST["titulo"], $_POST["descricao"],$id);
                                echo "<script language='javascript' type='text/javascript'>"
                                  . "alert('".$mensagem."');";
                                echo "</script>";
                                                                          echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL='`CON_editar.php?id=".$id."'>";

                      
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
