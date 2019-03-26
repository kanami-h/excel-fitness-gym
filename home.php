<?php get_header('blog'); ?>

    <div class="blog-wrap">
        <div class="main">
            <div class="link-title">
                <h2>Mr.エクセルブログ</h2>
            </div>
            <section class="posts">
                <div class="post-link-cards">
                    <?php get_template_part('loop', 'main'); ?>
                </div>
            </section>
            <?php if (function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
        </div>
        <?php get_sidebar(); ?>
        
            
    </div>
<!-- <div id="pageTop" onclick="jumpBtn">TOP</div> -->

<?php get_footer(); ?>