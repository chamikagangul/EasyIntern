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
      Router::redirect('home/index');
    }else{
      Router::redirect('register/login');
    }
  }
}
