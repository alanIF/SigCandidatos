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
 <div class="col-lg-6">
                    <?php
                        require_once '../Controller/CandidatoController.php';
                        $objControl2 = new CandidatoController();
                        $dados=$objControl2->listar();
                        
                        $tamanho = count($dados);
                          
                        if ($tamanho > 0) {
                                 
                             $controle=0;

                            for ($i = 0; $i < $tamanho; $i++) {
                                
                                    echo '<div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">'.$dados[$i]['nome'].'</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="candidato.php?id='.$dados[$i]['id'].'">Visualizar</a>
                     
                    </div>
                  </div>
                </div>
                
                <div class="card-body">
                '.$dados[$i]["foto"].'
                <p class="text-primary text-bold"> Descrição: '.$dados[$i]["descricao"].'</p>
                <p class="text-primary text-bold"> Partido: '.$dados[$i]["partido"].'</p>
               '.$dados[$i]["rede_social"].'
                <p class="text-primary text-bold"> Número de Visitas: '.$dados[$i]["visitas"].'</p>


                </div>
              </div>';
                                    if($controle==1){
                                        $controle=0;
                                        echo "</div>";
                                        echo '<div class="col-lg-6">';
                                    }else{
                                        $controle++;    
                                    }
                           
                                                             
                            }

                        }
                    ?>
                   
      
 </div>
           

              


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <?php
   include './foot.php';
?>