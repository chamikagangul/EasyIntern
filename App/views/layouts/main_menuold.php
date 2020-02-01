<?php
$menu = Router::getMenu('menu_acl');
$currentPaage = currentPage();
//dnd($menu); 

?>

<nav class="navbar navbar-expand-lg navbar-light" id="navigation">
  <a class="navbar-brand" href="<?= PROOT . 'home' ?>"><?= MENU_BRAND ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse topnav" id="main_menu">
    <ul class="navbar-nav mr-auto">

      <?php foreach ($menu as $key => $val) :
        $active = ''; ?>
        <?php if ($key == "USERNAME") {
          continue;
        } ?>
        <?php if (is_array($val)) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?= $key ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

              <?php foreach ($val as $k => $v) :
                $active = ($v == $currentPaage) ? "active" : "";   ?>

                <?php if ($k == "seperator") : ?>

                  <div class="dropdown-divider"></div>
                <?php else : ?>
                  <a class="dropdown-item <?= $active ?>" href="<?= $v ?>"><?= $k ?></a>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </li>
        <?php else :
          $active = ($val == $currentPaage) ? "active" : "";  ?>

          <a class="dropdown-item <?= $active ?>" href="<?= $val ?>"><?= $key ?></a>
        <?php endif; ?>

      <?php endforeach; ?>



      <li class="nav-item active">
    </ul>
    <ul>

      <?php
      $val = $menu["USERNAME"];
      $key = (currentUser()) ? ucfirst(currentUser()->fname) : "Guest";
      ?>
      <div class="nav navbar-bar navbar-right mr-5">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $key ?>
          </a>
          <div class="dropdown-menu mr-" aria-labelledby="navbarDropdown">

            <?php foreach ($val as $k => $v) :
              $active = ($v == $currentPaage) ? "active" : "";   ?>

              <?php if ($k == "seperator") : ?>

                <div class="dropdown-divider"></div>
              <?php else : ?>
                <a class="dropdown-item <?= $active ?>" href="<?= $v ?>"><?= $k ?></a>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>
      </div>
    </ul>
  </div>
</nav>