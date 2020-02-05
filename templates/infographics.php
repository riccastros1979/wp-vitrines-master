<?php 
// Infographics 
// Part of Form-Vitrine
// Plugin Vitrine do Conhecimento
?>
<div class="infographics row">
		<?php 
			$infoColumns = (get_post_meta( get_the_ID(), "infographic_collumns", true ) );
			$infographic = 0;
			for ($count=1; $count<=3; $count ++) {
				
				$value = (get_post_meta( get_the_ID(), 'text_infografico_0'. $count, true ) );
				if (!empty($value)) { $infographic ++; };
			};
			$count = 1;
		?>
		<?php if ($infoColumns == 1) {
		?>
			<div class="infographics_noflex">	
		<?php
			} // if fecha $infoColumns
			else {
		?>
			<div class="infographics_flex">	
		<?php
			}; // fehca else $infoColumns
		?>
		<?php
			for ($count=1; $count<= $infographic; $count ++) {
				$title = (get_post_meta( get_the_ID(), 'title_infografico_0'. $count, true ) );
				$content = (get_post_meta( get_the_ID(), 'text_infografico_0'. $count, true ) );
				$fontcolor = (get_post_meta( get_the_ID(), 'basic_vitrine_infografico_color_0'. $count, true ) );
				$bgcolor = (get_post_meta( get_the_ID(), 'basic_vitrine_infografico_bg_0'. $count, true ) );
				$id = (get_post_meta( get_the_ID(), 'basic_vitrine_infografico_id_0'. $count, true ) );
			?>
				<div id="<?php if (empty($id)) { echo 'infographic_'.$count; } else { echo $id; }; ?>" class="infographicBox" style="<?php if (isset($bgcolor)) { echo "background-color: $bgcolor !important;"; }; if (isset($fontcolor)) { echo " color: $fontcolor !important;"; };?>">
					<h2><?php echo $title ?></h2>
					<div class="contentinfographic">
						<?php echo $content ?>
					</div>
				</div>
			<?php
			};
		?>
		</div>
</div>
<div class="spacer"></div>