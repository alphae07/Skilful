<?php
session_start();

if(isset($_SESSION['unique_id'])&& $_SESSION['fname']){  ?>


    <?php

        include_once "db.php";
        
        $seller_id = mysqli_real_escape_string($con, $_GET['seller_id']);

                $sql = mysqli_query($con, "SELECT * FROM user WHERE unique_id = {$seller_id}");

                if(mysqli_num_rows($sql) > 0){

                $row = mysqli_fetch_assoc($sql);

                }
            
?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Skilful|Seller</title>
    
     <style>
            * {
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color:rgba(35,35,35,0.8);
                font-size:smaller;
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
            .alpha-1 form {
                font-size:x-small;
                font-weight:300;
                display:flex;
                width:45%;
                display:none;
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
            .switc:hover, .switc:active {
                font-weight:500;
            }
            form .button:hover, form .button:active {
                background-color:#3c6e71;
            }
            .parse:hover, .parse:active {
                background-color:whitesmoke;
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
                padding:2vh;
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
            .enter{
                background-color:#3c6e71;
                color:white;
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
             
             
            
            .shopinfo {
                width:100%;
                padding:2vh;
                margin-top:4vh;
                background-color:whitesmoke;
                display:flex;
                flex-direction:column;
                align-items:center;
            }
            .shopinfo1{
                width:100%;
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
            }
            .shopinfo1 img {
                border-radius:50%;
                width:9vh;
                height:9vh;
                margin-top:3vh;
                background-color:gray;
            }
            .shopinfo12 {
                display:flex;
                flex-direction:column;
                align-items:center;
                margin-top:0.5vh;
            }
            .shopinfo12 p {
                color:#3c6e71;
                font-size:small;
                font-weight:bold;
            }
            .shopinfo12 span {
                font-size:x-small
            }
            .shopinfo2 {
                width:100%;
                padding:2vh;
                display:flex;
                align-items:center;
                justify-content:space-evenly;
            }
            .shopinfo2 a {
                width:fit-content;
                padding:1vh 2vh;
                background-color:#3c6e71;
                color:white;
                border-radius:5px;
                font-weight: bold;
                border:1px solid #3c6e75;
            }
            .dash22 {
                width:100%;
                padding:2vh 0vh;
                display:grid;
                grid-template-columns:1fr 1fr 1fr;
            }
            .product {
                background-color:whitesmoke;
                display:flex;
                margin-right:0;
                flex-direction:column;
                align-items: center;
                min-height:15vh;
                justify-content:center;
                max-height:30vh;
                position:relative;
                overflow:hidden;
            }
            .product:nth-child(odd){
                margin-right:2vh;
            }
            .product .delete {
                width:50%;
                margin-left:50%;
                background-color:whitesmoke;
                margin-bottom:-4vh;
                z-index:5;
                text-align:center;
                overflow:hidden;
                font-size:large;
                color:#3c6e71;
            }
            .delete a:nth-child(2) {
                margin-left:2vh;
            }
            .product:nth-child(odd){
                margin-right:1vh;
            }
            .product img {
                width:100%;
                min-height:10vh;
                max-height:15vh;
                background-color:lightgray;
            }
            .product .pan {
                padding:0 1vh 1vh 1vh;
                font-size:x-small;
            }
            .product div {
                padding:1vh;
                display:flex;
                width:100%;
                max-height:5vh;
                align-items: center;
                justify-content:space-between;
            }
            .product div p {
                font-size:smaller;
                max-width:65%;
                max-height:5vh;
                color:#3c6e71;
                font-weight:bold;
            }
            .product div span {
                font-size:x-small;
                max-width:30%;
                font-weight:bold;
            }
            .product .adder {
                color:#3c6e71;
                height:3vh;
                width:3vh;
            }
            .product strong {
                text-align:center;
                padding:1vh;
                font-size:smaller;
            }
            .posts {
                width:100%;
                display:flex;
                flex-direction:column;
                align-items:center;
            }
            .post {
                width:95%;
                border:1px solid whitesmoke;
                box-shadow:0px 3px 3px lightgray;
                margin-bottom:2vh;
            }
            .post-head {
                padding:1vh 2vh;
                width:100%;
                display:flex;
                align-items:center;
            }
            .post-head img {
                width:7vh;
                height:7vh;
                border-radius:50%;
                background-color:gray;
            }
            .post-info {
                display:flex;
                flex-direction:column;
                margin-left:1vh;
                width:80%;
            }
            .post-info .date {
                font-size:xx-small;
            }
            .shop-name {
                font-size:large;
                font-weight:bold;
                color:#3c6e71;
                font-family:'Courier New', Courier, monospace;
            }
            .shop-locate {
                font-size:x-small;
                color:rgba(35,35,35,0.8);
            }
            .option {
                color:#3c6e71;
            }
            .post-body {
                width:100%;
                max-height:30vh;
                display:flex;
                flex-direction:column;
                font-size:smaller;
            }
            .post-body span {
                margin: 1vh 2vh;
                color:rgba(35,35,35,0.8);
            }
            .post-body img {
                width:100%;
                max-height:25vh;
                background-color:whitesmoke;
            }
            .post-footer {
                width:100%;
                display:flex;
                justify-content:space-between;
                padding:1vh 2vh;
            }
            .post-footer a {
                padding:1vh 3vh;
                border:1px solid lightgray;
                border-radius:15px;
                color:#3c6e71;
            }
            .father {
                width:100%;
                height:fit-content;
                padding:2vh;
                margin:1vh 0;
            }
            .father h4 {
                color:#3c6e71;
                font-weight:bold;
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
            .sidebar li:active, .sidebar li:hover {
            color:#3c6e71;
            font-weight:500;
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
               margin-top:6vh;
           }
           .container {
                width:100%;
                z-index:2;
                min-height:95vh;
                padding-top:3vh;
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
           
           .shopinfo {
                width:102%;
                padding:3vh;
                margin-top:-1vh;
                background-color:whitesmoke;
                display:flex;
                flex-direction:column;
                align-items:center;
            }
            .shopinfo1{
                width:100%;
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
            }
            .shopinfo1 img {
                border-radius:50%;
                width:10vh;
                height:10vh;
                margin-top:3vh;
                background-color:gray;
            }
            .shopinfo12 {
                display:flex;
                flex-direction:column;
                align-items:center;
                margin-top:1vh;
            }
            .shopinfo12 p {
                color:#3c6e71;
                font-size:x-large;
                font-family:'Courier New', Courier, monospace;
                font-weight:bold;
            }
            .shopinfo12 span {
                font-size:small
            }
            .shopinfo2 {
                width:100%;
                padding:2vh 25%;
                display:flex;
                align-items:center;
                justify-content:space-evenly;
            }
            .shopinfo2 a {
                width:fit-content;
                padding:1vh 2vh;
                background-color:#3c6e71;
                color:white;
                border-radius:5px;
                font-weight: bold;
                border:1px solid #3c6e75;
            }
            .dash22 {
                width:80%;
                margin:1vh 10%;
                padding:2vh;
                display:flex;
                justify-content:center;
                align-items:center;
                overflow:scroll;
            }
            .dash22::-webkit-scrollbar {
                width:0;
                height:0;
            }
            .product {
                background-color:whitesmoke;
                display:flex;
                width:25vh;
                margin-right:2vh;
                flex-direction:column;
                align-items: center;
                min-height:25vh;
                justify-content:center;
                max-height:25vh;
                position:relative;
            }
            .product .delete {
                width:50%;
                margin-left:50%;
                background-color:whitesmoke;
                margin-bottom:-4vh;
                z-index:5;
                text-align:center;
                overflow:hidden;
                font-size:large;
                color:#3c6e71;
            }
            .delete a:nth-child(2) {
                margin-left:2vh;
            }
            .product img {
                width:100%;
                min-height:18vh;
                max-height:18vh;
                background-color:lightgray;
            }
            
            .product div {
                padding:1vh;
                display:flex;
                flex-direction:column;
                width:100%;
                min-height:7vh;
                max-height:7vh;
                align-items: center;
                justify-content:space-between;
            }
            .product p {
                display:none;
            }
            .product div p {
                font-size:medium;
                max-width:100%;
                text-align:center;
                display:block;
                max-height:5vh;
                color:#3c6e71;
            }
            .product div span {
                font-size:small;
                max-width:100%;
                text-align:center;
            }
            .product .adder {
                color:#3c6e71;
                height:3vh;
                width:3vh;
            }
            .product strong {
                text-align:center;
                padding:1vh;
                font-size:medium;
            }
            .posts {
                width:60%;
                margin:0 20%;
                display:flex;
                flex-direction:column;
                align-items:center;
                margin-top:2vh;
            }
            .post {
                width:100%;
                border:1px solid whitesmoke;
                box-shadow:0px 5px 5px lightgray;
                margin-bottom:3vh;
            }
            .post-head {
                padding:2vh;
                width:100%;
                display:flex;
                align-items:center;
            }
            .post-head img {
                width:7vh;
                height:7vh;
                border-radius:50%;
                background-color:gray;
            }
            .post-info {
                display:flex;
                flex-direction:column;
                margin-left:1vh;
                width:90%;
            }
            .shop-name {
                font-size:large;
                font-weight:bold;
                color:#3c6e71;
                font-family:'Courier New', Courier, monospace;
            }
            .shop-locate {
                font-size:x-small;
                color:rgba(35,35,35,0.8);
            }
            .option {
                color:#3c6e71;
            }
            .post-body {
                width:100%;
                min-height:70vh;
                max-height:75vh;
                display:flex;
                flex-direction:column;
                font-size:medium;
            }
            .post-body span {
                margin: 1vh 2vh;
                color:rgba(35,35,35,0.8);
            }
            .post-info .date {
                font-size:x-small;
            }
            .post-body img {
                width:100%;
                min-height:70vh;
                max-height:70vh;
                background-color:whitesmoke;
            }
            .post-footer {
                width:100%;
                display:flex;
                justify-content:space-between;
                padding:2vh 10vh;
                align-items:center;
            }
            .post-footer a {
                padding:1vh 3vh;
                border:1px solid lightgray;
                border-radius:15px;
                font-size:x-large;
                color:#3c6e71;
            }
            .father {
                width:70%;
                height:fit-content;
                padding:2vh;
                margin:2vh 0 1vh 0;
            }
            .father h4 {
                color:#3c6e71;
                font-weight:bold;
            }
            .descc {
                width:50%;
                text-align:center;
            }
        }
        .neutral, .num {
            color:lightgray;
        }
        .lik {
            color:darkred;
        }
        .unlik {
            color:#353535;
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

            $row1 = mysqli_fetch_assoc($sql);

        }

    ?>
 
            <!--    Fixed Header    -->
        
            <div class="alpha-1">
                <h5><a href="home.php"><img src="img/name.png"></</a></h5>
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
                    <span class="switc"><a href="seller/dashboard.php" class="switc">Switch to Selling</a></span>
                    <span class="men-img"><img src="seller/image/<?php echo $row1['img_id'] ?>"><i class="fa-solid dot fa-circle"></i></span>
                </div>
            </div>
           
            
            
          <!--   Main Page    -->
    
            <div class="main">
                <div class="container">
         
                     <div class="shopinfo">
                         <div class="shopinfo1">
                             <img src="seller/image/<?php echo $row['shop_pic']; ?>">
                             <div class="shopinfo12">
                                 <p><?php echo $row['shop_name']; ?></p>
                                 <span><?php echo $row['services']; ?></span>
                                 <span><?php echo $row['mylocation']; ?></span>
                                 <span style="margin-top:1vh;white-space: pre-line;" class="descc"><?php echo $row['shop_desc']; ?></span>
                             </div>
                         </div> 
                         
                         <div class="shopinfo2">
                             <a href="#">Follow</a>
                             <a href="new-msg.php?user_id=<?php echo $row['unique_id'] ?>&purchase= ">Message</a>
                             <a href="#">Report</a>
                     </div>
                     </div>
                     
                     <div class="dash22">
                                
                                <?php
                                    include_once "seller_products.php";
                                ?>
                         <!--div class="product">
                            <img src="#">
                            <div>
                             <p>Gana Weave on</p>
                             <span>NGN 12,500</span>
                            </div>
                            <p class="pan">This is the description of the product. alot of stories and all...</p>
                          </div>
                          
                          <div class="product">
                            <img src="#">
                            <div>
                             <p>Gana Weave on</p>
                             <span>NGN 12,500</span>
                            </div>
                            <p class="pan">This is the description of the product. alot of stories and all...</p>
                          </div-->
                           
                           
                    </div> 
                    
                    
                    <div class="posts">
                        
                        <?php
                            include_once "showpost1.php";
                        ?>
                        
                        <!--div class="post">
                            <img src="#">
                            <div class="footer">
                                <p class="note">
                                    This is the post write up.
                                    #smiles
                                </p>
                                <div class="post-info">
                                    <img src="#">
                                    <div class="post-tage">
                                       <p>Sydney Empire</p>
                                       <span>Styling | Fashion designing</span>
                                       <span>Osaka, Ajegunle,Lagos state</span>         
                                    </div>
                                </div>
                                <div class="tage">
                                    <i class="fa fa-heart like odd"></i>
                      <p>12</p>              
                                </div>
                                
                                
                                <div class="tage">
                                    <i class="fa fa-shopping-cart even like"></i>
                      <p>23</p>              
                                </div>
                            </div>    
                        </div>
                        
                        <div class="post">
                            <img src="#">
                            <div class="footer">
                                <p class="note">
                                    This is the post write up.
                                    #smiles
                                </p>
                                <div class="post-info">
                                    <img src="#">
                                    <div class="post-tage">
                                       <p>Sydney Empire</p>
                                       <span>Styling | Fashion designing</span>
                                       <span>Osaka, Ajegunle,Lagos state</span>         
                                    </div>
                                </div>
                                <div class="tage">
                                    <i class="fa fa-heart like odd"></i>
                      <p>12</p>              
                                </div>
                                
                                
                                <div class="tage">
                                    <i class="fa fa-shopping-cart even like"></i>
                      <p>23</p>              
                                </div>
                            </div>    
                        </div-->
                        
                    </div>
         
           </div>
                
              <!--    Sidebar Menu    -->
                <div class="sidebar">
                    <ul>
                        <li><a href="home.php"><i class="fa fa-house icon"></i> &nbsp; Dashboard</a></li>
                        <li><a href="categories.php"><i class="fa fa-list-alt icon"></i> &nbsp; Categories</a></li>
                        <li><a href="shops.php"><i class="fa fa-shopping-cart icon"></i> &nbsp; Shops</a></li>
                        <li><a href="inbox.php"><i class="fa fa-envelope icon"></i> &nbsp; Inbox</a></li>
                        <li><a href="buyer_profile.php"><i class="fa fa-circle-user icon"></i> &nbsp; Account</a></li>
                        
                        
                        <li class="out"><a href="#"><i class="fa-brands fa-android icon"></i> &nbsp; Download App</a></li>
                    
                    </ul>
                </div>
                   
                
            </div>
            
            
            
             
        <!--    Footer    -->
        
        <footer>
            <div class="menus">
            <ul>
                
                <li><a href="shops.php">Explore</a></li>
                <li><a href="categories.php">Hire</a></li>
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
                <li><a href="seller/advertise.php">Advertise</a></li>
                <li><a href="getapp.php">Get the App</a></li>
                <li><a href="#">Follow Us</a></li>
                <li><a href="logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>">Log Out</a></li>
            </ul>
            </div>
            <hr>
            <div class="socials">
                <div class="copys">
                    <h6><img src="img/index.png"></h6> &copy; Skilful Online 2024
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

?>