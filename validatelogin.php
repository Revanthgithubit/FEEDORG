<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if(isset($_REQUEST['role']) && !empty($_REQUEST['role']))
  {
      if($_REQUEST['role'] == 'employee')
      {
        $empid=$_POST['empid'];
        $pswd=$_POST['password'];
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_URL,"http://".$_SERVER['SERVER_NAME']."/api/employee/post.php?login=true");
        curl_setopt($curl,CURLOPT_POST,1);
        $authinfo=array(
              "empid"=>$empid,
              "password"=>$pswd
          );
        curl_setopt($curl,CURLOPT_POSTFIELDS,$authinfo);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        if($op=curl_exec($curl))
        {
          $arr=json_decode($op,true);
          if($arr['status'] == 1)
          {
           $_SESSION['empid']=$arr['data'];
          }
          echo $op;
        }
        curl_close($curl);
      }
      else if($_REQUEST['role'] == 'hr')
      {
        $hrid=$_POST['hrid'];
        $pswd=$_POST['password'];
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_URL,"http://".$_SERVER['SERVER_NAME']."/api/hr/post.php?login=true");
        curl_setopt($curl,CURLOPT_POST,1);
        $authinfo=array(
              "hrid"=>$hrid,
              "password"=>$pswd
          );
        curl_setopt($curl,CURLOPT_POSTFIELDS,$authinfo);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        if($op=curl_exec($curl))
        {
          $arr=json_decode($op,true);
          if($arr['status'] == 1)
          {
           $_SESSION['hrid']=$arr['data'];
          }
          echo $op;
        }
        curl_close($curl);
      }
      else if($_REQUEST['role'] == 'department')
      {
        $deptheadid=$_POST['deptheadid'];
        $pswd=$_POST['password'];
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_URL,"http://".$_SERVER['SERVER_NAME']."/api/department/post.php?login=true");
        curl_setopt($curl,CURLOPT_POST,1);
        $authinfo=array(
              "deptheadid"=>$deptheadid,
              "password"=>$pswd
          );
        curl_setopt($curl,CURLOPT_POSTFIELDS,$authinfo);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        if($op=curl_exec($curl))
        {
          $arr=json_decode($op,true);
          if($arr['status'] == 1)
          {
           $_SESSION['deptheadid']=$arr['data'];
          }
          echo $op;
        }
        curl_close($curl);
      }
      else if($_REQUEST['role'] == 'subadmin')
      {
        $subadminid=$_POST['sAdminid'];
        $pswd=$_POST['password'];
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_URL,"http://".$_SERVER['SERVER_NAME']."/api/subadmin/post.php?login=true");
        curl_setopt($curl,CURLOPT_POST,1);
        $authinfo=array(
              "sAdminid"=>$subadminid,
              "password"=>$pswd
          );
        curl_setopt($curl,CURLOPT_POSTFIELDS,$authinfo);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        if($op=curl_exec($curl))
        {
          $arr=json_decode($op,true);
          if($arr['status'] == 1)
          {
           $_SESSION['subadminid']=$arr['data'];
          }
          echo $op;
        }
        curl_close($curl);
      }
      else if($_REQUEST['role'] == 'superadmin')
      {
        $email=$_POST['email'];
        $pswd=$_POST['password'];
        $curl=curl_init();
        curl_setopt($curl,CURLOPT_URL,"http://".$_SERVER['SERVER_NAME']."/api/superadmin/post.php?login=true");
        curl_setopt($curl,CURLOPT_POST,1);
        $authinfo=array(
              "email"=>$email,
              "password"=>$pswd
          );
        curl_setopt($curl,CURLOPT_POSTFIELDS,$authinfo);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
        if($op=curl_exec($curl))
        {
          $arr=json_decode($op,true);
          if($arr['status'] == 1)
          {
           $_SESSION['email']=$arr['data'];
          }
          echo $op;
        }
        curl_close($curl);
      }
      else
      {
          header("Location:index.php?role=undefined");
          exit();
      }
  }
  else
  {
      header("Location:index.php");
      exit();
  }
}
else
{
  response(200,0,"Only POST method is allowed to send data",null);  
}
?>
