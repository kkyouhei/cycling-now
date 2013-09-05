<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		日本横断中
	</title>
	<meta name="description" content="ママチャリで日本を約半分横断しています。道中撮影したものなど冒険の記録をツイッターと連携してGoogleMapに更新しています。">
	<meta name="keywords" content="日本横断,冒険,ママチャリ">
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
	<div id="wrapper">
		<div id="container">
			<h1>
				日本半分横断中
			</h1>
			<div id="sns-button">
				<?php echo $this->element('facebook_good'); ?>
				<?php echo $this->element('twitter_tweet'); ?>
			</div>
			<?php echo $content_for_layout; ?>
		</div>
	</div>
</body>
</html>
