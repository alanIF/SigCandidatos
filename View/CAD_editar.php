<?php
    include './head.php';
    if (isset($_GET['id'])){
        require_once '../Controller/CandidatoController.php';
        $objControl = new CandidatoController();
        $id = (int)$_GET['id'];   
        $candidato= $objControl->getCandidato($id);
        if ( $candidato==null){
                              echo "<script language= 'JavaScript'>
                                        location.href='./CAD_index.php'
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
                  <h6 class="m-0 font-weight-bold text-info">Candidatos > Atualizar</h6>
                </div>
                <div class="card-body">
                     <form class="user" action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                    <input type="text" name="nome" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nome"  value="<?php echo $candidato[0]["nome"];?>" required="">
                    </div>
                         <div class="form-group">

                             <select class="form-control" name="cargo">
                          <option value="Vereador">Vereador</option>
                          <option value="Prefeito">Prefeito</option>
                         
                        </select>
                         </div>
                           <div class="form-group">
                               <textarea class="ckeditor" name="foto" placeholder="Foto" required=""> <?php echo $candidato[0]["foto"];?></textarea>
                    </div>
                           <div class="form-group">
                    <input type="text" name="descricao" class="form-control form-control-user" id="exampleInputEmail" value="<?php echo $candidato[0]["descricao"];?>" placeholder="Descricao" required="">
                    </div>
                       
                <div class="form-group">
                    <input type="date" name="data_nascimento" class="form-control form-control-user" id="exampleInputEmail"  value="<?php echo $candidato[0]["data_nascimento"];?>" placeholder="Data de Nascimento" required="">
                </div>
                        <div class="form-group">
                    <input type="text" name="partido" class="form-control form-control-user" id="exampleInputEmail" value="<?php echo $candidato[0]["partido"];?>" placeholder="Partido" required="">
                    </div>  
                 <div class="form-group">
                               <textarea class="ckeditor" name="rede_social" placeholder="Rede Social" required=""> <?php echo $candidato[0]["rede_social"];?></textarea>
                    </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block" name="botao">Atualizar</button>
                  <a href="CAD_index.php" class="btn btn-warning btn-user btn-block">Voltar</a>
                
              </form>
                 <?php
                    
                    if (isset($_POST["botao"])) {
                          require_once '../Controller/CandidatoController.php';
                        $objControl = new CandidatoController();
                        $mensagem = $objControl->atualizarCandidato($_POST["nome"],$_POST["cargo"],$_POST["foto"], $_POST["descricao"], $_POST["data_nascimento"],$_POST["partido"], $_POST["rede_social"],$id);
                                echo "<script language='javascript' type='text/javascript'>"
                                  . "alert('".$mensagem."');";
                                echo "</script>";
                            
                                              echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL='`CAD_editar.php?id=".$id."'>";

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
