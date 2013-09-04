<script type="text/javascript"
		src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCN4-dyVGa4ji1ZBsmKD1o5eZRJDcu5Wvw&sensor=false">
</script>	
<script type="text/javascript">
	var markers = <?php echo $locations ?>
</script>
<?php
	echo $this->Html->charset();
	echo $this->Html->script('jquery-1.10.2.min.js', array('inline' => true));
	echo $this->Html->script('contents', array('inline' => true));
	echo $this->Html->css('contents');
?>

<body onload="initialize()">
	<div id="marker-explanation">
		<p>
			<?php 
				echo $this->Html->image(
					 'marker-red'
					 , array(
						   'class'=>'marker-img'
						 , 'alt'=>'GoogleMapMarkerの説明'
					 )
				 );
			?>
			画像付き位置情報
			<?php 
				echo $this->Html->image(
					 'marker-blue'
					 , array(
						   'class'=>'marker-img'
						 , 'alt'=>'GoogleMapMarkerの説明'
					 )
				 );
			?>
			コメントのみ位置情報
		</p>
	</div>
	<div id="map"></div>
</body>
