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
                $about_main_1 = get_field('about_main_1');
                $about_main_2 = get_field('about_main_2');
                $about_main_3 = get_field('about_main_3');
                $experience = get_field('experience');
                $experience_1 = get_field('experience_1');
                $experience_1_date = get_field('experience_1_date');
                $experience_2 = get_field('experience_2');
                $experience_2_date = get_field('experience_2_date');
                $experience_3 = get_field('experience_3');
                $experience_3_date = get_field('experience_3_date');
                $experience_4 = get_field('experience_4');
                $experience_4_date = get_field('experience_4_date');
                $edu = get_field('edu');
                $school = get_field('school');
                $degree = get_field('degree');
                $studio = get_field('studio');
                $hours = get_field('hours');
                $training = get_field('training');
                $study = get_field('study');
                $about_bottom = get_field('about_bottom');
                $size = "full";
            ?>
        			<?php endwhile; // end of the loop. ?>
        <div class="about-page"> 
            <div class="photo-hello">
               <div class="about_image">
                    <figure>
                    <?php echo wp_get_attachment_image($about_image, $size); ?>
                   </figure>
                </div>

              <div class="about-top">
                <h1><?php echo $about_name; ?></h1>
                  <h4><?php echo $about_intro; ?></h4>     
                </div>
           </div> 
         <div class="about-main">
             
                <p><?php echo $about_main_1; ?></p><br>
                <p><?php echo $about_main_2; ?></p><br>
                <p><?php echo $about_main_3; ?></p>
            </div>
   
            
         <div class="experience">
            
             <h3><?php echo $experience; ?></h3>
             
            <div class="experiences">
             <div class="experience-1">
                <h4><?php echo $experience_1; ?></h4>
                <p><?php echo $experience_1_date; ?></p>
             </div>
             
             <div class="experience-2">
                <h4><?php echo $experience_2; ?></h4>
                <p><?php echo $experience_2_date; ?></p>
             </div>
             
             <div class="experience-3">
                <h4><?php echo $experience_3; ?></h4>
                <p><?php echo $experience_3_date; ?></p>
             </div>
             
             <div class="experience-4">
                <h4><?php echo $experience_4; ?></h4>
                <p><?php echo $experience_4_date; ?></p>
             </div>
            </div> <!-- end experiences -->
        </div>
            
        <div class="training-edu">
            <h3><?php echo $edu; ?></h3>
            
            <div class="cpt">
                <h4><?php echo $study; ?></h4>
                <p><?php echo $training; ?></p>
            </div>
            
        <div class="combined-study">   
            <div class="yoga">
                <h4><?php echo $hours; ?></h4>
                <p><?php echo $studio; ?></p>
            </div>
            
            <div class="school">
                <h4><?php echo $degree; ?></h4>
                <p><?php echo $school; ?></p>
            </div>
          </div>  
  
        </div> <!-- end training edu -->
            
        <div class="about-bottom">
            <p><?php echo $about_bottom; ?> </p> 
            <div class="about-bottom-cta">
                 <a class="button" href="<?php echo site_url('/services/') ?>">View My Services</a>
            </div>

        </div>
        </div> <!--about page -->
        </div><!-- .main-content -->


	</div><!-- #primary -->

<?php get_footer(); ?>
