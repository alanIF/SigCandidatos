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
                  <h6 class="m-0 font-weight-bold text-info">Candidatos > Cadastrar</h6>
                </div>
                <div class="card-body">
                     <form class="user" action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                    <input type="text" name="nome" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nome" required="">
                    </div>
                         <div class="form-group">

                             <select class="form-control" name="cargo">
                          <option value="Vereador">Vereador</option>
                          <option value="Prefeito">Prefeito</option>
                         
                        </select>
                         </div>
                           <div class="form-group">
                               <textarea class="ckeditor" name="foto" placeholder="Foto" required=""> Foto </textarea>
                    </div>
                           <div class="form-group">
                    <input type="text" name="descricao" class="form-control form-control-user" id="exampleInputEmail" placeholder="Descricao" required="">
                    </div>
                       
                <div class="form-group">
                    <input type="date" name="data_nascimento" class="form-control form-control-user" id="exampleInputEmail" placeholder="Data de Nascimento" required="">
                </div>
                        <div class="form-group">
                    <input type="text" name="partido" class="form-control form-control-user" id="exampleInputEmail" placeholder="Partido" required="">
                    </div>  
                 <div class="form-group">
                               <textarea class="ckeditor" name="rede_social" placeholder="Rede Social" required=""> Rede Social </textarea>
                    </div>
                  <button type="submit" class="btn btn-primary btn-user btn-block" name="botao">Cadastrar</button>
                  <a href="CAD_index.php" class="btn btn-warning btn-user btn-block">Voltar</a>
                
              </form>
                 <?php
                    
                    if (isset($_POST["botao"])) {
                          require_once '../Controller/CandidatoController.php';
                        $objControl = new CandidatoController();
                        $mensagem = $objControl->cadastrarCandidato($_POST["nome"],$_POST["cargo"], $_POST["foto"], $_POST["descricao"], $_POST["data_nascimento"],$_POST["partido"], $_POST["rede_social"]);
                                echo "<script language='javascript' type='text/javascript'>"
                                  . "alert('".$mensagem."');";
                                echo "</script>";
                            
                      
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
