<?php
session_start();

if(isset($_SESSION['unique_id'])&& $_SESSION['fname']){  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width,height='+window.innerHeight+', initial-scale=1.0, maximum-scale=1, user-scalable=0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Skilful|About</title>
    
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
            .alpha-1 form {
                font-size:x-small;
                font-weight:300;
                display:flex;
                width:45%;
                justify-content:center;
                align-items:center;
            }
            .alpha-1 form input {
                padding:.5vh;
                border-radius:3px;
                border:1px solid lightgray;
                width:100%;
                outline:none;
                font-size:smaller;
            }
            .alpha-1 form .button {
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
                padding:2vh 0 0 0;
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
           .sidebar li:hover,
           sidebar li:focus,
           .sidebar li:active {
               color:#3c6e71;
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
               background-color:darkred;
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
            footer li:active,
            footer li:focus,
            footer li:hover {
                color:whitesmoke;
            }
            
             .board {
                 width:100%;
                 height:20vh;
                 background-color:lightgray;
                 padding:2vh;
                 display:flex;
                 flex-direction:column;
                 justify-content:center;
                 color:white;
                 font-family:'Courier New', Courier, monospace;
             }
             .board em {
                 color:#3c6e71;
             }
             .board button {
                 width:fit-content;
                 padding:0.5vh 2vh;
                 background-color:rgba(35,35,35,0.8);
                 color:white;
                 border-radius:3px;
                 font-size:smaller;
                 margin-top:1vh;
                 border:1px solid rgba(35,35,35,0.8);
             }
             .board button:active,
             .board button:focus,
             .board button:hover {
                 background-color:#3c6e71;
             }
             .who {
                 width:100%;
                 padding:3vh 2vh;
                 display:flex;
                 flex-direction:column;
                 align-items:center;
                 justify-content:center;
             }
             .who h3 {
                 width:100%;
                 text-align:center;
                 color:rgba(35,35,35,0.8);
                 font-family:'Courier New', Courier, monospace;
             }
             .who p {
                 margin-top:1vh;
                 text-align:center;
                 font-size:x-small;
                 width:80%;
             }
             .who img {
                 width:100%;
                 margin-top:3vh;
                 height:20vh;
                 background-color:lightgray;
             }
             .dyna {
                 width:100%;
                 padding:2vh;
                 display:flex;
                 flex-direction:column;
                 align-items:center;
                 justify-content: center;
                 background-color:whitesmoke;
             }
              .dyna p{
                 text-align:center;
                 font-weight:400;
                 font-size:smaller;
                 color:rgba(35,35,35,0.8);
                 font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                 width:80%;
             }
             .dyna h3 {
                 font-family:'Courier New', Courier, monospace;
                 text-align:center;
                 font-weight:bold;
                 margin:2vh 0;
                  color:#3c6e71;
                  width:80%;
                 }
            
             .dyna h4 {
                 font-family:'Courier New', Courier, monospace;
                 font-style:italic;
                 font-weight:400;
                 color:rgba(35,35,35,0.8);
             }
             .office {
                 padding:2vh;
                 margin:1vh;
             }
             .office h3 {
                 color:rgba(35,36,35,0.8);
                 font-family:'Courier New', Courier, monospace;
             }
             .office p {
                 width:45%;
                 color:rgba(35,36,35,0.8);
                 margin:1vh 0;
                 font-size:smaller;
             }
             .service {
                margin-top:3vh;
                background-color:whitesmoke;
                color:rgba(35,35,35,0.8);
                width:100%;
                display:flex;
                flex-direction:column;
                padding:2vh;
                align-items:center;
                justify-content:center;
            }
            
            .service p {
                text-align:center;
                width:80%;
                font-size:x-small;
            }
            
         .wrapper1 {
                width:100%;
                align-self: center;
                height:fit-content;
                margin-top:1vh;
                display:grid;
                grid-template-columns:1fr 1fr 1fr;
            }
            .wrap1 {
                height:16vh;
                display:flex;
                flex-direction:column;
                background-color:inherit;
                justify-content: center;
                align-items:center;
                margin-right:1vh;
            }
            .wrap1 img {
                width:100%;
                height:11.8vh;
                align-self:center;
                background-color:lightgray;
            }
            .wrap1 p {
                width:100%;
                height:4vh;
                padding:2px;
                text-align: center;
                display:flex;
                flex-direction:column;
                font-size:xx-small;
                align-items:center;
            }
            .beta {
                margin-top:3vh;
                background-color:whitesmoke;
                color:rgba(35,35,35,0.8);
                width:100%;
                display:flex;
                flex-direction:column;
                padding:2vh;
                align-items:center;
                justify-content:center;
            }
            .beta p {
                font-size:x-small;
                width:80%;
                text-align:center;
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
                width:12vh;
                qheight:14vh;
                display:flex;
                flex-direction:column;
                background-color:white;
                justify-content: center;
                align-items:center;
                margin-right:1vh;
            }
            .wrap img {
                width:11.8vh;
                height:10.8vh;
                align-self:center;
                background-color:lightgray;
            }
            .wrap p {
                width:12vh;
                height:3vh;
                padding:1vh 0;
                text-align: center;
                display:flex;
                flex-direction:column;
                font-size: x-small;
                align-items:center;
            }
            .service h3, .beta h3 {
                font-family:'Courier New', Courier, monospace;
                width:100%;
                color:#3c6e71;
                text-align:center;
            }
            .omega {
                margin:2vh;
                padding: 4vh 3vh;
                background-color: #38330f;
                color: white;
                width:92%;
                border-radius: 10px;
            }
            .omega h4 {
                font-family:'Courier New', Courier, monospace;
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
                
            }
            .omega h4 span {
                font-weight:300;
                font-style:italic;
                font-size:medium;
            }
            .zod {
                width:100%;
                padding:5vh;
                background-color:#353535;
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items: center;
                color:white;
            }
            .buttons {
                width:70%;
                display:flex;
                justify-content:space-between;
                align-items:center;
            }
            .buttons button {
                font-size:smaller;
                color:#353535;
                padding:1vh 3vh;
                border-radius:5px;
            }
            .zod p {
                margin-top:2vh;
                font-size:x-small;
                text-align: center;
                font-weight:300;
            }
            .zod h5 {
                margin-top:5vh;
                font-family:'Courier New', Courier, monospace;
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
                <h5><a href="home.php">Skilful.</a></h5>
                <form>
                    <input type="text" name="search">
                    <input type="submit" class="button fa fa-magnifying-glass">
                </form>
                <div class="menu">
                    <span><a href="buyer_inbox.php"><svg width="1.5vh" height="1.5vh" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <div class="board">
                        <h3>We make the World<br>more <em>Skilful.</em></h3>
                        <a href="seller/dashboard.php"><button>Start Selling</button></a>
                    </div>
                    
                    <div class="who">
                        <h3>Who Are We</h3>
                        <p>
                            We are a third party network that comnects the skilled to their potential customers across and beyond their location.
                        </p>
                        <img src="#">
                    </div>
                    
                    <div class="dyna">
                        <p>We are a small team with a<br>huge vision to perfect the future with</p><h3>"The Dynamic Semi-Online Shop"</h3>
                        
                        <h4>Anywhere, Anytime</h4>
                        </div>
                        
                        <div class="office">
                            <h3>Our Office</h3>
                            <p>
                                Block 7, Apex street, Parakin, Ife, Osun state,Nigeria<br>+2348125896935<br>skilfulonline2023@gmail.com
                            </p>
                        </div>
                        
                        <div class="service">
                            <h3>Our Services</h3>
                            <p>We offer a wide range of services, from aiding our skilled men at expanding their business to allowing our customers buy and sell skills conveniently</p>
                              <div class="wrapper1">
                <div class="wrap1">
                    <img src="#">
                    <p>Explore and Buy skilled men services, products and materials from/at anywhere and anytime</p>
                </div>
                
                <div class="wrap1">
                    <img src="#">
                    <p>Get an Online Shop to sell your services and products within and far beyond your location</p>
                </div>
                
                <div class="wrap1">
                    <img src="#">
                    <p>Follow Skilled men works/Showcase your services and get rated on the Go</p>
                </div>
                
            </div>
                        </div>
                        
                        <!--    Skilful shop    -->
        
        <div class="omega">
            <h4>Skilful <span>shop.</span></h4>
            <p>Find the perfect setup for your <span>business</span> to grow</p>
            <div class="span">Visit varieties of Online shops within or beyond your location</div>
            <a href="#"><button>Explore</button></a>
        </div>
        
        
                        
                        <!--    Popular Services     -->
        
        <div class="beta">
            <h3>Popular Services</h3>
            <p>Visit the online shops of Skilled men closer to your location to purchase their products and services.</p>
            <div class="wrapper">
                <a href="#"><div class="wrap">
                    <img src="https://www.experts.ng/blog/wp-content/uploads/2021/06/profitable-tailoring-brand.jpg">
                    <p>Tailoring</p>
                </div></a>
                
                <a href="#"><div class="wrap">
                    <img src="https://www.mrright.in/ideas/wp-content/uploads/2017/10/carpentry-basics.jpg">
                    <p>Carpentry</p>
                </div></a>
                
                <a href="#"><div class="wrap">
                    <img src="https://cdn.shopify.com/s/files/1/1660/8199/articles/shoemaking_750x.png?v=1634232329">
                    <p>Shoe Making</p>
                </div></a>
                
                <a href="#"><div class="wrap">
                    <img src="https://res.cloudinary.com/hamstech/images/w_768,h_581,c_scale/f_auto,q_auto/v1622888487/Hamstech%20App/Title_8045909142301/Title-768x581.png?_i=AA">
                    <p>Styling</p>
                </div></a>
                
                <a href="#"><div class="wrap">
                    <img src="#">
                    <p>Graphic Designing</p>
                </div></a>
                
                <a href="#"><div class="wrap">
                    <img src="#">
                    <p>Baking</p>
                </div></a>
            </div>
        </div>
        
        
        <div class="zod">
            <div class="buttons">
                <a href="signup.php"><button>Sign Up</button></a>
                <a href="log-in.php"><button>Sign In</button></a>
            </div>
            <p>Start the <em><strong><em>Skilful.</em></strong></em> adventure as you sell and buy skills on the Go<br><em>Anytime and Anywhere</em></p>
            <h5>The Dynamic Semi-Online Shop</h5>
        </div>
        
                    
    
                  </div>
                
              <!--    Sidebar Menu    -->
                <div class="sidebar">
                    <ul>
                        <li><a href="home.php"><i class="fa fa-house icon"></i> &nbsp; Dashboard</a></li>
                        <li><a href="categories.php"><i class="fa fa-list-alt icon"></i> &nbsp; Categories</a></li>
                        <li><a href="shops.php"><i class="fa fa-shopping-cart icon"></i> &nbsp; Shops</a></li>
                        <li><a href="buyer_inbox.php"><i class="fa fa-envelope icon"></i> &nbsp; Inbox</a></li>
                        <li><a href="notification.php"><i class="fa fa-bell icon"></i> &nbsp; Notification</a></li>
                        <li><a href="buyer_profile.php"><i class="fa fa-circle-user icon"></i> &nbsp; Account</a></li>
                        <li><a href="#"><i class="fa fa-cog icon"></i> &nbsp; Settings</a></li>
                        
                        
                        <li class="out"><a href="logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>"><i class="fa fa-sign-out icon"></i> &nbsp; Log Out</a></li>
                    
                    </ul>
                </div>
                   
                
            </div>
            
            
            
             
        <!--    Footer    -->
        
        <footer>
            <div class="menus">
                <ul>
                    <li><a href="shops.php.php">Explore</a></li>
                    <li><a href="home.php">Hire</a></li>
                    <li><a href="#">Get a Shop</a></li>
                    <li><a href="#">Invite a Friend</a></li>
                </ul>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="about.html">Our Services</a></li>
                    <li><a href="support.php">Customer Support</a></li>
                    <li><a href="buyer_contact.php">Contact Us</a></li>
                </ul>
                <ul>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Get the App</a></li>
                    <li><a href="#">Follow Us</a></li>
                    <li><a href="logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>">Log Out</a></li>
                </ul>
            </div>
            <hr>
            <div class="socials">
                <div class="copys">
                    <h6>Skilful.<h6> &copy; Skilful Online 2024
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

</body>
</html>

<?php
}else {
    header('Location: log-in.php');
    exit();
}

              