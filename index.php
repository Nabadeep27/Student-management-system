<?php

error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {
    $message = $_SESSION['message'];

    echo "<script type='text/javascript'>

        alert('$message');

        </script>";
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

    <nav>
        <label class="logo">Don College</label>

        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a href="login.php" class="btn btn-success">Login</a></li>
        </ul>
    </nav>

    <div class="section1">
        <label class="img_text">We teach to lead the nation.</label>
        <img class="main_img" src="./Assets/management.webp">
    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <img class="welcome_img" src="./Assets/college.jpg">
            </div>

            <div class="col-md-8">
                <h1>Welcome To Don College</h1>
                <p>Our college is an institution of higher education that provides students with opportunities to pursue advanced learning and specialized degrees in various fields. It typically features a dynamic campus environment, complete with lecture halls, libraries, laboratories, and residential facilities. Our College offer a broad spectrum of academic programs in areas such as humanities, sciences, engineering, business, and arts, supported by a faculty of experts dedicated to teaching and research. Beyond academics, our college foster personal growth and social engagement through extracurricular activities, clubs, sports, and student organizations. This comprehensive environment prepares students for professional careers and lifelong learning, creating a vibrant community of scholars and future leaders.</p>

            </div>

        </div>

    </div>

    <div style="text-align: center">
        <h1>Teachers</h1>
    </div>

    <div class="container">

        <div class="row">


                <div class="col-md-4">

                    <img class="teacher" src="./Assets/teacher2.png">
                    
                    <p>Teachers play a pivotal role in shaping the future by imparting knowledge, skills, and values to students. They create an engaging learning environment, inspire curiosity, and foster a love for learning. Beyond academics, teachers also support the emotional and social development of their students, guiding them to become responsible and compassionate individuals. Through their dedication and passion, teachers leave a lasting impact on the lives of their students, influencing their paths and contributing to the betterment of society.</p>

                </div>

                <div class="col-md-4">

                    <img class="teacher" src="./Assets/teacher1.png">
                    
                    <p>Teachers are the backbone of the educational system, dedicated to nurturing young minds and preparing them for the future. They not only deliver lessons but also inspire, motivate, and challenge students to reach their full potential. Teachers adapt to the diverse needs of their students, providing support and encouragement both academically and personally. Their influence extends beyond the classroom, as they help shape the character and values of the next generation. Through their commitment and passion, teachers make a profound and lasting difference in the lives of their students and the community.</p>

                </div>

                <div class="col-md-4">

                    <img class="teacher" src="./Assets/teacher3.jpg">
                    
                    <p>Teachers are instrumental in molding the future by educating and guiding students. They create a stimulating learning environment, encouraging critical thinking and curiosity. With patience and empathy, teachers support students' academic and personal growth, helping them overcome challenges and achieve their goals. Beyond the curriculum, teachers impart essential life skills and values, fostering a sense of responsibility and community. Their unwavering dedication and passion for teaching leave an enduring impact, inspiring students to pursue their dreams and contribute positively to society.</p>

                </div>


        </div>

    </div>



    <div style="text-align: center">
        <h1>Our Courses</h1>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <img class="teacher" src="./Assets/web.jpeg">
                <h3>Web Development</h3>

            </div>

            <div class="col-md-4">
                <img class="teacher" src="./Assets/manage.jpeg">
                <h3>Management</h3>

            </div>

            <div class="col-md-4">
                <img class="teacher" src="./Assets/manage1.jpg">
                <h3>Marketing</h3>

            </div>

        </div>

    </div>

    <div style="text-align: center">
        <h1 class="adm">Admission Form</h1>
    </div>

    <div style="text-align: center" class="admission_form">

        <form action="data_check.php" method="POST">

            <div class="adm_int">
                <label class="label_text">Name</label>
                <input class="input_deg" type="text" name="name">
            </div>

            <div class="adm_int">
                <label class="label_text">Email</label>
                <input class="input_deg" type="text" name="email">
            </div>

            <div class="adm_int">
                <label class="label_text">Phone</label>
                <input class="input_deg" type="text" name="phone">
            </div>

            <div class="adm_int">
                <label class="label_text">Message</label>
                <textarea class="input_txt" name="message"></textarea>
            </div>

            <div class="adm_int">

                <input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
            </div>

        </form>

    </div>

    <footer>
        <h3 class="footer_txt">All @copyright reserved by Nabadeep</h3>
    </footer>

</body>

</html>