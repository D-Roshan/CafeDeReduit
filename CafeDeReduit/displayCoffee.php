<?php session_start();


?>
<html>
<head>

</head>
<body>
</body>
</html>
<?php 

$xmlDoc = simplexml_load_file("DataStore\\cof.xml") or die("Cannot load Files");

echo '<div class="listings card-columns">';
foreach($xmlDoc->children() as $data){


if(isset($_SESSION['order'])){
    

if(($_SESSION['order'])=="yes"){
echo '
<div class="card mv2">
                <img src="medias//coffee//'.$data->img.'" alt="coffee img id'.$data['id'].' width="1000px" height="200px"">
                <div class="card-body">
                    <h5 class="card-title">'.$data->name.'</h5>
                    <p class="card-text"> '.$data->description.'
                    </p>
                    <p class="card-text"> Price: Rs'.$data->price.' <span class="text-muted"> VAT Inc </span> </p>
                    <a href="#" class="btn btn-primary">Order</a>
                    
                </div>
                
            </div>
';

}

}else{
   
    echo '
    <div class="card mv2">
                    <img src="medias//coffee//'.$data->img.'" alt="coffee img id'.$data['id'].' width="1000px" height="200px"">
                    <div class="card-body">
                        <h5 class="card-title">'.$data->name.'</h5>
                        <p class="card-text"> '.$data->description.'
                        </p>
                        <p class="card-text"> Price: Rs '.$data->price.' <span class="text-muted"> VAT Inc </span> </p>
                        
                        
                    </div>
                    
                </div>
    ';

}


}

echo "</div>";
?>