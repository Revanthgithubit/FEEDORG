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
    <title>FEED OMS | LOGIN</title>
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
<!--Sweet Alert-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box!important;
        font-family: 'Patua One', cursive;
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
    input{
        background:transparent!important;
        border:none!important;
        outline:none!important;
        box-shadow:none!important;
        border-bottom:3px solid white!important;
        border-radius:0%!important;
        color:white!important;
    }
    input::placeholder{
        color:white!important;
    }
    #employee,#hr,#department,#subadmin,#superadmin{
        display:none;
    }
    .login-form{
        position:relative;
        height:auto;
        padding:15px;
        border-radius:15px;
        /* border:5px solid white; */
        background:#e9640a;
        margin:0 auto;
    }
    .login-form form{
        margin-top:80px;
    }
    .login-form form p{
        margin:0 auto!important;
    }
    .header{
        padding:5px;
        position:absolute;
        right:0;
        left:0;
        border-bottom:5px solid white;
    }
    .header h5{
        letter-spacing:3px;
    }
    #login{
        color:white!important;
        background:transparent!important;
        border-radius:20px!important;
        padding:5px 50px!important;
        display:block!important;
        border:none!important;
        outline:none!important;
        border:3px solid white!important;
        margin:30px auto!important;
        transition:all .5s;
    }
    #login:hover{
        background:#73bc2d!important;
    }
    a{
        color:white!important;
        text-decoration:underline!important;
    }
    #logoresp{
        display:none;
    }
    @media only screen and (max-width:700px){
        h2 span{
            font-size:18px;
            color:white;
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
                    <div class="row">
                        <div class="col-lg-4 login-form">
                            <div class="header">
                                <h5 class="text-center text-white"><span class="desg"></span>&nbsp;LOGIN</h5>
                            </div>
                            <form action="" id="employee">
                                <div class="form-group mb-3">
                                    <input type="text" name="empid" class="form-control" placeholder="Your ID" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" id="login">Login</button>
                                </div>
                                <!-- <div class="form-group text-white">
                                    <p class="text-center">Don't have an account?&nbsp;<a href="/ems/register.php?role=employee">Register</a></p>
                                </div> -->
                                <div class="form-group text-white">
                                    <p class="text-center">Lost your password?&nbsp;<span style="text-decoration:underline;cursor:pointer;">Click Here</span></p>
                                </div>
                            </form>
                            <form action="" id="hr">
                                <div class="form-group">
                                    <input type="text" name="hrid" class="form-control" placeholder="Your ID" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" id="login">Login</button>
                                </div>
                                <!-- <div class="form-group text-white">
                                    <p class="text-center">Don't have an account?&nbsp;<a href="/ems/register.php?role=hr">Register</a></p>
                                </div> -->
                                <div class="form-group text-white">
                                    <p class="text-center">Lost your password?&nbsp;<span style="text-decoration:underline;cursor:pointer;">Click Here</span></p>
                                </div>
                            </form>
                            <form action="" id="department">
                                <div class="form-group">
                                    <input type="text" name="deptheadid" class="form-control" placeholder="Your ID" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" id="login">Login</button>
                                </div>
                                <!-- <div class="form-group text-white">
                                    <p class="text-center">Don't have an account?&nbsp;<a href="/ems/register.php?role=department">Register</a></p>
                                </div> -->
                                <div class="form-group text-white">
                                    <p class="text-center">Lost your password?&nbsp;<span style="text-decoration:underline;cursor:pointer;">Click Here</span></p>
                                </div>
                            </form>
                            <form action="" id="subadmin">
                                <div class="form-group">
                                    <input type="text" name="sAdminid" class="form-control" placeholder="Your ID" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" id="login">Login</button>
                                </div>
                            </form>
                            <form action="" id="superadmin">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" id="login">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>   
        </div>
    </div>
    <script>
        //Form Title Script
        $(document).ready(function(){
            let url=new URLSearchParams(window.location.search);
            let desg=url.get('role');
            $(".desg").text(desg.toUpperCase());
            $("#"+desg).css("display","block");
        });
        //Login Script
        $(document).ready(function(){
            //Employee Login
            $("#employee").submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:`validatelogin.php?role=employee`,
                    type:"POST",
                    context:this,
                    data:$(this).serialize(),
                    beforeSend:function(){
                        $(this).find("button").attr("disabled",true);
                        $(this).find("button").html(`Logging In&nbsp;<span class="spinner-border spinner-border-sm"></span>`);
                    },
                    success:function(result,status,xhr){
                        let response=JSON.parse(result);
                        console.log(response);
                        $(this).find("button").removeAttr("disabled");
                        $(this).find("button").html(`Login`);
                        if(response.status == 1)
                        {
                            $(this).trigger('reset');
                            window.location.href=`http://${window.location.hostname}/employee/dashboard.php`;
                        }
                        else if(response.status == 0)
                        {
                            swal("Error",`${response.message}`,"error");
                        }
                    }
                });
            });
            //HR Login
            $("#hr").submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:`validatelogin.php?role=hr`,
                    type:"POST",
                    context:this,
                    data:$(this).serialize(),
                    beforeSend:function(){
                        $(this).find("button").attr("disabled",true);
                        $(this).find("button").html(`Logging In&nbsp;<span class="spinner-border spinner-border-sm"></span>`);
                    },
                    success:function(result,status,xhr){
                        console.log(result);
                        let response=JSON.parse(result);
                        $(this).find("button").removeAttr("disabled");
                        $(this).find("button").html(`Login`);
                        if(response.status == 1)
                        {
                            $(this).trigger('reset');
                            window.location.href=`http://${window.location.hostname}/hr/dashboard.php`;
                        }
                        else if(response.status == 0)
                        {
                            swal("Error",`${response.message}`,"error");
                        }
                    }
                });
            });
            //Department Login
            $("#department").submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:`validatelogin.php?role=department`,
                    type:"POST",
                    context:this,
                    data:$(this).serialize(),
                    beforeSend:function(){
                        $(this).find("button").attr("disabled",true);
                        $(this).find("button").html(`Logging In&nbsp;<span class="spinner-border spinner-border-sm"></span>`);
                    },
                    success:function(result,status,xhr){
                        console.log(result);
                        let response=JSON.parse(result);
                        $(this).find("button").removeAttr("disabled");
                        $(this).find("button").html(`Login`);
                        if(response.status == 1)
                        {
                            $(this).trigger('reset');
                            window.location.href=`http://${window.location.hostname}/department/dashboard.php`;
                        }
                        else if(response.status == 0)
                        {
                            swal("Error",`${response.message}`,"error");
                        }
                    }
                });
            });
            //Sub Admin Login
            $("#subadmin").submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:`validatelogin.php?role=subadmin`,
                    type:"POST",
                    context:this,
                    data:$(this).serialize(),
                    beforeSend:function(){
                        $(this).find("button").attr("disabled",true);
                        $(this).find("button").html(`Logging In&nbsp;<span class="spinner-border spinner-border-sm"></span>`);
                    },
                    success:function(result,status,xhr){
                        console.log(result);
                        let response=JSON.parse(result);
                        $(this).find("button").removeAttr("disabled");
                        $(this).find("button").html(`Login`);
                        if(response.status == 1)
                        {
                            $(this).trigger('reset');
                            window.location.href=`http://${window.location.hostname}/subadmin/dashboard.php`;
                        }
                        else if(response.status == 0)
                        {
                            swal("Error",`${response.message}`,"error");
                        }
                    }
                });
            });
            //Super Admin Login
            $("#superadmin").submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:`validatelogin.php?role=superadmin`,
                    type:"POST",
                    context:this,
                    data:$(this).serialize(),
                    beforeSend:function(){
                        $(this).find("button").attr("disabled",true);
                        $(this).find("button").html(`Logging In&nbsp;<span class="spinner-border spinner-border-sm"></span>`);
                    },
                    success:function(result,status,xhr){
                        console.log(result);
                        let response=JSON.parse(result);
                        $(this).find("button").removeAttr("disabled");
                        $(this).find("button").html(`Login`);
                        if(response.status == 1)
                        {
                            $(this).trigger('reset');
                            window.location.href=`http://${window.location.hostname}/superadmin/dashboard.php`;
                        }
                        else if(response.status == 0)
                        {
                            swal("Error",`${response.message}`,"error");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>