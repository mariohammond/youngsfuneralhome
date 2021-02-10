<?php get_header(); ?>

<!-- start container -->

<section id="container">

	<section class="box">

    	<!-- start leftcol -->

        <section id="leftcol">
			<article class="post page">
            	<section class="title">
                	<h2 class="page-title">Obituaries</h2>
				</section>
                
                <section class="entry single">
                <p><img src="http://youngsfuneralhome.net/wp-content/uploads/2016/05/chapel.jpg" alt="chapel" class="alignnone size-medium wp-image-29" style="width:100%;" /></p>
				<?php if (is_page()) {
                    $cat = get_cat_ID($post->post_title);
                    $posts = get_posts ("cat=$cat");
                
                    if ($posts) {
                        foreach ($posts as $post):
                            setup_postdata($post); ?>
                            <div class="obit-info">
                                <a href="<?php the_permalink() ?>"><h1 class="obit-title"><?php the_title(); ?></h1></a>
                                <h3 class="obit-hometown"><?php echo get_field('hometown'); ?></h3>
                                <h3 class="obit-service-date">Service Date: <?php echo date("m/d/Y", strtotime(get_field('service_date'))); ?></h3>
                                <?php the_content(); ?>
                            </div>
                        <?php endforeach;
                    }
                }
                ?>
                </section>
			</article>
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
