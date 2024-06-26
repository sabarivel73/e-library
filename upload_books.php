<?php
  session_start();
  include"database.php";
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
          <div class="center">
            <?php
                if(isset($_POST["submit"]))
                {
                    $target_dir="upload/";
                    $target_file=$target_dir.basename($_FILES["efile"]["name"]);
                    if(move_uploaded_file($_FILES["efile"]["tmp_name"],$target_file))
                    {
                        $sql="insert into book(BTITLE,KEYWORD,FILE) values ('{$_POST["bname"]}','{$_POST["keys"]}','{$target_file}')";
                        $db->query($sql);
                        echo"<p class='success'>Book Uploaded Successfully</p>";
                    }
                    else 
                    {
                        echo"<p class='error'>Error In Upload</p>";
                    }
                }   
            ?>
            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data">
                <h3>Upload Books</h3>
                <label>Book Title</label>
                <input type="text" name="bname" required>
                <label>Keyword</label>
                <input type="text" name="keys" required>
                <label>Upload File</label>
                <input type="file" name="efile" required>
                <button type="submit" name="submit">Upload</button>
                <a href="upload_books.php">Refresh</a>
                <a href='ahome.php'>Home</a>
            </form>      
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
     height:100vh;
     width:100vw;
     display:flex;
     justify-content:center;
     align-items:center;
     background:linear-gradient(to right,#3f5efb,#87CEEB);
 }
 form
 {
     width:25rem;
     height:35rem;
     display:flex;
     flex-direction:column;
     background:rgba(255,255,255,0.07);
     box-shadow:0 10px 32px 0 rgba(31,38,135,0.50);
     border-radius:35px;
     border-left:2px solid rgba(255,255,255,0.3);
     border-right:2px solid rgba(255,255,255,0.3);
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
     border-bottom:1px solid rgba(255,255,255,0.7);
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
     color:white;
     border-bottom:1px solid rgba(255,255,255,0.7);
     opacity:0.7;
 }
 button
 {
     width:30%;
     margin:3% auto;
     color:white;
     font-size:20px;
     opacity:0.8;
     background:rgba(255,255,255,0.07);
     padding:10px 30px;
     border:none;
     outline:none;
     border-radius:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,0.5);
     box-shadow:3px 3px 5px rgba(31,38,135,0.35);
     border-left:2px solid rgba(255,255,255,0.3);
     border-top:2px solid rgba(255,255,255,0.3);
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
     color:white;
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
    margin-left:25%;
 }
 .container .error
 {
     color:white;
     text-align:center;
     margin-top:5%;
     font-size:20px;
 }
 .container .success
 {
     color:green;
     text-align:center;
     font-size:20px;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
</style>