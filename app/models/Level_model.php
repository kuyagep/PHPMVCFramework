<?php


/**
 * Levels Model
 */

class Level_model extends Model
{


    protected string $table = 'course_levels'; //Table name

    protected array $allowedColumns = array(
        'level',
        'disabled'
    );

    public function validate($data)
    {
        $this->errors = [];
        if(empty($data['level']))
        {
            $this->errors['level_id'] = "A Level is required";
        }

        if(empty($this->errors))
        {
            return true;
        }

        return false;
    }


}