<?php

class RestrictedController extends Controller
{
  public function __construct($_controller, $_action)
  {
    parent::__construct($_controller, $_action);
  }

  public function indexAction()
  {
    if (currentUser()) {
      $this->view->render("restricted/index");
    }else{
      $this->view->render("register/login");
    }
  }
}
