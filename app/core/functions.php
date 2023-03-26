<?php 

function show($stuff)
{
	echo "<pre>";
	print_r($stuff);
	echo "</pre>";
}

function esc($str)
{
	return nl2br(htmlspecialchars($str));
}


function redirect($path)
{
	header("Location: " . ROOT."/".$path);
	die;
}

function set_value($key, $default = ''){

    if(!empty($_POST[$key])){
        return $_POST[$key];
    }else if (!empty($default)){
        return  $default;
    }
    return '';
}

function message($msg = '',$erase = false)
{

    if(!empty($msg))
    {
        $_SESSION['message'] = $msg;
    }else{

        if(!empty($_SESSION['message']))
        {
            $msg = $_SESSION['message'];
            if($erase){
                unset($_SESSION['message']);
            }
            return $msg;
        }
    }

    return false;
}

function str_to_url($url){
    $url = str_replace("'", "", $url);
    $url = preg_replace("~[^\\pL0-9_", "-", $url);
    $url = trim($url, "-");
    $url = iconv("utf8", "us-ascii//TRANSLIT",$url);
    $url = preg_replace("~[^-a-z\d_]+~", "", $url);
}

function generateFileName(): string
{
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789_";
    $name = "";
    for($i=0; $i<6; $i++)
        $name.= $chars[rand(0,strlen($chars))];
    return $name;
}