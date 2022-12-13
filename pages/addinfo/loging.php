 <?php

    // if(isset($_POST['submit'])){
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $topic = $_POST['topic'];

    // }
    // $dbConnection = mysqli_connect('localhost','root','','portfolio');
    // $myQuery = "INSERT INTO addinfo (name,email,topic) VALUES ($name,$email,$topic)";

    // mysqli_query($dbConnection,$myQuery);
 
 
?> 
<div class="container">
    <div class="row">
    <div class="col-md-9 mx-auto ">
                <h2 class="py-2">Want To Contact Me! </h2>
        <form action="" method="POST">
            <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input required type="text" class="form-control" name="name" placeholder="Name">
            </div>
        <div class="mb-3">
            <label for="Email1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email"  placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="Topic" class="form-label">Topic</label>
            <input type="text/file" class="form-control" name="topic" placeholder="Topic">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    </div>
</div>