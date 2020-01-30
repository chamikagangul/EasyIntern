<?php

class Controller extends Application{
  protected $_controller,$_action;
  public $view;

  public function __construct($_controller,$_action){
    parent::__construct();
    $this->_controller = $_controller;
    $this->_action = $_action;
    $this->view = new View();
  }

  protected function load_model($model){
    if(class_exists($model)){
      $this->{$model.'Model'} = new $model(strtolower($model));
      
    }
  }
}
