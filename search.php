<?php
session_start();

if(isset($_SESSION['unique_id']) && isset($_SESSION['area']) && isset($_SESSION['city']) && isset($_SESSION['state'])){  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">

    <title>Skilful|Search</title>

              
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
               margin-top:2vh;
           }
           .container {
                width:100%;
                z-index:2;
                min-height:80vh;
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
           .sidebar li:active, .sidebar li:hover {
            color:#3c6e71;
            font-weight:500;
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
            .wrapper {
                width:100%;
                align-self: center;
                height:fit-content;
                margin-top:1vh;
                display:flex;
                overflow:scroll;
            }
            .wrap {
                width:15vh;
                height:15vh;
                display:flex;
                flex-direction:column;
                background-color:white;
                justify-content: center;
                align-items:center;
                background-color:white;
                margin-right:1vh;
                border-radius:3px;
            }
            .wrap:hover, .wrap:active {
                background-color:whitesmoke;
            }
            .wrap img {
                width:14.8vh;
                height:8.8vh;
                align-self:center;
                background-color:lightgray;
            }
            .wrap p {
                width:15vh;
                height:6vh;
                text-align: center;
                display:flex;
                flex-direction:column;
                font-size: small;
                font-weight:bold;
                align-items:center;
                justify-content: center;
            }
            .wrapper::-webkit-scrollbar{
               width:0;
               height:0;
           }
           .nearby {
               width:100%;
               padding: 2vh;
               color:rgba(35,35,35,0.8);
               margin-top:2vh;
               background-color:whitesmoke;
           }
           .nearby h4 {
                color:#3c6e71;
            }
            .nearby p {
                font-size:xx-small;
            }
            .popular {
                margin:0 2vh;
                background-color:white;
            }
            .popular .wrap{
                background-color: whitesmoke;
            }
           .like {
               margin:1vh 2vh;
           }
           .omega {
                margin:2vh;
                padding: 4vh 3vh;
                background-color: #353536;
                color: white;
                width:92%;
                border-radius: 10px;
            }
            .omega h4 span {
                font-weight:300;
            }
            .omega p {
                margin-top:2vh;
                font-weight:300;
                font-family:'Courier New', Courier, monospace;
            }
            .omega p span {
                font-weight:bold;
                font-style:italic;
            }
            .omega .span {
                font-size:x-small;
                margin-top:2vh;
                font-weight:400;
            }
           .omega button{
                margin-top:2vh;
                background-color:white;
                color:#353535;
                border-radius:5px;
                padding:1vh 3vh;
                font-size: x-small;
                border:none;
            }
            .omega button:hover, .omega button:active {
                color:#3c6e71;
            }
           .omega h4 {
                font-family:'Courier New', Courier, monospace;
            }
            .seller .wrap{
                height:15vh;
            }
           .seller .wrap .pro {
               width:100%;
               height:7vh;
               display:flex;
               line-height:0.8;
               flex-direction:column;
               align-items:center;
               justify-content:space-evenly;
               font-size:xx-small;
           }
           .nearby::-webkit-scrollbar {
               width:0;
               height:0;
           }
           .pro1 {
               width:14vh;
               display:flex;
               align-items:center;
           }
           .pro {
               padding:2px 0;
           }
           .pro1 span {
               color:#3c6e71;
               max-width:14vh;
               padding:1px 0 0 0;
               font-size:x-small;
           }
           .pro2 {
               width:14vh;
               font-size:xx-small;
               font-weight:400;
           }
           .pro3 {
               display:flex;
               justify-content:space-between;
               width:14vh;
               font-size:xx-small;
           }
           .pro3 span {
               max-width:95%;
               font-weight:300;
               font-size:1vh;
           }
           .pro3 .part {
               font-weight:bold;
               font-style:italic;
               display:flex;
               display:none;
               align-items: center;
               max-width:0%;
           }
           .search_word {
                margin-top:3vh;
                color:#3c6371;
                font-family:'Courier New', Courier, monospace;
           }
           .hr {
            width:50%;
            margin:2vh 25%;
           }
           .erro {
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color:#353535;
            font-weight:300;
           }

           .product {
                background-color:whitesmoke;
                display:flex;
                flex-direction:column;
                border:1px solid lightgray;
                width:fit-content;
                height:fit-content;
                margin-right:1vh;
                border-radius:5px;
            }
            .product-body, .product-body img{
                width: 14vh;
                height:14vh;
                border-radius:5px 5px 0 0;
            }
            .product-footer {
                width:14vh;
                height:4vh;
                display: flex;
                flex-direction:column;
                align-items:center;
                justify-content: center;
            }
            .product-footer p {
                color:#3c6e71;
                font-size:small;
            }
            .product-footer span {
                font-size:x-small;
                color:rgba(35,35,35,0.8);
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
           .wrapper {
                width:100%;
                align-self: center;
                height:fit-content;
                margin-top:2vh;
                display:flex;
                overflow:scroll;
            }
            .wrap {
                width:25vh;
                height:22vh;
                display:flex;
                flex-direction:column;
                background-color:white;
                justify-content: center;
                align-items:center;
                background-color:white;
                margin-right:2vh;
                border-radius:3px;
            }
            .wrap img {
                width:24.8vh;
                height:15.8vh;
                align-self:center;
                background-color:lightgray;
            }
            .wrap p {
                width:23vh;
                height:6vh;
                text-align: center;
                display:flex;
                flex-direction:column;
                font-size: medium;
                font-weight:bold;
                align-items:center;
                justify-content: center;
            }
            .wrapper::-webkit-scrollbar {
               width:0;
               height:0;
           }
           .nearby {
               width:100%;
               padding: 3vh;
               color:rgba(35,35,35,0.8);
               margin-top:2vh;
               background-color:whitesmoke;
           }
           .nearby h4 {
                color:#3c6e71;
                font-size:x-large;
            }
            .nearby p {
                font-size:medium;
            }
            .popular {
                margin:0 2vh;
                background-color:white;
            }
            .popular .wrap{
                background-color: whitesmoke;
            }
           .like {
               margin:1vh 2vh;
           }
           .omega {
                margin:4vh 2vh;
                padding: 7vh 4vh;
                background-color: #353536;
                color: white;
                width:98%;
                border-radius: 10px;
            }
            .omega h4 span {
                font-weight:300;
                font-style:italic;
            }
            .omega p {
                margin-top:2vh;
                font-weight:300;
                font-size:x-large;
                font-family:'Courier New', Courier, monospace;
            }
            .omega p span {
                font-weight:bold;
                font-style:italic;
            }
            .omega .span {
                font-size:medium;
                margin-top:2vh;
                font-weight:400;
            }
           .omega button{
                margin-top:4vh;
                background-color:white;
                color:#353535;
                border-radius:5px;
                padding:1.5vh 4vh;
                font-size: medium;
            }
           .omega h4 {
                font-family:'Courier New', Courier, monospace;
                font-size:x-large;
            }
            .seller .wrap{
                height:25vh;
            }
           .seller .wrap .pro {
               width:100%;
               height:10vh;
               display:flex;
               line-height:0.8;
               flex-direction:column;
               align-items:center;
               justify-content:space-evenly;
               font-size:medium;
           }
           .nearby::-webkit-scrollbar {
               width:0;
               height:0;
           }
           .pro1 {
               width:24vh;
               padding:0 1vh;
               display:flex;
               align-items:center;
           }
           .pro {
               padding:2px 0;
           }
           .pro1 span {
               color:#3c6e71;
               max-width:24vh;
               padding:1px 0 0 0;
               font-size:small;
           }
           .pro2 {
               width:24vh;
               font-size:small;
               padding:1vh;
               margin-top:-1vh;
               margin-bottom:-1vh;
               font-weight:400;
           }
           .pro3 {
               display:flex;
               justify-content:space-between;
               width:24vh;
               padding:1vh;
               margin-top:-1vh;
               font-size:small;
           }
           .pro3 span {
               max-width:95%;
               font-weight:300;
               font-size:1vh;
               font-size:x-small;
           }
           .pro3 .part {
               font-weight:bold;
               font-style:italic;
               display:none;
               align-items: center;
               width:0%;
               font-size:x-small;
           }
           .product {
                background-color:whitesmoke;
                display:flex;
                flex-direction:column;
                border:1px solid lightgray;
                width:fit-content;
                height:fit-content;
                margin-right:1vh;
                border-radius:5px;
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
            .product-body, .product-body img{
                width: 20vh;
                height:18vh;
                border-radius:5px 5px 0 0;
            }
            .product-footer {
                width:20vh;
                height:5vh;
                display: flex;
                flex-direction:column;
                align-items:center;
                justify-content: center;
            }
            .product-footer p {
                color:#3c6e71;
                font-size:medium;
            }
            .product-footer span {
                font-size:small;
                color:rgba(35,35,35,0.8);
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
                <h2 class="search_word">Search: <?php if (isset($_GET["error"])) { ?>

<span class="erro"><?php echo $_GET['error']; ?>

    </span>



   <?php

    }

        ?></h2>
                <div class="hr"><hr></div>
                <div class="user">
                <div class="wrapper">
                    <?php 
                        include_once 'search_word.php';
                    ?>
            </div>
            <div class="wrapper">
                    <?php 
                        include_once 'search_word.php';
                    ?>
            </div>
            <div class="wrapper">
                    <?php 
                        include_once 'search_word.php';
                    ?>
            </div>
            <div class="wrapper">
                    <?php 
                        include_once 'search_product.php';
                    ?>
            </div>
                </div>

            <!--    Skilful shop    -->
        
        <div class="omega">
            <h4>Skilful <span>shop.</span></h4>
            <p>Find the perfect setup for your <span>business</span> to grow</p>
            <div class="span">Create an Online shop to sell your service within and beyond your location</div>
            <a href="seller_form.php"><button>Create Shop</button></a>
        </div>
        
        <div class="nearby veified seller">
                    <h4>Top Pro Sellers</h4>
                    
                    <div class="wrapper">
                    <?php 
                        include_once 'suggested.php';
                    ?>
            </div>
                </div>
                
                
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
                
                    <li><a href="shops.php">Explore</a></li>
                    <li><a href="categories.php">Hire</a></li>
                    <li><a href="seller_form.php">Get a Shop</a></li>
                    <li><a href="#">Invite a Friend</a></li>
                </ul>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="about.html">Our Services</a></li>
                    <li><a href="support.php">Customer Support</a></li>
                    <li><a href="buyer_contact.php">Contact Us</a></li>
                </ul>
                <ul>
                    <li><a href="advertise.php">Advertise</a></li>
                    <li><a href="#">Get the App</a></li>
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

