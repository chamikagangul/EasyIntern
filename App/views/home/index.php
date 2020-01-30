<?php $this->setSiteTitle("Home"); ?>
<?php $this->start('body')?>
<?php $errors = ["this is eoor no 1","this is eoor no 1"]?>
<?= dangerCard($errors);  ?>
<?= jobCard();  ?>
<?= jobCard();  ?>

<?php $this->end()?>
