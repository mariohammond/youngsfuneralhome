<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<!-- start container -->
<section id="container" class="page-home">
	<section class="box">
    	<!-- start showcase -->
        <section id="showcase">
			<script type="text/javascript">jQuery(window).load(function() { jQuery('#slider').nivoSlider({ effect: '<?php echo get_option('church_slideshow_effect'); ?>', slices: 5, boxCols: 5, boxRows: 5, animSpeed: 700, directionNavHide:false, controlNav: true, pauseTime: <?php if (get_option('church_slideshow_pausetime') != "") { echo get_option('church_slideshow_pausetime'); } else { echo 7000; } ?> }); });</script>
			<section class="slider-wrapper theme-default">
        		<section id="slider" class="nivoSlider">
					<?php $query = new WP_Query(); $query->query('post_type=slide'); $post_count = $query->post_count; $count = 0;
						if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); $captions[] = '<h2>'.get_the_title($post->ID).'</h2><p>'.get_the_content().'</p>'; $thumb_attrs = array( 'title' => '#caption'.$count );
					?>
                    
					<?php if ( get_post_meta($post->ID, 'slide_link', true) ) { ?>
						<?php if ( has_post_thumbnail()) { ?>
   	      					<a href="<?php echo get_post_meta($post->ID, 'slide_link', true); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('slide-background', $thumb_attrs); ?></a>
                    			<?php } ?>
					<?php } else { ?>
						<?php if ( has_post_thumbnail()) { ?>
							<?php the_post_thumbnail('slide-background', $thumb_attrs); ?>
						<?php } ?>
					<?php } ?>

					<?php $count++; endwhile; endif; wp_reset_query(); ?>

            	</section>
            </section>
        </section>
        <!-- end showcase -->

		<?php //if (get_option('church_tag') != "") { ?>
            <!--<h1 class="main-title"><?php //echo get_option('church_tag'); ?></h1>-->
            <h1 class="main-title"><?php echo "It's not the age of a man's business that counts, but the service he gives when it's needed most." ?></h1>
        <?php //} ?>

        <section class="homepage-widgets">
        	<?php dynamic_sidebar("sidebar-4"); ?>
            <section class="homepage-widgets">
            	<section id="recent_sermons-3" class="widget Widget_Recent_Sermons first">
                	<h4>Past Services</h4>
                    <ul>
                    	<?php $my_query = new WP_Query('posts_per_page=5');
							while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <?php $currentDate = strtotime(date("Y-m-d")); $serviceDate = strtotime(get_field("service_date")); ?>
                        <?php if ($serviceDate < $currentDate) : ?>
                        <?php $eventMonth = date("M", strtotime(get_field("service_date"))); $eventDay = date("d", strtotime(get_field("service_date"))); ?>
                    	<li><span class="date"><b><?php echo $eventMonth; ?></b><?php echo $eventDay; ?></span><p><span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span><?php echo get_field('hometown'); ?></p></li>
                        <?php endif; endwhile; wp_reset_query(); ?>
                   	</ul>
           		</section>
                <section id="recent_events-3" class="widget Widget_Recent_Events second">
                	<h4>Upcoming Services</h4>
                    <ul>
                    	<?php $postCount = 0; $my_query = new WP_Query('posts_per_page=5'); ?>
						<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<?php $currentDate = strtotime(date("Y-m-d")); $serviceDate = strtotime(get_field("service_date")); ?>
                        <?php if ($serviceDate >= $currentDate) : ?>
                        <?php $postCount++; $eventMonth = date("M", strtotime(get_field("service_date"))); $eventDay = date("d", strtotime(get_field("service_date"))); ?>
                    	<li><span class="date"><b><?php echo $eventMonth; ?></b><?php echo $eventDay; ?></span><p><span class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span><?php echo get_field('hometown'); ?></p></li>
                        <?php endif; endwhile; wp_reset_query(); ?>
                        <?php if ($postCount == 0) { echo "<h1 class='no-services'>No services scheduled.</h1>"; } ?>
                    </ul>
               	</section>
                <section id="text-3" class="widget widget_text last">
                	<h4>About Our Service</h4>
                    <div class="textwidget">
    The staff at Young's Funeral Home has provided quality services to families for many years. We will continue to provide the same quality service for the years to come. During your time of need you can count on us to help you get through this difficult time. Thank you for visiting our site.</div>
				</section>
    			<div class="clear"></div>
			</section>
    		<div class="clear"></div>
		</section>
    </section>
</section>

<!-- end container -->
<?php get_footer(); ?>
