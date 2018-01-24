<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage faroutrachel
 * @since faroutrachel 1.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
            
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
        

	</div><!-- #primary -->
    <div class="about-preview">
        <div class="feature-text">
            <h1> Here's where more stuff goes. This will be a quote about her and a fun philosophy on her POV on fitness followed by a CTA</h1>    
        </div>

        <div class="home-ctas">
            <div class="about-cta">
                        <a class="button" href="<?php echo site_url('/about/') ?>">Get to Know Me</a>
            </div>
            <div class="services-cta">
                        <a class="button" href="<?php echo site_url('/about/') ?>">View My Services</a>
            </div>

        </div>
     </div>

<?php get_footer(); ?>
