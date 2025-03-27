<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
    <div class="container">
    <h1>Přehled typů komponentů</h1>
    <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#home">Home</a>
    </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
    <div class="tab-pane container active" id="home">...</div>
    </div>
    <?php 
    foreach($typy as $row){
        ?>
        
        <div class="card col-lg-4">
            
        <div class="card-body">
            <h4> <?= anchor('vypis/'.$row->url, $row->typKomponent) ?> </h4>
        </div>
        </div>


        <ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#home"><?= $row->typKomponent ?></a>
    </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
    <div class="tab-pane container active" id="home">
        <div class="card col-lg-4">
            <div class="row">
            <div class="card-body">
                <h4> <?= anchor('komponenta/'.$row->id, $row->nazev) ?> </h4>
            </div>
        </div>
    </div>
    </div>
      <?php
        }
     ?>  



<?=$this->endSection(); ?>