<?= $this->extend('layout/app') ?>

<?= $this->section('content') ?>
<div class="h-100">
<div class="container w-25">
<form method="post" action="/c_import/importExcel" enctype="multipart/form-data">
			<div class="form-group">
				<label>File Excel</label>
				<input type="file" name="fileexcel" class="form-control" id="file" required accept=".xls, .xlsx" /></p>
			</div>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Upload</button>
			</div>
</form>
</div>
</div>
<?= $this->endSection() ?>