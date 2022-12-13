<?php 
require_once './vendor/autoload.php';
use App\classes\HelloWorld;
use App\classes\Data;

    include ('pages/header.php');

if (isset($_GET['pages'])){
    if('home' == $_GET['pages']){
        
    //   $menu = new HelloWorld;
        include ('pages/home.php');
    }
    elseif('about'== $_GET['pages']){
        include ('pages/about.php');
    }
    elseif('contact'== $_GET['pages']){
        include ('pages/contact.php');
    }
    elseif('project'== $_GET['pages']){
        include ('pages/project.php');
    }
    elseif('login'== $_GET['pages']){
     if (isset($_POST['submit'])) {
         $data = new  Data()  ;
         $data->addData($_POST);
     }
            include ('pages/addinfo/loging.php');
    }
    elseif('showdata'== $_GET['pages']){
        
        include ('pages/addinfo/showdata.php');
    }
    elseif('extracurriculam'== $_GET['pages']){
        include ('pages/extracurriculam.php');
    }
    elseif('calculator'== $_GET['pages']){
        
        include ('pages/calculator.php');
    }

}
include ('pages/footer.php');