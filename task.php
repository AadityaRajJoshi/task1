<!DOCTYPE html>
<html>
<head>
	<title>task1</title>
</head>
<body>
	<?php
  $items = array( 'bike', 'car', 'bicycle', 'sccoty', 'dasdsa' );

	$len = count($items);

  ?>

<div class="wrapper">
	<?php for($x=0; $x<$len; $x=$x+2){ ?>
	<div class="items">
		<div class="single-item"><?php echo $items[$x]?></div>
		
			<?php if (isset($items[$x+1])){?>
				<div class="single-item">
				<?php echo $items[$x+1]; ?>
				</div>
			<?php }?>
	</div> <br> <?php }?>	
  </div>

	
</body>
        
      
</html>