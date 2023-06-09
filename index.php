<?php include 'include/config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$data['name']?> - <?=$data['title']?></title>
    <link rel="stylesheet" href="css/style.css">


    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&family=Rubik&family=Ubuntu&display=swap" rel="stylesheet">


</head>
<body>
    <header>
        <a href="#" class="logo"><img src="pngfind.com-portfolio-logo-png-5015034.png" alt=""></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="sidebar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Work</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="cv/" class="top-btn" target="blank">Download CV</a>
    </header>

    <!--------------home------------>
    <section class="home" id="home">
        <div class="home-text">
            <h3>Hello, I'm</h3>
            <h1><?php echo $data['name']?> </h1>
            <h5>A <?=$data['title']?> <span>From <?=$data['place']?></span></h5>
            <p>I'm Creative designer based based in India, and I'm very passionate <br> and dedicated to my work.</p>
            <div class="social">
                <a href="<?=$data['facebook']?>" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.linkedin.com/in/shristi-raj-601674227/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                <a href="<?=$data['behance']?>" target="_blank"><i class='bx bxl-behance'></i></a>
                <a href="https://www.instagram.com/_srb_2507/" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="https://github.com/Shristi-Raj" target="_blank"><i class='bx bxl-github'></i></a>
            </div>
            <a href="#" class="btn">About Me</a>
        </div>
        <div class="home-img">
            <img src="dp.jpeg" width="193px" height="280px" alt="">
        </div>
    </section>


<!---------------About--------------->
<section class="about" id="about">
    <div class="about-img">
        <img src="about.jpg"  alt="">
    </div>
    <div class="about-text">
        <h3>I'm a Designer</h3>
        <h2>I Can Design Anything You Want</h2>
         <p>Hello there! I'm a web designer, and I'm very passionate and dedicated to my work.
             With the development of projects , I have aquired the skills and knowledge necessary 
             to make your project a success . I enjoy every step of the design process,from discussion and collaboration.</p>
    <div class="info">
        <h3><span>Name : </span> Shristi Raj </h3>
        <h3><span>Age : </span> 20 </h3>
        <h3><span>Qualification : </span> BTECH </h3>
        <h3><span>Post : </span> Student </h3>
        <h3><span>Language : </span> English / Hindi </h3>
        <a href="#" class="btn">Hire Me</a>
    </div>
    </div>
</section>

<!---------------skills--------------->
<section class="skills" id="skills">
    <div class="heading">
        <h3>Skills</h3>
        <h2>My Technical Skills</h2>
        <p>All the skills that I aquired in all the domains not just in web development field<br> but as well 
            in other technical , non-technical fields like in Java developer , communication and others.... </p>
    </div>
    <div class="skill-content">
        <div class="row">
            <div class="s s-one">
                <img src="html5.png" alt="">
            </div>
            <h3>Web Design</h3>
            <h5>Starts From </h5>
            <p>Web design refers to the design of websites that are displayed on the 
                internet. It usually refers to the user experience aspects of website development</p>
        </div>
        <div class="row">
            <div class="s s-two">
                <img src="css.png" alt="">
            </div>
            <h3>Web Design</h3>
            <h5>Starts From </h5>
            <p>Web design refers to the design of websites that are displayed on the 
                internet. It usually refers to the user experience aspects of website development</p>
        </div>
        <div class="row">
            <div class="s s-three">
                <img src="js.png" alt="">
            </div>
            <h3>Web Design</h3>
            <h5>Starts From </h5>
            <p>Web design refers to the design of websites that are displayed on the 
                internet. It usually refers to the user experience aspects of website development</p>
        </div>
        <div class="row">
            <div class="s s-four">
                <img src="java.png" alt="">
            </div>
            <h3>Web Design</h3>
            <h5>Starts From </h5>
            <p>Web design refers to the design of websites that are displayed on the 
                internet. It usually refers to the user experience aspects of website development</p>
        </div>
        <div class="row">
            <div class="s s-five">
                <img src="c.png" alt="">
            </div>
            <h3>Web Design</h3>
            <h5>Starts From </h5>
            <p>Web design refers to the design of websites that are displayed on the 
                internet. It usually refers to the user experience aspects of website development</p>
        </div>
        <div class="row">
            <div class="s s-six">
                <img src="com.jfif" alt="">
            </div>
            <h3>Web Design</h3>
            <h5>Starts From </h5>
            <p>Web design refers to the design of websites that are displayed on the 
                internet. It usually refers to the user experience aspects of website development</p>
        </div>

        <div class="row">
            <div class="s s-seven">
                <img src="lead.png" alt="">
            </div>
            <h3>Web Design</h3>
            <h5>Starts From </h5>
            <p>Web design refers to the design of websites that are displayed on the 
                internet. It usually refers to the user experience aspects of website development</p>
        </div>

    </div>
</section>

<!---------------portfolio--------------->
<section class="portfolio" id="portfolio">
    <div class="heading">
        <h3>Portfolio</h3>
        <h2>My Amazing Work</h2>
        <p>Most common methods for designing websites that work well on desktop is <br>
        responsive and adaptive design</p>
    </div>
    <div class="portfolio-content">
        <div class="col">
            <img src="work1.png" alt="">
            <div class="layer">
                <h3><a href="musiclone.zip">Web Design</a> </h3>
                <h5>Popup</h5>
            </div>
        </div>
        <div class="col">
            <img src="work4.png" alt="">
            <div class="layer">
                <h3> Web Design</h3>
                <h5>Popup</h5>
            </div>
        </div>
        <div class="col">
            <img src="work3.png" alt="">
            <div class="layer">
                <h3><a href="travel-website.zip"></a> Web Design</h3>
                <h5>Popup</h5>
            </div>
        </div>
        <div class="col">
            <img src="work2.jfif" alt="">
            <div class="layer">
                <h3>Web Design</h3>
                <h5>Popup</h5>
            </div>
        </div>
    </div>
</section>

<!---------------contact--------------->

<?php
require 'index.php';
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $cpnfirmpassword=$_POST["confirmpassword"];
    $duplicate=mysqli_query($con, "SELECT * FROM tb_user WHERE email='$email' OR name='$name'");
    if(mysqli_num_rows($duplicate)>0){
        echo
        "<script> alert('Email or Name has already taken');</script>";
    }
    else{
        if($password==$confirmpassword){
            $query="INSERT INTO tb_user VALUES('','$name','$email','$password')";
            mysqli_query($conn,$query);
        echo 
        "<script> alert('Registeration successfull');</script>";
        }
        else{
            echo 
            "<script> alert('Password does not match');</script>";
        }
    }
}
?>
<section class="contact" id="contact">
<div class="container">
    <div class="center">
        <h3>Let's talk about everything</h3>
        <p>Don't like forms? Send me an email.</p>
    </div>
    <div class="action">
        <form  method="post" role="form" autocomplete="off">
            <input type="email" name="email" placeholder="Enter Your Email" required> 
            <input type="password" name="password" placeholder="Enter a password" required>
            <input type="confirmpassword" name="confirmpassword" placeholder="Re-enter your password" required>
            <br>
            <input type="submit" name="submit" value="Submit">
        </form>
        <a href="login.php" style="color:white">Login</a>
    </div>
</div>
</section>

<!---------------end--------------->
<div class="end">
    <p>Made with love by Shristi Raj © 2023</p>
</div>

<script src="https://unpkg.com/scrollreveal"></script>

<script type="text/javascript" src="js/script.js"></script>
</body>
</html>