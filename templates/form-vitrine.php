<?php
// Template part of Single Vitrine


$basic_vitrine_presentation_bg = esc_html (get_post_meta( get_the_ID(), "basic_vitrine_presentation_bg", true ) );
$basic_vitrine_presentation_id = esc_html (get_post_meta( get_the_ID(), "basic_vitrine_presentation_id", true ) );
$basic_vitrine_presentation_textColor = esc_html (get_post_meta( get_the_ID(), "basic_vitrine_presentation_textColor", true ) );
?>
<style>
	
</style>


<div class="presentation row" id="<?php if (empty($basic_vitrine_presentation_id)) { echo 'presentationBOX'; } else { echo $basic_vitrine_presentation_id; }; ?>" style="<?php if (isset($basic_vitrine_presentation_bg)) { echo "background-color: $basic_vitrine_presentation_bg !important;"; }; if (isset($basic_vitrine_presentation_textColor)) { echo " color: $basic_vitrine_presentation_textColor !important;"; };?>">
	<div class="vitrine_1_column">
		<?php
			$title = esc_html (get_post_meta( get_the_ID(), "basic_vitrine_title", true ) );
			if (isset($title)){ ?>
				<h2><?php echo $title; ?></h2>
				
			<?php };
		?>
		<div class="presentation_content">
			<?php 
				echo (get_post_meta( get_the_ID(), "basic_vitrine_presentation", true ) ); 
			?>
		</div>
	</div>
</div>
<?php 
	$columns = (get_post_meta( get_the_ID(), "highlights_collumns", true ) );
	if ($columns == 1) {
		include ("highlights1.php");
	} else {
		include ("highlights2.php");
	};
?>
<div class="spacer"></div>
<?php 
	include ("infographics.php");
	include ("part_videos.php");
?>
<?php 
	$columns = (get_post_meta( get_the_ID(), "texts_collumns", true ) );
	include ("part_texts_0".$columns.".php");
?>
<div class="spacer"></div>
<div class="responsability row">
	<div class="vitrine_1_column">
		<div class="responsability_content">
			<?php 
				echo (get_post_meta( get_the_ID(), "responsibility", true ) ); 
			?>
		</div>
	</div>
</div>
