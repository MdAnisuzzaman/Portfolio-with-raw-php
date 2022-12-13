<?php


namespace App\classes;
class HelloWorld
{
    public $data = [];

    public function __construct()
    {

    }

    public function index()
    {
        header('location:action.php?pages=home');
    }
}