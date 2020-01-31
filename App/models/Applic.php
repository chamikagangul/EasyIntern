
<?php

class Applic extends Model
{
  private $_isLoggedIn, $_sessionName, $_cookieName;
  public static $currentLoggedUser = null;
  public function __construct()
  {
    $table = "application";
    parent::__construct($table);
    $this->_softDelete = true;
  }

  public function saveApplication($fields)
  {
    if (empty($fields)) return false;
    return $this->_db->insert("application",$fields);
  }
}
