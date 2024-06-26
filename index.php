<html>
    <head>
         <title>Library</title>
    </head>
    <body>
         <div class="container">
              <div class="row">
                        <div class="col">
                          <h1>E-LIBRARY MANAGEMENT SYSTEM</h1>
                        </div>
              </div>
              <div id="navi">
                <?php
                    include "sidebar.php";
                ?>
              </div>
         </div>
         <div class="main">
              <div class="content">
                   <h2>e-library</h2>                  
                   <p>Library is place where all kind of books are available.
                      <span>E-Library</span>,this system contain list of all the books and can access by remote users 
                      concurrently from any where in the campus.It's one of the uses in e-library.
                   </p>
                   <ul class="sectionpoint1">
                     <li><a href="#section1">Uses</a></li>
                     <li><a href="#section2">Access to Available</a></li>
                     <li><a href="#section3">About</a></li>
                   </ul>
                   <br>
                   <div id="section1">
                     <h2>Uses of e-library</h2>
                     <br>
                     <br>
                     <p>Improved Efficiency: The system streamlines library operations, reducing manual tasks and paperwork, which leads to increased efficiency in resource management.</p>
                     <p>Enhanced User Experience: A user-friendly interface and advanced search capabilities make it easier for patrons to find and access the resources they need.</p>
                     <p>Expanded Resource Access: Interlibrary loans and resource sharing agreements provide patrons with access to a broader range of materials.</p>
                     <p>Data-Driven Decision-Making: Reporting and analytics tools offer insights into resource usage and user behavior, allowing libraries to make informed decisions.</p>
                     <p>Security and Privacy: Robust access controls and regular security updates protect sensitive data and ensure user privacy.</p>
                   </div>
                   <div id="section2">
                     <h2>Access to Available</h2>
                     <br>
                     <br>
                     <h3>Admin Access</h3>
                     <br>
                     <p>Admin to access all kind pf features in the web pages and the features like</p>
                     <ul class="sectionpoint">
                        <li>View request of the students</li>
                        <li>View comments for the books</li>
                        <li>Admin can upload books</li>
                        <li>Admin can view and delete the books</li>
                        <li>View stuents details</li>
                     </ul>
                     <br>
                     <h3>User Access</h3>
                     <br>
                     <p>User can access limited features in the webpage like</p>
                     <ul class="sectionpoint">
                        <li>Search Books</li>
                        <li>User can view and commend the books </li>
                        <li>Request books to Admin</li>
                        <li>Change Password</li>
                     </ul>
                   </div>
                   <div id="section3">
                     <h2>About</h2>
                     <br>
                     <h3>Contect</h3>
                     <br>
                     <ul class="sectionpoint">
                        <li>06/Vivekandar Street,<br>Dubai cross alley,<br>Dubai Main Road,<br>Dubai.</li>
                        <br>
                        <li>+91 000 000 000</li>
                     </ul>
                   </div>
              </div>
              <div class="image">
                   <image src="images/3.png"></image>
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
     /*cursor:pointer;*/
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
 .content h2
 {
     margin-bottom:2%;
 }
 .content h2:hover
 {
     color:black;
     text-shadow:2px 2px 4px rgba(255,255,255,1);
 }
 .content p
 {
     margin-left:3%;
     font-family:verdana,Geneva,Tahoma,sans-serif;
     margin-bottom:3%;
 }
 span
 {
     color:yellow;
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
 .image
 {
     width:50%;
     z-index:-1;
 }
 .image img
 {
     width:40rem;
     animation:animi3 1s ease-in-out;
     animation-iteration-count:1;
 }
 @keyframes animi3
 {
     0%
     {
         transform:translateX(100%);
     }
     100%
     {
         transform:translateX(0%);
     }
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
 }
 html
 {
    scroll-behavior:smooth;
 }
 ul a
 {
     font-size:17px;
     color:black;
     text-decoration:none;
 }
 ul a:hover
 {
     color:white;
 }
 #section1
 {
     height:500px;
     display:inline-block;
     width:100%;
 }
 #section2
 {
     height:500px;
     display:inline-block;
     width:100%;
 }
 #section3
 {
     height:270px;
     display:inline-block;
     width:100%;
 }
 .sectionpoint li
 {
     margin-left:50px;
 }
 .sectionpoint1 li
 {
     margin-left:30px;
 }
</style>