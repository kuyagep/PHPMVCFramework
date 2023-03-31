<?php


/**
 * Courses class
 */

class Course_model
{
    use Model;

    protected string $table = 'courses'; //Table name

    protected array $allowedColumns = array(

        'title'	,
        'description',
        'user_id',
        'category_id',
        'sub_category_id',
        'level_id',
        'language_id',
        'price_id',
        'promo_link',
        'primary_subject',
        'date',
        'tags',
        'congratulations_message',
        'welcome_message',
        'course_promo_video',
        'course_image',
        'approved',
        'published'
    );

    public function validate($data)
    {
        $this->errors = [];
        if (empty($data['title'])) {
            $this->errors['title'] = "A Course title is required";
        } elseif (!preg_match("/^[a-zA-Z \-\_\&]+$/", trim($data['title']))) {
            $this->errors['title'] = "Course can only have letters, spaces and [-_&]";
        }

        if (empty($data['category_id'])) {
            $this->errors['category_id'] = "A Category is required";
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