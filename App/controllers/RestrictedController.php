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
        Router::redirect('');
      } else if (currentUser()->userType() == "LogedIn-Company") {
        Router::redirect('');
      } else {
        Router::redirect('');
      }
    }else{
      Router::redirect("register/login");
    }
  }
}
