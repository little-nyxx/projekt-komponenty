<?= $this->extend('layout/sablona'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <form method="post" action="<?= base_url("item/create") ?>">
    <input name="nazev" placeholder="Vložte název prvku">
    <input name="url" placeholder="Vložte url">
    <button type="submit">Odeslat</button>
    </form>
    <div class="alert alert-success">
    <strong>Povedlo se!</strong> Nový typ byl přidán!
    </div>
</div>

<?=$this->endSection(); ?>