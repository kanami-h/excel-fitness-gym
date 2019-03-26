<?php get_header('top'); ?>

    <div class="blog-wrap">
        <div class="main">
            <div class="link-title">
                <h2><?php wp_title(''); ?></h2>
            </div>
            <section class="posts">
                <div class="post-link-cards">
                <?php get_template_part('loop', 'main'); ?>
                </div>
            </section>
        </div>
        <?php get_sidebar(); ?>
        
            
    </div>
<!-- <div id="pageTop" onclick="jumpBtn">TOP</div> -->

<?php get_footer(); ?>