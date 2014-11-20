<article id="post-<?php the_ID(); ?>" <?php post_class('post col-md-4 col-sm-6 col-xs-12'); ?>>
    <div class="post-inner">
        <figure class="post-thumb">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>                                
        </figure><!--//post-thumb-->
        <div class="content">
            <h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

            <div class="post-entry">
                <?php the_excerpt(); ?>
                <a class="read-more" href="blog-single.html">Read more <i class="fa fa-long-arrow-right"></i></a>
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