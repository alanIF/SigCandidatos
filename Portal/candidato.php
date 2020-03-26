<?php
    include './head.php';
    if (isset($_GET['id'])){
        require_once '../Controller/CandidatoController.php';
        $objControl = new CandidatoController();
        $id = (int)$_GET['id'];   
        $candidato= $objControl->getCandidato($id);
        if ( $candidato==null){
                              echo "<script language= 'JavaScript'>
                                        location.href='./index.php'
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
              
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info"> <?php echo $candidato[0]["nome"];?></h6>
                </div>
                <div class="card-body">
                  <div class="row">
    <div class="col-sm-4">
  <?php echo $candidato[0]["foto"];?> 
                     <p class="text-left"><b> Candidato  à : <?php echo $candidato[0]["cargo"]; ?></b></p>
                     <p class="text-left""><b> Descrição : <?php echo $candidato[0]["descricao"]; ?></b></p>
                    <p class="text-left""><b> Partido : <?php echo $candidato[0]["partido"]; ?></b></p>
                    <p class="text-left""><b> Data de Nascimento : <?php echo date("d/m/Y", strtotime($candidato[0]['data_nascimento'])); ?></b></p>
                    <div class="text-left"><?php echo $candidato[0]["rede_social"];?> </div>
    </div>
    <div class="col-sm-4">
        <h3 class="text-center text-info">Propostas</h3>
<div class="table-responsive">
                <table class="table" id="dataTable" border="0" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th class="text-center">Título</th>
                      <th class="text-center" >Descrição</th>
                 

                    </tr>
                  </thead>
                 
                  <tbody>
                    <?php 
                        require_once '../Controller/PropostaController.php';
                        $objControl = new PropostaController();
                        $dados=$objControl->listar_c($id);
                        $tamanho = count($dados);
                        if ($tamanho > 0) {
                            for ($i = 0; $i < $tamanho; $i++) {
                                 echo "<tr>";

                                            echo"<td class='text-center'>" . $dados[$i]['titulo'] . "</td>";
                                            echo"<td>" . $dados[$i]['descricao'] . "</td>";
                                            echo "</tr>";
                                           
                            }
                        
                        }else{
                            echo "<tr><td colspan='2'> Esse candidato não tem nenhuma proposta ate o momento!</td>";
                        }
                    ?>
                      
                  </tbody>
                </table>
              </div>    
    </div>
                       <div class="col-sm-4">
                                   <h3 class="text-center text-warning">Conquistas</h3>

                             <div class="table-responsive">
                <table class="table" id="example1" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    
                      <th>Título</th>
                      <th>Descrição</th>
                 

                    </tr>
                  </thead>
                 
                  <tbody>
                    <?php 
                        require_once '../Controller/ConquistaController.php';
                        $objControl = new ConquistaController();
                        $dados=$objControl->listar_c($id);
                        $tamanho = count($dados);
                        if ($tamanho > 0) {
                            for ($i = 0; $i < $tamanho; $i++) {
                                 echo "<tr>";
                                            
                                            echo"<td>" . $dados[$i]['titulo'] . "</td>";
                                            echo"<td>" . $dados[$i]['descricao'] . "</td>";
                                            
                                         
                            }
                        
                        }else{
                            echo "<tr><td colspan='2'> Esse candidato ainda não tem nenhuma conquista ate o momento! </td>";
                        }
                    ?>
                        
                  </tbody>
                </table>
              </div> 
                           
                       </div>
  </div>
                  
                    

                
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
