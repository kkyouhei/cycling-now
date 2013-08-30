<?php
	echo $this->Html->css('contents');
?>
<div id="main">
	<?php foreach($tweets as $tweet){ ?>
		<div class="tweet">
			<div class="tweet-head">
				<p>
					<?php echo $tweet['time']; ?>
				</p>
			</div>
			<div class="tweet-text">
				<p>
					<?php echo $tweet['tweet']; ?>
				</p>
			</div>
			<?php if(!empty($tweet['imgUrl'])){
				echo $this->Html->image(
					$tweet['imgUrl']	,
					array(
						'class'	=>	'tweet-img'
					)
				);
			} ?>
		</div>
	<?php } ?>
</div>
