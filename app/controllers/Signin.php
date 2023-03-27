<?php 

/**
 * home class
 */
class Signin
{
	use Controller;

	public function index()
	{
        $data['errors'] = [];

        $data['title'] = "Signin";
        $user = new User();

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            //validate
            $row = $user->first(['email'=>$_POST['email']]);
            if (!empty($_POST['password'])){
                if(password_verify($_POST['password'], $row->password))
                {
                //authenticate
                //$_SESSION['USER_DATA'] = $row;
                    Auth::authenticate($row);
                    redirect('home');
                }else{
                    $data['errors']['password'] = "Access Denied!";
                }
            }

            $data['errors']['email'] = "Wrong email or password";
        }

        $this->view('signin',$data);
	}

}
