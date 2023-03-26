<?php


class App
{
	private string $controller = 'Home';
	private $method 	= 'index';
    public static $page = '_404';

//    private function getURL()
//    {
//        $url = $_GET['url'] ?? 'home';
//        $url = filter_var($url,FILTER_SANITIZE_URL);
//        $arr = explode("/", $url);
//        return $arr;
//    }
	private function splitURL()
	{
		$URL = $_GET['url'] ?? 'home';
		$URL = filter_var($URL, FILTER_SANITIZE_URL);
		$URL = explode("/", trim($URL,"/"));
		return $URL;
	}

	public function __construct()
	{
		$URL = $this->splitURL();

		/** select controller **/
		$filename = "../app/controllers/".ucfirst($URL[0]).".php";
		if(file_exists($filename))
		{
			require $filename;
			$this->controller = ucfirst($URL[0]);
            self::$page = ucfirst($URL[0]);
			unset($URL[0]);
		}else{

			$filename = "../app/controllers/_404.php";
			require $filename;
			$this->controller = "_404";
		}

		$controller = new $this->controller;

		/** select method **/
		if(!empty($URL[1]))
		{
			if(method_exists($controller,strtolower($URL[1])))
			{
				$this->method = $URL[1];
				unset($URL[1]);
			}	
		}

		call_user_func_array([$controller,$this->method], $URL);

	}	

}


