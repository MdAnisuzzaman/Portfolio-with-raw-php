<?php 

$conn = mysqli_connect('localhost','root','','portfolio');
$sql = "SELECT * FROM addinfo";
$result = mysqli_query($conn,$sql);

?>
<div class="container" style="background-color: #0d6efd">
    <div class="row">
        <div class="col=8 mx-auto">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">topic</th>
    </tr>
  </thead>
  <tbody>
    <?php 
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
     
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['topic'] ?></td>
    </tr>
    <?php }?>
        </div>
    </div>
</div>
