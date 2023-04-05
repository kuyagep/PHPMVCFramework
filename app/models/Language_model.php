<?php


/**
 * Languages Model
 */

class Language_model extends Model
{


    protected string $table = 'languages'; //Table name

    protected array $allowedColumns = array(
        'language',
        'symbol',
        'disabled'
    );

    public function validate($data)
    {
        $this->errors = [];
        if(empty($data['language']))
        {
            $this->errors['language_id'] = "A Language is required";
        }
        if(empty($data['symbol']))
        {
            $this->errors['symbol'] = "A language code is required";
        }

        if(empty($this->errors))
        {
            return true;
        }

        return false;
    }


}