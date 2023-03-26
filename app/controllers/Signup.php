<?php

/**
 * signup class
 */
class Signup
{
    use Controller;

    public function index()
    {
        $data['errors'] = [];

        $user = new User();

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {

            if($user->validate($_POST))
            {

                $_POST['role'] = 'user';
                $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

                $user->insert($_POST);

                message("Your profile was successfully created. Please login");
                redirect('signin');
            }
        }

        $data['errors'] = $user->errors;
        $data['title'] = "Signup";

        $this->view('signup',$data);
    }

}