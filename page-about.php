<?php
/**
 * The template for displaying all pages
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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
         <?php while ( have_posts() ) : the_post(); 

                $about_image = get_field('about_image');
                $about_name = get_field('about_name');
                $about_intro = get_field('about_intro');
                $about_main = get_field('about_main');
                $experience = get_field('experience');
                $edu = get_field('edu');
                $school = get_field('school');
                $degree = get_field('degree');
                $studio = get_field('studio');
                $hours = get_field('hours');
                $training = get_field('training');
                $study = get_field('study');
                $about_bottom = get_field('about_bottom');
            ?>
        			<?php endwhile; // end of the loop. ?>
            
           <div class="about_image">
                <figure>
                <?php echo wp_get_attachment_image($about_image, $size); ?>
               </figure>
            </div>
            
          <div class="about-top">
            <h1><?php echo $about_name; ?></h1>
              <h4><?php echo $about_intro; ?></h4>     
            </div>
            
         <div class="about-main">
                <p><?php echo $about_main; ?></p>
            </div>
         <div class="experience">
             <h3><?php echo $experience; ?></h3>       
        </div>
            
        <div class="training-edu">
            <h3><?php echo $edu; ?></h3>
            <div class="school">
                <h4><?php echo $degree; ?></h4>
                <p><?php echo $school; ?></p>
            </div>
            
            <div class="cpt">
                <h4><?php echo $studio; ?></h4>
                <p><?php echo $hours; ?></p>
            </div>
            
            <div class="yoga">
                <h4><?php echo $training; ?></h4>
                <p><?php echo $study; ?></p>
            </div>
  
        </div> <!-- end training edu -->
            
        <div class="about-bottom">
            <p><?php echo $about_bottom; ?> </p> 
            <div class="about-bottom-cta">
                 <a class="button" href="<?php echo site_url('/about/') ?>">View My Services</a>
            </div>

        </div>
        
		</div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
