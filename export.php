<?php
session_start();
$user=$_SESSION['user'];
include 'app.php';

$app->predict($user,$app->BEagg($user));

$m = exec('python predict.py',$o,$a);
echo $m;
$n = 100 - $m;

$dataPoints = array( 
	array("label"=>"Yes", "y"=>$m),
	array("label"=>"No", "y"=>$n)
)
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Prediction in Pie Chart"
	},
	subtitles: [{
		text: "Chances of Placed"
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>    