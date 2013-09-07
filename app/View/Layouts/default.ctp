<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		関くん家まで956km
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
			<a id="site-desc" href="http://cycling-now.sakura.ne.jp/description/">What is this ?</a>
			<h1>
				<a href="http://cycling-now.sakura.ne.jp/">
				<?php
					echo $this->Html->image(
						 'cycling-now-log'
						 , array(
							  'id'	=>	'log-img'
							, 'alt'	=>	'関くん家まで956km'
						 )
					 );
				?>
				</a>
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
