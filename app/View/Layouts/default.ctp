<?php
$cakeDescription = __d('cake_dev', '日本縦断 冒険');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
	</title>
	<meta name="description" content="ママチャリで日本を約半分縦断しています。道中撮影したものなど冒険の記録をツイッターと連携してGoogleMapに更新しています。">
	<meta name="keywords" content="日本縦断,冒険,ママチャリ">
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
		<div id="amazon-affiliate">
			<?php echo $this->element('amazon_affiliate'); ?>
		</div>
		<div id="container">
			<h1>
				日本半分縦断中
			</h1>
			<div id="sns-button">
				<?php echo $this->element('facebook_good'); ?>
				<?php echo $this->element('twitter_tweet'); ?>
			</div>
			<?php echo $content_for_layout; ?>
		</div>
		<div id="footer">
		</div>
	</div>
</body>
</html>
