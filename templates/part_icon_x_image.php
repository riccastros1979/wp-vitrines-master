<?php 
	$iconType =  get_post_meta( get_the_ID(), 'imageType_vitrine_0'. $comp, true ); 
	//echo $iconType;
	if ($iconType == 1) {
	?>
	<span class="component_icon" style="color: <?php echo esc_html( get_post_meta( get_the_ID(), 'iconColor_vitrine_0'. $comp, true ) ); ?>">
		<i class="fas <?php echo esc_html( get_post_meta( get_the_ID(), 'icon_vitrine_0'. $comp, true ) ); ?>"></i>
	</span>
	<?php
	} else {
		$iconURL = (get_post_meta( get_the_ID(), 'imageURL_vitrine_0'. $comp, true ) ); 
	?>
	<span class="component_icon icoimage">
		<img class="boxIcon" src="<?php echo $iconURL; ?>" alt="<?php echo ( get_post_meta( get_the_ID(), 'title_vitrine_0'. $comp, true ) ); ?>" title="<?php echo ( get_post_meta( get_the_ID(), 'title_vitrine_0'. $comp, true ) ); ?>">
	</span>
	<?php
	};
?>