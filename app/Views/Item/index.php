<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
<h1>Seznam typů</h1>
<table class="table">
    <?php
        foreach($typy as $row) {
            ?>
            <tr>
                <td><?= $row->typKomponent ?>
                <td><a class="btn">Editovat</a></td>
                <td><a class="btn">Smazat</a></td>
            </tr>
            <?php
        }
        ?>
        <a class="btn" href="polozka/pridat">Přidat</a>
        <?php
    ?>
</table>

<?=$this->endSection(); ?>