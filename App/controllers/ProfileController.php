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
    } else if (currentUser()->userType() == "LogedIn-Company") {
      $this->view->render("profile/company");
    }
  }
  public function studentAction()
  {
      $this->view->render("profile/student");
  }


  public function downloadFileAction()
  {
    $data = currentUser()->cv_data;
    $file = currentUser()->cv_name;
    $type = "application/pdf";
    header("Content-type: $type");
    header("Content-Disposition: attachment; filename=$file");
    echo $data;
  }
}
