<div class="sidebar">
           <?php get_search_form(); ?>
            <section class="widget">
                <div>
                    <h2 class="widgettitle">人気の投稿</h2>
                </div>
                <?php
              //views post metaで記事のPV情報を取得する
              setPostViews(get_the_ID());
              //ループ開始
              query_posts('meta_key=post_views_count&orderby=meta_value_num&posts_per_page=5&order=DESC');
              while(have_posts()):
                the_post();
              ?>
              <li class="widget-contents">
                <div class="widget-post-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
                    <div class="widget-post-info">
                        <div class="widget-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="widget-post-date"><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></div>
                    </div>
              </li>
              <?php endwhile; ?>


              <aside>
                <!-- ウィジェットからサイドバーを出力 -->
                <?php if(is_active_sidebar('right_sidebar')): ?>
                <ul id="my_sidebar_widget">
                  <?php dynamic_sidebar('right_sidebar'); ?>
                </ul>
<?php endif;?>
              </aside>            
                
            </section>
        </div>