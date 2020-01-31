<?php
class RegisterController extends Controller
{
  public function __construct($controller, $action)
  {
    parent::__construct($controller, $action);
    $this->load_model('Users');
    $this->view->setLayout('default');
  }
  public function loginAction()
  {
    $validation = new Validate();
    if ($_POST) {
      //form Invalid
      $validation->check($_POST, [
        'username' => [
          'display' => 'Username',
          'required' => true
        ],
        'password' => [
          'display' => 'Password',
          'required' => true,
          'min' => 6
        ]
      ]);
      if ($validation->passed()) {
        $user = $this->UsersModel->findByUsername($_POST['username']);
        //dnd(password_hash("pass",PASSWORD_DEFAULT));

        if ($user && password_verify(Input::get('password'), $user->password)) {
          $remember = (isset($_POST["remember_me"]) && Input::get('remember_me')) ? true : false;
          $user->login($remember);
          Router::redirect('');
        } else {
          $validation->addError("There is an error with username or password");
        }
      }
    }
    $this->view->displayErrors = $validation->displayErrors();
    $this->view->render('register/login');
  }

  public function logoutAction()
  {
    if (currentUser()) {
      currentUser()->logout();

      Router::redirect('register/login');
    }
  }

  public function registerAction()
  {
    $validation = new Validate();
    $posted_values = ['fname' => '', 'lname' => '', 'username' => '', 'email' => '', 'password' => '', 'confirm' => ''];
    if ($_POST) {
      $posted_values = posted_values($_POST);
      $validation->check($_POST, [
        'fname' => [
          'display' => 'First name',
          'required' => true
        ],
        'username' => [
          'display' => 'Username',
          'required' => true,
          'unique' => 'users',
          'min' => 6,
          'max' => 150
        ],
        'email' => [
          'display' => 'Email Field',
          'required' => true,
          'unique' => 'users',
          'max' => 150,
          'validEmail' => true
        ],
        'password' => [
          'display' => 'Password',
          'required' => true,
          'min' => 6
        ],
        'confirm' => [
          'display' => 'Confirm Password',
          'required' => true,
          'min' => 6,
          'matches' => 'password'
        ]
      ]);

      if ($validation->passed()) {
        $newUser =  new Users();
        $acl = $_POST['acl'];
        $_POST['acl'] = '["LogedIn-' . $acl . '"]';
        $newUser->registerNewUser($_POST);
        $id = $newUser->findByUsername($_POST["username"])->id;
        $params["id"] = $id;
        if ($acl == "Student") {
          $params["fname"] = $_POST["fname"];
          $params["email"] = $_POST["email"];
          $newUser->insertIntoStudent($params);
        } else if ($acl == "Company") {
          $params["name"] = $_POST["fname"];
          $params["email"] = $_POST["email"];
          $newUser->insertIntoCompany($params);
        }


        Router::redirect('register/login');
      }
    }
    $this->view->post = $posted_values;
    $this->view->displayErrors = $validation->displayErrors();

    $this->view->render('register/register');
  }

  public function editProfileAction()
  {
    if (currentUser()->userType() == "LogedIn-Student") {
      $validation = new Validate();
      $posted_values = ['fname' => '', 'lname' => '', 'email' => '', 'date_of_birth' => '', 'field' => '', 'contact' => '', 'skills' => '', 'profile_pic' => '', 'cv_name' => '', 'cv_data' => ''];
      $u = currentUser();
      foreach ($posted_values as $key => $value) {
        $posted_values[$key] = $u->$key;
      }
      if ($_POST) {
        $posted_values = posted_values($_POST);
        $validation->check($_POST, [
          'email' => [
            'display' => 'Email Field',
            'validEmail' => true,
            'required' => true
          ],
          'fname' => [
            'display' => 'First Name',
            'required' => true
          ],
          'lname' => [
            'display' => 'Last Name',
            'required' => true
          ],
          'date_of_birth' => [
            'display' => 'Date of Birth',
            'required' => true
          ],
          'fname' => [
            'display' => 'First Name',
            'required' => true
          ],
          'field' => [
            'display' => 'Field',
            'required' => true
          ],
          'skills' => [
            'display' => 'Skill',
            'required' => true
          ],
          'contact' => [
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

          currentUser()->editProfile($id, $params);
          Router::redirect('home/index');
        }
      }
      $this->view->post = $posted_values;
      $this->view->displayErrors = $validation->displayErrors();
      $this->view->render('register/editProfileStudent');

    }else if (currentUser()->userType() == "LogedIn-Company") {
      $validation = new Validate();
      $posted_values = ['name' => '', 'email' => '', 'address' => '', 'field' => '', 'contact' => '', 'details' => ''];
      $u = currentUser();
      foreach ($posted_values as $key => $value) {
        $posted_values[$key] = $u->$key;
      }
      if ($_POST) {
        $posted_values = posted_values($_POST);
        $validation->check($_POST, [
          'email' => [
            'display' => 'Email Field',
            'validEmail' => true,
            'required' => true
          ],
          'name' => [
            'display' => 'First Name',
            'required' => true
          ],
          'address' => [
            'display' => 'Address',
            'required' => true
          ],
          'field' => [
            'display' => 'Field',
            'required' => true
          ],
          'details' => [
            'display' => 'Details',
            'required' => true
          ],
          'contact' => [
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

          currentUser()->editProfile($id, $params);
          Router::redirect('home/index');
        }
      }
      $this->view->post = $posted_values;
      $this->view->displayErrors = $validation->displayErrors();
      $this->view->render('register/editProfileCompany');
    }

  }
}
