<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Eugine
 * @since Eugine 1.0
 */

get_header(); ?>

<section class="featured-blog-posts section">        
    <div class="flexslider blog-slider">
        <ul class="slides">
        <?php
            // Start the Loop.
            while ( have_posts() ) : the_post(); ?>
            <li class="slide slide-1">
                <div class="flex-caption container">
                    <h3 class="title"><a href="#"><?php the_title(); ?></a></h3>
                    <div class="meta"><?php the_time('F d, Y'); ?></div>
                    <a class="more-link" href="<?php the_permalink(); ?>">Read more &rarr;</a>
                </div><!--//flex-caption-->
            </li>
        <?php endwhile; wp_reset_query(); ?>

        </ul><!--//slides-->
    </div><!--//flexslider-->
            
</section><!--//featured-blog-posts-->

<!-- ******BLOG LIST****** --> 
<div class="blog container">
    <div class="row">
        <div id="blog-mansonry" class="blog-list">
        <?php
            if ( have_posts() ) :
            // Start the Loop.
            while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('post col-md-4 col-sm-6 col-xs-12'); ?>>
                    <div class="post-inner">
                        <figure class="post-thumb">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>                                
                        </figure><!--//post-thumb-->
                        <div class="content">
                            <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                            <div class="post-entry">
                                <?php the_excerpt(); ?>
                                <a class="read-more" href="<?php the_permalink(); ?>">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="meta">
                                <ul class="meta-list list-inline">                                       
                                    <li class="post-time post_date date updated"><?php the_time('F d, Y'); ?></li>
                                    <li class="post-author"> by <?php the_author_posts_link(); ?> </li>
                                    <li class="post-comments-link">
                                        <a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i><?php comments_number('0', '1', '%' ); ?></a>
                                    </li>
                                </ul><!--//meta-list-->                             
                            </div><!--meta-->
                        </div><!--//content-->
                    </div><!--//post-inner-->
                </article><!--//post-->

        <?php endwhile;
                // Previous/next post navigation.
                //twentyfourteen_paging_nav();

            else :
                // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );

            endif; ?>
            
        </div><!--//blog-list-->  
    </div><!--//row-->
    <div class="pagination-container text-center">
        <ul class="pagination">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul><!--//pagination-->
    </div><!--//pagination-container-->
</div><!--//blog-->        
</div><!--//wrapper-->
    
<?php
get_footer();    