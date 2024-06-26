<?php
  session_start();
  include"database.php";
  function countRecord($sql,$db)
  {
    $res=$db->query($sql);
    return $res->num_rows;
  }
  if(!isset($_SESSION["AID"]))
  {
	 header("location:alogin.php");
  }
?>
<!DOCTYPE HTML>
<html>
   <head>
        <title>E-LIBRARY</title>
   </head>
   <body>
        <div class="container">
                <h1 class="heading">Welcome Admin</h1>
                <div class="navi">
                  <?php
                    include "adminsidebar.php";
                  ?>
                </div>
        </div>
        <div class="main">
           <div class="content">
                    <ul class="record">
                        <li>Total Students : <?php echo countRecord("select * from Student",$db); ?></li>
                        <li>Total Books :    <?php echo countRecord("select * from book",$db); ?></li>
                        <li>Total Request : <?php echo countRecord("select * from request",$db); ?></li>
                        <li>Total Comments : <?php echo countRecord("select * from comment",$db); ?></li>
                    </ul>
           </div>
           <div class="text">
                   <p>Hello,Admin you can access some important function in this page and hope your presence useful for our user</p>
           </div>
        </div>
        <div class="footer">
                <p>Copyright &copy; e-library management system 2023</p>
        </div>
   </body>
</html>
<style>
 *
 {
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'poppins',sans-serif;
 }
 body
 {
     width:100%;
     min-height:100vh;
     color:white;
     background:linear-gradient(to right,#3f5efb,#87CEEB);
 }
 .container
 {
     display:flex;
     justify-content:space-between;
     padding:15px 20px;
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     animation:animi 1s ease-in-out;
 }
 .container h1:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 @keyframes animi
 {
     0%
     {
         transform:translatey(-100%);
     }
 }
 nav ul button
 {
     display:inline-block;
     margin:10px 20px;
     font-weight:bold;
     font-size:20px;
 }
 nav ul button a
 {
    text-decoration:none;
    color:black;
    font-size:20px;
    padding:7px 7px;
    transition:all .5s ease;
 }
 .main
 {
     width:100%;
     display:flex;
     overflow:hidden;
     justify-content:space-between;
 }
 .main .content
 {
     width:50%;
     margin-top:7%;
     margin-left:5%;
     animation:animi2 1s ease-in-out;
 }
 @keyframes animi2
 {
     0%
     {
         opacity:0;
         transform:translateX(-50%);
     }
 }
 .main .text
 {
     width:50%;
     margin-top:9%;
     margin-left:5%;
     font-size:23px;
     margin-right:15%;
     color:black;
     text-shadow:1px 1px 1px white;
     animation:animi3 1s ease-in-out;
 }
 @keyframes animi3
 {
     0%
     {
         opacity:0;
         transform:translateX(-50%);
     }
 }
 .content ul
 {
     margin-bottom:2%;
 }
 .content ul li:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 .content li
 {
     margin-left:3%;
     font-family:verdana,Geneva,Tahoma,sans-serif;
     margin-bottom:3%;
     list-style:none;
     font-size:20px;
 }
 span
 {
     color:purple;
 }
 button
 {
     opacity:0.8;
     background:rgba(255,255,255,0.07);
     border:none;
     outline:none;
     border-radius:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,0.5);
     box-shadow:3px 3px 5px rgba(31,38,135,0.35);
     border-left:5px solid rgba(255,255,255,0.3);
     border-top:5px solid rgba(255,255,255,0.3);
 }
 button a:hover
 {
    background:black;
    border-radius:20px;
    color:white;
 }
 .footer p
 {
    color:black;
    text-shadow:2px 2px 2px rgba(255,255,255,1);
    position:fixed;
    left:0;
    bottom:7;
    width:100%;
    text-align:center;
    margin-top:20%;
 }
 html
 {
    scroll-behavior:smooth;
 }
</style>