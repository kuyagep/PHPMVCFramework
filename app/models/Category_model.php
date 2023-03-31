<?php


/**
 * User class
 */

class Category_model
{
    use Model;

    protected string $table = 'categories'; //Table name

    protected array $allowedColumns = array(
        'category',
        'disabled'
    );

    public function validate($data)
    {
        $this->errors = [];
        if(empty($data['category']))
        {
            $this->errors['category_id'] = "A category is required";
        }elseif(!preg_match("/^[a-zA-Z \&\']+$/", trim($data['category']))){
            $this->errors['category_id'] = "Category can only have letters and spaces";
        }

        if(empty($this->errors))
        {
            return true;
        }

        return false;
    }


}