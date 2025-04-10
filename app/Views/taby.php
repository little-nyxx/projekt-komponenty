<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
    <div class="container">
    <h1>Přehled typů komponentů</h1>
    <ul class="nav nav-tabs">
    <?php 
    foreach($mensiTypy as  $row){
       
    
        
        ?>
        
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="<?='#'.$row->url?>"><?= $row->typKomponent ?></a>
    </li>
    
        <?php
        }
        ?>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
    <?php
    
    foreach($typy as $key => $row2) {
        
        
        
        $key2 =$key-1;
        $typ = $mensiTypy[$key2]; ?>
        
        <div class="tab-pane container active" id="<?= $typ->url?>">
        <?php 
        foreach ($row2 as $row3) { 
          
            ?>
            
            <div class="card col-lg-4">
                <div class="row"> 
                    <div class="card-body">
                        <h4> <?= anchor('komponenta/'.$row3->id, $row3->nazev) ?> </h4>
                    </div>
                </div>
            </div>
            <?php 
            }
            ?>
      
    </div>
      <?php 
       } 
     ?>  
    </div>



<?=$this->endSection(); ?>