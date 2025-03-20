<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
<h1><?= $vyrobci->nazev ?></h1>
<h2><?= $vyrobci->typKomponent?></h2>
<h3>Výrobce: <?= $vyrobci->vyrobce?></h3>
<h3>Parametry</h3>
<?php
    $table = new \CodeIgniter\View\Table();
    $table->setHeading('Název parametru', 'Hodnota');
    foreach ($parametr as $row) {
        $table->addRow($row->nazev, $row->hodnota);
    }
    $template = array(
        'table_open'=> '<table class="table table-bordered">',
        'thead_open'=> '<thead>',
        'thead_close'=> '</thead>',
        'heading_row_start'=> '<tr>',
        'heading_row_end'=>' </tr>',
        'heading_cell_start'=> '<th>',
        'heading_cell_end' => '</th>',
        'tbody_open' => '<tbody>',
        'tbody_close' => '</tbody>',
        'row_start' => '<tr>',
        'row_end'  => '</tr>',
        'cell_start' => '<td>',
        'cell_end' => '</td>',
        'row_alt_start' => '<tr>',
        'row_alt_end' => '</tr>',
        'cell_alt_start' => '<td>',
        'cell_alt_end' => '</td>',
        'table_close' => '</table>'
        );
        
        $table->setTemplate($template);
        echo $table->generate();
?>
<h4>Odkaz: <a href="<?= $vyrobci->odkaz?>">tady</a></h4>

<?php
    $img = array(
        'src' => base_url('obrazky/komponenty/'.$vyrobci->pic),
        'class' => 'img-fluid w-50'
    )

?>
<?=img($img); ?>

<?=$this->endSection(); ?>