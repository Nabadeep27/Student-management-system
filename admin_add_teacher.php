<?php

session_start();

if (!isset($_SESSION['username'])) 
{
    header("location:login.php");
} 
elseif ($_SESSION['usertype'] == 'student') 
{
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "collegeproject";

$data = mysqli_connect($host, $user, $password, $db);

if(isset($_POST['add_teacher']))
{
    $t_name=$_POST['name'];

    $t_description=$_POST['description'];

    $file=$_FILES['image']['name'];

    $dst="./image/".$file;

    $dst_db="image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    $sql="INSERT INTO teacher (name,description,image)
    VALUES('$t_name','$t_description','$dst_db')";

    $result=mysqli_query($data,$sql);

    if($result)
    {
        header('location:admin_add_teacher.php');
    }

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <style type="text/css">

        .div_deg
        {
            background-color: skyblue;
            padding-top: 70px;
            padding-bottom: 70px;
            width: 500px;
        }

    </style>
</head>

<body>

    <header class="header">
        <a href="">Admin Dashboard</a>

        <div class="logout">

            <a href="logout.php" class="btn btn-primary">Logout</a>

        </div>
    </header>

    <aside>
		
		<ul>
			
			<li>
				<a href="admission.php">Admission</a>
			</li>

			<li>
				<a href="">Add Student</a>
			</li>

			<li>
				<a href="">View Student</a>
			</li>

			<li>
				<a href="">Add Teacher</a>
			</li>

			<li>
				<a href="">View Teacher</a>
			</li>
			<li>
				<a href="">Add Courses</a>
			</li>
			<li>
				<a href="">View Courses</a>
			</li>


		</ul>


	</aside>

    <div class="content">
        <center>
		
		<h1>Add Teacher</h1>

        <br>
        <br>

        <div class="div_deg">

        <form action="#" method="POST" enctype="multipart/form-data" >

        <div>
            <label>Teacher name :</label>
            <input type="text" name="name">
        </div>
        <br>

        <div>
            <label>Description :</label>
            <textarea name="description"></textarea>
        </div>
        <br>

        <div>
            <label>Image :</label>
            <input type="file" name="image">
        </div>
        <br>

        <div>
            
            <input type="submit" name="add_teacher" 
            value="Add Teacher" class="btn btn-primary">
        </div>

        </form>

        </div>

        </center>


	</div>

</body>

</html>