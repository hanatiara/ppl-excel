<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<div class="h-100">
<div class="container w-100">
<table border="1" class="table table-striped">
        <tr>
            <th>Id Barang</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Stok</th>
        </tr>
        <?php foreach ($data as $key => $value): ?>    
        <tr>
            <td class="align-middle"><?= $value['id']; ?></td>
            <td class="align-middle"><?= $value['nama']; ?></td>
            <td class="align-middle"><?= $value['harga']; ?></td>
            <td class="align-middle"><?= $value['stok']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>
<?= $this->endSection() ?>