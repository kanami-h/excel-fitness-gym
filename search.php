<?php get_header('blog'); ?>

    <div class="blog-wrap">
        <div class="main">
            <h1 class="bold">「<?php the_search_query(); ?>」の検索結果</h1>
            <section class="posts">
                <div class="post-link-cards">
                    <?php get_template_part('loop', 'main'); ?>
                </div>
            </section>
        </div>

        <?php get_sidebar(); ?>       
    </div>


<?php get_footer(); ?>