<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demo_company
 */

?>
<!-- -->
<div class="container recent">
    <div class="col-xs-12">
        <div class="container portfolio">
            <div class="col-xs-3 rnews">
                <div class="bdr">LATEST NEWS</div>
                <div class="fleft dfg">
                    <?php
                    $catPost = get_posts(array('category_name' => 'News', 'posts_per_page' => 4)); //change this
                    ?>
                    <ul class="newslist navbar-nav security dd" style="list-style: outside url('<?php echo get_template_directory_uri(); ?>/images/sidebar-bullet.jpg') disc !important;">
                        <?php foreach ($catPost as $post) { ?>
                            <li href="<?php the_title(); ?>"><?php the_title(); ?></li>
                        <?php } ?>
                    </ul>
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            </div>
            <div class="col-xs-3">
                <?php dynamic_sidebar('sidebar-2'); ?>
            </div>
            <div class="col-xs-3">
                <div class="bdr clear">STAY IN TOUCH</div>
                <div class="fleft dd clear">
               <?php dynamic_sidebar('sidebar-3'); ?>
                </div>
            </div>
            <div class="col-xs-3">
                <div class="bdr clear">SECURITY & PRIVACY</div>
                <div class="fleft clear">
                    <?php dynamic_sidebar('sidebar-4'); ?>
                </div>
            </div>
        </div>            
    </div>
</div>
<div class="container">
    <div class="col-xs-12" style="background:url('<?php echo get_template_directory_uri(); ?>/images/footer-bg.jpg') !important;background-repeat: no-repeat !important;background-size:98% 100% !important;height:auto !important">
        <div class="container">
            <div class="col-md-8">
                <div class="fleft cf">

                    <?php
                    $arg = array(
                        'menu' => 'Footer Menu',
                        'container' => 'none',
                        'order_by' => 'date',
                        'echo' => true,
                        'class' => 'footer_menu',
                        'sort_order' => 'id',
                        'items_wrap' => '<ul id="%1$s" class="footer_menu %2$s">%3$s</ul>',
                        'walker' => '');

                    $arg1 = array_reverse($arg);
                    wp_nav_menu($arg1);
                    ?>
                </div>
                <div class="fleft footer-mark clear"><?php dynamic_sidebar('sidebar-5'); ?></div>
            </div>
            <div class="col-md-4">
                <div class="fright"><a href="<?php bloginfo('url'); ?>" ><img src="<?php echo get_theme_mod('footer_logo'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" class="img-responsive" style="padding: 8px 0px;"></a></div>
            </div>
        </div>
    </div>
</div>
</div><!-- #content -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
$('.carousel .vertical .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=1;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});
</script>
<script>
    $(document).ready(function(){
        $('#carousel-example-generic').carousel();
        $(".carousel-indicators li:first").addClass("active");
        $(".carousel-inner .item:first").addClass("active");
    });
</script>
<script>
    $( function() {
        $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
        $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
    } );
</script>
</body>
</html>
