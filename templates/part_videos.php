<?php 
// part_videos 
// Part of Form-Vitrine
// Plugin Vitrine do Conhecimento
?>
<?php 
	$videos = 0;
	for ($count=1; $count<=3; $count ++) {
		
		$value = (get_post_meta( get_the_ID(), 'video_0'. $count, true ) );
		if (!empty($value)) { $videos ++; };
	};
	$fontcolor = (get_post_meta( get_the_ID(), 'videos_color', true ) );
	$bgcolor = (get_post_meta( get_the_ID(), 'videos_bg', true ) );
	$id = (get_post_meta( get_the_ID(), 'videos_id', true ) );
	$more_videos = (get_post_meta( get_the_ID(), 'more_videos', true ) );
?>
<div class="videos row <?php echo $videos ?>_videos" id="<?php if (empty($id)) { echo 'videos'; } else { echo $id; }; ?>" style="<?php if (isset($bgcolor)) { echo "background-color: $bgcolor !important;"; }; if (isset($fontcolor)) { echo " color: $fontcolor !important;"; };?>">
			
	<div class="videos_<?php echo $videos ?>">
		<?php
			for ($count=1; $count<= $videos; $count ++) {
				$video = (get_post_meta( get_the_ID(), 'video_0'. $count, true ) );
			?>
				<div class="contentvideos">
					<div class="video-player" style="text-align: center;">
					   <iframe width="560" height="315" 
						  src="https://www.youtube.com/embed/<?php echo $video ?>" frameborder="0" 
						  allow="accelerometer; autoplay; encrypted-media;
						  gyroscope; picture-in-picture" allowfullscreen>[
					   </iframe>
					</div>
				</div>
			<?php
			};
		?>
		</div>
		<?php if (!empty($more_videos)) {
		?>
			<div class="row morevideos">
				<span class=""><a style="<?php if (isset($fontcolor)) { echo " color: $fontcolor !important;"; };?>" href="<?php echo $video ?>">Mais vídeos</a></span>
			</div>
		<?php
		};?>
	</div>
<div class="spacer"></div>