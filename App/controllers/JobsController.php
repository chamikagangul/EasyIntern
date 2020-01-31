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
      $posted_values = posted_values($_POST);
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
        foreach ($_POST as $k => $v) {
          if ($v != '') {
            $params[$k] = $v;
          }
        }
        if (currentUser()->userType() == "LogedIn-Company") {
          $params["company"] = currentUser()->id;
          $job = new Job();
          $job->addJob($params);
          Router::redirect('home/index');
        }
      }
    }
    $this->view->post = $posted_values;
    $this->view->displayErrors = $validation->displayErrors();

    $this->view->render('jobs/addJob');
    //(new Job())->apply(["company"=>"1","job"=>"5"]);
  }
  public function applicationAction(){
    $this->view->render('jobs/application');
  }
}
