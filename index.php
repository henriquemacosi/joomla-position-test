<?php


defined('_JEXEC') or die;

$p1 = $this->countModules("position-1");
$p2 = $this->countModules("position-2");
$p3 = $this->countModules("position-3");
$p4 = $this->countModules("position-4");



$position = array ( $p1, $p2, $p3, $p4 );

for ( $x = 0; $x <4; $x++ ) {
  if ($position[$x] > 0) { $position[$x] = 1; } else { $position[$x] = 0; }
}

$row1  = $position[0] + $position[1] +  $position[2] + $position[3] ;

function countColumns($this) {

switch ($this):
    case 3:
        echo "4";
        break;
    case 2:
        echo "6";
        break;
    case 1:
        echo "12";
        break;
    default:
        echo "12";
endswitch;
}

$colsPosition1 = $this->params->get('cols_position_1');
$colsPosition2 = $this->params->get('cols_position_2');
$colsPosition3 = $this->params->get('cols_position_3');
$colsPosition4 = $this->params->get('cols_position_4');

?>

<!DOCTYPE html>
<html class="no-js" lang="<?php echo $this->language; ?>">
	<head>
		 <jdoc:include type="head" />
		 <style>
		 .wrapper {
		 	width: 80%;
		 	margin: 0 auto;
		 }
		 	.moduletable {
		 		background-color: lime;
		 	}
		 	
		 </style>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		 <div class="wrapper">
		 	<div class="row">
		 		<p>Positions on row-1: <?php echo $row1 ;?></p>
		 		<p>Modules on row-1: <?php echo ($p1 + $p2 + $p3+ $p4);?></p>
				<?php if($p1) : ?>
				<div class="col-md-<?php if($row1 == 4){echo $colsPosition1 ;} else countColumns($row1);?>">
					<jdoc:include type="modules" name="position-1" style="xhtml" />
					<p>col-md-<?php if($row1 == 4){echo $colsPosition1 ;} else countColumns($row1);?></p>
				</div>
	    		<?php endif; ?>
				
				<?php if($p2) : ?>
				<div class="col-md-<?php if($row1 == 4){echo $colsPosition2 ;} else countColumns($row1);?>">
					<jdoc:include type="modules" name="position-2" style="xhtml" />
					<p>col-md-<?php if($row1 == 4){echo $colsPosition2 ;} else countColumns($row1);?></p>
				</div>
	    		<?php endif; ?>
				<?php if($p3) : ?>
				<div class="col-md-<?php if($row1 == 4){echo $colsPosition3 ;} else countColumns($row1);?>">
					<jdoc:include type="modules" name="position-3" style="xhtml" />
					<p>col-md-<?php if($row1 == 4){echo $colsPosition3 ;} else countColumns($row1);?></p>
				</div>
	    		<?php endif; ?>
				<?php if($p4) : ?>
				<div class="col-md-<?php if($row1 == 4){echo $colsPosition4 ;} else countColumns($row1);?>">
					<jdoc:include type="modules" name="position-4" style="xhtml" />
					<p>col-md-<?php if($row1 == 4){echo $colsPosition4 ;} else countColumns($row1);?></p>
				</div>
	    		<?php endif; ?>
		 	</div>

		 	
    	</div>
		
	</body>
</html>
