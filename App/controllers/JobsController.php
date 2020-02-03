<?php

class JobsController extends Controller
{

  public function __construct($_controller, $_action)
  {
    parent::__construct($_controller, $_action);
  }

  public function indexAction()
  {
    $this->addjobAction();
  }

  public function addjobAction(){
    $validation = new Validate();
    $posted_values = ['name' => '', 'skills' => '', 'vacancies' => '', 'salary' => '', 'job_details' => '', 'description' => ''];
    $u = currentUser();
    
    if ($_POST) {

      $validation->check($_POST, [
        'name' => [
          'display' => 'First Name',
          'required' => true
        ],
        'skills' => [
          'display' => 'Address',
          'required' => true
        ],
        'vacancies' => [
          'display' => 'Field',
          'required' => true
        ],
        'salary' => [
          'display' => 'Details',
          'required' => true
        ],
        'job_details' => [
          'display' => 'Phone number',
          'required' => true
        ],
        'description' => [
          'display' => 'Phone number',
          'required' => true
        ]

      ]);

      if ($validation->passed()) {
        $id = currentUser()->id;
        $params = [];
        
        if (currentUser()->userType() == "LogedIn-Company") {
          foreach ($posted_values as $key => $value) {
            $posted_values[$key] = $_POST[$key];
    
          }

          
          $posted_values["company"] = currentUser()->id;
          $job = new Job();
          $job->addJob($posted_values);
          Router::redirect('');
        }
      }
    }
    $this->view->post = $posted_values;
    $this->view->displayErrors = $validation->displayErrors();

    $this->view->render('jobs/jobpost');
    //(new Job())->apply(["company"=>"1","job"=>"5"]);
  }

  public function applicationAction(){
    $student = new Users($_POST['id']);


    $this->view->render('jobs/application');
  }
}
