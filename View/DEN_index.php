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
                  <h6 class="m-0 font-weight-bold text-info">Denúncias</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Reclamante</th>
                      <th>Reclamado</th>
                      <th>Descrição</th>
                      <th>Data de Denúncia</th>
                      <th>Situação</th>
                    

                      <th>Ações</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <?php 
                        require_once '../Controller/DenunciaController.php';
                        $objControl = new DenunciaController();
                        $dados=$objControl->listar();
                        $tamanho = count($dados);
                        if ($tamanho > 0) {
                            for ($i = 0; $i < $tamanho; $i++) {
                                if($dados[$i]["situacao_i"]==0){
                                    echo "<tr class='alert alert-warning'>";
                                }else{
                                    echo "<tr class='alert alert-success'>";
                                    
                                }
                                            echo"<td>" . $dados[$i]['id'] . "</td>";

                                            echo"<td>" . $dados[$i]['reclamante'] . "</td>";
                                            echo"<td>" . $dados[$i]['reclamado'] . "</td>";
                                            echo"<td>" . $dados[$i]['descricao'] . "</td>";
                                            echo"<td>" . $dados[$i]['data'] . "</td>";
                                            echo"<td>" . $dados[$i]['situacao'] . "</td>";
                                          

                                            echo"<td>  <a onclick='return enviar();'  href='DEN_enviar.php?id=" . $dados[$i]['id'] . "'><i class='fas fa-arrow-alt-circle-right' title='Enviar Denúncia'  aria-hidden='true'></i></a>
                                      </td></tr>";
                            }
                        
                        }else{
                            echo "<tr><td colspan='7'> Ainda não foi recebida nenhuma denúncia!</td>";
                        }
                    ?>
                      
                  </tbody>
                </table>
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
