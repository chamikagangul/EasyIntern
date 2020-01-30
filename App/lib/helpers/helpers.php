<?php

function dnd($data){
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
  die();
}

function dnc($data){
  echo '<pre>';
  var_dump($data);
  echo '</pre>';
}

function sanitize($dirty){
  return htmlentities($dirty,ENT_QUOTES,'UTF-8');
}

function currentUser(){
  return Users::currentLogedInUser();
}

function posted_values($post){
  $array =[];
  foreach($post as $key=>$value){
    $array[$key] = sanitize($value); 
  }
  return $array;
}

function currentPage(){
  $curentPage = $_SERVER['REQUEST_URI'];
  if($curentPage == PROOT || $curentPage == PROOT.'home/index'){
    $curentPage =PROOT.'home';
  }
  return $curentPage;  
}
