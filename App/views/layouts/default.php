<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= PROOT ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/custom.css">
    <script src="<?= PROOT ?>js/jquery-2.2.4.min.js"></script>
    <script src="<?= PROOT ?>js/bootstrap.min.js"></script>
    <title><?= $this->sitetitle();?></title>
    <?= $this->content('head'); ?>


  </head>
  <body>
    <?php include 'main_menu.php'; ?>

    <div class="container-fluid" style="min-height:cal(100%-125px);">
      <?= $this->content('body'); ?>
    <div>

    <?php include 'footer.php'; ?>
    </body>
</html>
