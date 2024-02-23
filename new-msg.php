<?php
session_start();

if(isset($_SESSION['unique_id'])&& $_SESSION['fname']){  ?>

<?php

        include_once "db.php";

        $sql = mysqli_query($con, "SELECT * FROM user WHERE unique_id = {$_SESSION['unique_id']}");

        if(mysqli_num_rows($sql) > 0){

            $row = mysqli_fetch_assoc($sql);

        }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Skilful|Chat</title>
    
     <style>
            * {
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            form .button:hover, form .button:active {
                background-color:#3c6e71;
            }
            .parse:hover, .parse:active {
                background-color:whitesmoke;
            }
            .switc:hover, .switc:active {
                font-weight:500;
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
                min-height:90vh;
                display:flex;
                flex-direction:column;
                position:relative;
                align-items: center;
            }
            /*.msg-space::-webkit-scrollbar {
                width:0;
                height:0;
            }*/
            .clamp{
                width:100%;
                display:flex;
                margin-top:2vh;
                align-items:center;
                padding:2vh;
                z-index:10;
                background-color:#3c6e71;
            }
            .clamp img {
                width:5vh;
                height:5vh;
                border-radius:50%;
                background-color:lightgray;
            }
            .sender-info {
                margin-left:1vh;
                display:flex;
                flex-direction:column;
                width:80%;
            }
            .sender-info .sender-name {
                color:white;
                font-size: large;
                font-weight:bold;
            }
            .sender-info .staquo {
                display:flex;
                font-size:smaller;
                color:whitesmoke;
            }
            .opt {
                color:white;
            }
            .status {
                color:lime;
            }
            .input-msg {
                width:100%;
                padding:2vh;
                position: absolute;
                z-index:5;
                bottom:0;
                background-color: whitesmoke;
            }
            .input-msg div {
                width:100%;
                position:relative;
                display:flex;
            }
            .input-msg input {
                padding:1.4vh;
                font-size:small;
                border-radius:3px;
                white-space: pre-line;
                outline:none;
                width:85%;
            }
            .input-msg .vamos {
                width:13%;
                margin-left:2%;
                background-color:#3c6e71;
                font-size:small;
                color:white;
                border-radius:3px;
                border: 1px solid white;
            }
            
            .input-msg .vamos:hover, .input-msg .vamos:active {
                background: color #353535;
            }
            .hide {
                display:none;
                }
            .show {
                display:block;
                pointer-events:auto;
            }
            .input-msg button:hover {
                background-color:#353535;
            }
            .msg-space {
                width:100%;
                min-height:70vh;
                max-height:70vh;
                position:absolute;
                overflow:scroll;
                bottom:10vh;
                padding:1vh;
                padding-top:2vh;
                z-index:2;
                background-color:whitesmoke;
                display:flex;
                flex-direction:column;
            }
            .incoming {
                position:relative;
                padding:1.5vh;
                max-width:70%;
                text-align:left;
                min-width:20%;
                font-size:small;
                color:#353535;
                background-color:white;
                width:fit-content;
                height:fit-content;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                border-radius:10px 10px 10px 0;
                margin-bottom:1vh;
                float:left;
            }
            .outgoing {
                position:relative;
                padding:1.5vh;
                max-width:70%;
                text-align:left;
                min-width:20%;
                font-size:small;
                color:white;
                background-color:#3c6e71;
                width:fit-content;
                height:fit-content;
                font-family:'Segoe UI', Tahoma, Geneva,l Verdana, sans-serif;
                border-radius:10px 10px 0 10px;
                margin-bottom:1vh;
                float:right;
            }
            .msg-time1 {
                position:absolute;
                bottom:0.3vh;
                font-size:xx-small;
                right:1vh;
            }
            .msg-time2 {
                position:absolute;
                bottom:0.3vh;
                font-size:xx-small;
                left:1vh;
            }
            .newmsg {
                width:100%;
                padding:0 1vh;
                height:fit-content;
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
            .sidebar li:active, .sidebar li:hover {
            color:#3c6e71;
            font-weight:500;
           }
           #vamos:hover {
                background-color:#353535;
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
            .Offline {
                content:'Offline Now';
                color: darkred;
            }
            .Active {
                content:'Offline Now';
                color: lime;
            }
            .oop {
                position:relative;
            }
            .rep {
                position:absolute;
                top:-1vh;
                display:none;
                right:-4vh;
                padding:1vh 2vh;
                color:white;
                background-color:#3c6e71;
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

           .clamp{
                width:60%;
                display:flex;
                margin-top:2vh;
                align-items:center;
                padding:2vh;
                z-index:10;
                background-color:#3c6e71;
            }
            .clamp img {
                width:6vh;
                height:6vh;
                border-radius:50%;
                background-color:lightgray;
            }
            .sender-info {
                margin-left:1vh;
                display:flex;
                flex-direction:column;
                width:90%;
            }
            .sender-info .sender-name {
                color:white;
                font-size: large;
                font-weight:bold;
            }
            .sender-info .staquo {
                display:flex;
                font-size:smaller;
                color:whitesmoke;
            }
            .opt {
                color:white;
            }
            .input-msg {
                width:60%;
                padding:2vh;
                position: absolute;
                z-index:5;
                bottom:0;
                background-color: whitesmoke;
            }
            .input-msg div {
                width:100%;
                display:flex;
            }
            .input-msg input {
                padding:1.4vh;
                font-size:medium;
                border-radius:5px;
                outline:none;
                z-index: 2;
                width: 85%;
            }
            .vamos {
                width: 13%;
                margin-left:2%;
                background-color:#3c6e71;
                font-size:medium;
                color:white;
                border-radius:5px;
                border: none;
            }
            #vamos:hover {
                background-color:#353535;
            }
            .hide {
                display:none;
                }
            .show {
                display:block;
            }
            .msg-space {
                width:60%;
                min-height:72vh;
                max-height:72vh;
                position:absolute;
                bottom:10vh;
                padding:1vh;
                z-index:4;
                display:flex;
                overflow: scroll;
                background-color:whitesmoke;
                flex-direction:column;
            }
            .incoming {
                position:relative;
                padding:1.5vh;
                max-width:70%;
                text-align:left;
                min-width:20%;
                font-size:medium;
                color:#353535;
                background-color:white;
                width:fit-content;
                height:fit-content;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                border-radius:10px 10px 10px 0;
                margin-bottom:1vh;
                float:left;
            }
            .outgoing {
                position:relative;
                padding:1.5vh;
                max-width:70%;
                text-align:left;
                min-width:20%;
                font-size:medium;
                color:white;
                background-color:#3c6e71;
                width:fit-content;
                height:fit-content;
                font-family:'Segoe UI', Tahoma, Geneva,l Verdana, sans-serif;
                border-radius:10px 10px 0 10px;
                margin-bottom:1vh;
                float:right;
            }
            .msg-time1 {
                position:absolute;
                bottom:0.3vh;
                font-size:xx-small;
                right:1vh;
            }
            .msg-time2 {
                position:absolute;
                bottom:0.3vh;
                font-size:xx-small;
                left:1vh;
            }
            .newmsg {
                width:100%;
                padding:0 1vh;
                height:fit-content;
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
                $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
                $sql = mysqli_query($con, "SELECT * FROM user WHERE unique_id = {$user_id}");
                if(mysqli_num_rows($sql) > 0){
                $row1 = mysqli_fetch_assoc($sql);
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
                       <div class="clamp">
                           <img src="seller/image/<?php echo $row1['shop_pic']; ?>">
                           <a href="seller_view.php?seller_id=<?php echo $row1['unique_id'] ?>" class="sender-info">
                               <div class="sender-name"><?php echo $row1['shop_name']; ?></div>
                               <div class="staquo">
                                   <span class="sender-service"><?php echo $row1['services']; ?></span>
                                   <span>&nbsp;|&nbsp;</span>
                                   <span class="status <?php echo $row1['status']; ?>"></span>
                               </div>
                            </a>
                            <p class="oop"><i class="fa fa-ellipsis-v opt"></i> <a href="#" class="rep">Report</a></p>
                       </div>
                        
                        <div class="msg-space">
                        
                                           
                            <!--div class="newmsg">
                                <div class="incoming">
                                    This is an incoming message <span class="msg-time2">3:37pm</span>
                                </div>
                            </div>
                            
                            <div class="newmsg">
                                <div class="outgoing">
                                    This is an outgoing message <span class="msg-time1">3:37pm</span>
                                </div>
                            </div>
                            
                            <div class="newmsg">
                                <div class="incoming">
                                    Income<span class="msg-time2">3:37pm</span>
                                </div>
                            </div>
                            
                            <div class="newmsg">
                                <div class="incoming">Hi<span class="msg-time2">3:37pm</span>
                                </div>
                            </div>
                             
                            <div class="newmsg">
                                <div class="outgoing">
                                    Hello<span class="msg-time1">3:37pm</span>
                                </div>
                            </div>
                            
                            <div class="newmsg">
                                <div class="incoming">
                                    This is an incoming message. This is coming from another sender. absbshdhsjdh djdhdbdbd hdhdhdbsbd bshshsjejeje hebeh ejehebehshsbsb svs gsueuei eotpyo tltnrj rnriebeue beiebeieh wiebeiebei ebejebe jebejejej ehebe bebebe<span class="msg-time2">3:37pm</span>
                                </div>
                            </div-->
                            
                        </div>
                        
                        <!--     Input space     -->
                        
                        <form class="input-msg" method="post" action="insert-chat.php">
                            <div>
                            <input type="text" name="outgoing_id" value="<?php  echo $_SESSION['unique_id']; ?>" id="" hidden>

            <input type="text" name="incoming_id" value="<?php  echo $user_id; ?>" id="" hidden>
            
                            <input type="text" class="inputx" value="<?php echo mysqli_real_escape_string($con, $_GET['purchase']) ?>" name="msg">

                            <input type="submit" value="Send" class="vamos" id="vamos" />
                            </div>
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
                    <li><a href="#">Invite a Friend</a></li>
                </ul>
                <ul>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="about.html">Our Services</a></li>
                    <li><a href="support.php">Customer Support</a></li>
                    <li><a href="buyer_contact.php">Contact Us</a></li>
                </ul>
                <ul>
                    <li><a href="advertise.php">Advertise</a></li>
                    <li><a href="#">Get the App</a></li>
                    <li><a href="#">Follow Us</a></li>
                    <li><a href="whatsapp://send?text=Have you heard of Skilful Online? It is a dynamic semi-online marketplace where you can buy and sell skills like Tailoring, Plumbing, Nursing, graphic design e.t.c. Anytime and Anywhere!. Join us today to experience more @ www.skilfulonline.com">Invite a Friend</a></li>
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
         $(document).ready(function(){
            $('.men-img').on('click', function(){
                $('.sidebar').slideToggle();
                $('.container').toggleClass('blur');   
     
            });

            $('.Offline').html('Offline Now');
            $('.Active').html('Active Now');

            $('.oop').click(function(){
                $('.rep').slideToggle();
            })
        });

    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
    <script src="msg.js"></script>
</body>
</html>

<?php
}else {
    header('Location: log-in.php');
    exit();
}

       