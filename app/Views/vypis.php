<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
    <div class="container">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><?=anchor("", "Typy") ?></li>
        <li class="breadcrumb-item active" aria-current="page"><?= $typy->typKomponent ?></li>
    </ol>
    </nav>


    <h1>Přehled <?= $typy->typKomponent ?></h1>
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