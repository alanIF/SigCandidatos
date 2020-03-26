<?php
    include './head.php';
    require_once '../Controller/HomeController.php';
    $objControl = new HomeController();
    
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Portal dos Candidatos</h1>
          </div>

          <!-- Content Row -->
          <div class="row">
                <div class="col-lg-12 mb-6">
              
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">Candidatos a Prefeito</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                <table class="table" id="dataTable" border="0" width="100%" cellspacing="0">
                 
                 
                  <tbody>
                    <?php 
                           require_once '../Controller/CandidatoController.php';
                        $objControl2 = new CandidatoController();
                        $dados=$objControl2->listar();
                        
                        $tamanho = count($dados);
                         echo "<tr>"; 
                        if ($tamanho > 0) {
                                 
                             $controle=0;

                            for ($i = 0; $i < $tamanho; $i++) {
                                if( strcmp($dados[$i]["cargo"],"Prefeito")==0){

                                                                    echo "<td class='text-center    '><a href='candidato.php?id=".$dados[$i]["id"]."'>".$dados[$i]["foto"]."</a></td>";

                                                                    if($controle==1){
                                                                        $controle=0;
                                                                        echo "</tr>";
                                                                        echo '<tr>';
                                                                    }else{
                                                                        $controle++;    
                                                                    }
                                }
                                                             
                            }

                        }
                    ?>
                       
                  </tbody>
                </table>
              </div>    
                </div>
              </div>

            

            </div>
           <div class="col-lg-12 mb-6">
              
              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">Candidatos a Vereador  </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                <table class="table" id="dataTable" border="0" width="100%" cellspacing="0">
                 
                 
                  <tbody>
                    <?php 
                         
                         echo "<tr>"; 
                        if ($tamanho > 0) {
                                 
                             $controle=0;

                            for ($i = 0; $i < $tamanho; $i++) {
                                                                if( strcmp($dados[$i]["cargo"],"Vereador")==0){

                                    echo "<td class='text-center    '><a href='candidato.php?id=".$dados[$i]["id"]."'>".$dados[$i]["foto"]."</a></td>";
                          
                                    if($controle==2){
                                        $controle=0;
                                        echo "</tr>";
                                        echo '<tr>';
                                    }else{
                                        $controle++;    
                                    }
                           
                                                                }                       
                            }

                        }
                    ?>
                       
                  </tbody>
                </table>
              </div>    
                </div>
              </div>

            

            </div>
           

              


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <?php
   include './foot.php';
?>