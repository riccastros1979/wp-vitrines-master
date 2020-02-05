<?php 
// Highlights1 
// Part of Form-Vitrine
// Plugin Vitrine do Conhecimento
?>
<div class="highlights highlight_1_coluns row">
	<?php 
		$highlight = 0;
		for ($count=1; $count<=20; $count ++) {
			
			$value = (get_post_meta( get_the_ID(), 'basic_vitrine_content_0'. $count, true ) );
			if (!empty($value)) { $highlight ++; };
		};
		$count = 1;
		for ($count=1; $count<= $highlight; $count ++) {
			$title = (get_post_meta( get_the_ID(), "basic_content_0".$count."_title", true ) );
			$content = (get_post_meta( get_the_ID(), 'basic_vitrine_content_0'. $count, true ) );
			$fontcolor = (get_post_meta( get_the_ID(), 'basic_vitrine_content_color_0'. $count, true ) );
			$bgcolor = (get_post_meta( get_the_ID(), 'basic_vitrine_content_bg_0'. $count, true ) );
			$id = (get_post_meta( get_the_ID(), 'basic_vitrine_content_id_0'. $count, true ) );
		?>
			<div id="<?php if (empty($id)) { echo 'highlight_'.$count; } else { echo $id; }; ?>" class="highlightBox" style="<?php if (isset($bgcolor)) { echo "background-color: $bgcolor !important;"; }; if (isset($fontcolor)) { echo " color: $fontcolor !important;"; };?>">
				<h2><?php echo $title ?></h2>
				<div class="contentHighlight">
					<?php echo $content ?>
				</div>
			</div>
		<?php
		};
	?>
</div>