<div class="component_link seta-direita" style="color: <?php echo ( get_post_meta( get_the_ID(), 'linkColor_vitrine_0'. $comp, true ) ); ?> !important;">
	<?php
		$linkTarget = ( get_post_meta( get_the_ID(), 'linkTarget_vitrine_0'. $comp, true ) );
		if ( $linkTarget == 'on' ) { $target = "_blank"; } else {  $target = "_self"; };
	?>
	<a style="color: <?php echo ( get_post_meta( get_the_ID(), 'linkColor_vitrine_0'. $comp, true ) ); ?> !important;" 
	target="<?php echo $target; ?>" 
	href="<?php echo ( get_post_meta( get_the_ID(), 'linkUrl_vitrine_0'. $comp, true ) ); ?>
	">
		<?php echo ( get_post_meta( get_the_ID(), 'linkText_vitrine_0'. $comp, true ) ); ?>
	</a>
</div>