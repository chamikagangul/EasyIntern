<?php

class ProfileController extends Controller
{

  public function __construct($_controller, $_action)
  {
    parent::__construct($_controller, $_action);
  }

  public function indexAction()
  {
    //dnd(currentUser()->userType());
    if (currentUser()->userType() == "LogedIn-Student") {
      $this->view->render("profile/student");
    }else if (currentUser()->userType()== "LogedIn-Company") {
      $this->view->render("profile/company");
    }
  }
}
