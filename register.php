<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEED OMS | REGISTER</title>
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
    input,select,textarea{
        background:transparent!important;
        border:none!important;
        outline:none!important;
        box-shadow:none!important;
        border-bottom:3px solid white!important;
        border-radius:0%!important;
        color:white!important;
    }
    option{
        color:black;
    }
    input[type="file"]{
        border:none!important;
    }
    input::placeholder,textarea::placeholder{
        color:white!important;
    }
    #employee,#hr,#department,#subadmin,#superadmin{
        display:none;
    }
    .register-form{
        position:relative;
        height:auto;
        padding:15px;
        border-radius:15px;
        /* border:5px solid white; */
        background:#e9640a;
        margin:0 auto;
    }
    .register-form form{
        margin-top:80px;
    }
    .register-form form p{
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
    #reg{
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
    #reg:hover{
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
        .main-col,.main-row,.main{
            height:auto;
        }
        h2 span{
            font-size:18px;
            color:white;
        }
        .header h5{
            letter-spacing:2px;
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
                        <div class="col-lg-5 register-form">
                            <div class="header">
                                <h5 class="text-center text-white"><span class="desg"></span>&nbsp;REGISTRATION</h5>
                            </div>
                            <form action="" id="employee">
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="text" name="empName" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="empEmail" class="form-control" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="empMobNo" class="form-control" placeholder="Mobile No." required>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="text" name="empCity" class="form-control" placeholder="City" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="empState" class="form-control" placeholder="State" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <select name="deptId" id="deptId"class="form-control" required>
                                        <option value="">Select Department</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <textarea name="empAddr" class="form-control" placeholder="Address.." required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="profilePic" class="text-white">Upload your Profile Pic<span style="color:red;">*</span></label>
                                    <input type="file" name="profilePic" id="profilePic" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" id="reg">Register</button>
                                </div>
                                <!-- <div class="form-group text-white">
                                    <p class="text-center">Already have an account?&nbsp;<a href="/ems/login.php?role=employee">Login</a></p>
                                </div> -->
                            </form>
                            <form action="" id="hr">
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="text" name="hrName" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="hrEmail" class="form-control" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="hrMobNo" class="form-control" placeholder="Mobile No." required>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="text" name="hrCity" class="form-control" placeholder="City" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="hrState" class="form-control" placeholder="State" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <textarea name="hrAddr" class="form-control" placeholder="Address.." required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="profilePic" class="text-white">Upload your Profile Pic<span style="color:red;">*</span></label>
                                    <input type="file" name="profilePic" id="profilePic" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" id="reg">Register</button>
                                </div>
                                <!-- <div class="form-group mb-3 text-white">
                                    <p class="text-center">Already have an account?&nbsp;<a href="/ems/login.php?role=hr">Login</a></p>
                                </div> -->
                            </form>
                            <form action="" id="department">
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="text" name="deptHeadName" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="deptHeadEmail" class="form-control" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="deptHeadMobNo" class="form-control" placeholder="Mobile No." required>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="text" name="deptHeadCity" class="form-control" placeholder="City" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="deptHeadState" class="form-control" placeholder="State" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <select name="deptId" id="deptId"class="form-control" required>
                                        <option value="">Select Department</option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <textarea name="deptHeadAddr" class="form-control" placeholder="Address.." required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="profilePic" class="text-white">Upload your Profile Pic<span style="color:red;">*</span></label>
                                    <input type="file" name="profilePic" id="profilePic" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" id="reg">Register</button>
                                </div>
                                <!-- <div class="form-group mb-3 text-white">
                                    <p class="text-center">Already have an account?&nbsp;<a href="/ems/login.php?role=department">Login</a></p>
                                </div> -->
                            </form>
                            <form action="" id="subadmin">
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="text" name="sAdminName" class="form-control" placeholder="Your Name" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="sAdminEmail" class="form-control" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="password" name="password" class="form-control" placeholder="Your Password" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="sAdminMobNo" class="form-control" placeholder="Mobile No." required>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col">
                                        <input type="text" name="sAdminCity" class="form-control" placeholder="City" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" name="sAdminState" class="form-control" placeholder="State" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <textarea name="sAdminAddr" class="form-control" placeholder="Address.." required></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="profilePic" class="text-white">Upload your Profile Pic<span style="color:red;">*</span></label>
                                    <input type="file" name="profilePic" id="profilePic" required>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" id="reg">Register</button>
                                </div>
                                <!-- <div class="form-group mb-3 text-white">
                                    <p class="text-center">Already have an account?&nbsp;<a href="/ems/login.php?role=department">Login</a></p>
                                </div> -->
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
            if(desg === 'department')
            {
                $(".desg").text(desg.toUpperCase()+' HEAD');
            }
            else
            {
                $(".desg").text(desg.toUpperCase());
            }
            $("#"+desg).css("display","block");
        });
        //Registration Script
        $(document).ready(function(){
            //Get Departments
            $.ajax({
                url:`http://${window.location.hostname}/api/superadmin/get.php?departments=true`,
                type:"GET",
                success:function(result,status,xhr){
                    if(result.status == 1)
                    {
                        let departments=result.data;
                        departments.forEach((deptObj)=>{
                            $("#employee #deptId").append(`<option value="${deptObj.deptId}">${deptObj.deptName}</option>`);
                            $("#department #deptId").append(`<option value="${deptObj.deptId}">${deptObj.deptName}</option>`);
                        });
                    }
                    else
                    {
                        console.log(result.message);
                    }
                }
            });
            //Employee Registration
            $("#employee").submit(function(e){
                e.preventDefault();
                let pic=document.getElementById("profilePic").files[0];
                let formdata=new FormData(this);
                formdata.append('profilePic',pic);
                $.ajax({
                    url:`http://${window.location.hostname}/api/employee/post.php?register=true`,
                    type:"POST",
                    context:this,
                    data:formdata,
                    contentType:false,
                    processData:false,
                    cache:false,
                    beforeSend:function(){
                        $(this).find("button").attr("disabled",true);
                        $(this).find("button").html(`Registering&nbsp;<span class="spinner-border spinner-border-sm"></span>`);
                    },
                    success:function(result,status,xhr){
                        console.log(result);
                        $(this).find("button").removeAttr("disabled");
                        $(this).find("button").html(`Register`);
                        if(result.status == 1)
                        {
                            $(this).trigger('reset');
                            swal("Good Job!",`${result.message}`,"success");
                        }
                        else if(result.status == 0)
                        {
                            swal("Error",`${result.message}`,"error");
                        }
                    }
                });
            });
            //HR Registration
            $("#hr").submit(function(e){
                e.preventDefault();
                let pic=document.getElementById("profilePic").files[0];
                let formdata=new FormData(this);
                formdata.append('profilePic',pic);
                $.ajax({
                    url:`http://${window.location.hostname}/api/hr/post.php?register=true`,
                    type:"POST",
                    context:this,
                    data:formdata,
                    contentType:false,
                    processData:false,
                    cache:false,
                    beforeSend:function(){
                        $(this).find("button").attr("disabled",true);
                        $(this).find("button").html(`Registering&nbsp;<span class="spinner-border spinner-border-sm"></span>`);
                    },
                    success:function(result,status,xhr){
                        console.log(result);
                        $(this).find("button").removeAttr("disabled");
                        $(this).find("button").html(`Register`);
                        if(result.status == 1)
                        {
                            $(this).trigger('reset');
                            swal("Good Job!",`${result.message}`,"success");
                        }
                        else if(result.status == 0)
                        {
                            swal("Error",`${result.message}`,"error");
                        }
                    }
                });
            });
            //Department Head Registration
            $("#department").submit(function(e){
                e.preventDefault();
                let pic=document.getElementById("profilePic").files[0];
                let formdata=new FormData(this);
                formdata.append('profilePic',pic);
                $.ajax({
                    url:`http://${window.location.hostname}/api/department/post.php?register=true`,
                    type:"POST",
                    context:this,
                    data:formdata,
                    contentType:false,
                    processData:false,
                    cache:false,
                    beforeSend:function(){
                        $(this).find("button").attr("disabled",true);
                        $(this).find("button").html(`Registering&nbsp;<span class="spinner-border spinner-border-sm"></span>`);
                    },
                    success:function(result,status,xhr){
                        console.log(result);
                        $(this).find("button").removeAttr("disabled");
                        $(this).find("button").html(`Register`);
                        if(result.status == 1)
                        {
                            $(this).trigger('reset');
                            swal("Good Job!",`${result.message}`,"success");
                        }
                        else if(result.status == 0)
                        {
                            swal("Error",`${result.message}`,"error");
                        }
                    }
                });
            });
            //Sub Admin Registration
            $("#subadmin").submit(function(e){
                e.preventDefault();
                let pic=document.getElementById("profilePic").files[0];
                let formdata=new FormData(this);
                formdata.append('profilePic',pic);
                $.ajax({
                    url:`http://${window.location.hostname}/api/subadmin/post.php?register=true`,
                    type:"POST",
                    context:this,
                    data:formdata,
                    contentType:false,
                    processData:false,
                    cache:false,
                    beforeSend:function(){
                        $(this).find("button").attr("disabled",true);
                        $(this).find("button").html(`Registering&nbsp;<span class="spinner-border spinner-border-sm"></span>`);
                    },
                    success:function(result,status,xhr){
                        console.log(result);
                        $(this).find("button").removeAttr("disabled");
                        $(this).find("button").html(`Register`);
                        if(result.status == 1)
                        {
                            $(this).trigger('reset');
                            swal("Good Job!",`${result.message}`,"success");
                        }
                        else if(result.status == 0)
                        {
                            swal("Error",`${result.message}`,"error");
                        }
                    }
                });
            });     
        });
    </script>
</body>
</html>