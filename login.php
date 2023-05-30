<?php
session_start();
include('connect.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Webpage Design</title>

    <style>
    * {
        margin: 0;
        padding: 0;
    }


    .main {

        width: 100%;
        background-image: url("https://wallpapercave.com/wp/wp9537343.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        position: relative;
    }

    .navbar {
        width: 1200px;
        height: 75px;
        margin: auto;
    }

    .icon {
        width: 200px;
        float: left;
        height: 70px;
    }

    .logo {
        color: #ff7200;
        font-size: 35px;
        padding-left: 20px;
        float: left;
        padding-top: 10px;
        margin-top: 5px
    }

    .menu {
        width: 400px;
        float: left;
        height: 70px;
    }

    ul {
        float: left;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    ul li {
        list-style: none;
        margin-left: 62px;
        margin-top: 27px;
        font-size: 14px;
    }

    ul li a {
        text-decoration: none;
        color: #fff;
        font-family: Arial;
        font-weight: bold;
        transition: 0.4s ease-in-out;
    }

    ul li a:hover {
        color: #ff7200;
    }

    .search {
        width: 330px;
        float: left;
        margin-left: 270px;
    }

    .srch {
        font-family: 'Times New Roman';
        width: 200px;
        height: 40px;
        background: transparent;
        border: 1px solid #ff7200;
        margin-top: 13px;
        color: #fff;
        border-right: none;
        font-size: 16px;
        float: left;
        padding: 10px;
        border-bottom-left-radius: 5px;
        border-top-left-radius: 5px;
    }

    .btn {
        width: 100px;
        height: 40px;
        background: #ff7200;
        border: 2px solid #ff7200;
        margin-top: 13px;
        color: #fff;
        font-size: 15px;
        border-bottom-right-radius: 5px;
        border-bottom-right-radius: 5px;
        transition: 0.2s ease;
        cursor: pointer;
    }

    .btn:hover {
        color: #000;
    }

    .btn:focus {
        outline: none;
    }

    .srch:focus {
        outline: none;
    }

    .content {
        width: 1200px;
        height: auto;
        margin: auto;
        color: #fff;
        position: relative;
    }

    .content .par {
        padding-left: 20px;
        padding-bottom: 25px;
        font-family: Arial;
        letter-spacing: 1.2px;
        line-height: 30px;
    }

    .content h1 {
        font-family: 'Times New Roman';
        font-size: 50px;
        padding-left: 20px;
        margin-top: 9%;
        letter-spacing: 2px;
    }

    .content .cn {
        width: 160px;
        height: 40px;
        background: #ff7200;
        border: none;
        margin-bottom: 10px;
        margin-left: 20px;
        font-size: 18px;
        border-radius: 10px;
        cursor: pointer;
        transition: .4s ease;

    }

    .content .cn a {
        text-decoration: none;
        color: #000;
        transition: .3s ease;
    }

    .cn:hover {
        background-color: #fff;
    }

    .content span {
        color: #ff7200;
        font-size: 65px
    }

    .form {
        width: 250px;
        height: 380px;
        background: rgba(0, 0, 0, 0.904);
        position: absolute;
        top: -20px;
        left: 870px;
        transform: translate(0%, -5%);
        border-radius: 10px;
        padding: 25px;
    }

    .form:hover {
        background: rgba(0, 0, 0);
        transition: 0.3s;
    }

    .form h2 {
        width: 220px;
        font-family: sans-serif;
        text-align: center;
        color: #ff7200;
        font-size: 22px;
        background-color: #fff;
        border-radius: 10px;
        margin: 2px;
        padding: 8px;
    }

    .form input {
        width: 240px;
        height: 35px;
        background: transparent;
        border-bottom: 1px solid #ff7200;
        border-top: none;
        border-right: none;
        border-left: none;
        color: #fff;
        font-size: 15px;
        letter-spacing: 1px;
        margin-top: 30px;
        font-family: sans-serif;
    }

    .form input:focus {
        outline: none;
    }

    ::placeholder {
        color: #fff;
        font-family: Arial;
    }

    #btnn {
        width: 240px;
        height: 40px;
        background: #ff7200;
        border: none;
        margin-top: 30px;
        font-size: 18px;
        border-radius: 10px;
        cursor: pointer;
        color: #fff;
        transition: 0.4s ease;
    }

    #btnn:hover {
        background: #fff;
        color: #ff7200;
    }

    #btnn a {
        text-decoration: none;
        color: #000;
        font-weight: bold;
    }

    .form .link {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 17px;
        padding-top: 20px;
        text-align: center;
    }

    .form .link a {
        text-decoration: none;
        color: #ff7200;
    }

    .liw {
        padding-top: 15px;
        padding-bottom: 10px;
        text-align: center;
    }

    .icons a {
        text-decoration: none;
        color: #fff;
    }

    .icons ion-icon {
        color: #fff;
        font-size: 30px;
        padding-left: 14px;
        padding-top: 5px;
        transition: 0.3s ease;
    }

    .icons ion-icon:hover {
        color: #ff7200;
    }
    </style>
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">জীবন যুদ্ধ</h2>
            </div>
        </div>
        <div class="content">
            <h1>E-Learning Platform</h1>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque
                expedita atque eveniet <br> quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad delectus
                <br> a quae totam ipsa illum minus laudantium?
            </p>

            <div class="form">
                <h2>Login</h2>
                <form action="login.php" name="f2" method="POST">
                    <input type="email" name="email" placeholder="Enter Email Here" required>
                    <input type="password" name="pass" placeholder="Enter Password Here" required>
                    <input type="submit" id="btnn" name="submit" value="Login" />
                </form>

                <p class="link">Don't have an account<br>
                    <a href="registration.php">Register </a> here</a>
                </p>
            </div>
        </div>
    </div>

    <?php
 
            if(isset($_POST['submit']))
            {
                $username= $_POST['email'];  
                $password= $_POST['pass'];
    
                $sql = "select *from student where Mail = '$username' and Pass = '$password'";
                
                $result = mysqli_query($conn , $sql);
                $count = mysqli_num_rows($result);
                $row = $result->fetch_assoc();
                if($count==1)
                {
                    $_SESSION['userID'] = $row['S_ID'];
                    $_SESSION['password'] = $row['Pass'];
                    $_SESSION['mail'] = $row['Mail'];
                    $_SESSION['name'] = $row['Name'];
                    $_SESSION['gender'] = $row['Gender'];
    
                    echo "<script>window.location.href='studentProfile2.php'</script>";
                }
                else if ($count == 0)
                {
                    $sql = "select *from admin where email = '$username' and pass = '$password'";
                    
                    $result = mysqli_query($conn , $sql);
                    $count = mysqli_num_rows($result);
                    $row = $result->fetch_assoc();
                    if($count==1)
                    {
                        $_SESSION['adminID'] = $row['email'];
                        $_SESSION['adminpass'] = $row['pass'];

                        echo "<script>window.location.href='adminProfile.php'</script>";
                    }
                    else
                    {
                        echo "<h1><center></center> Login failed. Invalid username or password.</h1>"; 
                    }
                }

                else {
                    echo "<h1><center></center> Login failed. Invalid username or password.</h1>"; 
                }

                

                }


        
    ?>
</body>

</html>