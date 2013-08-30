<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->script('jquery-1.10.2.min.js', array('inline' => true));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<h1>
			日本列島縦断中
		</h1>
		<div id="header">
			<div id="header-menu">
				<div class="menu">
					<a href="http://192.168.11.8/cycling-now">つぶやき</a>	
				</div>
				<div class="menu">
					<a href="http://192.168.11.8/cycling-now/gallery">しゃしん</a>	
				</div>
				<div class="menu">
					<a href="http://192.168.11.8/cycling-now/map">いまここ</a>	
				</div>
			</div>
		</div>
		<?php echo $content_for_layout; ?>
	</div>
</body>
</html>
