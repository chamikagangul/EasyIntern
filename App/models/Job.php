<?php

class Job  extends Model
{
  private $_isLoggedIn, $_sessionName, $_cookieName;
  public static $currentLoggedUser = null;
  public function __construct()
  {
    $table = "job";
    parent::__construct($table);
    $this->_softDelete = true;
  }

  public function addJob($fields)
  {
    if (empty($fields)) return false;
    return $this->_db->insert("job", $fields);
  }
  public function apply($params){
    
    if(currentUser()->userType()=="LogedIn-Company"){
      $userId = currentUser()->id;
      $companyId =$params["company"];
      $jobId=$params["job"];
      $postparam["student_id"]=$userId;
      $postparam["company_id"]=$companyId;
      $postparam["job_id"]=$jobId;
      //dnd(new Applic());
      (new Applic())->saveApplication($postparam);
    }
  }

}
