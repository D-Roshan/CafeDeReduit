<?php session_start();


?>
<html>
<head>

</head>
<body>
  
</body>
</html> 
<?php 
$xmlDoc = simplexml_load_file("DataStore\\dessert.xml") or die("Cannot load Restaurant Files");

echo '<div class="listings card-columns">';
foreach($xmlDoc->children() as $data){

if(isset($_SESSION['order'])){

if(($_SESSION['order'])=="yes"){
echo '
<div class="card mv2">
                <img src="medias//dessert//'.$data->image.'" alt="dessert"  width="300px" height="150px">
                <div class="card-body">
                    <h5 class="card-title">'.$data->name.'</h5>
                    <p class="card-text"> '.$data->description.'
                    </p>
                    <p class="card-text"> Price: Rs'.$data->price.' <span class="text-muted"> VAT Inc </span> </p>
                    <a href="#" class="btn btn-primary">Order</a>
                        
                    </div>

                    ';
                    if($data->type=="veg"){
                        echo "<img src='medias//veg.png' width='50px' height='50px' alt='Veg Option'/> ";
                    }
                    
                echo '</div>
    ';

    
}

}
else{

    echo '
    <div class="card mv2">
                    <img src="medias//dessert//'.$data->image.'" alt="resto"  width="300px" height="150px">
                    <div class="card-body">
                        <h5 class="card-title">'.$data->name.'</h5>
                        <p class="card-text"> '.$data->description.'
                        </p>
                        <p class="card-text"> Price: Rs'.$data->price.' <span class="text-muted"> VAT Inc </span> </p>
                        
                        
                    </div>

                    ';
                    if($data->type=="veg"){
                        echo "<img src='medias//veg.png' width='50px' height='50px' alt='Veg Option'/>";
                    }
                    
                echo '</div>
    ';

    
}

}

echo "</div>";


?>