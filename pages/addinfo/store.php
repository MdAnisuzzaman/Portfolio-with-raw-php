<?php 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $topic=$_POST['topic'];

$conn = mysqli_connect('localhost','root','','portfolio');
$sqi = "INSERT INTO addinfo ( name, email, topic) VALUES ('$name','$email',' $topic')";


 if(mysqli_query($conn,$sqi)){
   header('location:pages/addinfo/showdata.php');
 }
 else {
    echo "Data not inserted";
 }

//  if(mysqli_query($conn,$sqi)){
//     header('location: index.php');
//  }else{
//     echo "not insert";
//  }
?>