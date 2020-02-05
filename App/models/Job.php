<?php

class Job  extends Model
{
  private $_isLoggedIn, $_sessionName, $_cookieName;
  public static $currentLoggedUser = null;
  public function __construct($job='')
  {
    $table = "job";
    parent::__construct($table);
    $this->_softDelete = true;
    if ($job != '') {
      $j = $this->_db->findFirst('job', ['conditions' => 'id=?', 'bind' => [$job]]);
            
      if ($j) {
        foreach ($j as $key => $value) {
          $this->$key = $value;
        }
      }    
    }
  }



  public function addJob($fields)
  {
    if (empty($fields)) return false;
    return $this->_db->insert("job", $fields);
  }
  public function apply($params){
    
    if(currentUser()->userType()=="LogedIn-Student"){
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
