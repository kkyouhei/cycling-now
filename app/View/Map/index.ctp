<!DOCTYPE html>
<script type="text/javascript"
		src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCN4-dyVGa4ji1ZBsmKD1o5eZRJDcu5Wvw&sensor=false">
</script>	
<?php
	echo $this->Html->charset();
		echo $this->Html->script('jquery-1.10.2.min.js', array('inline' => true));
		echo $this->Html->script('map', array('inline' => true));
		echo $this->Html->css('map');
?>

<body onload="initialize()">
	<div id="map"</div>
</body>
