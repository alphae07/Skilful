<!DOCTYPE html>

<html lang="en">

    <head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
        
    <title>Skilful|FAQ</title>
    
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
                width:100%;
                position:fixed;
                background-color:white;
                top:0;
                color:#3c6e71;
                align-self: center;
                align-items:center;
                justify-content: space-between;
                height:5vh;
                padding:1vh;
            }
            .alpha-1 h5 {
                margin-left:1vh;
            }
            .alpha-1 h5 img {
                width: 8vh;
                height: 5vh;
                margin-top: 0.1vh;
            }
            .alpha-1 h5, .main h3 {
                font-family:'Courier New', Courier, monospace;
            }
            .main h3 {
                color:#3c6e71;
            }
            .menu {
                font-size:x-small;
                font-weight:300;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .menu span:active, .menu span:hover {
                font-weight:500;
            }
            .alpha-1 button:active, .alpha-1 button:hover {
                background-color: #353535;
                color: white;
            }
            .switc:hover, .switc:active {
                font-weight:500;
            }
            .alpha-1 button {
                border:none;
                border-radius:5px;
                background-color:#3c6e71;
                color:white;
                padding: 0.5vh 1vh;
                margin-right:1vh;
                font-size: smaller;
            }
            .alpha-1 span {
                margin-right:1.5vh;
                font-size:xx-small;
            }
            a {
               color:inherit;
               text-decoration:none;
           }
           .main {
               width:100%;
                z-index:2;
                min-height:90vh;
                padding-top:3vh;
                display:flex;
                flex-direction:column;
                padding:5vh 2vh;
                background-color: whitesmoke;
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
            .menus li:active, .menus li:hover {
                font-weight: 500;
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
            .copys {
                margin-top: -1.5vh;
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
                .menu {
                    font-size:small;
                    font-weight:300;
                }
                .alpha-1 button {
                    border-radius:5px;
                    padding: 1vh 3vh;
                    margin-right:1vh;
                    margin-left: -1vh;
                    font-size: small;
                }
                .alpha-1 span {
                    margin-right:5vh;
                    font-size:small;
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

            .main {
               width:100%;
                z-index:2;
                min-height:95vh;
                padding-top:3vh;
                display:flex;
                flex-direction:column;
                padding:10vh 5vh;
                background-color: whitesmoke;
           }

        }
  </style>
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.js">\x3C/script>');
    </script>

</head>
<body>
 
            <!--    Fixed Header    -->
        
            <div class="alpha-1">
                <h5><a href="index.html"><img src="img/name.png"></a></h5>
                <div class="menu">
                    
                <span><a href="skills.php">Hire</a></span>
                    <span><a href="signup.php">Sell</a></span>
                    <span><a href="getapp.php">Learn</a></span>
                    <span><a href="about.html">About</a></span>
                    <span><a href="faq.php">FAQ</a></span>
                    <span><a href="log-in.php">Log in</a></span>
                    <a href="signup.php"><button>Sign Up</button></a>
                </div>
            </div>
            
            
            <div class='main'>
    
                    <h3>Frequently Asked questions (FAQ)</h3>
                   
                   <ul>
                       <li>How do i create a product?</li>
                       <li>How do i create a new post?</li>
                       
                   </ul>
    
    
      </div>
                
             
            
            
            
             
        <!--    Footer    -->
        
        <footer>
            <div class="menus">
            <ul>
                    <li><a href="signup.php">Explore</a></li>
                    <li><a href="skills.php">Hire</a></li>
                    <li><a href="seller_form.php">Get a Shop</a></li>
                    <li><a href="whatsapp://send?text=Have you heard of Skilful Online? It is a dynamic semi-online marketplace where you can buy and sell skills like Tailoring, Plumbing, Nursing, graphic design e.t.c. Anytime and Anywhere!. Join us today to experience more @ www.skilfulonline.com">Invite a Friend</a></li>
                </ul>
                <ul>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="about.html">Our Services</a></li>
                    <li><a href="support_us.html">Support Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
                <ul>
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="log-in.php">Sign In</a></li>
                    <li><a href="getapp.php">Get the App</a></li>
                    <li><a href="#">Follow Us</a></li>
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
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
        <script src="fontawesome/js/all.min.js"></script>
    </body>
</html>


