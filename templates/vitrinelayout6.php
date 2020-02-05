<div class="vitrine_layout boxes_6">
	<div class="image_background" style="background: #ffffff url(<?php the_post_thumbnail_url( 'vitrine_image' ); ?>) no-repeat center center;"></div>
	<div class="row"> 
		<div class="cl cl_desk_4 comp01">
			<?php 
				$order = esc_html (get_post_meta( get_the_ID(), "order1", true ) );
				$comp = substr($order, -1);
				$onOff = ( get_post_meta( get_the_ID(), 'onOff_vitrine_0'. $comp, true ) );
				if ( $onOff == 'on' ) { $visibility = "inherit"; } else {  $visibility = "hidden"; };
			?>
			<div class="component comp_left" style="visibility: <?php echo  $visibility; ?>; "> 
				<?php include ("component_content.php"); ?>	
			</div>
		</div>
		<div class="cl cl_desk_2" style="visibility: <?php echo  $visibility; ?>; ">
		<svg class="lines horizontal lineleft" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="20mm" height="1mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
		viewBox="0 0 1333.33 66.67"
		 xmlns:xlink="http://www.w3.org/1999/xlink">
		 <g id="Camada_x0020_3">
		  <metadata id="h06"/>
		  <polygon class="fil0" points="1333.33,66.67 -0,66.67 -0,0 1333.33,0 "/>
		 </g>
		</svg>
		</div>
		<?php 
				$order = esc_html (get_post_meta( get_the_ID(), "order2", true ) );
				$comp = substr($order, -1);
				$onOff = ( get_post_meta( get_the_ID(), 'onOff_vitrine_0'. $comp, true ) );
				if ( $onOff == 'on' ) { $visibility = "inherit"; } else {  $visibility = "hidden"; };
		?>
		<div class="cl cl_desk_2" style="visibility: <?php echo  $visibility; ?>; ">
		<svg class="lines horizontal h06 lineright" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="20mm" height="1mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
		viewBox="0 0 1333.33 66.67"
		 xmlns:xlink="http://www.w3.org/1999/xlink">
		 <g id="Camada_x0020_3">
		  <metadata id="h06"/>
		  <polygon class="fil0" points="1333.33,66.67 -0,66.67 -0,0 1333.33,0 "/>
		 </g>
		</svg>
		</div>
		<div class="cl cl_desk_4 comp02">
			<div class="component comp_right" style="visibility: <?php echo  $visibility; ?>; "> 
				<?php include ("component_content.php"); ?>	
			</div>
		</div>
	</div>
	<div class="row">
		<div class="cl cl_desk_3 comp03">
			<?php 
				$order = esc_html (get_post_meta( get_the_ID(), "order3", true ) );
				$comp = substr($order, -1);
				$onOff = ( get_post_meta( get_the_ID(), 'onOff_vitrine_0'. $comp, true ) );
				if ( $onOff == 'on' ) { $visibility = "inherit"; } else {  $visibility = "hidden"; };
			?>
			<div class="component comp_left" style="visibility: <?php echo  $visibility; ?>; "> 
				<?php include ("component_content.php"); ?>	
			</div>
		</div>
		<div class="cl cl_desk_1" style="visibility: <?php echo  $visibility; ?>; ">
		<svg class="lines horizontal lineleft" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="20mm" height="1mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
		viewBox="0 0 1333.33 66.67"
		 xmlns:xlink="http://www.w3.org/1999/xlink">
		 <g id="Camada_x0020_3">
		  <metadata id="h06"/>
		  <polygon class="fil0" points="1333.33,66.67 -0,66.67 -0,0 1333.33,0 "/>
		 </g>
		</svg>
		</div>
		<div class="cl cl_desk_1 blank"></div>
		<div class="cl cl_desk_1 blank"></div>
			<?php 
				$order = esc_html (get_post_meta( get_the_ID(), "order4", true ) );
				$comp = substr($order, -1);
				$onOff = ( get_post_meta( get_the_ID(), 'onOff_vitrine_0'. $comp, true ) );
				if ( $onOff == 'on' ) { $visibility = "inherit"; } else {  $visibility = "hidden"; };
			?>
		<div class="cl cl_desk_1" style="visibility: <?php echo  $visibility; ?>; ">
		<svg class="lines horizontal lineright" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="20mm" height="1mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
		viewBox="0 0 1333.33 66.67"
		 xmlns:xlink="http://www.w3.org/1999/xlink">
		 <g id="Camada_x0020_3">
		  <metadata id="h06"/>
		  <polygon class="fil0" points="1333.33,66.67 -0,66.67 -0,0 1333.33,0 "/>
		 </g>
		</svg>
		</div>
		<div class="cl cl_desk_3 comp04">
			<div class="component comp_right" style="visibility: <?php echo  $visibility; ?>; "> 
				<?php include ("component_content.php"); ?>			
			</div>
		</div>
	</div>
	<div class="row">
		<div class="cl cl_desk_4 comp05">
			<?php 
				$order = esc_html (get_post_meta( get_the_ID(), "order5", true ) );
				$comp = substr($order, -1);
				$onOff = ( get_post_meta( get_the_ID(), 'onOff_vitrine_0'. $comp, true ) );
				if ( $onOff == 'on' ) { $visibility = "inherit"; } else {  $visibility = "hidden"; };
			?>
			<div class="component comp_left" style="visibility: <?php echo  $visibility; ?>; "> 
				<?php include ("component_content.php"); ?>	
			</div>
		</div>
		<div class="cl cl_desk_2">
		<svg class="lines horizontal lineleft" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="20mm" height="1mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
		viewBox="0 0 1333.33 66.67"
		 xmlns:xlink="http://www.w3.org/1999/xlink">
		 <g id="Camada_x0020_3">
		  <metadata id="h06"/>
		  <polygon class="fil0" points="1333.33,66.67 -0,66.67 -0,0 1333.33,0 "/>
		 </g>
		</svg>

		</div>
		<div class="cl cl_desk_2">
		<svg class="lines horizontal lineright" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="20mm" height="1mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
		viewBox="0 0 1333.33 66.67"
		 xmlns:xlink="http://www.w3.org/1999/xlink">
		 <g id="Camada_x0020_3">
		  <metadata id="h06"/>
		  <polygon class="fil0" points="1333.33,66.67 -0,66.67 -0,0 1333.33,0 "/>
		 </g>
		</svg>

		</div>
			<?php 
				$order = esc_html (get_post_meta( get_the_ID(), "order6", true ) );
				$comp = substr($order, -1);
				$onOff = ( get_post_meta( get_the_ID(), 'onOff_vitrine_0'. $comp, true ) );
				if ( $onOff == 'on' ) { $visibility = "inherit"; } else {  $visibility = "hidden"; };
			?>
		<div class="cl cl_desk_4 comp06">
			<div class="component comp_right" style="visibility: <?php echo  $visibility; ?>; "> 
				<?php include ("component_content.php"); ?>	
			</div>
		</div>
	</div>
	<div class="spacer"></div>
</div>