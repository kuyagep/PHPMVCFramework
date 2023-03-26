<?php 


/**
 * User class
 */

class User
{
	use Model;

	protected string $table = 'users'; //Table name

	protected array $allowedColumns = array(
        'email',
        'firstname',
        'lastname',
        'password',
        'role',
        'phone',
        'thumbnail',
        'about',
        'company',
        'job',
        'country',
        'address',
        'slug',
        'role'
    );

	public function validate($data)
    {
		$this->errors = [];
        if(empty($data['firstname']))
        {
            $this->errors['firstname'] = "A first name is required";
        }

        if(empty($data['lastname']))
        {
            $this->errors['lastname'] = "A last name is required";
        }

        //check email
        if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = "Email is not valid";
        }else
            if($this->where(['email'=>$data['email']]))
            {
                $this->errors['email'] = "That email already exists";
            }

        if(empty($data['password']))
        {
            $this->errors['password'] = "A password is required";
        }

        if($data['password'] !== $data['retype_password'])
        {
            $this->errors['password'] = "Passwords do not match";
        }

        if(empty($data['terms']))
        {
            $this->errors['terms'] = "Please accept the terms and conditions";
        }

        if(empty($this->errors))
        {
            return true;
        }

        return false;
	}

}