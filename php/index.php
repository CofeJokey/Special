<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Main menu</title>
		<link rel="stylesheet" href="../CSS/style.css">
	</head>

	
     <?php
		require('../php/menu.php');
        echo Menu::GetMenu($_GET['page']);
    ?> 
  

 <body>

	<?php
     require('../php/content.php');
        echo Content::GetContent($_GET['page']);
    ?>
	
 </body>

</html>