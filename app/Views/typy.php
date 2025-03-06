<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <h1>Přehled typů komponentů</h1>
    <div class="row">
    <?php 
    foreach($typy as $row){
      
      
        ?>
        
        <div class="card col-lg-4">
            
        <div class="card-body">
            <h4> <?= anchor('vypis/'.$row->idKomponent, $row->typKomponent) ?> </h4>
        </div>
        </div>
        
      
      <?php
        }

      
     ?>  
    </div>    
</div>  
<?=$this->endSection(); ?>