<?php

class Users  extends Model
{
  private $_isLoggedIn, $_sessionName, $_cookieName;
  public static $currentLoggedUser = null;
  public function __construct($user = '')
  {
    $table = "users";
    parent::__construct($table);
    $this->_sessionName = CURRENT_USER_SESSION_NAME;
    $this->_cookieName = REMEMBER_ME_COOKIE_NAME;
    $this->_softDelete = true;

    if ($user != '') {
      if (is_int($user)) {
        $u = $this->_db->findFirst('users', ['conditions' => 'id=?', 'bind' => [$user]]);


        $u2 = $this->_db->findFirst('student', ['conditions' => 'id=?', 'bind' => [$user]]);
      } else {
        $u = $this->_db->findFirst('users', ['conditions' => 'username=?', 'bind' => [$user]]);
        $u2 = $this->_db->findFirst('student', ['conditions' => 'username=?', 'bind' => [$user]]);
      }
      if ($u) {
        $this->acl = $u->acl;
        if ($this->acls()[0] == "LogedIn-Student") {
          $u2 = $this->_db->findFirst('student', ['conditions' => 'id=?', 'bind' => [$user]]);
        }
        if ($this->acls()[0] == "LogedIn-Company") {
          $u2 = $this->_db->findFirst('student', ['conditions' => 'id=?', 'bind' => [$user]]);
        }
      }

      if ($u) {
        foreach ($u as $key => $value) {
          $this->$key = $value;
        }
      }
      if ($u2) {
        foreach ($u2 as $key => $value) {
          $this->$key = $value;
        }
      }
    }
  }

  public function findByUsername($username)
  {
    $user = $this->findFirst(['conditions' => 'username=?', 'bind' => [$username]]);

    return $user;
  }

  public static function currentLogedInUser()
  {
    if (!isset(self::$currentLoggedUser) && Session::exists(CURRENT_USER_SESSION_NAME)) {
      $U = new Users((int) Session::get(CURRENT_USER_SESSION_NAME));
      self::$currentLoggedUser = $U;
    }
    return self::$currentLoggedUser;
  }

  public function login($rememberMe = false)
  {
    Session::set($this->_sessionName, $this->id);

    if ($rememberMe == true) {
      $hash = md5(uniqid() + rand(0, 100));
      $user_agent = Session::uagent_no_version();
      Cookie::set($this->_cookieName, $hash, REMEMBER_ME_COOKIE_EXPIRY);
      $fields = ['session' => $hash, 'user_agent' => $user_agent, 'user_id' => $this->id];
      $this->_db->query("DELETE FROM user_session WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);

      $this->_db->insert('user_sessions', $fields);
    }
  }

  public function loginUserFromCookie()
  {
    $userSession = UserSessions::getFromCookie();
    $user = NULL;
    if ($userSession->user_id != '') {
      $user = new self($userSession->user_id);
    }
    if ($user) {
      $user->login();
    }

    return $user;
  }
  public function logout()
  {
    $userSession = UserSessions::getFromCookie();
    if ($userSession) $userSession->delete();
    Session::delete(CURRENT_USER_SESSION_NAME);
    if (Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
      Cookie::delete(REMEMBER_ME_COOKIE_NAME);
    }
    self::$currentLoggedUser = null;
    return true;
  }

  public function RegisterNewUser($params)
  {
    $this->assign($params);
    $this->password = password_hash($this->password, PASSWORD_DEFAULT);
    $this->save();
  }

  public function insertIntoStudent($fields)
  {
    if (empty($fields)) return false;

    return $this->_db->insert("student", $fields);
  }

  public function insertIntoCompany($fields)
  {
    
    if (empty($fields)) return false;

    return $this->_db->insert("company", $fields);
  }

  public function acls()
  {
    if (empty($this->acl)) return [];
    return json_decode(htmlspecialchars_decode($this->acl, ENT_QUOTES), true);
  }

  public function userType()
  {
    //dnd(self::acls());
    return self::acls()[0];
  }

  public function editProfile($id, $fields){
    //dnd($this->userType());
    if($this->userType() == "LogedIn-Student"){
      $this->editProfileStudent($id, $fields);
    }else if($this->userType() == "LogedIn-Company"){
      $this->editProfileCompany($id, $fields);
    }
  }

  public function editProfileStudent($id, $fields)
  {
    $this->_db->update("student", $id, $fields);
    $f['fname'] = $fields['fname'];
    $f['lname'] = $fields['lname'];
    $f['email'] = $fields['email'];
    $this->_db->update("users", $id, $f);
  }

  public function editProfileCompany($id, $fields)
  {
    $this->_db->update("company", $id, $fields);
    $f['name'] = $fields['name'];
    $f['email'] = $fields['email'];
    $this->_db->update("users", $id, $f);
  }
}
