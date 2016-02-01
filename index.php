<?php


defined('_JEXEC') or die;

$p1 = $this->countModules("position-1");
$p2 = $this->countModules("position-2");
$p3 = $this->countModules("position-3");
$p4 = $this->countModules("position-4");
$p5 = $this->countModules("position-5");
$p6 = $this->countModules("position-6");


$position = array ( $p1, $p2, $p3, $p4, $p5, $p6);

for ( $x = 0; $x < 6; $x++ ) {
  if ($position[$x] > 0) { $position[$x] = 1; } else { $position[$x] = 0; }
}

$row1  = $position[0] + $position[1] +  $position[2] ;
$row2  = $position[3] + $position[4] +  $position[5] ;

?>
<!DOCTYPE html>
<html class="no-js" lang="<?php echo $this->language; ?>">
	<head>
		 <jdoc:include type="head" />
		 <style>
		 	.wrapper {
		 		
		 	}
		 	.row {
		 		width: 1000px;
		 		background-color: #ccc;
		 		margin: 0 auto;
		 		overflow: auto;

		 	}
		 	.col {
		 		float: left;
		 		padding: 0px 15px;
		 		box-sizing: border-box;
		 	}
		 	.moduletable {
		 		background-color: lime;
		 	}
		 	.w-100 {
		 		width: 100%;
		 	}
		 	.w-50 {
		 		width: 50%;
		 	}
		 	.w-25 {
		 		width: 25%;
		 	}
		 </style>
	</head>
	<body>
		 <div class="wrapper">
		 	<div class="row">
		 	<h1>Positions on row 1: <?php echo $row1 ;?></h1>
				<?php if($p1) : ?>
				<div class="col w-<?php if($row1 == 3) {echo '50';}  elseif($row1 == 2) {echo '50';} else {echo'100';} ;?>">
					<jdoc:include type="modules" name="position-1" style="xhtml" />
					<p>width: <?php if($row1 == 3) {echo '50';}  elseif($row1 == 2) {echo '50';} else {echo'100';} ;?>%</p>
				</div>
	    		<?php endif; ?>
				<?php if($p2) : ?>
				<div class="col w-<?php if($row1 == 3) {echo '25';}  elseif($row1 == 2) {echo '50';} else {echo'100';} ;?>">
					<jdoc:include type="modules" name="position-2" style="xhtml" />
					<p>width: <?php if($row1 == 3) {echo '25';}  elseif($row1 == 2) {echo '50';} else {echo'100';} ;?>%</p>
				</div>
	    		<?php endif; ?>
				<?php if($p3) : ?>
				<div class="col w-<?php if($row1 == 3) {echo '25';}  elseif($row1 == 2) {echo '50';} else {echo'100';} ;?>">
					<jdoc:include type="modules" name="position-3" style="xhtml" />
					<p>width: <?php if($row1 == 3) {echo '25';}  elseif($row1 == 2) {echo '50';} else {echo'100';} ;?>%</p>

				</div>
	    		<?php endif; ?>
		 	</div>
		 	<div class="row">
		 		<h1>Positions on row 2: <?php echo $row2 ;?></h1>
				<?php if($p4) : ?>
				<div class="col" style="width:<?php echo 100/$row2;?>%;">
					<jdoc:include type="modules" name="position-4" style="xhtml" />
					<p>width: <?php echo 100/$row2;?>%</p>
				</div>
	    		<?php endif; ?>
				<?php if($p5) : ?>
				<div class="col" style="width:<?php echo 100/$row2;?>%;">
					<jdoc:include type="modules" name="position-5" style="xhtml" />
					<p>width: <?php echo 100/$row2;?>%</p>
				</div>
	    		<?php endif; ?>
				<?php if($p6) : ?>
				<div class="col" style="width:<?php echo 100/$row2;?>%;">
					<jdoc:include type="modules" name="position-6" style="xhtml" />
					<p>width: <?php echo 100/$row2;?>%</p>
				</div>
	    		<?php endif; ?>
		 	</div>
    	</div>
		
	</body>
</html>
