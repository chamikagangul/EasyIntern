<?php

class SearchController extends Controller
{

  public function __construct($_controller, $_action)
  {
    parent::__construct($_controller, $_action);
  }

  public function jobAction()
  {
   $result =  (new Search('job'))->search('job',$_POST['tag']);

   echo json_encode($result);
  }

  public function studentAction()
  {
   $result =  (new Search('student'))->search('student',$_POST['tag']);
   
    foreach ($result as $key => $value) {
      $result[$key]->profile_pic = base64_encode($result[$key]->profile_pic);
      $result[$key]->cv_data = '';
    }
   
   echo json_encode($result);
  }
}
