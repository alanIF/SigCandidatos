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
                  <h6 class="m-0 font-weight-bold text-info">Candidatos</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nome</th>
                      <th>Cargo</th>
                      <th>Foto</th>
                      <th>Descrição</th>
                      <th>Partido</th>
                      <th>Data de Nascimento</th>
                      <th>Redes Sociais</th>
                                         <th>Visualizações</th>

                      <th>Ações</th>
                    </tr>
                  </thead>
                 
                  <tbody>
                    <?php 
                        require_once '../Controller/CandidatoController.php';
                        $objControl = new CandidatoController();
                        $dados=$objControl->listar();
                        $tamanho = count($dados);
                        if ($tamanho > 0) {
                            for ($i = 0; $i < $tamanho; $i++) {
                                 echo "<tr>";
                                            echo"<td>" . $dados[$i]['id'] . "</td>";

                                            echo"<td>" . $dados[$i]['nome'] . "</td>";
                                            echo"<td>" . $dados[$i]['cargo'] . "</td>";

                                            echo"<td>" . $dados[$i]['foto'] . "</td>";
                                            echo"<td>" . $dados[$i]['descricao'] . "</td>";
                                            echo"<td>" . $dados[$i]['partido'] . "</td>";
                                            $data = date("d/m/Y", strtotime($dados[$i]['data_nascimento']));

                                            echo"<td>" .$data  . "</td>";
                                            echo"<td>" . $dados[$i]['rede_social'] . "</td>";
                                            echo"<td>" . $dados[$i]['visitas'] . "</td>";

                                            echo"<td>  <a href='CAD_editar.php?id=" . $dados[$i]['id'] . "'><i class='fas fa-file' title='Editar Produto'  aria-hidden='true'></i></a>
                                      <a onclick='return confirmar();' href='CAD_excluir.php?id=" . $dados[$i]['id'] . "'><i class='fa fa-trash' title='Excluir Candidato'  aria-hidden='true'></i></a></td></tr>";
                            }
                        
                        }else{
                            echo "<tr><td colspan='8'> Você não cadastrou  nenhum candidato ainda, cadastre um candidato!</td>";
                        }
                    ?>
                        <tfoot>
                                    <tr>
                                        <th colspan="8"> <a href="CAD_cadastrar.php"><i class="fa fa-plus-square" aria-hidden="true"></i></a></th>
                                      
                                      
                                    </tr>
                                </tfoot>
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
