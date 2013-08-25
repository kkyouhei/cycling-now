<?php
	echo $this->Html->css('contents');
	echo $this->Html->script('switch-image', array('inline'=>false));
?>
<div id="main">
<?php
	echo $this->Html->image(
			$uploadNewest['Upload']['path']		,
			array(
				'alt'	=>	$uploadNewest['Upload']['path']		,
				'id'	=>	'main-image'						,
				'title'	=>	$uploadNewest['Upload']['comment']
			)
		);
?>
</div>
<div id="sub">
	<ul>
		<?php
			foreach($uploadImages as $image){
		?>
		<li>
			<?php
				echo $this->Html->image(
					$image['Upload']['path']	,
					array(
						'class'	=>	'sub-image'					,
						'alt'	=>	$image['Upload']['type']	,
						'title'	=>	$image['Upload']['comment']
					)
				);
			?>
		</li>
		<?php
			}
		?>
	</ul>
</div>
