<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Přehled </h1>
    <div class="row">
    <?php 
    foreach($komponent as $row){
        ?>
        
        <div class="card col-lg-4">
            
        <div class="card-body">
            <h4> <?= anchor('komponenta/'.$row->id, $row->nazev) ?> </h4>
        </div>
        </div>
        
      
      <?php
        }
     ?>  
    </div> 
    <?php
    echo $pager->links();
    ?>   
</div>  

<?=$this->endSection(); ?>