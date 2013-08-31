<?php
	echo $this->Html->css('gallery');
?>
<div id="imgs">
	<ul id="img-list">
		<?php
			foreach($uploadNewest as $image){
		?>
		<li>
			<a href="<?php echo $image ?>" calss="sub-image">
			<?php
				echo $this->Html->image(
					$image	,
					array(
						'class'	=>	'sub-image'	
					)
				);
			?>
			</a>
		</li>
		<?php
			}
		?>
	</ul>
</div>
