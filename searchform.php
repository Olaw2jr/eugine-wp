<form action="<?php echo home_url( '/' ); ?>" method="get" class="searchbox">
    <label class="sr-only" for="search-form">Search</label>
    <input id="search-form" name="s" class="form-control searchbox-input" placeholder="<?php _e("Search the blog...","eugine"); ?>" type="search" value="<?php the_search_query(); ?>" name="search-form">
    <input class="searchbox-submit" type="submit" value="<?php _e("GO","eugine"); ?>">
    <i class="fa fa-search searchbox-icon"></i>
</form>