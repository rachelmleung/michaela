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
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
            <?php endwhile; // end of the loop. ?>
            
             <?php while ( have_posts() ) : the_post(); 

                $services_intro = get_field('services_intro');
                $service_image_1 = get_field('service_image_1');
                $service_image_2 = get_field('service_image_2');
                $service_image_3 = get_field('service_image_3');
                $service_image_4 = get_field('service_image_4');
                $service_1 = get_field('service_1');
                $service_2 = get_field('service_2');
                $service_3 = get_field('service_3');
                $service_4 = get_field('service_4');
                $service_1_info = get_field('service_1_info');
                $service_2_info = get_field('service_2_info');
                $service_3_info = get_field('service_3_info');
                $service_4_info = get_field('service_4_info');
                $group = get_field('group');
                $group_info = get_field('group_info');
                $personal = get_field('personal');
                $personal_info = get_field('personal_info');
                $size = 'full';
            ?>

            
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

        <div class="main-services">
            <div class="services-body">
                <p><?php echo $services_intro; ?></p>
                
                
                <div class="services">
                    <div class="service-1">
                        <figure>
                            <?php echo wp_get_attachment_image($service_image_1, $size); ?>
                        </figure>
                        <h4> <?php echo $service_1; ?></h4>
                        <p><?php echo $service_1_info; ?></p>
                    </div>
                    <div class="service-2">
                        <figure>
                            <?php echo wp_get_attachment_image($service_image_2, $size); ?>
                        </figure>
                        <h4> <?php echo $service_2; ?></h4>
                        <p><?php echo $service_2_info; ?></p>
                    </div>
                    <div class="service-3">
                        <figure>
                            <?php echo wp_get_attachment_image($service_image_3, $size); ?>
                        </figure>
                        <h4> <?php echo $service_3; ?></h4>
                        <p><?php echo $service_3_info; ?></p>
                    </div>
                    <div class="service-4">
                        <figure>
                            <?php echo wp_get_attachment_image($service_image_4, $size); ?>
                        </figure>
                        <h4> <?php echo $service_4; ?></h4>
                        <p><?php echo $service_4_info; ?></p>
                    </div>
                </div> <!-- end services -->
            <div class="group-personal">
                <div class="group">
                    <h4><?php echo $group; ?></h4>
                    <p><?php echo $group_info; ?></p>

                </div>
                <div class="personal">
                    <h4><?php echo $personal; ?></h4>
                    <p><?php echo $personal_info; ?></p>
                </div>

            </div>
            </div> <!-- end services body -->
        </div>
	</div><!-- #primary -->

<?php get_footer(); ?>
