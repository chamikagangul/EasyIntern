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
    $posted_values = ['fname' => '',  'username' => '', 'email' => '', 'password' => '', 'confirm' => '', 'acl' => ''];
    if ($_POST) {
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
        foreach ($posted_values as $k => $v) {
          $posted_values[$k] = $_POST[$k];
        }

        $newUser->registerNewUser($posted_values);

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
      $posted_values = ['fname' => '', 'lname' => '', 'email' => '', 'date_of_birth' => '', 'field' => '', 'contact' => '', 'skills' => ''];
      $u = currentUser();



      if ($_POST) {

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
          foreach ($posted_values as $k => $v) {
            $params[$k] = $_POST[$k];
          }

          if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['cv_file']['tmp_name'])) {
              $blob = file_get_contents($_FILES['cv_file']['tmp_name']);
              $name = $_FILES['cv_file']['name'];
              $params['cv_data'] = $blob;
              $params['cv_name'] = $name;
              dnc($name);
            }
            if (is_uploaded_file($_FILES['profile_pic']['tmp_name'])) {
              $blob = file_get_contents($_FILES['profile_pic']['tmp_name']);
              $name = $_FILES['profile_pic']['name'];
              $params['profile_pic'] = $blob;
              echo '<img src="data:image/jpeg;base64,' . base64_encode($blob) . '"/>';
              dnc($name);
            }
          }

          currentUser()->editProfile($id, $params);
          Router::redirect('home/index');
        }
      }
      $this->view->post = $posted_values;
      $this->view->displayErrors = $validation->displayErrors();
      $this->view->render('register/editProfileStudent');
    } else if (currentUser()->userType() == "LogedIn-Company") {
      $validation = new Validate();
      $posted_values = ['name' => '', 'email' => '', 'address' => '', 'field' => '', 'contact' => '', 'details' => ''];
      $u = currentUser();
      foreach ($posted_values as $key => $value) {
        $posted_values[$key] = $u->$key;
      }
      $post = $posted_values;

      if ($_POST) {


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
          foreach ($posted_values as $k => $v) {
            $posted_values[$k] = $_POST[$k];
          }

          currentUser()->editProfile($id, $posted_values);
          Router::redirect('');
        }
      }
      $this->view->post = $posted_values;
      $this->view->displayErrors = $validation->displayErrors();
      $this->view->render('register/editProfileCompany');
    }
  }
}
