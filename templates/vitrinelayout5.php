<div class="vitrine_layout boxes_5">
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
			<svg class="lines g90dE" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="20mm" height="20mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
			viewBox="0 0 1333.33 1333.33"
			 xmlns:xlink="http://www.w3.org/1999/xlink">
			 <g id="Camada_x0020_1">
			  <metadata id="90grausEsq"/>
			  <polygon points="-0,0 1333.33,0 1333.33,1333.33 1266.67,1333.33 1266.67,66.67 -0,66.67 "/>
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
			<svg class="lines g90dD" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="20mm" height="20mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
			viewBox="0 0 509.32 509.32"
			 xmlns:xlink="http://www.w3.org/1999/xlink">
			 <g id="Camada_x0020_2">
			  <metadata id="90grausDir"/>
			  <polygon points="509.32,0 -0,0 -0,509.32 25.47,509.32 25.47,25.47 509.32,25.47 "/>
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
		<div class="cl cl_desk_4 cl_desk_44 comp03">
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
			<svg class="lines g90dEB" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="20mm" height="20mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
			viewBox="0 0 1333.33 1333.33"
			 xmlns:xlink="http://www.w3.org/1999/xlink">
			 <g id="Camada_x0020_7">
			  <metadata id="90grausEsqBase"/>
			  <polygon class="fil0" points="-0,1333.33 1333.33,1333.33 1333.33,0 1266.67,0 1266.67,1266.67 -0,1266.67 "/>
			 </g>
			</svg>		
		</div>
			<?php 
				$order = esc_html (get_post_meta( get_the_ID(), "order4", true ) );
				$comp = substr($order, -1);
				$onOff = ( get_post_meta( get_the_ID(), 'onOff_vitrine_0'. $comp, true ) );
				if ( $onOff == 'on' ) { $visibility = "inherit"; } else {  $visibility = "hidden"; };
			?>
		<div class="cl cl_desk_22">
			<svg class="lines vertical" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="1mm" height="20mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
			viewBox="0 0 9.09 181.82"
			 xmlns:xlink="http://www.w3.org/1999/xlink">
			 <g id="vertical">
			  <metadata id="verticalLayer"/>
			  <polygon class="fil0" points="9.09,0 9.09,181.82 -0,181.82 -0,0 "/>
			 </g>
			</svg>		
		</div>
		<div class="cl cl_desk_1" style="visibility: <?php echo  $visibility; ?>; ">
			<svg class="lines g90dDB" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="20mm" height="20mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
			viewBox="0 0 1333.33 1333.33"
			 xmlns:xlink="http://www.w3.org/1999/xlink">
			 <g id="Camada_x0020_8">
			  <metadata id="90grausDirBase"/>
			  <polygon class="fil0" points="1333.33,1333.33 -0,1333.33 -0,0 66.67,0 66.67,1266.67 1333.33,1266.67 "/>
			 </g>
			</svg>		
		</div>
		<div class="cl cl_desk_4 cl_desk_44 comp04">
			<div class="component comp_right" style="visibility: <?php echo  $visibility; ?>; "> 
				<?php include ("component_content.php"); ?>			
			</div>
		</div>
	</div>
	<div class="row">
		<div class="cl cl_desk_3"></div>
		<div class="cl cl_desk_6 comp05">
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
	</div>
	
	<div class="spacer"></div>
</div>