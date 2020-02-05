<?php
 /* Template Name: Archive Vitrines do Conhecimento
 *  ©BIREME | OPAS | OMS
 *  Maio de 2019 - Ricardo de Castro - ricardodecastro@gmail.com - consultor 
 */ 
 
get_header();
wp_enqueue_style ('theme-style', plugin_dir_url( __FILE__ ) .'css/page_vitrine.css');
$site_lang = substr($current_language, 0,2);

if ( defined( 'POLYLANG_VERSION' ) ) {
    $default_language = pll_default_language();
    if ( $default_language == $site_lang ) $site_lang = '';
} else {
	$site_lang = '';
}

if ($site_lang == 'en') {
	$vitrines_title = "Windows of Knowledge";
	$vitrine_link = "Windows of Knowledge Collection of the VHL Network";
	$vitrine_link_url = "https://bvsalud.org/en/vitrinas";
} elseif ($site_lang == 'es' || $default_language =='_e') {
	$vitrines_title = "Vitrinas del Conocimiento";	
	$vitrine_link = " Colección de Vitrinas del Conocimiento de la Red BVS";
	$vitrine_link_url = "https://bvsalud.org/es/vitrinas";
} elseif ($site_lang == 'pt' || $default_language =='_p') {
	$vitrines_title = "Vitrines do Conhecimento";
	$vitrine_link = "Coleção de Vitrines do Conhecimento da Rede BVS";
	$vitrine_link_url = "https://bvsalud.org/vitrinas";
} else {
	$vitrines_title = "Vitrines do Conhecimento";
	$vitrine_link = "Coleção de Vitrines do Conhecimento da Rede BVS";
	$vitrine_link_url = "https://bvsalud.org/vitrinas";
	$site_lang = '';
}

?>
<style>
.vitrine_thumb img {
    border-radius: 50%;
    width: 150px !important;
    height: 150px !important;
    max-width: none !important;
    border: 2px solid #d3e8fb;
}

.vitrine_data {
    margin: 0px 1% 40px 1%;
    width: 47%;
    display: inline-flex;
}

.vitrine_list .vitrine_title {
    font-size: 140%;
    font-weight: bold;
    margin-bottom: 10px;
    line-height: 110%;
}
.vitrine_links {
    text-align: right;
    margin: 0px 30px 30px 0px;
    font-weight: bold;
    text-decoration: underline;
}
.info {
    margin-left: 15px;
}	
	
@media screen and (max-width: 990px) {
	.vitrine_data {
		margin: 2%;
		width: 94%;
		display: inline-block;
		text-align: center;
	}
}
	
</style>
<div class="middle">
	<div class="breadcrumb"><a href="<?php bloginfo('url'); ?>/<?php echo ($site_lang);?>" title="<?php bloginfo('name'); ?>">Home</a> /  </div>


	<h2 class="storytitle"><?php echo($vitrines_title);?></h2>

	<div class="vitrine_list">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="vitrine_data">
					<div class="vitrine_thumb">
						<?php the_post_thumbnail( 'vitrine_image' ); ?>
					</div>
					<div class="info">
						<h2 class="vitrine_title"><?php the_title(); ?></h2>
						<div class="vitrine_excerpt">
							<?php the_excerpt(); ?>
						</div>
					</div>

				</div>
			</a>


			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
	<div class="vitrine_links">
		<a href="<?php echo ($vitrine_link_url);?>" target="_blank"><?php echo ($vitrine_link);?></a>
	</div>
</div>
<?php get_footer(); ?>