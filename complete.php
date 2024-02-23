<?php
session_start();

if(isset($_SESSION['unique_id']) && isset($_SESSION['phone'])){  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width,height='+window.innerHeight+', initial-scale=1.0, maximum-scale=1, user-scalable=0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Skilful|Complete Account</title>
    
    
   <script src="location.js"></script>
    
    
     <style>
            * {
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                height:100%;
                overflow: scroll;
                color:#353535;
              
                
            }
            .alpha-1 {
                display:flex;
                z-index:7;
                width:100%;
                position:fixed;
                background-color:white;
                top:0;
                color:#353535;
                align-self: center;
                align-items:center;
                justify-content: space-between;
                height:5vh;
                padding:1vh;
                border-bottom:1px solid whitesmoke;
            }
            .alpha-1 h5 {
                font-family:'Courier New', Courier, monospace;
                color:#3c6e71;
                width:20%;
                margin-left:1vh;
            }
            .alpha-1 h5 img {
                width: 8vh;
                height: 5vh;
                margin-top: 0.1vh;
            }
            form {
                font-size:x-small;
                font-weight:300;
                display:flex;
                width:45%;
                justify-content:center;
                align-items:center;
            }
            form input {
                padding:.5vh;
                border-radius:3px;
                border:1px solid lightgray;
                width:100%;
                outline:none;
                font-size:smaller;
            }
            form .button {
                margin-left:-2vh;
                background-color:#353535;
                color: white;
                font-size:smaller;
                padding:.5vh;
                border:none;
                width:fit-content;
                border-radius:0 3px 3px 0;
            }
            .menu {
                font-size:x-small;
                font-weight:300;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                width:30%;
                display:flex;
                justify-content:space-evenly;
                align-items:center;
            }
            .switc {
                color:#3c6e71;
                font-size:xx-small;
            }
            form .button:hover, form .button:active {
                background-color:#3c6e71;
            }
            .parse:hover, .parse:active {
                background-color:whitesmoke;
            }
            .switc:hover, .switc:active {
                font-weight:500;
            }
            .alpha-1 button {
                border-radius:5px;
                background-color:white;
                color:#353535;
                padding: 0.5vh 1vh;
                margin-right:1vh;
                font-size: smaller;
            }
            .alpha-1 span {
                font-size:x-small;
            }
            .men-img {
                margin-bottom:0.5vh;
            }
            .men-img img{
                width:2.5vh;
                height:2.5vh;
                border-radius:50%;
                background-color:gray;
            }
            .men-img .dot {
                color:limegreen;
                font-size:xx-small;
                margin-left:-1vh;
                margin-bottom:1.9vh;
            }
           a {
               color:inherit;
               text-decoration:none;
           }
           .main {
               width:100%;
               display:flex;
               margin-top:3vh;
           }
           .container {
                width:100%;
                z-index:2;
                min-height:80vh;
                display:flex;
                flex-direction:column;
                align-items: center;
            }
          .blur {
               filter: blur(1px);
    -webkit-filter: blur(1px);
    -moz-filter: blur(1px);
  -o-filter: blur(1px);
  -ms-filter: blur(1px);
           }
           .sidebar {
               position:fixed;
               right:0;
               z-index:5;
               display:flex;
               background-color:white;
               width:50%;
               height:96vh;
               margin-top:3vh;
               padding:2vh;
               filter: blur(0)!important;
    -webkit-filter: blur(0)!important; 
               }
          .sidebar ul {
               list-style:none;
               width:100%;
           }
           .sidebar li {
               margin-bottom:2vh;
               display:flex;
               align-items:center;
               font-size:small;
               color:rgba(35,35,35,0.8);
           }
           .out {
               margin-top: 60vh;
               color:white;
               width:100%;
               display:flex;
               align-items: center;
               justify-content:center;
           }
           .out a {
               border:1px solid whitesmoke;
               background-color:#3c6e71;
               padding:1vh 3vh;
               color:white;
           }
           .icon {
               font-size: x-small;
           }
           .sidebar{
               display:none;
           }
           
           
           footer {
                width:100%;
                background-image: linear-gradient(to right, #3c6e71, #353535);
                display:flex;
                flex-direction:column;
                align-items: center;
                justify-content: center;
                padding:2vh;
            }
            .menus {
                width:90%;
                display:flex;
                justify-content:space-between;
                align-items:center;
                font-size: x-small;
                padding-top:2vh;
                color:white;
            }
            .menus ul {
                list-style:none;
                width:fit-content;
                align-items:center;
            }
            .menus li {
                margin-bottom:2vh;
                align-self:center;
                font-weight:300;
                text-align:center;
            }
            footer hr{
                width:90%;
            }
            .socials {
                width:90%;
                display:flex;
                justify-content:space-between;
                align-items: center;
                margin-top:1vh;
                color:white;
                font-size:xx-small;
            }
            .copys {
                
            }
            .copys h6 {
                font-family:'Courier New', Courier, monospace;
                display:inline;
            }
            footer .social {
                font-size:xx-small;
                display:flex;
                justify-content:space-between;
                width:35%;
            }
            .container h3 {
                font-family:'Courier New', Courier, monospace;
                color:#3c6e71;
                margin-top:4vh;
                
            }
            .account {
                width:100%;
                padding:2vh;
                display:flex;
                flex-direction:column;
            }
            .account label {
                width:80%;
                display:flex;
                align-self:center;
                flex-direction:column;
                margin-bottom:1vh;
            }
            .account label p {
                font-size:small;
                color:#3c6e71;
                margin-bottom:0.5vh;
            }
             .account label input, .account label select{
                font-size:smaller;
                color:rgba(35,35,35,0.8);
                padding:1vh;
                outline:none;
                border-radius:3px;
            }
            .hide {
                display:none;
            }
            select {
                background-color:white;
                border:1px solid lightgray;
            }
            .account button {
                padding:1vh;
                background-color:#3c6e71;
                color:white;
                font-size: small;
                width:80%;
                border-radius:3px;
                border:1px solid white;
                margin: 2vh 0;
            }
            .account button:hover, .account button:active {
                background-color:#353535;
            }
            .was {
                width:80%;
                font-size:x-small;
                color:#3c6e71;
            }

            .sidebar li:active, .sidebar li:hover {
            color:#3c6e71;
            font-weight:500;
           }
           .copys span {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .copys img {
                width: 7vh;
                height: 4vh;
                margin: 0 -1.5vh -1.5vh -1.5vh;
            }
            .menus li:active, .menus li:hover {
                font-weight: 500;
            }
            .copys {
                margin-top: -1.5vh;
            }
            .error {
                background-color:pink;
                font-size:small;
                width:80%;
                padding:1vh;
                margin:1vh 0;
            }

            @media (min-width:850px) {
                
                .alpha-1 {
                    height:8vh;
                    padding:2vh;
                }
                .alpha-1 h5 {
                    margin-left:-1vh;
                    font-size: larger;
                }
                .alpha-1 h5 img {
                    width: 18vh;
                    height: 10vh;
                }
                
            footer {
                padding:4vh 2vh 2vh 2vh;
            }
            .menus {
                width:90%;
                font-size: medium;
                padding-top:2vh;
            }
            .menus li {
                margin-bottom:3vh;
                align-self:center;
                font-weight:300;
                text-align:center;
            }
            footer hr{
                width:90%;
                margin-top: 2vh;
                margin-bottom: 2vh;
            }
            .socials {
                width:90%;
                display:flex;
                justify-content:space-between;
                align-items: center;
                margin-top:1vh;
                color:white;
                font-size:medium;
            }
            .copys {
                overflow: hidden;
                margin-top: -3vh;
            }
            .copys h6 {
                font-family:'Courier New', Courier, monospace;
                display:inline;
                font-size: medium;
                overflow: hidden;
            }
            footer .social {
                font-size:medium;
                display:flex;
                justify-content:space-between;
                width:30%;
            }
            footer .social a:active, footer .social a:hover {
                font-size: large;
            }
            .copys span {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .copys img {
                width: 18vh;
                height: 8vh;
                margin: 0 -4vh -3vh -4vh;
            }


            form input {
                padding:1vh;
                border-radius:3px;
                border:1px solid lightgray;
                width:100%;
                outline:none;
                font-size:small;
            }
            form .button {
                margin-left:-2vh;
                background-color:#353535;
                color: white;
                font-size:small;
                padding:1vh 1.5vh;
                border:none;
                width:fit-content;
                border-radius:0 3px 3px 0;
            }
            
            .menu {
                    font-size:medium;
                    font-weight:300;
                    width:18%;
                }
                .alpha-1 button {
                    border-radius:5px;
                    padding: 1vh 3vh;
                    margin-right:1vh;
                    margin-left: -1vh;
                    font-size: small;
                }
            .switc {
                color:#3c6e71;
                font-size:small;
            }
            .alpha-1 span {
                font-size:small;
            }
            .men-img {
                margin-bottom:0.5vh;
            }
            .men-img img{
                width:5vh;
                height:5vh;
                border-radius:50%;
                background-color:gray;
            }
            .men-img .dot {
                color:limegreen;
                font-size:small;
                margin-left:-1.5vh;
                margin-bottom:3.5vh;
            }
            .parse {
                width:3vh;
                height:3vh;
                margin-bottom:-0.5vh;
            }
            .main {
               width:100%;
               display:flex;
               margin-top:5vh;
           }
           .container {
                width:100%;
                z-index:2;
                min-height:95vh;
                padding-top:1vh;
                display:flex;
                flex-direction:column;
                align-items: center;
            }
            .blur {
               filter: blur(1px);
    -webkit-filter: blur(1px);
    -moz-filter: blur(1px);
  -o-filter: blur(1px);
  -ms-filter: blur(1px);
           }
           .sidebar {
               position:fixed;
               right:0;
               z-index:5;
               display:flex;
               background-color:white;
               width:30%;
               height:96vh;
               margin-top:2vh;
               padding:4vh;
               filter: blur(0)!important;
    -webkit-filter: blur(0)!important; 
               }
               
           
           
           
           .sidebar ul {
               list-style:none;
               width:100%;
           }
           .sidebar li {
               margin-bottom:3vh;
               display:flex;
               align-items:center;
               font-size:medium; 
               color:rgba(35,35,35,0.8);
           }
           .out {
               margin-top: 45vh;
               color:white;
               width:100%;
               display:flex;
               align-items: center;
               justify-content:center;
           }
           .out a {
               border:1px solid whitesmoke;
               background-color:#3c6e71;
               padding:1.5vh 4vh;
               color:white;
           }
           .icon {
               font-size: medium;
           }
           .sidebar{
               display:none;
           }

           .container h3 {
                font-family:'Courier New', Courier, monospace;
                color:#3c6e71;
                margin-top:6vh;
                font-size:x-large;
                margin-bottom:1vh;
            }
            .account {
                width:70%;
                padding:2vh;
                display:flex;
                flex-direction:column;
            }
            .account label {
                width:80%;
                display:flex;
                align-self:center;
                flex-direction:column;
                margin-bottom:2vh;
            }
            .account label p {
                font-size:medium;
                color:#3c6e71;
                margin-bottom:0.5vh;
            }
             .account label input, .account label select{
                font-size:medium;
                color:rgba(35,35,35,0.8);
                padding:1vh;
                outline:none;
                border-radius:3px;
            }
            .hide {
                display:none;
            }
            select {
                background-color:white;
                border:1px solid lightgray;
            }
            .account button {
                padding:1.5vh;
                background-color:#3c6e71;
                color:white;
                font-size: medium;
                width:80%;
                border-radius:3px;
                border:1px solid white;
                margin: 2vh 0;
            }
            .was {
                width:80%;
                font-size:medium;
                color:#3c6e71;
            }
            .forg {
                font-size:medium;
                margin-bottom:2vh;
            }
        }
        </style>
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.js">\x3C/script>');
    </script>

</head>
<body>
<?php

        include_once "db.php";

        $sql = mysqli_query($con, "SELECT * FROM user WHERE unique_id = {$_SESSION['unique_id']}");

        if(mysqli_num_rows($sql) > 0){

            $row = mysqli_fetch_assoc($sql);

        }

    ?>
 
            <!--    Fixed Header    -->
        
            <div class="alpha-1">
                <h5><a href="home.php"><img src="img/name.png"></a></h5>
                <form method="post" action="search_change.php">
                    <input type="text" name="search_word" required>
                    <button type="submit" class="button"><i class="fa fa-magnifying-glass"></i></button>
                </form>
                <div class="menu">
                    <span><a href="buyer_inbox.php"><svg class="parse" width="1.5vh" height="1.5vh" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M17 20.5H7C4 20.5 2 19 2 15.5V8.5C2 5 4 3.5 7 3.5H17C20 3.5 22 5 22 8.5V15.5C22 19 20 20.5 17 20.5Z" stroke="#353535" stroke-opacity="0.2" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M17 9L13.87 11.5C12.84 12.32 11.15 12.32 10.12 11.5L7 9" stroke="#353535" stroke-opacity="0.2" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
</svg></a>
</span>
                    <span class="switc"><a href="seller_form.php" class="switc">Switch to Selling</a></span>
                    <span class="men-img"><img src="seller/image/<?php echo $row['img_id'] ?>"><i class="fa-solid dot fa-circle"></i></span>
                </div>
            </div>
            
            
            
          <!--   Main Page    -->
    
            <div class="main">
                <div class="container">
                     <h3>Complete Your Registration</h3>                 
                     <form method="post" enctype="multipart/form-data" class="account" action="com_acc.php">
                     <?php if (isset($_GET["error"])) { ?>

<p class="error"><?php echo $_GET['error']; ?>
</p>

<?php
}
?>
                        
                         <label for="email"><p>Email</p>
                         <input type='email' id="email" name="email" value="<?php echo $row['email']; ?>" required>
                     </label>
                     
                     
                    <label for="country"><p>Location: State</p>
                        <select onchange="set_country(this,state, city)" size="1" name="country" required>

                            <option value="" disabled>Select the State you are located</option>
                            <option value="<?php echo $row['state']; ?>" selected='selected'><?php echo $row['state']; ?></option>
                            <option value="">-</option>

                            <script type="text/javascript">

                            setCountry(this);

                            </script>
                       <select>
                       
                         </label>
                         
                         <label for="state"><p>Local Government</p>

                            <select name="state" size="1" disabled="disabled" onchange="set_city(this,city)" required>
                            <option value="<?php echo $row['city']; ?>" selected='selected'><?php echo $row['city']; ?></option>
                        </select>

                            <select name="city" size="1" disabled="disabled" class="hide"></select>
                               
                         </label>                         
                         
                         
                         
                         
                         
                         
                         
                          <label for="Area"><p>Area</p>
                         <input type='text' id="area" name="area" value="<?php echo $row['area']; ?>" required>
                     </label>
                     
                      <label for="pic"><p>Your Picture</p>
                         <input type='file' id="pic" name="pic" accept="image/png, image/jpg, image/jpeg" required>
                     </label>
                     
                      <label for="pass"><p>Password</p>
                         <input type='password' id="pass" name="pass" required>
                     </label>
                     
                     <!--div class="was">
                     <a href="forgot_password.php">Change password?</a>
                     </div-->
                     
                     
                     <button type="submit">Confirm</button>
                     
                     <!--a href="#" class="forg">Forgotten password?</a-->
                     
                     
                     </form>
             
             
             
              </div>
                
              <!--    Sidebar Menu    -->
                <div class="sidebar">
                    <ul>
                        <li><a href="home.php"><i class="fa fa-house icon"></i> &nbsp; Dashboard</a></li>
                        <li><a href="categories.php"><i class="fa fa-list-alt icon"></i> &nbsp; Categories</a></li>
                        <li><a href="shops.php"><i class="fa fa-shopping-cart icon"></i> &nbsp; Shops</a></li>
                        <li><a href="buyer_inbox.php"><i class="fa fa-envelope icon"></i> &nbsp; Inbox</a></li>
                        
                        <li><a href="buyer_profile.php"><i class="fa fa-circle-user icon"></i> &nbsp; Account</a></li>
                        
                        
                        <li class="out"><a href="#"><i class="fa-brands fa-android icon"></i> &nbsp; Download App</a></li>

                    </ul>
                </div>
                   
                
            </div>
            
            
            
             
        <!--    Footer    -->
        
        <footer>
            <div class="menus">
                <ul>
                    <li><a href="shops.php.php">Explore</a></li>
                    <li><a href="home.php">Hire</a></li>
                    <li><a href="seller_form.php">Get a Shop</a></li>
                    <li><a href="whatsapp://send?text=Have you heard of Skilful Online? It is a dynamic semi-online marketplace where you can buy and sell skills like Tailoring, Plumbing, Nursing, graphic design e.t.c. Anytime and Anywhere!. Join us today to experience more @ www.skilfulonline.com">Invite a Friend</a></li>
                </ul>
                <ul>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="about.html">Our Services</a></li>
                    <li><a href="support.php">Customer Support</a></li>
                    <li><a href="buyer_contact.php">Contact Us</a></li>
                </ul>
                <ul>
                    <li><a href="advertise.php">Advertise</a></li>
                    <li><a href="getapp.php">Get the App</a></li>
                    <li><a href="#">Follow Us</a></li>
                    <li><a href="logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>">Log Out</a></li>
                </ul>
            </div>
            <hr>
            <div class="socials">
                <div class="copys">
                    <h6><img src="img/index.png"><h6> &copy; Skilful Online 2024
                </div>
                
                <div class="social">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-reddit"></i></a>
                    <span><a href="#">English</a></span>
                </div>
            </div>
        </footer>
        
        
          <script>
    $(document).ready(function() {
      $("input, textarea").on("focus", function() {
        $("body").css("height", "auto");
      }).on("blur", function() {
        $("body").css("height", "100vh");
      });
    });
  </script>
    
    <script>
         $(document).ready(function(){
            $('.men-img').on('click', function(){
                $('.sidebar').slideToggle();
                $('.container').toggleClass('blur');
     
            });
        });
    </script>


    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>

<?php
}else {
    header('Location: log-in.php');
    exit();
}

              