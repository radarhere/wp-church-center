<?php
/*
 * Template Name: Church Hub Homepage
 * Description: The full list of Church Hub cards
 */


/**  Load Header */
require_once plugin_dir_path( __FILE__ ) . 'header.php'; ?>

<div class="cardHolder <?php echo get_option( 'wpch_layout' ); ?>">
<div class="cards <?php if(get_option( 'wpch_greyscale' ) == 1) { echo 'greyscale'; } ?>">

	<?php

	$wpch_query = new WP_Query( array (
                    'post_type' => 'card', 
                    'posts_per_page' => -1
     ) );

	
	if ( $wpch_query -> have_posts() ) {
		while ( $wpch_query -> have_posts() ) {
			$wpch_query -> the_post();  ?>
			
				<?php if(get_option( 'wpch_layout' ) == 'list'){ ?>

					<a class="card" href="<?php the_permalink(); ?>" style="background-color: <?php the_field('wpch_color'); ?>">
						<div class="cardBody">
							<h3><?php the_title(); ?></h3>
							<p><?php the_field('wpch_subtitle'); ?></p>
						</div>
						<i class="fa fa-angle-circled-right"></i>
					</a>

				<?php }else{ ?>
					<a class="card" href="<?php the_permalink(); ?>" tabindex="-1">
						<div class="cardBody">
							<div class="topSection" style="background: url(<?php $image = get_field('wpch_image'); echo wp_get_attachment_image_src( $image, 'card_image' )[0];?>) no-repeat 50% 50%; background-size:cover;">
								
							</div>
							<span class="overlay" style="background-color: <?php the_field('wpch_color'); ?>"></span>
							<div class="bottomSection">
								<div class="intro">
									<h3 style="color: <?php the_field('wpch_color'); ?>"><?php the_title(); ?></h3>
									<p><?php the_field('wpch_subtitle'); ?></p>
								</div>
							</div>
						</div>
					</a>
				<?php } ?>

		<?php } 
	} 
	?>
</div>
</div>


<?php /**  Load Header */
require_once plugin_dir_path( __FILE__ ) . 'footer.php'; ?>