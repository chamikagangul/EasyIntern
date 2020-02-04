<?php

class Search  extends Model
{

  public function __construct($table)
  {
    
    parent::__construct($table);
    
  }
  public function search($table,$tag){
    return $this->_db->search($table,$tag);
  }
}
