<?php

session_start();



if(isset($_SESSION['unique_id'])&& isset($_SESSION['phone'])){ 

            header('Location: categories.php');

            exit();

        }else {

            

     ?>
    
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <title>Skilful|Skills</title>
    
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
                z-index:20;
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
            .alpha-1 button {
                border-radius:5px;
                background-color:#3c6e71;
                color:white;
                padding: 0.5vh 1vh;
                margin-right:1vh;
                font-size: smaller;
                border:none;
            }
            .alpha-1 button:active, .alpha-1 button:hover {
                background-color: #353535;
                color: white;
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
               display:flex;
               margin-top:3vh;
           }
           .container {
                width:100%;
                z-index:2;
                min-height:90vh;
                display:flex;
                flex-direction:column;
                align-items: center;
                justify-content:center;
            }
            .container h3 {
                font-family:'Courier New', Courier, monospace;
            }
            
            .board button {
                padding: 0.5vh 2vh;
                background-color: transparent;
                color:white;
                border-radius:3px;
                display:block;
                align-self:center;
                font-size:smaller;
                margin-top:2vh;
                display:flex;
                align-items: center;
                justify-content: center;
                border:1px solid whitesmoke;
            }
            .board h3 {
                color:white;
            }
            .container p {
                font-size:x-small;
            }
            .container ul {
                width:100%;
                list-style:none;
                margin-bottom:3vh;
            }
            .container li {
                margin-bottom:2vh;
                display:flex;
                flex-direction:column;
                padding:0.5vh;
                align-items: center;
                
            }
            .category {
               width:100%;
               padding:1vh 2vh;
               display:flex;
               align-items: center;
               justify-content:space-evenly;
               font-size:xx-small;
           }
           .category span:hover, .category span:active,
           .cater2 span:hover, .cater2 span:active {
            font-weight:500;
            color:#3c6e71;
           }
            .caterr {
                background-image: linear-gradient(to right, #3c6e71, #353535);
                width:100%;
                padding:1vh;
                display:flex;
                align-items: center;
            }
            .caterr h3 {
                font-family:'Courier New', Courier, monospace;
                padding-left:1vh;
                color:white;
            }
            .container li img {
                width:100%;
                height:3vh;
                background-color:gray;
            }
            .container li p {
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .board {
                width:100%;
                background-image: linear-gradient(to right, #3c6e71, #353535);
                display:flex;
                flex-direction:column;
                height:20vh;
                align-items:center;
                justify-content:center;
                color:white;
            }
            .board p {
                font-weight:300;
            }
            .board button:hover, .board button:active {
                background-color:white;
                color:#3c6e71;
            }
            .cater1 {
                width:100%;
                display:grid;
                grid-template-columns:1fr 1fr 1fr 1fr;
            }
            .cater2 {
                display:flex;
                flex-direction:column;
                margin:1vh 1vh 0 1vh;
                font-size:xx-small;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .cater2 h3 {
                margin:0.8vh 0;
            }
            .cater2 span {
                margin-bottom:1vh;
            }
            .cater2 h3 {
                color:#3c6e71;;
                width:100%;
                padding:2px;
                height:fit-content;
                display:flex;
            }
          .cater2 span {
              color:rgba(35,35,35,0.8);
          }
          .catts {
              width:1.5vh;
              height:1.5vh
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
               display:flex;
               margin-top:3vh;
           }
           .container {
                width:100%;
                z-index:2;
                min-height:95vh;
                display:flex;
                flex-direction:column;
                align-items: center;
                justify-content:center;
            }
            .container h3 {
                font-family:'Courier New', Courier, monospace;   
            }
            
            .board button {
                padding: 1vh 2vh;
                background-color: transparent;
                color:white;
                border-radius:3px;
                display:block;
                align-self:center;
                font-size:medium;
                margin-top:2vh;
                display:flex;
                align-items: center;
                justify-content: center;
                border:1px solid whitesmoke;
            }
            .board h3 {
                color:white;
                font-size:x-large;
            }
            .container p {
                font-size:medium;
            }
            .container ul {
                width:95%;
                list-style:none;
                margin-bottom:3vh;
            }
            .container li {
                margin-bottom:2vh;
                display:flex;
                flex-direction:column;
                padding:1vh;
                align-items: center;
                
            }
            .category {
               width:100%;
               padding:1vh 2vh;
               display:flex;
               align-items: center;
               justify-content:space-evenly;
               font-size:small;
           }
            .caterr {
                background-image: linear-gradient(to right, #3c6e71, #353535);
                width:100%;
                padding:1vh;
                display:flex;
                align-items: center;
            }
            .caterr h3 {
                font-family:'Courier New', Courier, monospace;
                padding-left:1vh;
                color:white;
                font-size:larger;
            }
            .container li img {
                width:100%;
                height:6vh;
                background-color:gray;
            }
            .container li p {
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .board {
                width:100%;
                background-image: linear-gradient(to right, #3c6e71, #353535);
                display:flex;
                flex-direction:column;
                height:35vh;
                margin-top:5vh;
                align-items:center;
                justify-content:center;
                color:white;
            }
            .board p {
                font-weight:300;
            }
            .cater1 {
                width:100%;
                display:grid;
                grid-template-columns:1fr 1fr 1fr 1fr;
            }
            .cater2 {
                display:flex;
                flex-direction:column;
                margin:1vh 1vh 0 1vh;
                font-size:small;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .cater2 h3 {
                margin:0.8vh 0;
            }
            .cater2 span {
                margin-bottom:1vh;
            }
            .cater2 h3 {
                color:#3c6e71;;
                width:100%;
                padding:2px;
                height:fit-content;
                display:flex;
            }
          .cater2 span {
              color:rgba(35,35,35,0.8);
          }
          .catts {
              width:1.5vh;
              height:1.5vh
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
            
          <!--   Main Page    -->
    
          <div class="main">
                <div class="container">
                    <div class="board">
                    <h3>CATEGORIES</h3>
                    <p>Services and Products Categories available on <strong><em>Skilful.</em></strong></p>
                    <button id='construction'><i class="fa fa-play catts"></i>&nbsp; Learn More</button>
                    </div>
                    <div class="category">
                    <span><a href="#construction">Construction</a></span>
                    <span><a href="#digital">Digital</a></span>
                    <span><a href="#mechanical">Mechanical</a></span>
                    <span><a href="#personal">Personal-Service</a></span>
                    <span><a href="#technical">Technical</a></span>
                    <span><a href="#transportation">Transportation</a></span>
                </div>
                    
                   
                    <ul>
                        <li><div class="caterr"><h3>Construction</h3></div>
                        <div class="cater1">
                            <div class="cater2">
                                <img src="#">
                                <h3>Carpentry</h3>
                                <span><a href="service_view.php?service=Furniture Making">Furniture Making</a></span>
                                <span><a href="service_view.php?service=Carbinet Making">Carbinet Making</a></span>
                                <span><a href="service_view.php?service=Wood Making">Wood Making</a></span>
                                <span><a href="service_view.php?service=Rough Carpentry">Rough Carpentry</a></span>
                                <span><a href="service_view.php?service=Finish Carpentry">Finish Carpentry</a></span>
                            </div>
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Electrical work</h3>
                                <span><a href="service_view.php?service=Electrical Installation">Electrical Installation</a></span>
                                <span><a href="service_view.php?service=Wiring and Circuiting">Wiring and Circuiting</a></span>
                                <span><a href="service_view.php?service=Lightning System">Lightning System</a></span>
                                <span><a href="service_view.php?service=Power distribution">Power distribution</a></span>
                                <span><a href="service_view.php?service=Electrial Maintenance & Repair">Electrical Maintenance & Repair</a></span>
                            </div>
                            
                              <div class="cater2">
                                <img src="#">
                                <h3>Flooring</h3>
                                <span><a href="service_view.php?service=Tile Installation">Tile Installation</a></span>
                                <span><a href="service_view.php?service=Hardwood Flooring Installation">Hardwood Flooring Installation</a></span>
                                <span><a href="service_view.php?service=Laminate & Vinyl flooring Installation">Laminate & Vinyl flooring Installation</a></span>
                                <span><a href="service_view.php?service=Carpet Installation">Carpet Installation</a></span>
                            </div>
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Glass & Glazing</h3>
                                <span><a href="service_view.php?service=Glass Installation">Glass Installation</a></span>
                                <span><a href="service_view.php?service=Window Installation">Window Installation</a></span>
                                <span><a href="service_view.php?service=Glass repair & replacement">Glass repair & replacement</a></span>
                            </div>
                            
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>HVAC (Heating, Ventilation, and Air Conditioning)</h3>
                                <span><a href="service_view.php?service=Ductwork Installation">Ductwork Installation</a></span>
                                <span><a href="service_view.php?service=HVAC system installation">HVAC system installation</a></span>
                                <span><a href="service_view.php?service=HVAC maintenance & repair">HVAC maintenance & repair</a></span>
                                <span><a href="service_view.php?service=Air Conditioning installation">Air Conditioning installation</a></span>
                            </div>
                  
                            <div class="cater2">
                                <img src="#">
                                <h3>Insulation & Drywall</h3>
                                <span><a href="service_view.php?service=Insulation Installation">Insulation Installation</a></span>
                                <span><a href="service_view.php?service=Drywall Installation & Finishing">Drywall Installation & Finishing</a></span>
                            </div>
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Mansory & Concrete</h3>
                                <span><a href="service_view.php?service=Bricklaying">Bricklaying</a></span>
                                <span><a href="service_view.php?service=Blocklaying">Blocklaying</a></span>
                                <span><a href="service_view.php?service=Stonemasonry">Stonemasonry</a></span>
                                <span><a href="service_view.php?service=Concrete Work">Concrete Work</a></span>
                                <span><a href="service_view.php?service=Cement Mansory">Cement Mansory</a></span>
                                <span><a href="service_view.php?service=Tiles Setting">Tiles Setting</a></span>
                            </div>
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Painting & Decorating</h3>
                                <span><a href="service_view.php?service=Interior and Exterior painting">Interior and Exterior painting</a></span>
                                <span><a href="service_view.php?service=Wallpaper Installation">Wallpaper Installation</a></span>
                                <span><a href="service_view.php?service=Surface Preparation and Finishing">Surface Preparation and Finishing</a></span>
                                <span><a href="service_view.php?service=Decorative Finishes">Decorative Finishes</a></span>
                            </div>
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Plumbing & Pipefitting</h3>
                                <span><a href="service_view.php?service=Plumbing Installation">Plumbing Installation</a></span>
                                <span><a href="service_view.php?service=Pipefitting">Pipefitting</a></span>
                                <span><a href="service_view.php?service=Pipe Welding">Pipe Welding</a></span>
                                <span><a href="service_view.php?service=Sprinkler System Installation">Sprinkler System Installation</a></span>
                                <span><a href="service_view.php?service=Drainage System">Drainage System</a></span>
                            </div>                                                   
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Roofing</h3>
                                <span><a href="service_view.php?service=Roof Installation">Roof Installation</a></span>
                                <span><a href="service_view.php?service=Roof Repairs & Maintenance">Roof Repairs & Maintenance</a></span>
                                <span><a href="service_view.php?service=Roofing Material">Roofing Material</a></span>
                            </div>
                                
                             <div class="cater2">
                                <img src="#">
                                <h3>Scalfolding</h3>
                                <span><a href="service_view.php?service=Scaffold Assembly & Dismantling">Scaffold Assembly & Dismantling</a></span>
                                <span><a href="service_view.php?service=Scaffold safety & maintenance">Scaffold Safety & Maintenance</a></span>
                            </div>
                            
                            <div id="digital" class="cater2">
                                <img src="#">
                                <h3>Welding & Metal working</h3>
                                <span><a href="service_view.php?service=Structure Welding">Structure Welding</a></span>
                                <span><a href="service_view.php?service=Metal Fabrication">Metal Fabrication</a></span>
                                <span><a href="service_view.php?service=Ornamental Ironwork">Ornamental Ironwork</a></span>
                                <span><a href="service_view.php?service=Sheet Metal Work">Sheet Metal Work</a></span>
                            </div>
                            
                        </div>
                        
                        </li>
                        
                        
                        
                        
                        <!--     Digital     -->
                        
                        <li><div class="caterr"><h3>Digital</h3></div>
                        <div class="cater1">
                            <div class="cater2">
                                <img src="#">
                                <h3>Cyber Security</h3>
                                <span><a href="service_view.php?service=Network Security">Network Security</a></span>
                                <span><a href="service_view.php?service=Incident Response">Incident Response</a></span>
                                <span><a href="service_view.php?service=Security Engineering">Security Engineering</a></span>
                                <span><a href="service_view.php?service=Threat analysis">Threat analysis</a></span>
                                <span><a href="service_view.php?service=Vulnerability Assessment">Vulnerability Assessment</a></span>
                            </div>
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Data Science & Analytics</h3>
                                <span><a href="service_view.php?service=Data Analysis & interpretation">Data Analysis & interpretation</a></span>
                                <span><a href="service_view.php?service=Data Visualization">Data Visualization</a></span>
                                <span><a href="service_view.php?service=Machine Learning & Artificial Intelligence">Machine Learning & Artificial Intelligence</a></span>
                                <span><a href="service_view.php?service=Predictive Modelling">Predictive Modelling</a></span>
                                <span><a href="service_view.php?service=Big Data Management">Big Data Management</a></span>
                            </div>
                            
                              <div class="cater2">
                                <img src="#">
                                <h3>Digital Marketing</h3>
                                <span><a href="service_view.php?service=Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</a></span>
                                <span><a href="service_view.php?service=Pay Per Click (PPC) Advertising">Pay Per Click (PPC) Advertising</a></span>
                                <span><a href="service_view.php?service=Social Media Marketing">Social Media Marketing</a></span>
                                <span><a href="service_view.php?service=Email Marketing">Email Marketing</a></span>
                                <span><a href="service_view.php?service=Content Marketing">Content Marketing</a></span>
                                <span><a href="service_view.php?service=Analytics & Data Analytics">Analytics & Data Analytics</a></span>
                                                                
                            </div>
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>E-commerce & Online business</h3>
                                <span><a href="service_view.php?service=E-commerce Website Development">E-commerce Website Development</a></span>
                                <span><a href="service_view.php?service=Online Store Management">Online Store Management</a></span>
                                <span><a href="service_view.php?service=Digital Payment System">Digital Payment System</a></span>
                                <span><a href="service_view.php?service=Inventory Management">Inventory Management</a></span>
                                <span><a href="service_view.php?service=Online Marketing & Sales">Online Marketing & Sales</a></span>
                            </div>
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Graphic design & multimedia</h3>
                                <span><a href="service_view.php?service=Graphic Design">Graphic Design</a></span>
                                <span><a href="service_view.php?service=Branding & Logo Design">Branding & Logo Design</a></span>
                                <span><a href="service_view.php?service=Motion Graphics & Animation">Motion Graphics & Animation</a></span>
                                <span><a href="service_view.php?service=Video Editing & Production">Video Editing & Production</a></span>
                                <span><a href="service_view.php?service=Illustration and Digital Art">Illustration and Digital Art</a></span>
                                
                            </div>
                            
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>IT support & Networking</h3>
                                <span><a href="service_view.php?service=Cloud Computing">Cloud Computing</a></span>
                                <span><a href="service_view.php?service=Help Desk Support">Help Desk Support</a></span>
                                <span><a href="service_view.php?service=Network Administration">Network Administration</a></span>
                                <span><a href="service_view.php?service=System Administration">System Administration</a></span>
                                <span><a href="service_view.php?service=IT Security">IT Security</a></span>
                            </div>
                  
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Software Development</h3>
                                <span><a href="service_view.php?service=Application Development">Application Development</a></span>
                                <span><a href="service_view.php?service=Software Engineering">Software Engineering</a></span>
                                <span><a href="service_view.php?service=Database Development & Development">Database Development & Development</a></span>
                                <span><a href="service_view.php?service=Quality Assurance & Testing">Quality Assurance & Testing</a></span>
                                <span><a href="service_view.php?service=DevOps (Development & Operation)">DevOps (Development & Operation)</a></span>
                            </div>
                            
                             <div id="mechanical" class="cater2">
                                <img src="#">
                                <h3>Website development & design</h3>
                                <span><a href="service_view.php?service=Front End Web Development">Front End Web Development</a></span>
                                <span><a href="service_view.php?service=Back End Web Development">Back End Web Development</a></span>
                                <span><a href="service_view.php?service=Full Stack Web Development">Full Stack Web Development</a></span>
                                <span><a href="service_view.php?service=User Interface (UI) Design">User Interface (UI) Design</a></span>
                                <span><a href="service_view.php?service=User Experience (UX) Design">User Experience (UX) Design</a></span>
                                <span><a href="service_view.php?service=Responsive Web Design">Responsive Web Design</a></span>
                            </div>                                                   
                         
                        </div>
                        
                        </li>
                     
                     
                             
                        
                        <!--     Mechanical     -->
                        
                        <li><div class="caterr"><h3>Mechanical</h3></div>
                        <div class="cater1">
                            <div class="cater2">
                                <img src="#">
                                <h3>Automotive & Vehicle Maintenance</h3>
                                <span><a href="service_view.php?service=Automobile Repair & Maintenance">Automobile Repair & Maintenance</a></span>
                                <span><a href="service_view.php?service=Diesel Engine Repair">Diesel Engine Repair</a></span>
                                <span><a href="service_view.php?service=Auto Body Repair">Auto Body Repair</a></span>
                                <span><a href="service_view.php?service=Motorcycle Repair">Motorcycle Repair</a></span>
                                <span><a href="service_view.php?service=Small Engine Repair">Small Engine Repair</a></span>
                                <span><a href="service_view.php?service=Heavy Equipment Maintenance & Repair">Heavy Equipment Maintenance & Repair</a></span>
                            </div>
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Elevator & lift</h3>
                                <span><a href="service_view.php?service=Elevator Installation">Elevator Installation</a></span>
                                <span><a href="service_view.php?service=Elevator Maintenance & Repair">Elevator Maintenance & Repair</a></span>
                                <span><a href="service_view.php?service=Lift Installation & Maintenance">Lift Installation & Maintenance</a></span>
                            </div>
                            
                              <div class="cater2">
                                <img src="#">
                                <h3>Hydraulics & Pneumatics</h3>
                                <span><a href="service_view.php?service=Hydraulic System Installation & Maintenance">Hydraulic System Installation & Maintenance</a></span>
                                <span><a href="service_view.php?service=Pneumaic System Installation & Maintenance ">Pneumatic System Installation & Maintenance</a></span>
                                <span><a href="service_view.php?service=Fluid Power System">Fluid Power System</a></span>                                                 
                            </div>
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Industrial machinery & equipment maintenance</h3>
                                <span><a href="service_view.php?service=Equipment Maintenance">Equipment Maintenance</a></span>
                                <span><a href="service_view.php?service=Maintenance & Repair of Industrial Machinery">Maintenance & Repair of Industrial Machinery</a></span>
                                <span><a href="service_view.php?service=Preventive Maintenance Planning & Implemetation">Preventive Maintenance Planning & Implementation</a></span>
                            </div>
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Refrigerator & cooling system</h3>
                                <span><a href="service_view.php?service=Refigerator System Installation & Maintenance">Refrigerator System Installation & Maintenance</a></span>
                                <span><a href="service_view.php?service=Cooling System Maintenance & Repair">Cooling System Maintainance & Repair</a></span>
                                <span><a href="service_view.php?service=Commercial & Industrial Refrigerator">Commercial & Industrial Refrigeration</a></span>                    
                            </div>
                         
                             <div id="personal" class="cater2">
                                <img src="#">
                                <h3>Welding & Tooling</h3>
                                <span><a href="service_view.php?service=CNC (Computer Numerical Control) Machining ">CNC (Computer Numerical Control) Machining</a></span>
                                <span><a href="service_view.php?service=Manual Machining">Manual Machining</a></span>
                                <span><a href="service_view.php?service=Tool & Die Making">Tool & Die Making</a></span>
                                <span><a href="service_view.php?service=Precision Machinig">Precision Machining</a></span>
                            </div>                                                   
                         
                        </div>
                        
                        </li>
                        
                                
                        
                        <!--     Presonal Service     -->
                        
                        <li><div class="caterr"><h3>Personal Service</h3></div>
                        <div class="cater1">
                            <div class="cater2">
                                <img src="#">
                                <h3>Cleaning & Janitory</h3>
                                <span><a href="service_view.php?service=Residental Cleaning Service">Residental Cleaning Service</a></span>
                                <span><a href="service_view.php?service=Commercial Cleaning Service">Commercial cleaning Service</a></span>
                                <span><a href="service_view.php?service=Janitory Service">Janitory Service</a></span>
                                <span><a href="service_view.php?service=carpet & Upholstery Cleaning">Carpet & Upholstery Cleaning</a></span>
                            </div>
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Culinary & Food service</h3>
                                <span><a href="service_view.php?service=Culinary Arts & Cooking">Culinary Arts & Cooking</a></span>
                                <span><a href="service_view.php?service=Baking & Pastry Art">Baking & Pastry Art</a></span>
                                <span><a href="service_view.php?service=Catering Service">Catering Service</a></span>
                                <span><a href="service_view.php?service=Food & Beverage Management">Food & Beverage Management</a></span>
                                <span><a href="service_view.php?service=Restaurant & Hospitality Management">Restaurant & Hospitality Management</a></span>
                            </div>
                            
                              <div class="cater2">
                                <img src="#">
                                <h3>Event & Entertainment service</h3>
                                <span><a href="service_view.php?service=Event Planning & Coordination">Event Planning & Coordination</a></span>
                                <span><a href="service_view.php?service=Wedding Planning">Wedding Planning</a></span>
                                <span><a href="service_view.php?service=DJ Service">DJ Service</a></span>
                                <span><a href="service_view.php?service=Event Production & Lightning">Event Production & Lightning</a></span>
                                <span><a href="service_view.php?service=Party Rental Service">Party Rental Service</a></span>
                                <span><a href="service_view.php?service=Corporate Event Planning">Corporate Event Planning</a></span>
                                <span><a href="service_view.php?service=Special Event Planning">Special Event Planning</a></span>
                               <span><a href="service_view.php?service=MC Service">MC Service</a></span>
                                                                
                            </div>
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Fashion & Clothing</h3>
                                <span><a href="Tailoring">Tailoring</a></span>
                                <span><a href="Seamstress">Seamstress</a></span>
                                <span><a href="Fashion Stylist">Fashion Stylist</a></span>
                                <span><a href="service_view.php?service=Cobbler">Cobbler</a></span>
                                <span><a href="service_view.php?service=Shoe Making">Shoe Making</a></span>
                            </div>
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Fitness & Personal training</h3>
                                <span><a href="service_view.php?service=Personal Training">Personal Training</a></span>
                                <span><a href="service_view.php?service=Yoga Instruction">Yoga Instruction</a></span>
                                <span><a href="service_view.php?service=Pilates Instuction">Pilates Instruction</a></span>
                                <span><a href="service_view.php?service=Group Fitness Instruction">Group Fitness Instruction</a></span>
                                <span><a href="service_view.php?service=Wellness Coaching">Wellness Coaching</a></span>
                               <span><a href="service_view.php?service=Dance Instruction">Dance Instruction</a></span>
                                
                            </div>
                            
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Hospitality & Tourism trade</h3>
                                <span><a href="service_view.php?service=Hotel Management">Hotel Management</a></span>
                                <span><a href="service_view.php?service=Event Planning & Managemnet">Event Planning & Management</a></span>
                                <span><a href="service_view.php?service=Travel Agency Services">Travel Agency Services</a></span>
                                <span><a href="service_view.php?service=Resort & Spa Management">Resort & Spa Management</a></span>
                                <span><a href="service_view.php?service=Tour Guiding">Tour Guiding</a></span>a
                            </div>
                  
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Image consulting & styling</h3>
                                <span><a href="service_view.php?service=Personal Styling">Personal Styling</a></span>
                                <span><a href="service_view.php?service=Wardrope Consulting">Wardrope Consulting</a></span>
                                <span><a href="service_view.php?service=Fashion & Image Consulting">Fashion & Image Consulting</a></span>
                                <span><a href="service_view.php?service=Personal Shopping">Personal Shopping</a></span>
                                <span><a href="service_view.php?service=Color Analysis">Color Analysis</a></span>
                            </div>
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Landscaping & Gardening</h3>
                                <span><a href="service_view.php?service=Landscape Design & Maintenance">Landscape Design & Maintenance</a></span>
                                <span><a href="service_view.php?service=Lawn Care & Maintenance">Lawn Care & Maintenance</a></span>
                                <span><a href="service_view.php?service=Gardening & Horticulture">Gardening & Horticulture</a></span>
                                <span><a href="service_view.php?service=Tree Care & Arboriculture">Tree Care & Arboriculture</a></span>
                                <span><a href="service_view.php?service=Irrigation System Installation & Maintenance">Irrigation System Installation & Maintenance</a></span>
                            </div>     
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Life Coaching & counseling</h3>
                                <span><a href="service_view.php?service=Life Coaching">Life Coaching</a></span>
                                <span><a href="service_view.php?service=Career Coaching">Career Coaching</a></span>
                                <span><a href="service_view.php?service=Relationship Counseling">Relationship Counseling</a></span>
                                <span><a href="service_view.php?service=Mental Health Counseling">Mental Health Counseling</a></span>
                                <span><a href="service_view.php?service=Wellness Counseling">Wellness Counseling</a></span>
                            </div>    
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Personal care & beauty</h3>
                                <span><a href="service_view.php?service=Hairdressing & Styling">Hairdressing & Styling</a></span>
                                <span><a href="service_view.php?service=Cosmetology & Aesthetics">Cosmetology & Aesthetics</a></span>
                                <span><a href="service_view.php?service=Nail Technician">Nail Technician</a></span>
                                <span><a href="service_view.php?service=Massage Therapy">Massage Therapy</a></span>
                                <span><a href="service_view.php?service=Barbering">Barbering</a></span>
                                 <span><a href="service_view.php?service=Nail Care Pedicure & Manicure">Nail Care Pedicure & Manicure</a></span>
                                <span><a href="service_view.php?service=Makeup Artistry">Makeup Artistry</a></span>
                            </div>       
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Personal chef & meal preparation</h3>
                                <span><a href="service_view.php?service=Personal Chef Service">Personal Chef Service</a></span>
                                <span><a href="service_view.php?service=Meal Preparation & Planning">Meal Preparation & Planning</a></span>
                                <span><a href="service_view.php?service=Special Dietary Needs">Special Dietary Needs</a></span>
                                <span><a href="service_view.php?service=Private Cooking Lesson">Private Cooking Lesson</a></span>
                                <span><a href="service_view.php?service=Catering for Small Events">Catering for Small Events</a></span>
                                <span><a href="service_view.php?service=Catering for Large Events">Catering for Large Events</a></span>
                            </div>                                                    
                         
                         <div class="cater2">
                                <img src="#">
                                <h3>Pet care & grooming</h3>
                                <span><a href="service_view.php?service=Pet Grooming">Pet Grooming</a></span>
                                <span><a href="service_view.php?service=Dog Walking">Dog Walking</a></span>
                                <span><a href="service_view.php?service=Pet Sitting">Pet Sitting</a></span>
                                <span><a href="service_view.php?service=Animal Training & Behavior Consulting">Animal Training & Behavior Consulting</a></span>
                                <span><a href="service_view.php?service=Pet Boarding & Daycare Service">Pet Boarding & Daycare Service</a></span>
                                 <span><a href="service_view.php?service=Pet Photography">Pet Photography</a></span>
                            </div>    
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Repair & Maintenance</h3>
                                <span><a href="service_view.php?service=Appliance Repair">Appliance Repair</a></span>
                                <span><a href="service_view.php?service=Hoe Repair & Handyman Service">Home Repair & Handyman Service</a></span>
                                <span><a href="service_view.php?service=Locksmith Service">Locksmith Service</a></span>
                                <span><a href="service_view.php?service=Pool & Spa Maintenance">Pool & Spa Maintenance</a></span>
                                <span><a href="service_view.php?service=Furniture Repair & Restoration">Furniture Repair & Restoration</a></span>
                            </div> 
                            
                            <div id="technical" class="cater2">
                                <img src="#">
                                <h3>Spa & Wellness</h3>
                                <span><a href="service_view.php?service=Massage Therapy">Massage therapy</a></span>
                                <span><a href="service_view.php?service=Spa Treatment">Spa Treatment</a></span>
                                <span><a href="service_view.php?service=Bodywork & Alternative Therapy">Bodywork & Alternatives Therapy</a></span>
                                <span><a href="service_view.php?service=Reflexology">Reflexology</a></span>
                                <span><a href="service_view.php?service=Wellness Coaching">Wellness Coaching</a></span>
                            </div>             
                         
                        </div>
                        
                        </li>
                     
                           <!--     Technical     -->
                        
                        <li><div class="caterr"><h3>Technical</h3></div>
                        <div class="cater1">
                           
                            <div class="cater2">
                                <img src="#">
                                <h3>Computer & IT</h3>
                                <span><a href="service_view.php?service=Computer Hardware Repair & Maintenace">Computer Hardware Repair & Maintenance</a></span>
                                <span><a href="service_view.php?service=Software Development & Programming">Software Development & Programming</a></span>
                                <span><a href="service_view.php?service=Network Administration & Security">Network Administration & Security</a></span>
                            </div>
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Construction & Building</h3>
                                <span><a href="service_view.php?service=Building Inspection">Building Inspection</a></span>
                                <span><a href="service_view.php?service=Buiding Automation System">Building Automation System</a></span>
                                <span><a href="service_view.php?service=Estimating & Quantity Surveying">Estimating & Quantity Surveying</a></span>
                                <span><a href="service_view.php?service=Construction Project Management">Construction Project Management</a></span>
                                <span><a href="service_view.php?service=Building Service Engineering">Building Service Engineering</a></span>
                            </div>
                            
                              <div class="cater2">
                                <img src="#">
                                <h3>Environmental & Green</h3>
                                <span><a href="service_view.php?service=Solar Panel Installation">Solar Panel Installation</a></span>
                                <span><a href="service_view.php?service=Wind Turbine Installation & Maintenance">Wind Turbine Installation & Maintenance</a></span>
                                <span><a href="service_view.php?service=Energy Auditing & Efficiency">Energy Auditing & Efficiency</a></span>
                                                                
                            </div>
                            
                             <div class="cater2" id="transportation">
                                <img src="#">
                                <h3>Electronics & Electricals</h3>
                                <span><a href="service_view.php?service=Electronic Repair & Troubleshooting">Electronic Repair & Troubleshooting</a></span>
                                <span><a href="service_view.php?service=Electrical Installation & Maintenance">Electrical Installation & Maintenance</a></span>
                                <span><a href="service_view.php?service=Telecommunication Installation & Repair">Telecommunication Installation & Repair</a></span>
                                <span><a href="service_view.php?service=Appliance Repair">Appliance Repair</a></span>
                                 <span><a href="service_view.php?service=Instrumentation & Control System">Instrumentation & Control System</a></span>
                                
                            </div>
                            
                                 
                        </div>
                        
                        </li>
                        
                        
                        
                           <!--     Transportation     -->
                        
                        <li><div class="caterr"><h3>Transportation</h3></div>
                        <div class="cater1">
                           
                            <div class="cater2">
                                <img src="#">
                                <h3>Automotive</h3>
                                <span><a href="service_view.php?service=Automobile Repair & Maintenance">Automotive Repair & Maintenance</a></span>
                                <span><a href="service_view.php?service=Automotive Painting & Body Work">Automotive Painting & Body Work</a></span>
                                <span><a href="service_view.php?service=Automotive Detailing">Automotive Detailing</a></span>
                                 <span><a href="service_view.php?service=Automotive Part sale & Installation">Automotive Part Sale & Installation</a></span>
                             <span><a href="service_view.php?service=Automotive Customization & Modification">Automotive Customization & Modification</a></span>
                            </div>
                            
                            <div class="cater2">
                                <img src="#">
                                <h3>Aviation</h3>
                                <span><a href="service_view.php?service=Aircraft Maintenance & Repair">Aircraft Maintenance & Repair</a></span>
                                <span><a href="service_view.php?service=Avionic Installation & Maintenance">Avionic Installation & Maintenance</a></span>
                                <span><a href="service_view.php?service=Aircraft Painting & Refinishing">Aircraft Painting & Refinishing</a></span>
                                <span><a href="service_view.php?service=Aircraft Ground Handling & Operation">Aircraft Ground Handling & Operation</a></span>
                                <span><a href="service_view.php?service=Aircraft Fueling & Refueling">Aircraft Fueling & Refueling</a></span>
                            </div>
                            
                              <div class="cater2">
                                <img src="#">
                                <h3>Commercial driving & transportation</h3>
                                <span><a href="service_view.php?service=Bus Driving">Bus Driving</a></span>
                                <span><a href="service_view.php?service=Truck Driving">Truck Driving</a></span>
                                <span><a href="service_view.php?service=Taxi & Rideshare Driving">Taxi & Rideshare Driving</a></span>
                                 <span><a href="service_view.php?service=Delivery Service">Delivery Service</a></span>
                                <span><a href="service_view.php?service=Chauffeur Service">Chauffeur Service</a></span>                                 
                            </div>
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Marine</h3>
                                <span><a href="service_view.php?service=Boat Repair & Maintenance">Boat Repair & Maintenance</a></span>
                                <span><a href="service_view.php?service=Yatch Painting & Refinishing">Yatch Painting & Refinishing</a></span>
                                <span><a href="service_view.php?service=Marine Engine Repair">Marine Engine Repair</a></span>
                                <span><a href="service_view.php?service=Marine Electronics Repair & Installation">Marine Electronics Repair & Installation</a></span>
                                 <span><a href="service_view.php?service=Boat Building">Boat Building</a></span>
                                  <span><a href="service_view.php?service=Ship Building">Ship Building</a></span>
                                
                            </div>
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Motorcycle & power sport</h3>
                                <span><a href="service_view.php?service=Motorcycle Repair & Maintenance">Motorcycle Repair & Maintenance</a></span>
                                <span><a href="service_view.php?service=Power Sport Vehicle Repair & Maintenance">Power Sport Vehicle Repair & Maintenance</a></span>
                                <span><a href="service_view.php?service=Motorcycle & Power Sport Sale & Dealership Service">Motorcycle & Power Sport Sale & Dealership Service</a></span>
                                <span><a href="service_view.php?service=Off-Road Vehicle Repair & Maintenance">Off-Road Vehicle Repair & Maintenance</a></span>                     
                            </div>
                            
                             <div class="cater2">
                                <img src="#">
                                <h3>Railroad</h3>
                                <span><a href="service_view.php?service=Rairoad Operation & Maintenance">Railroad Operation & Maintenance</a></span>
                                <span><a href="Locomotive Maintenance & Repair">Locomotive Maintenance & Repair</a></span>
                                <span><a href="service_view.php?service=Railroad Track Maintenance & Construction">Railroad Track Maintenance & Construction</a></span>
                                <span><a href="service_view.php?service=Railroad Signaling & Communication">Railroad Signaling & Communication</a></span>
                                 <span><a href="service_view.php?service=Railcar Repair & Maintenance">Railcar Repair & Maintenance</a></span>
                                
                            </div>
                            
                                 
                        </div>
                        
                        </li>
                     
                     
                     
                    </ul>
                </div>
           
                   
                
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
                    <li><a href="support_us.phpg8">Support Us</a></li>
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
     


<?php

}

?>