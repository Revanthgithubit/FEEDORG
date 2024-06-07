<?php
session_start();
if(isset($_SESSION['empid']))
{
    header('Location:./employee/dashboard.php');
}
else if(isset($_SESSION['hrid']))
{
    header('Location:./hr/dashboard.php');
}
else if(isset($_SESSION['deptheadid']))
{
    header('Location:./department/dashboard.php');
}
else if(isset($_SESSION['subadminid']))
{
    header('Location:./subadmin/dashboard.php');
}
else if(isset($_SESSION['email']))
{
    header('Location:./superadmin/dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEED | OMS</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--Google Fonts-->
<!-- <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@800&display=swap" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Patua+One&display=swap" rel="stylesheet">
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box!important;
    }
    .main{
        height:100vh;
        background-image:url('./images/feed-bg.jpg');
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center 80%;
    }
    .main-row{
        height:100vh;
        /* background-image:url('./images/feed_mobile_logo.png');
        background-size:contain;
        background-repeat:no-repeat;
        background-position:center center; */
    }
    .main-col{
        height:100vh;
        /* background:#1ca828;
        opacity:0.87; */
    }
    .main-col h2{
        /* font-family: 'Cinzel', serif; */
        font-family: 'Patua One', cursive;
        letter-spacing:4px;
        margin:30px 0px 40px;
    }
    .modules div{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        color:white;
        font-family: 'Patua One', cursive;
        /* border:5px solid white; */
        background:#e9640a;
        border-radius:15px;
        margin:0px 30px 30px;
        padding:20px;
        cursor:pointer;
        transition:all .5s;
    }
    .modules div h5{
        text-align:center;
    }
    .modules div:hover{
        background:#73bc2d;
    }
    .modules div:hover > a{
        color:white;
    }
    a{
        text-decoration:none!important;
        color:white;
    }
    #logoresp{
        display:none;
    }
    @media only screen and (max-width:700px){
        .main-col,.main-row,.main{
            height:auto;
        }
        h2 span{
            font-size:18px;
            color:white;
        }
        .modules div{
            margin-bottom:20px;
        }
        .modules div img{
            width:100px;
            height:80px;
        }
        #logo{
            display:none;
        }
        #logoresp{
            display:inline;
        }
    }
</style>
</head>
<body>
    <div class="container-fluid main">
        <div class="row main-row">
            <div class="col-lg-12 main-col">
                <h2 class="text-center" style="color:#e9640a;"><img src="./images/feed-logo.png" alt="logo" id="logo"><img src="./images/feed-logo1.png" alt="logo" id="logoresp"><br><span>FEED MANAGEMENT SYSTEM</span></h2>
                <div class="container">
                    <div class="row modules">
                        <div class="col-md-3">
                            <a href="/login.php?role=employee">
                                <img src="images/employee.svg" alt="employee" width="160" height="140">
                                <h5>Employee</h5>   
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="/login.php?role=department">
                                <img src="images/department.svg" alt="department" width="160" height="140">
                                <h5>Department</h5>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="/login.php?role=hr">
                                <img src="images/manager.svg" alt="hr" width="160" height="140">
                                <h5>HR</h5>
                            </a>
                        </div>
                    </div>
                    <div class="row modules d-flex justify-content-center">
                        <div class="col-md-3">
                            <a href="/login.php?role=subadmin">
                                <img src="images/subadmin.svg" alt="subadmin" width="160" height="140">
                                <h5>Sub Admin</h5>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="/login.php?role=superadmin">
                                <img src="images/superadmin.svg" alt="superadmin" width="160" height="140">
                                <h5>Super Admin</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</body>
</html>