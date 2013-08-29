<?php
	echo $this->Html->css('gallery');
	echo $this->Html->script('switch-image', array('inline'=>false));
?>
<div id="main">
<?php
	echo $this->Html->image(
			$uploadNewest[0]		,
			array(
				'id'	=>	'main-image'
			)
		);
?>
</div>
<div id="sub">
	<ul>
		<?php
			foreach($uploadNewest as $image){
		?>
		<li>
			<?php
				echo $this->Html->image(
					$image	,
					array(
						'class'	=>	'sub-image'	
					)
				);
			?>
		</li>
		<?php
			}
		?>
	</ul>
</div>
