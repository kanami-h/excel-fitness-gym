<form class="form-inline" action="<?php echo home_url('/'); ?>" method="get">
    <input class="form-control mr-sm-2 searchform" type="search" placeholder="Search" aria-label="Search" value="<?php the_search_query(); ?>" >
    <button class="btn btn-outline-success my-2 my-sm-0 btn-g" type="submit">検索</button>
</form>