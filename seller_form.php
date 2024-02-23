<?php
session_start();

if(isset($_SESSION['unique_id'])&& $_SESSION['fname'])
{  ?>

<?php

        include_once "db.php";

        $sql = mysqli_query($con, "SELECT * FROM user WHERE unique_id = {$_SESSION['unique_id']}");

        if(mysqli_num_rows($sql) > 0){

            $row = mysqli_fetch_assoc($sql);

        }
        if($row['user']==='Seller'){
            header('Location: seller/dashboard.php');

        exit();
        }
        else{

    ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width,height='+window.innerHeight+', initial-scale=1.0, maximum-scale=1, user-scalable=0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Skilful|New Shop</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    
    
    <script>
        var skills = Object();

skills['Construction'] = "Carpentry|Electrical work|Flooring|Glass & Glazing|HVAC(Heating, Ventilation & Air Conditioning)|Insulation & Dry Wall|Mansonry & Concrete|Painting & Decorating|Plumbing & Pipefitting|Roofing|Scaffolding";

skills['Digital'] = "Cyber Security|Data Science & Analytics|Digital Marketing|E-commerce & online business|Graphic design & multimedia|IT support & networking|Software development|Web development & design";

skills['Mechanical'] = "Automotive & Vehicle maintenance |Elevator & Lift|Hydraulics & Pneumatics|Industrial machinery & equipment maintenance|Refrigerator & cooling system|Welding & Tooling";

skills['Personal-Service'] = "Cleaning & Janitory|Culinary & Food service|Event & Entertainment service|Fashion & Clothing|Fitness & Personal training|Hospitality & Tourism trade|Image consulting & styling|Landscaping & Gardening|Life coaching & counseling|Personal Care & Beauty|Personal Chef & meal preparation|Pet care & grooming|Repair & maintenance";

skills['Technical'] = "Computer & IT|Construction & Building|Environmental & Green|Electronics & Electrical";

skills['Transportation'] = "Automative|Aviation e|Commercial driving & transportation|Marine trade|Motorcycle & Power sports|Railroad trade";


////    CONSTRUCTION     //////

var services = Object();

services['Carpentry'] = "Furniture making|Carbinet making|Wood making|Rough Carpentry|Finish Carpentry";

services['Electrical work'] = "Electrical Installation|Wiring and Circuiting|Lightning System|Power distribution|Electrical maintenance & repair";

services['Flooring'] = "Tile Installation|Hardwood flooring installation|Laminate & Vinyl flooring Installation|Carpet Installation";

services['Glass & Glazing'] = "Glass Installation|Window Installation|Glass repair & replacement";

services['HVAC(Heating, Ventilation & Air Conditioning)'] = "Ductwork Installation|HVAC system installation|HVAC maintenance & repair|Air Conditioning installation";

services['Insulation & Dry wall'] = "Insulation Installation|Drywall Installation & finishing";

services['Mansonry & Concrete'] = "Bricklaying|Blocklaying|Stonemasonry|Concrete Work|Cement mansory|Tiles Setting";

services['Painting & Decorating'] = "Interior and Exterior painting|Wallpaper Installation|Surface preparation and finishing|Decorative finishes";

services['Plumbing & Pipefitting'] = "Plumbing Installation|Pipefitting|Pipe welding|Sprinkler system installation|Drainage system";

services['Roofing'] = "Roof installation|Roof repairs & maintenance|Roofing material";

services['Scaffolding'] = "Scaffold assembly & dismantling|Scaffold safety & maintenance";


////    DIGITAL    ////

services['Cyber Security'] = "Incident response|Network security|Security engineering|Threat analysis|Vulnerability assessment";

services['Data science & analytics'] = "Big data management|Data analysis & interpretation|Data visualization|Machine learning & Artificial intelligence|Predictive modelling";

services['Software Development'] = "Application development|Database development & administration|DevOps(Development & Operation)|Quality assurance & testing|Software engineering";

services['Digital Marketing'] = "Analytics & data analysis|Content marketing|Email marketing|Pay per click advertising|Search Engine Optimization (SEO)|Social media marketing";

services['Web development & design'] = "Backend web development|Frontend web development|Full stackweb development|Responsive web design|User Experience(UX) design|User Interface (UI) design";

services['E-commerce & Online business'] = "Digital payment system|E-commerce website development|Inventory management|Online marketing & sales|Online store management";

services['Graphic design & multimedia'] = "Branding & Logo design|Graphic design|Illustration & digital art|Motion graphics & animations|Video editing & Production";

services['IT support & Networking'] = "Cloud computing |Help desk support|IT security|Network administration|System administration";


////    Mechanical     ////

services['Automotive & Vehicle maintenance'] = "Automobile repair & maintenance|Diesel engine repair|Auto body repair|Motorcycle repair|Small engine repair|Heavy equipment maintenance & repair";
services['Elevator & Lift'] = "Elevator installation|Elevator maintenance & repair|Lift installation & maintenance";
services['Hydraulics & Pneumatics'] = "Hydraulic system installation & maintenance|Pneumatic system installation & maintenance|Fluid power system";
services['Industrial machinery & equipment maintenance'] = "Equipment maintenance|Maintenance & repair of industrial machinery|Preventive maintenance planning & implementation";
services['Refrigeration & cooling system'] = "Refrigerator system installation & maintenance|Cooling system maintainance & repair|Commercial & industrial refrigeration";
services['Welding & Tooling'] = ">CNC (Computer Numerical Control) machining|Manual machining|Tool & Die making|Precision machining";


////    Personal-Service     ////

services['Cleaning & Janitory'] = "Residencial cleaning services|Commercial cleaning service|Janitory service|Carpet & Upholstery cleaning";
services['Culinary & Food service'] = "Culinary arts & cooking|Baking & pastry art|Catering service|Food & beverage management|Restaurant & hospitality management";
services['Event & Entertainment service'] = "Event planning & coordination|Wedding planning|DJ service|Event production & lightning|Party rental service|Corporate event planning|Special event planning|MC service";
services['Fashion & Clothing'] = "Tailoring|Seamstress|Fashion stylist|Cobbler|Shoe making";
services['Fitness & Personal training'] = "Personal training|Yoga instruction|Pilates instruction|Group fitness instruction|Wellness coaching|Dance instruction";
services['Hospitality & Tourism'] = "Hotel management|Event planning & management|Travel agency service|Resort & spa managements|Tour guilding";
services['Image consulting & styling'] = "Personal styling|Wardrope consulting|Fashion & image consulting|Personal shopping|Color Analysis";
services['Landscaping & Gardening'] = "Landscape design & maintenance|Lawn care & maintenance|Gardening & horticulture|Tree care & arboriculture|Irrigation system installation & maintenance";
services['Life coaching & counseling'] = "Life coaching|Career coaching|Relationship counseling|Mental health counseling|Wellness counseling";
services['Personal Care & Beauty'] = "Hairdressing & styling|Cosmetology & aesthetics|Nail technician|Massage therapy|Barbering|Nail care pedicure & manicure|Makeup Artistry";
services['Personal Chef & meal preparation'] = "Personal chef service|Meal preparation & planning|Special dietary needs|Private cooking lesson|Catering for small events|Catering for small events";
services['Pet care & grooming'] = "Pet grooming|Dog walking|Pet sitting|Animal training & behavior consulting|Pet boarding & daycare service|Pet photography";
services['Repair & maintenance'] = "Appliance repair|Home repair & handyman service|Locksmith service|Pool & spa maintenance|Furniture repair & restoration";
services['Spa & Wellness'] = "Massage therapy|Spa treatment|Bodywork & alternatives therapy|Reflexology|Wellness coaching";




////    Technical     ////

services['Computer & IT'] = "Computer hardware repair & maintenance|Software development & programming|Network administration & security";
services['Construction & Building'] = "Building inspection|Building automation system|Estimating & quantity surveying|Construction project management|Building service engineering";
services['Environmental & Green'] = "Solar panel installation|Wind turbine installation & maintenance|Energy auditing & efficiency";
services['Electronics & Electrical'] = "Electronic repair & troubleshooting|Electrical installation & maintenance|Telecommunication installation & repair|Appliance repair|Instrumentation & control system";




////    Transportation     ////

services['Automative'] = "Automotive repair & maintenance|Automotive painting & body work|Automotive detailing|Automotive part sale & installation|Automotive customization & modification";
services['Aviation'] = "Aircraft maintenance & repair|Avionic installation & maintenance|Aircraft painting & refinishing|Aircraft groumd handling & operation|Aircraft fueling & refueling";
services['Commercial driving & Transportation'] = "Bus driving|Truck driving|Taxi & rideshare driving|Delivery service|Chauffeur service";
services['Marine'] = "Boat repair & maintenance|Yatch painting & refinishing|Marine engine repair|Marine electronics repair & installation|Boat building|Ship building";
services['Motorcycle & Powersports'] = "Motorcycle repair & maintenance|Power sport vehicle repair & maintenance|Motorcycle & power sport sale & dealership service|Off-road vehicle repair & maintenance";
services['Railroad'] = "Railroad operation & maintenance|Locomotive maintenance & repair|Railroad track maintenance & construction|Railroad signaling & communication|Railcar repair & maintenance";




function setCategory()

{

	for (category in skills)

		document.write('<option value="' + category + '">' + category + '</option>');

}







function set_category(oCategorySel, oSkillSel, oServiceSel)

{

	var skillArr;

	oSkillSel.length = 0;

	oServiceSel.length = 0;

	var category = oCategorySel.options[oCategorySel.selectedIndex].text;

	if (skills[category])

	{

		oSkillSel.disabled = false;

		oServiceSel.disabled = true;

		oSkillSel.options[0] = new Option('Select Skill','-');

		skillArr = skills[category].split('|');

		for (var i = 0; i < skillArr.length; i++)

			oSkillSel.options[i + 1] = new Option(skillArr[i], skillArr[i]);

	}



	else oSkillSel.disabled = true;

}



function set_service(oSkillSel, oServiceSel)

{

	var serviceArr;

	oServiceSel.length = 0;

	var skill = oSkillSel.options[oSkillSel.selectedIndex].text;

	if (services[skill])

	{

		oServiceSel.disabled = false;

		oServiceSel.options[0] = new Option('Select Service','-');

		serviceArr = services[skill].split('|');

		for (var i = 0; i < serviceArr.length; i++)

			oServiceSel.options[i+1] = new Option(serviceArr[i],serviceArr[i]);

		//document.getElementById('krocr').innerHTML = skill;

	}

	else oServiceSel.disabled = true;

}



function non_service(oSkillSel, oServiceSel)

{

	var skill = oSkillSel.options[oSkillSel.selectedIndex].text;

	var service= oServiceSel.options[oServiceSel.selectedIndex].text;

	if (service&& services[skill].indexOf(service) != -1) {

		//document.getElementById('krocr').innerHTML = service+ ', ' + skill; 

		//document.getElementById('krocr1').innerHTML = service+ ', ' + skill;

		var input = document.getElementById('made');

		//input.value = "Text Value";

	}

	else {//document.getElementById('krocr').innerHTML = skill;

}

}


    </script>
    <script src="location1.js"></script>
    
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
                 margin-top:2vh;
                 color:#3c6e71;
            }
            .container .intro {
                font-weight:300;
                font-size:x-small;
                color:rgba(35,35,35,0.8);
            }
            .form-input{
                padding:2vh;
                width:100%;
                display:flex;
                flex-direction:column;
            }
            .preview {
                width:100%;
                min-height:10vh;
                font-size:small;
                display:flex;
                flex-direction:column;
            }
            
            .shopinfo {
                width:100%;
                margin-top:-3vh;
                padding:2vh;
            }
           
            .shopinfo h3 {
                font-family:'Courier New', Courier, monospace;
                 color:#3c6e71;
            }
            .shopinfo label {
                margin-top:1vh;
                width:100%;
                display:flex;
                flex-direction:column;
                font-size:smaller;
            }
            .shopinfo label div {
                margin-bottom:0.5vh;
                color:rgba(35,35,35,0.8);
            }
            .shopinfo label input, .shopinfo label select {
                padding:0.8vh;
                color:rgba(35,35,35,0.8);
                border-radius:3px;
                font-size:smaller;
            }
            textarea, select {
                outline: none;
                color:rgba(35,35,35,0.8);
                border:1px solid lightgray;
                font-size:smaller;
                border-radius:3px;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
            select {
                background-color:white;
            }
           textarea {
                min-height:10vh;
                font-size:x-small;
                white-space: pre-line;
            }
            .shopinfo button {
                width:100%;
                padding:1vh;
                font-size:small;
                color:white;
                border:none;
                background-color:#3c6e71;
                margin:2vh 0;
            }
            .shopinfo button:hover, .shopinfo button:active {
                background-color:#353535;
            }
           .hide {
               display:none;
           }
           .error {
               width:100%;
               background-color:pink;
               padding:1vh 2vh;
               color:rgba(35,35,35,0.7);
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
                 margin-top:5vh;
                 font-size:x-large;
                 color:#3c6e71;
            }
            .container .intro {
                font-weight:300;
                font-size:medium;
                color:rgba(35,35,35,0.8);
            }
            .form-input{
                padding:2vh;
                padding-top:4vh;
                width:60%;
                display:flex;
                flex-direction:column;
            }
            .preview {
                width:100%;
                min-height:10vh;
                font-size:medium;
                display:flex;
                flex-direction:column;
            }
            
            .shopinfo {
                width:100%;
                margin-top:-3vh;
                padding:2vh;
            }
           
            .shopinfo h3 {
                font-family:'Courier New', Courier, monospace;
                 color:#3c6e71;
            }
            .shopinfo label {
                margin-top:2vh;
                width:100%;
                display:flex;
                flex-direction:column;
                font-size:medium;
            }
            .shopinfo label div {
                margin-bottom:0.5vh;
                color:rgba(35,35,35,0.8);
            }
            .shopinfo label input, .shopinfo label select {
                padding:1vh;
                color:rgba(35,35,35,0.8);
                border-radius:3px;
                font-size:medium;
            }
            textarea, select {
                outline: none;
                color:rgba(35,35,35,0.8);
                border:1px solid lightgray;
                font-size:snaller;
                border-radius:3px;
                }
                textarea {
                    white-space: pre-line;
                height:20vh;
                }
            select {
                background-color:white;
            }
           textarea {
                min-height:10vh;
                font-size:medium;
            }
            .shopinfo button {
                width:100%;
                padding:1.5vh;
                font-size:medium;
                color:white;
                background-color:#3c6e71;
                margin:4vh 0 2vh 0;
            }
           .hide {
               display:none;
           }
           .error {
               width:100%;
               background-color:pink;
               padding:1vh 2vh;
               color:rgba(35,35,35,0.7);
           }
        }
  
            </style>
            
            <script>
                const userpic = document.getElementById('userpic'),
                useric = document.getElementById('user-pic');
                
                
                userpic.onchange = evt => {
  const [file] = userpic.files
  if (file) {
    useric.src = URL.createObjectURL(file)
  }
}



const shoppic = document.getElementById('shoppic'),
                shopic = document.getElementById('shop-pic');
                
                
                shoppic.onchange = evt => {
  const [file] = shoppic.files
  if (file) {
    shopic.src = URL.createObjectURL(file)
  }
}
            </script>
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery.js">\x3C/script>');
    </script>

</head>
<body>
<!--

        include_once "db.php";

        $sql = mysqli_query($con, "SELECT * FROM user WHERE unique_id = {$_SESSION['unique_id']}");

        if(mysqli_num_rows($sql) > 0){

            $row = mysqli_fetch_assoc($sql);

        }

    ?
    -->
 
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
                
                <h3>Become a Seller</h3>
                <p class="intro">Create a seller account and start selling your skills online</p>
                
               
 
                <form action="seller/become.php" method="post" class="form-input" enctype="multipart/form-data">
                
                 <div class="preview">
                 
                     
                     
                     
                     <div class="shopinfo">
                     
                     <!--h3>Shop Info</h3>
                     <hr-->
                     <?php if (isset($_GET["error"])) { ?>

                            <p class="error"><?php echo $_GET['error']; ?>

                                </p>



                               <?php

                                }

                                    ?>
                         <label for="shopname">
                            <div>Shop Name</div>
                            <input type="text" name="shopname" id="shopname" required>
                         </label>
                         
                         <label for="category">
                            <div>Shop Category</div>
                            
                        <select onchange="set_category(this,skill, service)" id="category" size="1" name="category" required>

                            <option value="" selected="selected">Select Category</option>

                            <option value="">-</option>

                            <script type="text/javascript">

                            setCategory(this);

                            </script>

                            </select>
                        </label>
                        
                        <label for="skill">
                            <div>Shop Skill</div>
                            <select name="skill" id="skill" size="1" disabled="disabled" onchange="set_service(this,service)" required></select>
                            
                            </label>
                            
                            <label for="service">
                            <div>Shop Service</div>
                            <select name="service" id="service" size="1" disabled="disabled" required></select>
                            
                         </label>
                         
                         

                         <label for="country" style="margin-top:10vh;">
                            <p>Location State</p>
                        <select onchange="set_country(this,state, city)" size="1" name="country" required>

                            <option value="" selected="selected">Select the State you are located</option>

                            <option value="">-</option>

                            <script type="text/javascript">

                            setCountry(this);

                            </script>
                       <select>
                       
                         </label>
                         
                         <label for="state"><p>Local Government</p>

                            <select name="state" size="1" disabled="disabled" onchange="set_city(this,city)" required></select>

                            <select name="city" size="1" disabled="disabled" class="hide"></select>
                               
                         </label>
                         
                         <label for="Area"><p>Area</p>
                         <input type='text' id="area" name="area">
                     </label>
                         
                         <label for="shoptel" style="margin-top:10vh;">
                            <div>Shop Phone Number</div>
                            <input type="tel" name="shoptel" id="shoptel" required>
                         </label>
                         
                         <label for="shopemail">
                            <div>Shop Email</div>
                            <input type="email" name="shopemail" id="shopemail" required>
                         </label>    
                         
                         <label for="shoppic">
             
                         <div>Upload Shop Image</div>
                        <input type="file" id="shoppic" name="shoppic">
                     </label>
                         
                         <label for="shopdesc">
                            <div>Shop Description</div>
                            <textarea name="shopdesc" id="shopdesc" style="white-space: pre-line;" required></textarea>
                         </label>
                         
                         <label for="pass">
                            <div>Password</div>
                            <input type="password" name="pass" id="pass" required>
                         </label>
                         
                         
                         <button type="submit">Submit</button>
                     </div>
                     
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
        
       /* 
        function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
  }
}
*/
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>

<?php
}
}else {
    header('Location: log-in.php');
    exit();
}

              