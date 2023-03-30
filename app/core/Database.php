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

    public function create_tables(){
        //user table
        $query = "
        CREATE TABLE `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
         `firstname` varchar(255) NOT NULL,
         `lastname` varchar(255) NOT NULL,
         `email` text NOT NULL,
         `password` varchar(255) NOT NULL,
         `phone` varchar(20) NOT NULL,
         `gender` varchar(20) NOT NULL,
         `dob` varchar(255) NOT NULL,
         `thumbnail` varchar(1024) NOT NULL,
         `about` varchar(2048) DEFAULT NULL,
         `company` varchar(100) DEFAULT NULL,
         `job` varchar(100) DEFAULT NULL,
         `country` varchar(100) DEFAULT NULL,
         `address` varchar(1024) DEFAULT NULL,
         `slug` varchar(100) NOT NULL,
         `facebook_link` varchar(500) DEFAULT NULL,
         `instagram_link` varchar(500) DEFAULT NULL,
         `twitter_link` varchar(500) DEFAULT NULL,
         `linkedin_link` varchar(500) DEFAULT NULL,
         `role` varchar(255) NOT NULL,
         `token` varchar(255) NOT NULL,
         `token_expire` timestamp NOT NULL DEFAULT current_timestamp(),
         `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
         `verified` tinyint(4) NOT NULL DEFAULT 0,
         `deleted` tinyint(4) NOT NULL DEFAULT 1,
         PRIMARY KEY (`id`),
         KEY `role_id` (`role`),
         KEY `slug` (`slug`)
        ) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8
            
            ";
        $this->query($query);

        //course table
        $query = "
                    CREATE TABLE `courses` (
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `title` varchar(100) NOT NULL,
     `description` text DEFAULT NULL,
     `user_id` int(11) NOT NULL,
     `category_id` int(11) NOT NULL,
     `sub_category_id` int(11) DEFAULT NULL,
     `level_id` int(11) DEFAULT NULL,
     `language_id` int(11) DEFAULT NULL,
     `price_id` int(11) DEFAULT NULL,
     `promo_link` varchar(1024) DEFAULT NULL,
     `primary_subject` varchar(100) DEFAULT NULL,
     `date` datetime DEFAULT NULL,
     `tags` varchar(2048) DEFAULT NULL,
     `congratulations_message` varchar(2048) DEFAULT NULL,
     `welcome_message` varchar(2048) DEFAULT NULL,
     `course_promo_video` varchar(1024) NOT NULL,
     `course_image` varchar(1024) NOT NULL,
     PRIMARY KEY (`id`),
     KEY `title` (`title`),
     KEY `user_id` (`user_id`),
     KEY `category_id` (`category_id`),
     KEY `sub_category_id` (`sub_category_id`),
     KEY `level_id` (`level_id`),
     KEY `language_id` (`language_id`),
     KEY `price_id` (`price_id`),
     KEY `primary_subject` (`primary_subject`),
     KEY `date` (`date`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8
            
            ";

        $this->query($query);
    }
	
}


