<?php
 include"database.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
      <title>E-LIBRARY</title>
    </head>
    <body>
        <div class="container">
                <div class="center">
                    <?php
                       if(isset($_POST["submit"]))
                       {
                            $sql="insert into student (NAME,PASS,MAIL,DEP) values ('{$_POST["name"]}','{$_POST["pass"]}','{$_POST["mail"]}','{$_POST["dep"]}')";
                            $db->query($sql);
                            echo"<p class='success'> Successfully Registered</p>";
                       }   
                    ?>
                    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" >
                        <h3 class="heading">New User</h3>
                        <label>Name</label>
                        <input type="text" name="name" required>
                        <label>Password</label>
                        <input type="password" name="pass" required>
                        <label>Email</label>
                        <input type="email" name="mail" required>
                        <select name="dep" required>
                            <option vaalue="">Select</option>
                            <option vaalue="BCA">BCA</option>
                            <option vaalue="BBA">BBA</option>
                            <option vaalue="MCA">MCA</option>
                            <option vaalue="MBA">MBA</option>
                            <option vaalue="OTHERS">OTHERS</option>
                        </select>
                        <button type="submit" name="submit">Register</button>
                        <a href="index.php">Home</a>
                    </form>
                </div>        
                <div class="footer">
                   <p>Copyright &copy; e-library management system 2023</p>
                </div>
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
     /*cursor:pointer;*/
 }
 body
 {
     height:100vh;
     width:100vw;
     display:flex;
     justify-content:center;
     align-items:center;
     background:linear-gradient(to right,orange,white,green)
 }
 form
 {
     width:25rem;
     height:34rem;
     display:flex;
     flex-direction:column;
     background:rgba(255,255,255,0.07);
     box-shadow:0 10px 32px 0 rgba(31,38,135,0.50);
     border-radius:35px;
     border-left:2px solid rgba(255,255,255,0.3);
     border-right:2px solid rgba(255,255,255,0.3);
 }
 form:before
 {
     content:'';
     position:absolute;
     bottom:3%;
     right:30%;
     width:120px;
     height:120px;
     background:#06038D;
     border-radius:50%;
     z-index:-1;
     opacity:0.7;
 }
 form:after
 {
     content:'';
     position:absolute;
     top:3%;
     left:30%;
     width:120px;
     height:120px;
     background:#06038D;
     border-radius:50%;
     z-index:-1;
     opacity:0.7;
 }
 h3
 {
     font-size:40px;
     text-align:center;
     color:white;
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     letter-spacing:1px;
     margin-top:5%;
     margin-bottom:5%;
     opacity:0.8;
     border-bottom:1px solid rgba(0,0,0,1);
 }
 h3:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 label
 {
     font-size:25px;
     color:white;
     margin-left:10%;
     opacity:0.9;
     text-shadow:2px 2px 4px rgba(0,0,0,1);
 }
 label:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 input
 {
     font-size:17px;
     width:75%;
     margin:5% auto;
     margin-bottom:7%;
     border:none;
     outline:none;
     background:transparent;
     color:black;
     border-bottom:1px solid rgba(0,0,0,1);
     opacity:0.7;
 }
 select
 {
     width:75%;
     margin:5% auto;
     margin-left:10%;
     border:none;
     outline:none;
     background:transparent;
     color:white;
     font-size:25px;
     border-bottom:1px solid rgba(0,0,0,1);
     text-shadow:2px 2px 4px rgba(0,0,0,1);
     opacity:0.9;
 }
 select:hover
 {
     color:black;
     font-size:15px;
 }
 button
 {
     width:30%;
     margin:2% auto;
     color:black;
     font-size:17px;
     opacity:0.8;
     background:rgba(255,255,255,0.07);
     padding:10px 30px;
     border:none;
     outline:none;
     border-radius:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,0.5);
     box-shadow:3px 3px 5px rgba(31,38,135,0.35);
     border-left:2px solid rgba(0,0,0,0.5);
     border-top:2px solid rgba(0,0,0,0.5);
 }
 button:hover
 {
    background:black;
    border-radius:20px;
    color:white;
    border:2px solid rgba(255,255,255,1);
 }
 a
 {
     text-decoration:none;
     margin-bottom:3%;
     margin-top:3%;
     font-size:20px;
     text-align:center;
     color:black;
     opacity:0.7;
 }
 a:hover,a:focus
 {
    transform:scale(1.5);
    transition:all 0.5s;
 }
 .footer p
 {
    color:black;
    text-align:center;
    text-shadow:2px 2px 2px rgba(255,255,255,1);
    margin-top:5%;
 }
 .container .success
 {
     color:green;
     text-align:center;
     font-size:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
</style>