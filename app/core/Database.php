<?php 

Trait Database
{
	private string $host = DB_HOST;
	private string $user = DB_USER;
	private string $password = DB_PASS;
	private string $dbname = DB_NAME;

	private function connect(): PDO
    {
        $dsn = 'mysql:hostname='.$this->host.';dbname='.$this->dbname;
        return new PDO($dsn,$this->user,$this->password);
	}

	public function query($query, $data = [])
	{

		$con = $this->connect();
		$stmt = $con->prepare($query);

		$check = $stmt->execute($data);
		if($check)
    {
			$result = $stmt->fetchAll(PDO::FETCH_OBJ);
			if(is_array($result) && count($result))
			{
				return $result;
			}
		}

		return false;
	}

	public function get_row($query, $data = [])
	{

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		if($check)
		{
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			if(is_array($result) && count($result))
			{
				return $result[0];
			}
		}

		return false;
	}
	
}


