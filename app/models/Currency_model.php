<?php


/**
 * Currency Model
 */

class Currency_model extends Model
{


    protected string $table = 'currencies'; //Table name

    protected array $allowedColumns = array(
        'currency',
        'symbol',
        'disabled'
    );

    public function validate($data)
    {
        $this->errors = [];
        if(empty($data['currency']))
        {
            $this->errors['currency_id'] = "A Currency is required";
        }
        if(empty($data['symbol']))
        {
            $this->errors['symbol'] = "A Currency symbol is required";
        }

        if(empty($this->errors))
        {
            return true;
        }

        return false;
    }


}