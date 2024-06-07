<?php
session_start();
include_once './api/config/config.php';
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(isset($_REQUEST['role']) && !empty($_REQUEST['role']))
    {
      if($_REQUEST['role'] == 'employee')
      {
        $id=$_SESSION['empid'];
      }
      else if($_REQUEST['role'] == 'hr')
      {
        $id=$_SESSION['hrid'];
      }
      else if($_REQUEST['role'] == 'department')
      {
        $id=$_SESSION['deptheadid'];
      }
      else if($_REQUEST['role'] == 'subadmin')
      {
        $id=$_SESSION['subadminid'];
      }
      else if($_REQUEST['role'] == 'superadmin')
      {
        $id=$_SESSION['email'];
      }
        $dt=date('Y-m-d h:i:s');
        $getlogs="select * from logs where Id='$id' and loggedOutDateTime IS NULL;";
        $result=mysqli_query($conn,$getlogs);
        if($result)
        {
            $cnt=mysqli_num_rows($result);
            if($cnt > 0)
            {
                $update="update logs set loggedOutDateTime='".$dt."' where Id='$id' and loggedOutDateTime IS NULL;";
                if(mysqli_query($conn,$update))
                {
                    session_unset();
                    session_destroy();
                    response(200,1,"Logged Out Successfully!",null);
                }
                else
                {
                    response(200,0,"Failed to logout the session",null);
                }
            }
            else
            {
                response(200,0,"Login Session is missing",$id);
            }
        }
        else
        {
            response(200,0,"Unable to logout due to failure of log tracking",null);
        }
    }
    else
    {
      response(200,0,"Valid parameters are required in endpoint",null);
    }
}
else
{
    response(200,0,"Only GET method is allowed to send data",null);
}
?>