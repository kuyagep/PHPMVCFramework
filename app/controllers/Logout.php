<?php

/**
 * home class
 */
class Logout
{
    use Controller;

    public function index()
    {

       Auth::logout();
       redirect('home');
    }

}
