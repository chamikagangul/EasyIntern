<?php

class HomeController extends Controller{

 public function __construct($_controller,$_action){
   parent::__construct($_controller,$_action);
 }

 public function indexAction(){
   
   $this->view->render("home/index");
 }
}
