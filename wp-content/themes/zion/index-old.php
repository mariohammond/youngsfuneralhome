<?php get_header(); ?>

<!-- start container -->

<section id="container">

	<section class="box">
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
    	<!-- start leftcol -->
        <section id="leftcol">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="post listing">

                <section class="title">

                	<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                </section>

                <?php the_post_thumbnail(); ?>

                <section class="meta">

                	<ul>

                    	<li class="author">By <?php the_author(); ?></li>

                        <li class="comments-count"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></li>

                        <li class="date"><?php the_time('F j, Y'); ?></li>

                    </ul>
		    <div class="clear"></div>
                </section>

		<div class="clear"></div>

                <section class="entry">

                    <?php the_excerpt(); ?>

                    <span class="more"><a href="<?php the_permalink(); ?>" title="Read More">Read More</a></span>

                </section>

            </article>

            <!-- post1 -->

            <?php endwhile; endif; ?>

            <!-- pagination -->



             <?php if (function_exists("pagination")) {

			pagination($additional_loop->max_num_pages);

			} ?>

            <!-- pagination -->

        </section>

        <!-- end leftcol -->

        <!-- start rightcol -->

        <aside id="rightcol">

        	<?php get_sidebar(); ?>

        </aside>

        <!-- end rightcol -->

    	<div class="clear"></div>

    </section>

</section>

<!-- end container -->

<?php get_footer(); ?>
