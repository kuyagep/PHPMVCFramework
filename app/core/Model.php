<?php 

/**
 * Main Model class
 */

class Model extends Database
{


    protected int $limit 		= 10;
	protected int $offset 		= 0;
	protected string $order_type 	= "desc";
	protected string $order_column = "id";
	public array $errors 		= [];

//	public function findAll()
//	{
//
//		$query = "select * from $this->table order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
//
//		return $this->query($query);
//	}

	public function where($data, $data_not = [])
	{
        $query = $this->getStr($data, $data_not);

        $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
		$data = array_merge($data, $data_not);

        $res = $this->query($query, $data);


        if(is_array($res)){

            //run afterSelect functions
            if(property_exists($this, 'afterSelect')){
                foreach ($this->afterSelect as $func){
                    $res = $this->$func($res);
                }
            }
            return $res;
        }

        return false;
	}

    public function findAll($order = 'desc')
	{
        $query = "SELECT * FROM $this->table order by id $order ";

        $res = $this->query($query);
        if(is_array($res))
        {
            //run afterSelect functions
            if(property_exists($this, 'afterSelect')){
                foreach ($this->afterSelect as $func){
                    $res = $this->$func($res);
                }
            }
            return $res;
        }
		return false;
	}

	public function first($data, $order = 'desc', $data_not = [])
	{
        $query = $this->getStr($data, $data_not);

        $query .= " order by id $order limit 1";
		$data = array_merge($data, $data_not);

        $res = $this->query($query, $data);

		if(is_array($res)) {
            //run afterSelect functions
            if(property_exists($this, 'afterSelect')){
                foreach ($this->afterSelect as $func){
                    $res = $this->$func($res);
                }
            }
            return $res[0];
        }
		return false;
	}
    //Insert Query
	public function insert($data): bool
    {
		/** remove unwanted data **/
		if(!empty($this->allowedColumns))
		{
			foreach ($data as $key => $value) {
				
				if(!in_array($key, $this->allowedColumns))
				{
					unset($data[$key]);
				}
			}
		}

		$keys = array_keys($data);

		$query = "INSERT INTO $this->table (".implode(",", $keys).") VALUES (:".implode(",:", $keys).")";
		$this->query($query, $data);

		return false;
	}
    //Update Query
	public function update($id, $data, $id_column = 'id')
    {

		/** remove unwanted data **/
		if(!empty($this->allowedColumns))
		{
			foreach ($data as $key => $value) {
				
				if(!in_array($key, $this->allowedColumns))
				{
					unset($data[$key]);
				}
			}
		}

		$keys = array_keys($data);
		$query = "update $this->table set ";

		foreach ($keys as $key) {
			$query .= $key . " = :". $key . ", ";
		}

		$query = trim($query,", ");

		$query .= " where $id_column = :$id_column ";

		$data[$id_column] = $id;

		$this->query($query, $data);
		return false;

	}
    //Delete Query
	public function delete($id, $id_column = 'id'): bool
    {

		$data[$id_column] = $id;
		$query = "DELETE FROM $this->table WHERE $id_column = :$id_column ";
		$this->query($query, $data);

		return false;
	}

    /**
     * @param $data
     * @param $data_not
     * @return string
     */
    public function getStr($data, $data_not)
    {
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "SELECT * FROM $this->table WHERE ";

        foreach ($keys as $key) {
            $query .= $key . " = :" . $key . " && ";
        }

        foreach ($keys_not as $key) {
            $query .= $key . " != :" . $key . " && ";
        }

        return trim($query, " && ");
    }


}