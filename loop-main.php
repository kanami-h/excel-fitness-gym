<?php 
                    if(have_posts()):
                        while(have_posts()):the_post();
                ?>
                    <article class="link-card" id="post-<?php the_ID(); ?>" <?php post_class('news'); ?> >
                        <a href="<?php the_permalink(); ?>">
                            <div class="card-image">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('tumbnail-post');?>
                                <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg" alt="">
                                <?php endif; ?>
                            </div>
                        </a>
                        <div class="card-inner">
                            <div class="entry-info">
                                <?php the_category(); ?>
                                <p class="card-date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></p>
                            </div>
                            <div class="entry-bottom">
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <div class="summary">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </article>
                    <?php
                endwhile;
            else:
              ?>


              <?php if(is_search()): //検索ページの場合 ?>
                <p>検索結果はありませんでした</p>
                <?php else: //以外のページの場合 ?>
                    <p>記事はありません。</p>
                <?php endif; ?>
              <?php endif; ?>