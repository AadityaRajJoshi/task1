<!DOCTYPE html>
<html>
<head>
	<title>task1</title>
</head>
<body>
	<?php
  $items = array( 'bike', 'car', 'bicycle', 'chair', 'desk', 'mobile', 'laptop', 'anything', 'bag' );

  // foreach ($items as  $value) {
  // 	echo "$value <br>";
  // }
?>
<div class="wrapper">
	<?php foreach ($items as $key => $value) {?>
		<div class="items">
		<div class="single-item"><?php echo $value?></div>
	<?php  }?>

</div>
</body>
</html>