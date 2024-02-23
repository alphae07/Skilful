
     

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Skilful|Password Reset</title>
        
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
                align-items: center;
                justify-content:center;
                background-color: whitesmoke;
           }
            .reach {
                font-size:xx-small;
                color: rgba(35,35,35,0.8);
            }
            form {
                width:80%;
                display:flex;
                flex-direction:column;
                margin-top:2vh;
            }
            label {
                width:100%;
                display: flex;
                flex-direction:column;
                margin:1vh 0;
                font-size:small;
                color: rgba(35,35,35,0.8);
            }
            input, textarea {
                width:100%;
                padding:1vh;
                margin-top:0.5vh;
                font-size:small;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                outline:none;
                border:1px solid lightgray;
                border-radius:3px;
            }
            textarea {
                height:10vh;
                margin-bottom:3vh;
            }
            .enter{
                background-color:#3c6e71;
                color:white;
                border:none;
            }
            .enter:hover, .enter:active {
                background-color:#353535;
            }
            .success {
                width:50%;
                background-color:limegreen;
                text-align:center;
                padding:1vh;
                font-size:small;
                margin-top:1vh;
                color:#353535;
            }
            .error {
                margin-top:1vh;
                width:50%;
                background-color:pink;
                text-align:center;
                padding:1vh;
                font-size:small;
                color:#353535;
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
            .error {
                margin-top:1vh;
                width:50%;
                background-color:pink;
                text-align:center;
                padding:1vh;
                font-size:small;
                color:#353535;
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
                align-items: center;
                justify-content:center;
                background-color: whitesmoke;
           }
            .reach {
                font-size:medium;
                color: rgba(35,35,35,0.8);
            }
            
            label {
                width:100%;
                display: flex;
                flex-direction:column;
                margin:1vh 0;
                font-size:medium;
                color: rgba(35,35,35,0.8);
            }
            input, .enter {
                width:100%;
                padding:1vh;
                margin-top:0.5vh;
                font-size:medium;
                outline:none;
                margin-bottom:2vh;
                border:1px solid lightgray;
                border-radius:3px;
            }
            .enter{
                background-color:#3c6e71;
                color:white;
                margin-bottom:0;
            }
            .main h2 {
                font-size:xx-large;
                font-family:'Courier New', Courier, monospace;
            }
            .main form {
                width: 40%;
                margin:2vh 0 1vh 0;
                display:flex;
                flex-direction:column;
            }
            .errmsg {
                margin-top:1vh;
                width:40%;
                background-color:pink;
                text-align:center;
                padding:1vh;
                font-size:small;
                color:#353535;
            }
            .errmsg {
                margin-top:1vh;
                width:40%;
                background-color:lime;
                text-align:center;
                padding:1vh;
                font-size:small;
                color:#353535;
            }
            .main a {
                color:#3c6e71;
                text-decoration:underline;
            }
        }
        </style>
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
                

                        <?php
                            if(isset($_GET['token']))
                            {
                                $token = $_GET['token'];
                            }
                            if(isset($_POST['sub_set'])){
                                extract($_POST);
                                if($password == ''){
                                    $error[] = 'Please enter the password.';
                                }
                                if($passwordConfirm ==''){
                                    $error[] = 'Please confirm the password.';
                                }
                                if($password != $passwordConfirm){
                                    $error[] = 'Passwords do not match.';
                                }
                                if($strlen($password)<8){
                                    $error[] = 'Passwords 8 characters long.';
                                }
                                if($strlen($password)<50){
                                    $error[] = 'Password: Max length 50 characters Not allowed.';
                                }
                                $fetchresultok = mysqli_query($con, "SELECT email FROM pass_reset WHERE token='$token'");
                                if($res = mysqli_fetch_array($fetchresultok)){
                                    $email = $res['email'];
                                }
                                if(isset($email) != '' ) {
                                    $emailtok = $email;
                                }
                                else{
                                    $error[] = 'Link has been expired or something missing ';
                                    $hide=1;
                                }
                                if(!isset($error)){
                                    /*$options = array("cost"=>4);
                                    $password = password_hash($password,PASSWORD_BCRYPT,$options);*/
                                    $fetchresultpass = mysqli_query($con, "UPDATE user SET password='$password' WHERE email='$emailtok'");
                                    if($fetchresultpass){
                                        $success="<div class='successmsg'><span style='font-size:100px;'>&#9989;</span> <br> Your password has been updated successfully.. <br> <a href='log-in.php' style='color:#fff;'>Login here...</a> </div>";

                                        $resultdel = mysqli_query($con, "DELETE FROM pass_reset WHERE email='$emailtok'");
                                        $hide=1;
                                    }
                                }
                            }
                            ?>
                            <h2>Password Reset!</h2>
                                <form action="" method="POST">
                                    <?php
                                    if(isset($error)){
                                        foreach($error as $error){
                                            echo '<div class="errmsg">'.$error.'</div><br>';
                                        }
                                    }
                                    if(isset($success)){
                                        echo $success;
                                    }
                                    ?>
                                    <?php if(isset($hide)){?>
                                        <label for="password"><p>Password</p>
                                            <input type="password" name="password" required>
                                    </label>
                                    <label for="passwordConfirm"><p>Password</p>
                                            <input type="passwordConfirm" name="passwordConfirm" required>
                                    </label>
                                    <button type='submit' name="sub_set">Reset Password</button>
                                    <?php } ?>
                                </form>
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

