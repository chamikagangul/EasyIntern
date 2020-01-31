<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= PROOT ?>css/bootstrap.min.css">
    
    <script src="<?= PROOT ?>js/jquery-2.2.4.min.js"></script>
    <script src="<?= PROOT ?>js/bootstrap.min.js"></script>

    <script src="<?= PROOT ?>js/coustom.js"></script>



    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?= PROOT ?>css/css_applicant/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/css_applicant/animate.css">

    <link rel="stylesheet" href="<?= PROOT ?>css/css_applicant/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/css_applicant/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/css_applicant/magnific-popup.css">

    <link rel="stylesheet" href="<?= PROOT ?>css/css_applicant/aos.css">

    <link rel="stylesheet" href="<?= PROOT ?>css/css_applicant/ionicons.min.css">

    <link rel="stylesheet" href="<?= PROOT ?>css/css_applicant/flaticon.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/css_applicant/icomoon.css">
    <link rel="stylesheet" href="<?= PROOT ?>css/css_applicant/style.css">
    
    <link rel="stylesheet" href="<?= PROOT ?>css/custom.css">

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
