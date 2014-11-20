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
            <li class="slide slide-1">
                <div class="flex-caption container">
                    <h3 class="title"><a href="#">Ideas are easy, execution is hard</a></h3>
                    <div class="meta">16th Oct, 2014</div>
                    <a class="more-link" href="blog-single.html">Read more &rarr;</a>
                </div><!--//flex-caption-->
            </li>
            <li class="slide slide-2">
                <div class="flex-caption container">
                    <h3 class="title"><a href="#">Done is better than perfect</a></h3>
                    <div class="meta">23rd Sep, 2014</div>
                    <a class="more-link" href="blog-single.html">Read more &rarr;</a>
                </div><!--//flex-caption-->
            </li>
            <li class="slide slide-3">
                <div class="flex-caption container">
                    <h3 class="title"><a href="#">The value of an idea lies in the using of it</a></h3>
                    <div class="meta">18th Aug, 2014</div>
                    <a class="more-link" href="blog-single.html">Read more &rarr;</a>
                </div><!--//flex-caption-->
            </li>
            <li class="slide slide-4">
                <div class="flex-caption container">
                    <h3 class="title"><a href="#">Good design is good business</a></h3>
                    <div class="meta">5th Aug, 2014</div>
                    <a class="more-link" href="blog-single.html">Read more &rarr;</a>
                </div><!--//flex-caption-->
            </li>
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
                while ( have_posts() ) : the_post();

                    /*
                     * Include the post format-specific template for the content. If you want to
                     * use this in a child theme, then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );

                endwhile;
                // Previous/next post navigation.
                //twentyfourteen_paging_nav();

            else :
                // If no content, include the "No posts found" template.
                get_template_part( 'content', 'none' );

            endif;
        ?>
            
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