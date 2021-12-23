<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9120e89349.js" crossorigin="anonymous"></script>
<body>
<div class=" mt-auto py-3 bg-dark text-white" >
  <div class="container">
    <h1>Header</h1>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="/">Import</a>
        <a class="nav-link active" href="/c_export/">Export</a>
    </div>
  </div>
</nav>

<div class="">
<?= $this->renderSection('content') ?> 
</div>

<footer class="mt-auto py-3 bg-dark text-white" >
  <div class="container">
    &copy; Copyright <?= date('Y') ?>
  </div>
</footer>
</body>
</html>
