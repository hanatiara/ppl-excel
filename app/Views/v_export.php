<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<div class="container">
<a href="/c_export/exportPDF"><button class="btn btn-primary">Export PDF</button></a>
<?php echo view('v_table'); ?>
</div>
<?= $this->endSection() ?>