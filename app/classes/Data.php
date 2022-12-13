<?php
namespace App\classes;
use App\classes\AddInfo;

class Data {

    public function __construct()
    {

    }

    public function addData($post)
    {
        $name = $post['name'];
        $email = $post['email'];
        $topic = $post['topic'];
        $sqlQuery = "INSERT INTO addinfo(name,email,topic) VALUES ('$name','$email','$topic')";
        $db = new  AddInfo;
        return mysqli_query($db->dbConnect(),$sqlQuery) ;
//        header('location:action.php?pages=showdata');
    }

}