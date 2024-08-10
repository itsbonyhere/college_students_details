<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
body {
  background-image: url('https://upload.wikimedia.org/wikipedia/commons/9/91/Techno_India_University.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
 

<form action="ins.php" method="post" enctype="multipart/form-data">

    <p>Student Name<p>
        <p><input type="text" name="StudentName" /></p>    

    <p>Contact No<p>
        <p><input type="text" name="Contact" /></p>    

    <p>Course<p>
        <p><input type="radio" name="Course" value="CSE">CSE</p>
        <p><input type="radio" name="Course" value="ECE">ECE</p>    
        <p><input type="radio" name="Course" value="BCA">BCA</p>    


    <p>Image<p>
        <p><input type="file" id="myfile" name="simg" /><p>
            

    
        <p><input type="submit" name="Save" value="Save" ></p>    
   

</body>
</html>