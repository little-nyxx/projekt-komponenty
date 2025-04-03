<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
    <div class="container">
    <h1>Přehled typů komponentů</h1>
    <?php 
    $poradi = 0;
    foreach($typy as $row){
        $typ = $mensiTypy[$poradi++];
        ?>
        <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="<?='#'.$typ->url?>"><?= $typ->typKomponent ?></a>
    </li>
    </ul>
        <?php
        }
        ?>

    <!-- Tab panes -->
    <div class="tab-content">
    <div class="tab-pane container active" id="<?= $typ->url?>">
        <div class="card col-lg-4">
            <div class="row">
            <div class="card-body">
            <h4> <?= anchor('komponenta/'.$row->id, $row->nazev) ?> </h4>
            </div>
        </div>
    </div>
    </div>
      <?php
        
     ?>  



<?=$this->endSection(); ?>