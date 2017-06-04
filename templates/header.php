<?php

/* Header for WP Church Hub Pages */
?>

<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">

    <?php if (is_singular('card') ) { ?>
        <title><?php the_title();?> | <?php echo get_option( 'wpch_church_name' ); ?> Hub</title>
    <?php }else{ ?>
        <title><?php echo get_option( 'wpch_church_name' ); ?> Hub</title>
    <?php } ?>

    
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta Tags -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <?php if (is_singular('card') ) { ?>
        <meta property="og:title" content="<?php the_title();?> | <?php echo get_option( 'wpch_church_name' ); ?> Hub">
    <?php }else{ ?>
        <meta property="og:title" content="<?php echo get_option( 'wpch_church_name' ); ?> Hub">
    <?php } ?>

    <?php if (is_singular('card') ) { ?>
        <meta property="og:description" content="<?php the_field('wpch_subtitle'); ?>">
    <?php }else{ ?>
        <meta property="og:description" content="Find out what is happening for members at <?php echo get_option( 'wpch_church_name' ); ?>">
    <?php } ?>
    
    <meta property="og:url" content="<?php the_permalink(); ?>">
    <meta property="og:site_name" content="<?php echo get_option( 'wpch_church_name' ); ?> Hub">
    <meta property="og:image" content="<?php $image = get_field('wpch_image'); echo wp_get_attachment_image_src( $image, 'card_hero_image' )[0];?>">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="<?php the_field('wpch_subtitle'); ?>">

    <?php if (is_singular('card') ) { ?>
        <meta name="twitter:title" content="<?php the_title();?> | <?php echo get_option( 'wpch_church_name' ); ?> Hub">
    <?php }else{ ?>
        <meta name="twitter:title" content="<?php echo get_option( 'wpch_church_name' ); ?> Hub">
    <?php } ?>
    <meta name="twitter:image" content="<?php $image = get_field('wpch_image'); echo wp_get_attachment_image_src( $image, 'card_hero_image' )[0];?>">

    <!-- The mountain of stuff WP puts in -->
    <?php wp_head(); ?>

    <style>
    	 body{
    	 	background: <?php echo get_option( 'wpch_background' ); ?>;
    	 }
         #menu ul li a i {
             background: <?php echo get_option( 'wpch_background' ); ?>;
         } 

         .cardInfo h2, .cardInfo h3, .cardInfo h4, .cardInfo h5, .cardInfo h6, .cardInfo a {
             color: <?php the_field( 'wpch_color' ); ?>;
         }


         @media only screen and (min-width: 900px) {
            #menu ul li a i,
            .backButton, .backButton:hover {
             color: <?php echo get_option( 'wpch_background' ); ?>;
         }
        }
    	</style>

</head>


<body <?php body_class( 'wpchurch_hub'); ?>>

<div class="skip-container">
    <a class="skip-link" tabindex="1" href="#main"><?php esc_html_e( '&darr; Skip to Main Content', 'wpch' ); ?></a>
</div><!-- .skip-container -->

<div class="header <?php echo get_option( 'wpch_layout' ); ?>">
	<a href="<?php wpch_get_home_hub_link(); ?>"><img src="<?php echo esc_html( get_option( 'wpch_church_logo' ) ); ?>" alt="<?php echo esc_html( get_option( 'blogname' ) ); ?> Logo" id="logo"></a>

	<a href="#menu" aria-controls="menu" class="menuLink" tabindex="2">
	  <i class="fa-logo fa-menu"></i><span>Menu</span>
	</a>

        


        <div id="menu" class="columns large-9">

        		<!-- Social Icons -->
        		<ul class="socialMenu">

        			<?php if($churchLink = get_option( 'wpch_church_url' )){ ?>
					<li><a href="<?php echo $churchLink; ?>"><i class="fa-logo fa-home"></i><span><?php echo esc_html( get_option( 'blogname' ) ); ?> Website</span></a></li>
        			<?php } ?>


        			<?php if($facebookLink = get_option( 'wpch_facebook' )){ ?>
					<li><a href="<?php echo $facebookLink; ?>" title="Facebook"><i class="fa-logo fa-facebook"></i><span>Facebook</span></a></li>
        			<?php } ?>

        			<?php if($twitterLink = get_option( 'wpch_twitter' )){ ?>
					<li><a href="<?php echo $twitterLink; ?>" title="Twitter"><i class="fa-logo fa-twitter"></i><span>Twitter</span></a></li>
        			<?php } ?>

        			<?php if($instLink = get_option( 'wpch_instagram' )){ ?>
					<li><a href="<?php echo $instaLink; ?>" title="Instagra,"><i class="fa-logo fa-instagram"></i><span>Twitter</span></a></li>
        			<?php } ?>

        			<?php if($snapchatLink = get_option( 'wpch_snapchat' )){ ?>
					<li><a href="<?php echo $snapchatLink; ?>" title="Snapchat"><i class="fa-logo fa-snapchat-ghost"></i><span>Snapchat</span></a></li>
        			<?php } ?>

        			<?php if($vimeoLink = get_option( 'wpch_vimeo' )){ ?>
					<li><a href="<?php echo $vimeoLink; ?>" title="Vimeo"><i class="fa-logo fa-vimeo"></i><span>Vimeo</span></a></li>
        			<?php } ?>

        			<?php if($youtubeLink = get_option( 'wpch_youtube' )){ ?>
					<li><a href="<?php echo $youtubeLink; ?>" title="Youtube"><i class="fa-logo fa-youtube-play"></i><span>Youtube</span></a></li>
        			<?php } ?>

        			<?php if($givingLink = get_option( 'wpch_giving' )){ ?>
					<li><a href="<?php echo $givingLink; ?>" title="Online Giving"><i class="fa-logo fa-money"></i><span>Online Giving</span></a></li>
        			<?php } ?>

        		</ul>

            <!-- Close Menu -->
            <a href="#" class="closeMenu">
                <i class="fa-logo fa-cancel"></i>
                <span>Close Menu</span>
            </a>  
        </div>
    </div>

</div>