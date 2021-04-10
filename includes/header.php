<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $header_title; ?></title>

        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        mb_internal_encoding('UTF-8')
        ?>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Documents</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="../catalog/create-catalog.php">Catalogs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Items</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blanks</a>
      </li>
    </ul>
  </div>
</nav>