<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&family=Patua+One&display=swap" rel="stylesheet">
<!--Font-Awesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box!important;
    }
    .main{
        height:100vh;
    }
    .main-row{
        height:100vh;
    }
    .main-col{
        height:100vh;
        background:#f0f5f6;
        padding:0px 50px;
        overflow-x:scroll;
    }
    .header{
        position:fixed;
        left:0;
        right:0;
        top:0;
        background:#752e08;
        box-shadow:0px 4px 8px rgba(0,0,0,0.3);
        height:100px;
        padding:0px 50px;
        z-index:2500;
    }
    .header img{
        height:100px;
    }
    .menu{
        height:100vh;
        position:fixed;
        left:-300px;
        box-shadow:4px 0px 8px rgba(0,0,0,0.3);
        width:300px;
        background:#1ca828;
        z-index:2000;
        top:100px;
        transition:all .5s ease;
    }
    .menu ul li:first-child,li:first-child a{
        cursor:text;
    }
    .menu ul li
    {
        list-style-type:none;
        color:white;
        padding:10px;
        border-bottom:.5px solid white;
    }
    .menu ul li a
    {
        display:block;
        width:100%;
        height:100%;
        text-decoration:none;
        color:white;
        margin-left:25px;
        transition:all .5s ease;
    }
    .menu ul li:not(:first-child) a:hover{
        padding-left:8px;
    }
    #toggler
    {
        display:none;
    }
    #toggler:checked ~ .menu
    {
        left:0px;
    }
    .content{
        margin-top:120px;
        transition:all .5s ease;
    }
    /* #toggler:checked ~ .content
    {
        margin-left:300px;
    } */
    #toggler + label i
    {
        position:fixed;
        top:100px;
        left:0;
        font-size:22px;
        cursor:pointer;
        padding:10px;
        background:#1ca828;
        color:white;
        border-top-right-radius:5px;
        border-bottom-right-radius:5px;
        transition:all .5s ease;
        z-index:2000;
    }
    #toggler:checked + label i
    {
        left:300px;
    }
    .header ul{
        position:absolute;
        right:20px;
        top:40px;
    }
    .header ul li{
        list-style-type:none;
        position:relative;
        float:left;
        margin-right:50px;
        color:white;
        cursor:pointer;
    }
    .header ul li i{
        color:white;
        font-size:22px;
    }
    .header ul li sup{
        display:inline-flex;
        justify-content:center;
        align-items:center;
        background:red;
        color:white;
        width:20px;
        height:20px;
        padding:3px;
        border-radius:50%;
        font-weight:bold;
        position:absolute;
        top:-12px;
        left:12px;
        user-select:none;
    }
    .menu .notify,.messages{
        position:relative;
    }
    .menu ul li sup{
        display:inline-flex;
        justify-content:center;
        align-items:center;
        background:red;
        color:white;
        width:20px;
        height:20px;
        padding:3px;
        border-radius:50%;
        font-weight:bold;
        position:absolute;
        top:12px;
        user-select:none;   
    }
    .notify,.messages{
        display:none;
    }
    .notify sup{
        right:130px;
    }
    .messages sup{
        right:150px;
    }
    .username{
        font-family:Helvetica;
        font-size:18px;
        font-weight:bold;
    }
    .brdcrumb{
        border-bottom:1px solid #d2d2d2;
    }
    .brdcrumb h4{
        color:#646464;
    }
    input,select,textarea{
        background:transparent!important;
        border:none!important;
        outline:none!important;
        box-shadow:none!important;
        border-bottom:3px solid black!important;
        border-radius:0%!important;
        color:white!important;
    }
    input[type="file"]{
        border:none!important;
    }
    .picbox{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
    .profilePic{
        position:relative;
        background-image:url('images/sarath.png');
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center center;
        width:120px;
        height:120px;
        border-radius:50%;
        display:flex;
        justify-content:center;
        align-items:center;
        overflow:hidden;
    }
    #upldbtn{
        position:absolute;
        border:none;
        outline:none;
        width:100%;
        bottom:0;
        height:60px;
        background:black;
        opacity:0.5;
        display:none;
    }
    #upldpic{
        display:none;
    }
    .profilePic:hover > #upldbtn{
        display:block;
    }
    @media only screen and (max-width:700px){
        .panel{
            display:none;
        }
        .notify,.messages{
            display:block;
        }
    }
</style>
</head>
<body>
    <div class="container-fluid bg-primary main">
        <div class="row bg-warning main-row">
            <div class="col-lg-12 main-col">
                <!--Header-->
                <div class="header">
                    <img src="images/feed-logo.png" alt="logo">
                    <ul class="panel">
                        <li><i class="fas fa-bell"></i><sup>6</sup></li>
                        <li><i class="fas fa-envelope"></i><sup>5</sup></li>
                        <li><i class="far fa-user-circle">&nbsp;<span class="username">Sarath Gvnd</span></i></li>
                    </ul>
                </div>
                <input type="checkbox" id="toggler">
                <label for="toggler">
                    <i class="fas fa-bars menu-toggler"></i>
                </label>
                <!--Menu-->
                <div class="menu">
                    <ul>
                        <li class="picbox">
                            <div class="profilePic">
                                <button type="button" id="upldbtn" class="text-white font-weight-bold"><i class="fas fa-camera"></i></button>
                            </div>
                            <span class="username">Sarath Gvnd</span>
                            <input type="file" name="profilePic" id="upldpic">
                        </li>
                        <li><a href="#"><i class="far fa-address-card"></i>&nbsp;Employee ID: </a></li>
                        <li><a href="/ems/dashboard.php"><i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</a></li>
                        <li class="notify"><a href="/ems/dashboard.php"><i class="fas fa-bell"></i>&nbsp;Notifications</a><sup>6</sup></li>
                        <li class="messages"><a href="/ems/dashboard.php"><i class="fas fa-envelope"></i>&nbsp;Messages</a><sup>5</sup></li>
                        <li><a href="/ems/logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a></li>
                    </ul>
                </div>
                <!--Breadcrumb/Content-->
                <div class="container-fluid content">
                    <!--Breadcrumb-->
                    <div class="row brdcrumb d-flex align-items-center justify-content-between">
                        <div>
                            <h4><i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard</h4>
                        </div>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active"><a href="/ems/dashboard.php">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                    <!--Content-->
                    <div class="row">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            //Menu Handler
             $(".menu-toggler").click(function(){
                $(this).toggleClass("fa-bars fa-times");
             });
             //Profile Pic handler
             $("#upldbtn").click(function(){
                 $("#upldpic").click();
             });
        });
    </script>
</body>
</html>