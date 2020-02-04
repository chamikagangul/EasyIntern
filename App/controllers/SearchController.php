<?php

class SearchController extends Controller
{

  public function __construct($_controller, $_action)
  {
    parent::__construct($_controller, $_action);
  }

  public function indexAction()
  {
   $result =  (new Search('job'))->search('job',$_POST['tag']);
   echo json_encode($result);
  }
}
