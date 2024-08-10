<?php $con=mysqli_connect("localhost","root","","student");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<style>
body {
  background-image: url("https://technoindiauniversity.ac.in/images/techno-indiauniversity-logo-black.png");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 20% 10%;

}
</style>
<div class="container">
  <h2>Students Details</h2>
  <p><a href="index.php">Add New Student</a></p>
  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>StudentName</th>
        <th>Contact</th>
        <th>Course</th>
        <th>Image</th>

      </tr>
    </thead>
    <tbody>
     
   <?php
   $sel="SELECT * FROM students";
   $rs=$con->query($sel);
   while($row=$rs->fetch_assoc()){
   ?>

<tr>
    <td><?php echo $row['sname'];?></td>
    <td><?php echo $row['contact_no'];?></td>
    <td><?php echo $row['course'];?></td>
    <td><img style="width:100px;"src="studentimg/<?php echo $row['simg'];?>"></td>

<td><a onclick="return confirm('Are You Sure?');" href="del.php?id=<?php  echo $row['sid'];?>">Delete</a></td>

</tr>
<?php  }  ?>
    </tbody>
  </table>
</div>

</body>
</html>
