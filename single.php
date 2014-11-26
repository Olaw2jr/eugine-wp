<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Eugine
 * @since Eugine 1.0
 */

get_header(); ?>

<!-- ******BLOG****** -->         
            <div class="blog-entry"> 
            <?php
                // Start the Loop.
                while ( have_posts() ) : the_post(); ?>

                <article class="post">
                <?php if ( $background = wp_get_attachment_image_src( get_post_thumbnail_id(), 'eugine-full-width' ) ) : ?>
                    <header class="blog-entry-heading" style="background: #253340 url(<?php echo $background[0]; ?>) no-repeat 50% top;">
                <?php endif; ?>
                        <div class="container text-center">                        
                            <h1 class="title"><?php the_title(); ?></h1>
                            <div class="meta">
                                <ul class="meta-list list-inline">                                       
                                	<li class="post-time"><?php the_time('F d, Y'); ?></li>
                                	<li class="post-author"> by <?php the_author_posts_link(); ?></li>
                            	</ul><!--//meta-list-->    	
                            </div><!--meta-->
                        </div><!--//container-->
                        <nav class="post-nav post-nav-top">
    						<span class="nav-previous"><?php previous_post_link('%link', '<i class="fa fa-long-arrow-left"></i>Previous'); ?></span>
                                    <span class="nav-next"><?php next_post_link('%link', 'Next <i class="fa fa-long-arrow-right">'); ?></i></span>
    				    </nav><!--//post-nav-->
                    </header><!--//blog-entry-heading-->

                    <div class="container">
                        <div class="row">
                            <div class="blog-entry-content col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                                <?php the_content(); ?>                    
                            </div><!--//blog-entry-content-->
                            
                            
                            <nav class="post-nav col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
            						<span class="nav-previous"><?php previous_post_link('%link', '<i class="fa fa-long-arrow-left"></i>Previous'); ?></span>
            						<span class="nav-next"><?php next_post_link('%link', 'Next <i class="fa fa-long-arrow-right">'); ?></i></span>
            				</nav><!--//post-nav-->
            				
            				
            				
                        </div><!--//row-->
                    </div><!--//container-->                                               
                </article><!--//post-->  

            <?php
                // Previous/next post navigation.
                //twentyfourteen_post_nav();

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
                endwhile;
            ?>                                    
            </div><!--//blog-entry-->
        </div><!--//blog-entry-wrapper-->  
    </div><!--//wrapper-->

<?php
get_footer();