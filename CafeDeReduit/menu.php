<?php session_start();

        if(isset($_GET['order'])){

            $orderVal=$_GET['order'];
            //echo '<script> alert("ORDER '.$order.'"); </script>';

            if($orderVal=="yes"){
                $_SESSION['order']="yes";

            }
            else if($orderVal=="no"){
                $_SESSION['order']="no";

            }
        }
/*
$xmlDoc = simplexml_load_file("DataStore\\test.xml") or die("Cannot load XML file");
foreach($xmlDoc->children() as $data){
    echo "<p> Data : ".$data->title['lang']."</p>";
}
echo "<br/>";
echo $xmlDoc->asXML();
*/
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
  		<meta name="keyword" content="">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css//bootstrap.min.css">
        <link href="css//index.css" rel="stylesheet"> <!-- Own CSS -->
        <script src="js/LoadCoffeeShopName.js"> </script>
        <script src="js//jquery-3.4.1.min.js"></script>
<!-- jquery -->
        <script> 
            function DisplayCoffee(){
                //alert("Coffee displayed");
            $.ajax({url: "displayCoffee.php" , success : function(result){
                        $("#CoffeeMenu").html(result);

                    }});
            //Ajax call to display coffee menus
            }
            
            function DisplayResto(){
                //alert("Resto displayed");

            $.ajax({url: "DisplayResto.php" , success : function(result){
                        $("#RestoMenu").html(result);

                    }});
            //Ajax call to display Resto menus
            }

            function DisplayDessert(){
                //alert("Dessert displayed");
            $.ajax({url: "DisplayDessert.php" , success : function(result){
                        $("#DessertMenu").html(result);

                    }});
            //Ajax call to display Dessert menus
            }

            $(document).ready(function(){
                $("#coffeeBtn").click(function(){
                    $('#CoffeeMenu').fadeIn();
                    $('#RestoMenu').hide();
                    $('#DessertMenu').hide();
                    DisplayCoffee();

                });

                $("#RestoBtn").click(function(){
                    $('#RestoMenu').fadeIn();
                    $('#CoffeeMenu').hide();
                    $('#DessertMenu').hide();
                    DisplayResto();

                });

                $("#DessertBtn").click(function(){
                    $('#DessertMenu').fadeIn();
                    $('#CoffeeMenu').hide();
                    $('#RestoMenu').hide();
                    DisplayDessert();

                });

            });
        </script>

<title> Our menus </title>
<style>
#foot{
    position:relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: rgb(49, 9, 9);;
    color: white;
    text-align: center;
    padding:10px;
}
</style>

</head>
<body>

<div> 
    <nav id="navBar" class="navbar navbar-expand-lg navbar-light " >
       <p style="font-size: 20pt;padding-top: 5px; " id="cafeNameDisplay"> </p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 30%;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" style="color: white;" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php" style="color: white;">View Our Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Place a reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="login.php" style="color: white;">Login</a>
                </li>            
            </ul>

          <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
          </form>
          
        </div>
      </nav>
  </div>
    <div style="text-align:center;">
    <h2 class="display-2"> Our Menu </h2>
    <p> We offer a variety of coffees, restaurant foods and desserts </p>

    <button id="coffeeBtn" style="padding-right:25%; " class="btn btn-success"> Coffee selections </button> 
    <button id="RestoBtn" style="padding-right:15%; " class="btn btn-success"> Restaurant selections </button> 
    <button id="DessertBtn" style="padding-right:25%; " class="btn btn-success"> Dessert selections </button> 
    <div id="wholeMenu" style="padding-top:25px;"> 
        <div id="CoffeeMenu" >
            
        </div>
        <div id="RestoMenu">

        </div>
        <div id="DessertMenu">

        </div>
    </div>
    </div>
<div style="padding-top:300px;"> </div>
    <div id="foot">
        &copy; Copyright <span id="cafeNameDisplayFooter">  </span>  </span><span id="currentYear"> 2020 </span>
    </div>



    <?php
        if(isset($_GET['type'])){

        $menuType=$_GET['type'];
            if($menuType=="coffee"){
                //echo "<script> alert('Coffee');</script>";
                echo "<script>  DisplayCoffee(); </script>";
            } else if($menuType=="resto"){
                //echo "<script> alert('Resto');</script>";
                echo "<script> DisplayResto(); </script>";
            }
            else if($menuType=="dessert"){
                //echo "<script> alert('Dessert');</script>";
                echo "<script> DisplayDessert(); </script>";
            }
        }


    ?>


</body>
</html>