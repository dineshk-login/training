
<html>
<head>	
	<title>Homepage</title>
	<script type="text/javascript">
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('number').value = value;
    }
}
function decrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number').value = value;
    }

}
</script>

</head>

<body>



	
		
	
	<?php 
	require_once("shopcartdatabase.php");
$result = mysqli_query($mysqli, "SELECT * FROM products ORDER BY id ASC"); 
	$i = 0;
	while($res = mysqli_fetch_assoc($result)) { 		
 //echo $i;
 	$i = $i+1;
 	$cls = "";
 	if($i%3 == 0)
 	{ 
 		$cls = "style='border: 10px  ; clear: both;  float: left; width: 200px '";
    }
 	else
 	{
 		$cls = "style='border: 10px; float: left; width: 200px'";
 	}
	?>

	    <div <?= $cls; ?> >
		<div>Productname:<?php echo $res['productname']; ?></div>
		<div>image:<img src="<?php echo $res['productimage']; ?>"> </div>
		<div>Brand:<?php echo $res['brand']; ?></div>
		<div>Price:<?php echo $res['price']; ?></div>
		<div>Availability:<?php echo $res['stockavailability']; ?></div>
		<div class="container">
<input type="button" onclick="decrementValue()" value="-" />
<input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="number" />
<input type="button" onclick="incrementValue()" value="+" />
</div>

		
	</div>
	<?php

}
	?>
	
</body>
</html>
