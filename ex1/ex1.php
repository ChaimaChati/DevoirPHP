//Chati chaima
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TPs</title>

    <style type="text/css">
    	img {width: 200px;
    	height: 200px; 
    	margin-right: 30px;}
    	.title{
    		align-content: center;
    	}
    	
    </style>
</head>
<body>

    
        <center><h1 class="title">Fourniture World</h1><center>
        	<?php
		$images[0] = 'product1.jpg';
		$images[1] = 'product2.jpg';
		$images[2] = 'product3.jpg';
		$images[3] = 'product4.jpg';
		$images[4] = 'product5.jpg';
		$images[5] = 'product6.jpg';

		shuffle($images);
		echo '<center>';
		for($i=0;$i<3;$i++){
		    echo '<img src="'.$images[$i].'">';
		}
    ?>
        
    

</body>
</html>
