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
      if (currentUser()->userType() == "LogedIn-Student") {
        $this->view->render("home/student");
      } else if (currentUser()->userType() == "LogedIn-Company") {
        $this->view->render("home/company");
      } else {
        $this->view->render("register/login");
      }
    }else{
      $this->view->render("register/login");
    }
  }
}
