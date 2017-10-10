<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package demo_company
 */
get_header();
?>
<section>
    <div class="container" style="background:#949599;height:auto;padding: 20px 0;">
        <div class="col-xs-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


                <!-- Wrapper for slides -->
                <div class="carousel-inner vertical" role="listbox">
                    <?php $slider = get_posts(array('offset' => 0, 'post_type' => 'banner', 'posts_per_page' => 5, 'orderby' => 'ID', 'order' => 'ASC')); ?>
                    <?php $count = 0; ?>
                    <?php foreach ($slider as $slide): ?>
                        <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
                            <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($slide->ID)) ?>" title="Slider Image" class="img-responsive" style="width: 100%;"/>
                            <div class="carousel-caption">
                                <div class="slidehead"><h1 class="carousel-caption-header">
                                    <?php
                                    if (!empty($slide->post_title)) {
                                        echo $slide->post_title;
                                    } else {
                                        the_title();
                                    }
                                    ?></h1>
                                <p class="carousel-caption-text hidden-sm hidden-xs">
                                    <?php echo $slide->post_content; ?>
                                </p>
                                </div>
                            </div>
                        </div>
                        <?php $count++; ?>
                    <?php endforeach; ?>

                </div>
                <ol class="carousel-indicators clearfix">
                    <?php foreach ($slider as $slide) : setup_postdata($slide); ?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $count++; ?>"></li>
                    <?php endforeach; ?>
                </ol> 
                <div class="right top"><a class="" href="#carousel-example-generic" role="button" data-slide="prev">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider-top-pagination.png">
                    </a></div>
                <div class="right bottom"><a class="" href="#carousel-example-generic" role="button" data-slide="next">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/slider-bottom-pagination.png">
                    </a></div>
            </div>
        </div>
    </div>
</section>
<!-- Tabs -->
<div class="container">
    <div class="col-xs-12" style="padding: 18px 0px;">
        <div class="container portfolio" id="tabs">
            <?php $infos = get_terms('info'); ?>
            <div class="col-xs-3 lnews" style="">
                <ul>
                    <?php foreach ($infos as $info) { ?>
                        <li class=""><a href="#<?php echo $info->slug ?>"><?php echo $info->name ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <?php foreach($infos as $info) { ?>
            <div class="tap" id="<?php echo $info->slug ?>">
                <?php 
                		$args = array(
			'post_type' => 'block',
			'posts_per_page' => 3,
			'orderby' => 'title',
			'order' => 'ASC',
			'tax_query' => array(
				array(
					'taxonomy' => 'info',
					'field' => 'slug',
					'terms' => $info->slug
				)
			)
		);
                                $all_infos = new WP_Query($args);
                ?>
                <?php if ($all_infos->have_posts()) : ?>
                    <?php while ($all_infos->have_posts()) : $all_infos->the_post(); ?>
                        <div class="col-md-4">

                            <div><?php the_post_thumbnail(); ?></div>
                            <div class="activities-text"><?php the_title(); ?></div>
                            <div class="act"><?php the_excerpt(); ?></div>

                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query() ?><?php endif; ?>
            </div>
            <?php }?>
        </div>            
    </div>
</div>


<?php get_footer(); ?>


