<article id="post-<?php the_ID(); ?>" <?php post_class('post col-md-4 col-sm-6 col-xs-12'); ?>>
    <div class="post-inner">
        <figure class="post-thumb">
            <a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/post-1-thumb.jpg" alt="" /></a>                                
        </figure><!--//post-thumb-->
        <div class="content">
            <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <div class="post-entry">
                <?php the_excerpt(); ?>
                <a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="meta">
                <ul class="meta-list list-inline">                                       
                	<li class="post-time post_date date updated">16th Oct, 2014</li>
                	<li class="post-author"> by <a href="#">James Lee</a></li>
                	<li class="post-comments-link">
            	        <a href="blog-single.html#comment-area"><i class="fa fa-comments"></i>8</a>
            	    </li>
            	</ul><!--//meta-list-->                           	
            </div><!--meta-->
        </div><!--//content-->
    </div><!--//post-inner-->
</article><!--//post-->