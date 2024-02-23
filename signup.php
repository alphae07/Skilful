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
        <title>Skilful|Sign Up</title>
        
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
                color:#353535;
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
                border:none;
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
            .create {
                align-self:left;
                color:#3c6e71;
                font-family: 'Courier New', Courier, monospace;
            }
            form {
                width:80%;
                display:flex;
                flex-direction:column;
                padding:1vh 0;
            }
            .form-group {
                display:flex;
                margin-bottom:2.5vh;
                width:100%;
            }
            select {
                color:gray;
            }
            input, select{
                width:100%;
                padding:1vh;
                font-size:smaller;
                border-radius:5px;
                outline:none;
                background-color:white;
                margin-bottom:2.5vh;
                border:1px solid lightgray;
            }
            .form-group input {
                margin-bottom:0;
            }
            .submit:hover, .submit:active,.submit:focus{
                background-color:rgba(35,35,35,0.8);
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
            .submit {
                background-color:#3c6e71;
                color:white;
                width:100%;
                font-size:smaller;
                padding:1vh;
                border-radius:5px;
            }
            .reg {
                width:100%;
                margin-bottom:3vh;
                font-size:x-small;
                display:flex;
                align-items: center;
                color:rgba(35,35,35,0.8);
                
            }
            #agree {
                width:fit-content;
                margin-bottom:0;
                margin-right:0.5vh;
                padding:0;
            }
            .lemon {
                display:inline;
                color:rgba(35,35,35,0.8)
                text-decoration:underline;
            }
            .reg p {
                display:inline;
            }
            .tote {
                font-size:x-small;
                color:rgba(35,35,35,0.8);
            }
            .tote a {
                color: #3c6e71;
                text-decoration:underline;
            }
            .tote a:hover, .tote a:active {
                font-weight:500;
                text-decoration:none;
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
            a {
                text-decoration:none;
                color:inherit;
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
                min-height:95vh;
                padding-top:6vh;
            }
            .error {
                background-color: pink;
                font-size: medium;
                color: #353535;
                padding:1vh;
                margin-bottom:2vh;
              }
              .create {
                align-self:left;
                color:#3c6e71;
                font-size:x-large;
                font-family: 'Courier New', Courier, monospace;
            }
            form {
                width:50%;
                display:flex;
                flex-direction:column;
                padding:1vh 0;
            }
            .form-group {
                display:flex;
                margin-bottom:2.5vh;
                width:100%;
            }
            select {
                color:gray;
            }
            input, select{
                width:100%;
                padding:1.5vh;
                font-size:medium;
                border-radius:5px;
                outline:none;
                background-color:white;
                margin-bottom:2.5vh;
                border:1px solid lightgray;
            }
            .form-group input {
                margin-bottom:0;
            }
            .submit:hover, .submit:active,.submit:focus{
                background-color:#353535;
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
            .submit {
                background-color:#3c6e71;
                color:white;
                width:100%;
                font-size:medium;
                padding:1.5vh;
                border-radius:5px;
            }
            .reg {
                width:100%;
                margin-bottom:3vh;
                font-size:medium;
                display:flex;
                align-items: center;
                color:rgba(35,35,35,0.8);
                
            }
            #agree {
                width:fit-content;
                margin-bottom:0;
                margin-right:0.5vh;
                padding:0;
                font-size:medium;
            }
            .lemon {
                display:inline;
                color:rgba(35,35,35,0.8)
                text-decoration:underline;
            }
            .reg p {
                display:inline;
            }
            .tote {
                font-size:medium;
                color:rgba(35,35,35,0.8);
            }
            .tote a {
                color: #3c6e71;
                text-decoration:underline;
            }
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
                <h4 class="create">Create a <em><strong>Skilful.</strong></em> Account</h4><br>

                <?php if (isset($_GET["error"])) { ?>



                    <p class="error"><?php echo $_GET['error']; ?>

                    </p>



                    <?php

                    }
 
                    ?>

                <form method="post" action="log.php">
                    <input type="text" name="name" id="name" placeholder='First Name' required>
                    <input type="text" name="lastname" id="lastname" placeholder='Last Name' required>
                    <select name="gender" required>
                        <option value="" selected="selected">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <input type="tel" name="phone" id="phone" placeholder='Phone Number' required>
                    <div class="form-group">
                    <input type="password" name="password" id="password" placeholder='Create Password' required>
                    <div class="input-group-append"><span class="input-group-text" onclick="password_show_hide();">

                    <i class="fa fa-eye" id="show_eye"></i><i class="fa fa-eye-slash d-none" id="hide_eye"></i>
                    </span></div>
                    </div>
                    <div class="form-group">
                    <input type="password" name="cpassword" id="cpassword" placeholder='Re-enter Password' required>
                   <div class="input-group-append"><span class="input-group-text" onclick="password_show_hide1();">
                    <i class="fa fa-eye" id="show_eye1"></i><i class="fa fa-eye-slash d-none" id="hide_eye1"></i>
                    </span></div>
                    </div>
                    <label for="agree" class="reg"><input type="checkbox" name="agree" id="agree" required><p> I have carefully read and agree to the stated <span class="lemon"><a href="#">Terms and Conditions</a></span>.</p></label>
                    <input type="submit" class="submit" id='confirm' value="Confirm">
                </form>
                <p class="tote">Already have an account? <a href="log-in.php">Log In</a></p>      
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



        function password_show_hide1() {

            var y =

            document.getElementById("cpassword");

            var show_eye1 =

            document.getElementById("show_eye1");

            var hide_eye1 =

            document.getElementById("hide_eye1");

            hide_eye1.classList.remove("d-none");

            if (y.type === "password") {

                y.type = "text";

                show_eye1.style.display = "none";

                hide_eye1.style.display = "block";

            }else {

                y.type = "password";

                show_eye1.style.display = "block";

                hide_eye1.style.display = "none";

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