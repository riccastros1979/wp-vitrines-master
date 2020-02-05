<?php 
// part_texts_02 
// Part of Form-Vitrine
// Plugin Vitrine do Conhecimento
?>
<div class="texts texts_3_coluns row">
	<?php 
		$texts = 0;
		for ($count=1; $count<=20; $count ++) {
			
			$value = (get_post_meta( get_the_ID(), 'texts_vitrine_content_0'. $count, true ) );
			if (!empty($value)) { $texts ++; };
		};
		$count = 1;
		for ($count=1; $count<= $texts; $count ++) {
			$title = (get_post_meta( get_the_ID(), "texts_content_0".$count."_title", true ) );
			$content = (get_post_meta( get_the_ID(), 'texts_vitrine_content_0'. $count, true ) );
			$fontcolor = (get_post_meta( get_the_ID(), 'texts_vitrine_content_color_0'. $count, true ) );
			$bgcolor = (get_post_meta( get_the_ID(), 'texts_vitrine_content_bg_0'. $count, true ) );
			$id = (get_post_meta( get_the_ID(), 'texts_vitrine_content_id_0'. $count, true ) );
			if($count % 3 == 0){ 
					$checkDIV = 1;  
				} 
				else{ 
					$checkDIV = 0;  
				} 
		?>
		<style>
			.<?php echo 'texts_'.$count;?> a {
				color: <?php echo $fontcolor;?>
			}
		</style>
		<?php if ($checkDIV ==0) { echo "<div class='checkDIV'>";};?>
			<div id="<?php if (empty($id)) { echo 'texts_'.$count; } else { echo $id; }; ?>" class="textsBox <?php echo 'texts_'.$count;?>" style="<?php if (isset($bgcolor)) { echo "background-color: $bgcolor !important;"; }; if (isset($fontcolor)) { echo " color: $fontcolor !important;"; };?>">
				<h2><?php echo $title ?></h2>
				<div class="contenttexts">
					<?php echo $content ?>
				</div>
			</div>
		<?php if ($checkDIV ==1) { echo "</div>";};?>
		<?php
		};
		// checa se o numero de boxes é impar e fecha a div checkDIV aberta no ultimo elemento
		if ($count % 3 == 1) {echo "</div>";};
	?>
</div>