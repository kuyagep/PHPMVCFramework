<?php 


/**
 * User class
 */

class User extends Model
{
//	use Model;

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
        'role',
        'facebook_link',
        'instagram_link',
        'twitter_link',
        'linkedin_link',
    );

	public function validate($data)
    {
        $data = $this->getData($data, $id=null);


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

    //Edit Validation
	public function edit_validate($data,$id)
    {
        $data = $this->getData($data, $id);

        if(!empty($data['phone']))
        {
            if(!preg_match("/^(09|\+639)[0-9]{9}$/", trim($data['phone']))){
                $this->errors['phone'] = "Phone number is not valid";
            }
        }

        if(!empty($data['facebook_link']))
        {
            if(!filter_var($data['facebook_link'],FILTER_VALIDATE_URL)){
                $this->errors['facebook_link'] = "Facebook link is not valid";
            }
        }
        
        if(!empty($data['instagram_link']))
        {
            if(!filter_var($data['instagram_link'],FILTER_VALIDATE_URL)){
                $this->errors['instagram_link'] = "Instagram link is not valid";
            }
        }
        if(!empty($data['twitter_link']))
        {
            if(!filter_var($data['twitter_link'],FILTER_VALIDATE_URL)){
                $this->errors['twitter_link'] = "Twitter link is not valid";


            }
        }
        if(!empty($data['linkedin_link']))
        {
            if(!filter_var($data['linkedin_link'],FILTER_VALIDATE_URL)){
                $this->errors['linkedin_link'] = "Linkedin link is not valid";
            }
        }

        if(empty($this->errors))
        {
            return true;
        }

        return false;
	}

    /**
     * @param $data
     * @return mixed
     */
    public function getData($data, $id)
    {
        $this->errors = [];
        if (empty($data['firstname'])) {
            $this->errors['firstname'] = "A first name is required";
        } elseif (!preg_match("/^[a-zA-Z ]+$/", trim($data['firstname']))) {
            $this->errors['firstname'] = "Firstname can only have letters";
        }

        if (empty($data['lastname'])) {
            $this->errors['lastname'] = "A last name is required";
        } elseif (!preg_match("/^[a-zA-Z ]+$/", trim($data['lastname']))) {
            $this->errors['lastname'] = "Lastname can only have letters";
        }

        //check email
        if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = "Email is not valid";
        }elseif($results = $this->where(['email'=>$data['email']]))
        {
            foreach($results as $result){
                if ($id != $result->id){
                    $this->errors['email'] = "That email already exists.";
                }
            }

        }
        return $data;
    }

}