<?php

class View {
  protected $_head,$_body,$_siteTitle = SITE_TITLE,$_outputBuffer,$_layout = DEFULT_LAYOUT;
  public function __construct(){

  }
  public function render($viewName){
    $viewArray = explode('/',$viewName);
    $viewString = implode(DS,$viewArray);
    if(file_exists(ROOT.DS.'App'.DS.'views'.DS.$viewString.'.php')){
      include(ROOT.DS.'App'.DS.'views'.DS.$viewString.'.php');
      include(ROOT.DS.'App'.DS.'views'.DS."layouts".DS.$this->_layout.'.php');
    }else{
      die("The view ".$viewName." does not exist");
    }
  }

  public function content($type){

    if($type == 'head'){
      return $this->_head;
    }else if($type === 'body'){
      return $this->_body;
    }
    return false;
  }

  public function start($type){
    $this->_outputBuffer = $type;
    ob_start();
  }

  public function end(){
    if($this->_outputBuffer == 'head'){
      $this->_head = ob_get_clean();
    }else if($this->_outputBuffer=='body'){
      $this->_body = ob_get_clean();
    } else{
      die("You must first run the start method");
    }
  }

  public function sitetitle(){
    return $this->_siteTitle;
  }

  public function setSiteTitle($title){
    $this->_siteTitle = $title;
  }

  public function setLayout($path){
    $this->_layout = $path;
  }
}
