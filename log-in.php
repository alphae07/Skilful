<?php

session_start();



if(isset($_SESSION['unique_id'])&& isset($_SESSION['phone'])){ 

            header('Location: home.php');

            exit();

        }else {

            

     ?>

     

<!DOCTYPE html>

<html lang="en">

    <head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Skilful|Login</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="fontawesome/css/all.css">
        
        <style>
            * {
                margin:0;
                padding:0;
                box-sizing:border-box;
            }
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
               
            }
            
            .alpha-1 {
                display:flex;
                width:100%;
                position:fixed;
                background-image: linear-gradient(to right, #3c6e71, #353535);
                top:0;
                color:white;
                align-self: center;
                align-items:center;
                justify-content: space-between;
                height:5vh;
                padding:1vh;
            }
            .alpha-1 h5 {
                font-family:'Courier New', Courier, monospace;
            }
            .alpha-1 h5 img {
                width: 8vh;
                height: 5vh;
                margin-top: 0.1vh;
            }
            .menu {
                font-size:x-small;
                font-weight:300;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .menu span:active, .menu span:hover {
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
            .alpha-1 button:active, .alpha-1 button:hover {
                background-color: #3c6e71;
                color: white;
            }
            .alpha-1 span {
                margin-right:1.5vh;
                font-size:xx-small;
            }
            .main {
                width:100%;
                min-height:90vh;
                padding-top:8vh;
                display:flex;
                flex-direction:column;
                align-items: center;
                justify-content:center;
            }
            form {
                width:80%;
                display:flex;
                flex-direction:column;
                padding:3vh 0;
            }
            .form-group {
                display:flex;
                flex-direction:column;
            }
            .form-group input {
                width:100%;
                padding:1vh;
                font-size:smaller;
                border-radius:5px;
                outline:none;
                border:1px solid lightgray;
            }
            .submit:hover, .submit:active,.submit:focus{
                background-color:rgb(75, 79, 86);
            }
            .submit {
                border:none;
            }
            a:active,a:focus,a:visited,a:link{
                color:inherit;
            }
            .error {
                background-color: pink;
                font-size: x-small;
                color: #353535;
                padding:0.5vh;
                margin-bottom:1vh;
              }
              span.input-group-text {
                 margin-left:-3vh;
                 font-size:smaller;
                }
                #hide_eye {
                margin-left: -1px;
                margin-right: -1px;
                 }
            .input-group-append{
                 display:flex;
                 width:100%;
                 margin:2vh 0;
            }
            span.input-group-text {
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center;
                color:gray;
            }
            .d-none {
                display: none;
            }
            .submit{
                background-color:#3c6e71;
                color:white;
                width:100%;
                font-size:smaller;
                padding:1vh;
                border-radius:5px;
            }
            .ruler {
                width:89%;
            }
            .ruler > span {
                display: inline-block;
                position: relative;
             }
              .ruler{
                display: block;
                overflow: hidden;
                color: rgb(75, 79, 86);
                text-align: center;
                white-space: nowrap;
              }
              .ruler > span::before, .ruler > span::after {
                background: rgb(204, 208, 213);
                content: "";
                height: 1px;
                position: absolute;
                top: 50%;
                width:100%;
              }
              .ruler > span::after {
                left: 50%;
                margin-left: 1.5vh;
              }
             .ruler > span::before {
                margin-right: 1.5vh;
                right: 50%;
              }
              .try {
                  margin-top:3vh;
                  width:80%;
                  font-size:small;
              }
             .try a:link, a:visited {
                background-color: white;
                color: rgb(75, 79, 86);
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border: 1px solid lightgray;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-radius: 10vh;
              } 
              .space {
                width: 4vh;
                height: 4vh;
                border-radius: 50%;
              }
              .try a:hover, a:active {
                background-color: rgb(75, 79, 86);
                color: white;
              }
              .tryf {
                width: 2vh;
                height: 2vh;
                border-radius: 50%;
                color: white;
                display: inline;
                padding: 1vh;
                align-items: center;
                background-color: #353535;
                display: flex;
                font-size: small 
                justify-content: space-around;
              }
              .goo {
                  background-color:#3c6e71;
              }
              .line > span {
                display: inline-block;
                position: relative;
              }
              .line{
                display: block;
                overflow: hidden;
                width:100%;
                margin-top:10vh;
                font-size:smaller;
                color: rgb(75, 79, 86);
                text-align: center;
                white-space: nowrap;
              }
              .line > span::before, .line > span::after {
                background: rgb(204, 208, 213);
                content: "";
                height: 1px;
                position: absolute;
                top: 50%;
                width: 200%;
              }
              .line > span::after {
                left: 100%;
                margin-left: 1vh;
              }
              .line > span::before {
                margin-right: 1vh;
                right: 400%;
              }
              .sign {
                color: #3c6e71;
                border: none;
              }
              .sign a:link, .sign a:visited, .sign a:active {
                border: none;
              }
              .sign:hover, .sign a:visited, .sign a:active {
                background-color: white;
                color: #3c6e71;
                font-weight:500;
              }
              .forgot {
                  font-size: small;
                  margin-top:1vh;
              }
              .forgot:hover, .forgot:active {
                font-weight:500;
              }
  
  
 
            
            footer {
                width:100%;
                background-image: linear-gradient(to right, #3c6e71, #353535);
                color:white;
                display:flex;
                flex-direction:column;
                align-items: center;
                justify-content: center;
                padding:2vh;
            }
            footer a, footer a:link, footer a:active {
                color:white;
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
            .menus li {
                color:white;
            }
            .menus li:active, .menus li:hover {
                font-weight: 500;
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
            a, footer a {
                text-decoration:none;
                color:inherit;
            }
            .alpha-1 a, .alpha-1 a:focus, .alpha-1 a:link, .alpha-1 a:active {
                color:white;
            }
            footer li a, footer li a:link, footer li a:focus, footer li a:active {
                color:white;
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
                min-height:95vh;
                padding:0 20%;
                padding-top:15vh;
            }
            form {
                padding:3vh 0;
            }
            .form-group input {
                padding:2vh;
                font-size:medium;
                border-radius:5px;
                border:1px solid lightgray;
            }
            .error {
                background-color: pink;
                font-size: medium;
                color: #353535;
                padding:1vh;
                margin-bottom:2vh;
              }
              span.input-group-text {
                 margin-left:-3vh;
                 font-size:medium;
                }
                #hide_eye {
                margin-left: -5px;
                margin-right: -5px;
                 }
            .input-group-append{
                 display:flex;
                 width:100%;
                 margin:2vh 0 3vh 0;
            }
            .submit{
                background-color:#3c6e71;
                color:white;
                width:100%;
                font-size:medium;
                padding:2vh;
                border-radius:5px;
            }
            .ruler {
                width:89%;
            }
            .ruler > span {
                display: inline-block;
                position: relative;
             }
              .ruler{
                display: block;
                overflow: hidden;
                color: rgb(75, 79, 86);
                text-align: center;
                white-space: nowrap;
              }
              .ruler > span::before, .ruler > span::after {
                background: rgb(204, 208, 213);
                content: "";
                height: 1px;
                position: absolute;
                top: 50%;
                width:100%;
              }
              .ruler > span::after {
                left: 50%;
                margin-left: 1.5vh;
              }
             .ruler > span::before {
                margin-right: 1.5vh;
                right: 50%;
              }
              .try {
                  margin-top:3vh;
                  width:80%;
                  font-size:medium;
              }
             .try a:link, a:visited {
                background-color: white;
                color: rgb(75, 79, 86);
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border: 1px solid lightgray;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-radius: 10vh;
              } 
              .space {
                width: 6.5vh;
                height: 6vh;
                border-radius: 50%;
              }
              .try a:hover, a:active {
                background-color: rgb(75, 79, 86);
                color: white;
              }
              .tryf {
                width: 4vh;
                height: 4vh;
                border-radius: 50%;
                color: white;
                display: inline;
                padding: 1vh;
                align-items: center;
                background-color: #353535;
                display: flex;
                font-size: medium; 
                justify-content: space-around;
              }
              .goo {
                  background-color:#3c6e71;
              }
              .line > span {
                display: inline-block;
                position: relative;
              }
              .line{
                display: block;
                overflow: hidden;
                width:100%;
                margin-top:10vh;
                font-size:medium;
                color: rgb(75, 79, 86);
                text-align: center;
                white-space: nowrap;
              }
              .line > span::before, .line > span::after {
                background: rgb(204, 208, 213);
                content: "";
                height: 1px;
                position: absolute;
                top: 50%;
                width: 200%;
              }
              .line > span::after {
                left: 100%;
                margin-left: 1vh;
              }
              .line > span::before {
                margin-right: 1vh;
                right: 400%;
              }
              .sign {
                color: #3c6e71;
                border: none;
              }
              .sign a:link, .sign a:visited, .sign a:active {
                border: none;
              }
              .sign:hover, .sign a:visited, .sign a:active {
                background-color: white;
                color: #3c6e71;
              }
              .forgot {
                  font-size: medium;
                  margin-top:1vh;
              }
              
            }
            .menu a, .menu a:link, .menus a, .menus a:link, .socials a, .socials a:link {
                color:white;
            }
        </style>
    </head>
    <body>
        <!--    Fixed Header    -->
        
            <div class="alpha-1">
                <h5><a href="index.html"><img src="img/index.png"></a></h5>
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
            
              <!--    Main    -->
              
            <div class="main">
                  <form method="post" action="main.php">
                      <div class="form-group">

                            <?php if (isset($_GET["error"])) { ?>

                            <p class="error"><?php echo $_GET['error']; ?>

                                </p>



                               <?php

                                }

                                    ?>

                              <input type="text" name="phone" placeholder="Mobile Number" required>
                                    <div class="input-group-append">
                                          <input type="password" id="password" name="password" placeholder="Password" required>

                                           <span class="input-group-text" onclick="password_show_hide();">

                    <i class="fa fa-eye" id="show_eye"></i><i class="fa fa-eye-slash d-none" id="hide_eye"></i>

                                             </span>
                                     </div>
                         </div>

                        <input value='Sign In' type="submit" class="submit">
                        <p class="forgot"><a href="forgot_password.php">Forgot password?</a></p>
                       
                 </form>
    


      <!-- Line ::before ::after -->


      <div class="ruler">

        <span class="container ruler"> 

          Or

        </span>

      </div> 





      <!-- Google -->

      <div class="try">

        <a class="" href="#"><div class="space"></div> Continue with Google <span class="tryf fab fa-google goo"></span></a>

      </div>



      <!-- Apple -->

      <div class="try">

        <a class="" href="#"><span class="tryf fab fa-apple app"></span> Continue with Apple<div class="space"></div></a>

         </div>  
         
         <p class="line"> 

        Don't have an account? <span class="sign"><a href="signup.php" class="sign"> Sign Up </a></span>

      </p>                
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
        </footer>
        
         <script>

        function password_show_hide() {

            var x =

            document.getElementById("password");

            var show_eye =

            document.getElementById("show_eye");

            var hide_eye =

            document.getElementById("hide_eye");

            hide_eye.classList.remove("d-none");

            if (x.type === "password") {

                x.type = "text";

                show_eye.style.display = "none";

                hide_eye.style.display = "block";

            }else {

                x.type = "password";

                show_eye.style.display = "block";

                hide_eye.style.display = "none";

            }

        }

  </script>
  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
        <script src="fontawesome/js/all.min.js"></script>
    </body>
</html>



<?php

}

?>